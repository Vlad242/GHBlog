<?php

namespace Geek\BlogBundle\Command;

use Doctrine\Common\Persistence\ManagerRegistry;
use Geek\BlogBundle\Entity\Post;
use Geek\BlogBundle\Entity\User;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class SendMessagesCommand extends Command
{
    private $mailer;
    private $em;

    public function __construct(ManagerRegistry $doctrine, Swift_Mailer $mailer)
    {
        parent::__construct();

        $this->em = $doctrine;
        $this->mailer = $mailer;
    }

    protected function configure()
    {
        $this->setName('send_messages');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userrepo = $this->em->getRepository(User::class);
        $users = $userrepo->findAll();

        foreach ($users as $user)
        {
            $subscribers = $user->getSubscribers();

            $postrepo = $this->em->getRepository(Post::class);
            $posts = $postrepo->findForSend($user, new \DateTime());

            $body = '';
            foreach ($posts as $post)
            {
                /** @var string $body */
                $body .= $post->getTitle().'/n';
            }

            foreach ($subscribers as $subscriber)
            {
                $currentrepo = $this->em->getManager()->getRepository(User::class);
                $receiver = $currentrepo->findById($subscriber);

                $message = (new Swift_Message('New post for you!'))
                    ->setFrom('vibe.x.mini@gmail.com')
                    ->setTo($receiver->getEmail())
                    ->addPart(
                        'Read a new posts from your idol: /n'.$body
                    );

                $this->mailer->send($message);
            }
        }

        $output->writeln('all messages send success!!! :)');
        return true;
    }
}
