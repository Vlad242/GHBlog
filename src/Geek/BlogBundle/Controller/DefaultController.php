<?php

namespace Geek\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@GeekBlog/Default/index.html.twig');
    }
}
