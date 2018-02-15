<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\Comment;
use Geek\BlogBundle\Entity\Post;
use Geek\BlogBundle\Form\NewCommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    /**
     * @Route("/newcomment/{slug}", name="newcomment")
     * @param Request $request
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @ParamConverter("post", class="Geek\BlogBundle\Entity\Post", options={"id" = "post_id"})
     */
    public function newCommentAction(Request $request, Post $post)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $comment = new Comment();
        $comment->setPost($post);
        $comment->setUser($this->getUser());
        $form = $this->createForm(NewCommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('viewPost', ['id' => $post->getSlug()]);
        }

        $this->addFlash('danger', 'Something wrong!');
        return $this->redirectToRoute('viewPost', ['id' => $post->getSlug()]);
    }
}
