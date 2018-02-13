<?php

namespace Geek\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TagController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/Taglist", name="taglist")
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tagrepository = $em->getRepository('GeekBlogBundle:Tag');
        $tags = $tagrepository->findAll();

        return $this->render('@GeekBlog/Tag/tagList.html.twig', ['tags' => $tags]);
    }
}
