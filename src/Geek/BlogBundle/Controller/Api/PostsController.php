<?php

namespace Geek\BlogBundle\Controller\Api;

use Geek\BlogBundle\Entity\Post;
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
     *     description="HELLO",
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
}
