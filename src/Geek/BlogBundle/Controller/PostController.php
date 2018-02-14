<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\Category;
use Geek\BlogBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * @Route("/postlist", name="postlist")
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));

        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findAllQuery(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@GeekBlog/Default/homepage.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/postByTag/{tag}/", name="postByTag")
     * @param Request $request
     * @param Tag $tag
     * @return Response
     * @ParamConverter("tag", class="Geek\BlogBundle\Entity\Tag")
     */
    public function listByTagAction(Request $request, Tag $tag)
    {
        if (!$tag) {
            throw new NotFoundHttpException("Страница не найдена");
        }
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));

        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByTag($tag),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@GeekBlog/Post/postByTag.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/postByCategory/{category}/", name="postByCategory")
     * @param Request $request
     * @param Category $category
     * @return Response
     * @ParamConverter("category", class="Geek\BlogBundle\Entity\Category")
     */
    public function listByCategoryAction(Request $request, Category $category)
    {
        if (!$category) {
            throw new NotFoundHttpException("Страница не найдена");
        }

        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByCategory($category),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@GeekBlog/Post/postByCategory.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/post/{id}", name="viewPost")
     * @param $id
     * @return Response
     */
    public function viewPostAction($id)
    {
        if (!$id) {
            throw new NotFoundHttpException("Страница не найдена");
        }

        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));
        $breadcrumbs->addRouteItem("Post №".$id, "viewPost", [
            'id' => $id,
        ]);

        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('GeekBlogBundle:Post')->find($id);
        return $this->render('@GeekBlog/Post/viewPost.html.twig', ['post' => $post]);

    }
}
