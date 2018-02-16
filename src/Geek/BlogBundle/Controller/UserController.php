<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @Route("/user/{limit}", name="user_room")
     * @param Request $request
     * @param int $limit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $limit = 5)
    {
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $user = $this->getUser();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByUser($user),
            $request->query->getInt('page', 1),
            $limit
        );

        return $this->render('@GeekBlog/User/UserRoom.html.twig',['pagination' => $pagination]);

    }


    /**
     * @Route("/subscribecheck/{user}", name="subscribecheck")
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @ParamConverter("user", class="Geek\BlogBundle\Entity\User")
     */
    public function likesCheckerAction(User $user)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $currentUser = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if ($user->haveThisSubscriber($currentUser)){
            $user->removeSubscriber($currentUser);
            $em->persist($user);
            $em->flush();
        }else {
            $user->addSubscriber($currentUser);
            $em->persist($user);
            $em->flush();
        }
        return $this->redirectToRoute('homepage');
    }
}
