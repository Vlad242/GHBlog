<?php

namespace Geek\BlogBundle\Controller\Api;

use Geek\BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use FOS\RestBundle\Controller\Annotations\RouteResource;

/**
 * @RouteResource("Post")
 */
class PostsController extends BaseRestController
{
    /**
     * @param int $id
     * @SWG\Response(
     *     response=200,
     *     description="GetPostById",
     *     @Model(type=Post::class, groups={"show_post"})
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="integer",
     *     description="The field used to order rewards"
     * )
     * @SWG\Tag(name="posts")
     * @return \FOS\RestBundle\View\View
     */
    public function getAction(int $id)
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        if (!$post) {
            throw new NotFoundHttpException();
        }
        $view = $this->view($post, null, [], ['show_post']);
        return $view;
        //return new Response($this->get('serializer')->serialize($post, 'json', ['groups' => ['show_post']]));
    }

    /**
     * @param int $page, $limit
     * @SWG\Response(
     *     response=200,
     *     description="GetPaginatePosts",
     *     @Model(type=Post::class, groups={"show_post"})
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="integer",
     *     description="The field used to order rewards"
     * )
     * @SWG\Tag(name="posts")
     * @return \FOS\RestBundle\View\View
     */
    public function getPostsAction(Request $request, int $page = 1, int $limit = 5){
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findAllQuery(),
            $request->query->getInt('page', $page),
            $limit
        );
        $view = $this->view($pagination, null, [], ['show_post']);
        return $view;
    }
}
