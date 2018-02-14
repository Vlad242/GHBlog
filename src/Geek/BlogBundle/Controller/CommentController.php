<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\Comment;
use Geek\BlogBundle\Form\NewCommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
//    /**
//     * @Route("/category", name="categorylist")
//     * @param Request $request
//     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
//     */
//    public function newCommentAction(Request $request)
//    {
//        if ($this->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
//            echo 'Please log in to the system!';
//            return $this->redirectToRoute('homepage');
//        }
//
//        $comment = new Comment();
//        $form = $this->createForm(NewCommentType::class, $comment);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $comment->setPost($this->getParameter('post'));
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
//            return $this->redirectToRoute('login');
//        }
//
//        return $this->render('@GeekBlog/User/NewUser.html.twig', [
//            'form' => $form->createView()
//        ]);
//    }
}
