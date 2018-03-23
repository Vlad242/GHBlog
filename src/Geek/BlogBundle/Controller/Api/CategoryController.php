<?php

namespace Geek\BlogBundle\Controller\Api;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use Geek\BlogBundle\Controller\Api\BaseRestController;
use Geek\BlogBundle\Entity\Category;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Swagger\Annotations as SWG;

/**
 * @RouteResource("Category")
 */
class CategoryController extends BaseRestController
{
    /**
     * @SWG\Response(
     *     response=200,
     *     description="Set new category",
     *     @Model(type=Category::class, groups={"new_category"})
     * )
     *
     * @SWG\Parameter(
     *     name="name",
     *     in="path",
     *     type="string",
     *     description="Name of category"
     * )
     *
     * @SWG\Tag(name="category")
     * @param Request $request
     * @return JsonResponse
     */
    public function newCategoryAction(Request $request)
    {
        $data = $request->getContent();
        $category = $this->get('serializer')->deserialize($data, Category::class, 'json');

        if (!empty($reponse)){
            return new JsonResponse($reponse, Response::HTTP_BAD_REQUEST);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();

        $response=array(
            'code'=>200,
            'message'=>'Category created!',
            'errors'=>null,
            'result'=>null
        );
        return new JsonResponse($response,Response::HTTP_CREATED);
    }
}
