<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\Category;
use Geek\BlogBundle\Repository\CategoryRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="categorylist")
     * @return Response
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Category::class)->findAll();
        return $this->render('@GeekBlog/Category/categoryList.html.twig', array('categories' => $categories));
    }
}
