<?php

namespace Geek\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/list", name="list")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findAllQuery(),
            $request->query->getInt('page', 1),
            5
        );

        // parameters to template
        return $this->render('@GeekBlog/Post/postList.html.twig', array('pagination' => $pagination));
    }
}
