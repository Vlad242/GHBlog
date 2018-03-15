<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\Category;
use Geek\BlogBundle\Entity\Post;
use Geek\BlogBundle\Entity\Tag;
use Geek\BlogBundle\Entity\User;
use Geek\BlogBundle\Form\NewCommentType;
use Geek\BlogBundle\Form\NewPostType;
use Geek\BlogBundle\Form\UpdatePostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/postlist/{limit}", name="postlist")
     * @param Request $request
     * @param int $limit
     * @return Response
     */
    public function listAction(Request $request, $limit = 5)
    {
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findAllQuery(),
            $request->query->getInt('page', 1),
            $limit
        );

        return $this->render('@GeekBlog/Default/homepage.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/postByTag/{tag}/{limit}", name="postByTag")
     * @param Request $request
     * @param Tag $tag
     * @param int $limit
     * @return Response
     * @ParamConverter("tag", class="Geek\BlogBundle\Entity\Tag")
     */
    public function listByTagAction(Request $request, Tag $tag, $limit = 5)
    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));

        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByTag($tag),
            $request->query->getInt('page', 1),
            $limit
        );
        return $this->render('@GeekBlog/Post/postByTag.html.twig', ['pagination' => $pagination, 'currentTag' => $tag]);
    }

    /**
     * @Route("/postByCategory/{category}/{limit}", name="postByCategory")
     * @param Request $request
     * @param Category $category
     * @param int $limit
     * @return Response
     * @ParamConverter("category", class="Geek\BlogBundle\Entity\Category")
     */
    public function listByCategoryAction(Request $request, Category $category, $limit = 5)
    {
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByCategory($category),
            $request->query->getInt('page', 1),
            $limit
        );

        return $this->render('@GeekBlog/Post/postByCategory.html.twig', ['pagination' => $pagination, 'currentCategory' => $category]);
    }


    /**
     * @Route("/postByUser/{user}/{limit}", name="postByUser")
     * @param Request $request
     * @param User $user
     * @param int $limit
     * @return Response
     * @ParamConverter("user", class="Geek\BlogBundle\Entity\User")
     */
    public function listByUserAction(Request $request, User $user, $limit = 5)
    {
        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $postrepository->findByUser($user),
            $request->query->getInt('page', 1),
            $limit
        );

        return $this->render('@GeekBlog/Post/postByUser.html.twig', ['pagination' => $pagination, 'currentUser' => $user]);
    }

    /**
     * @Route("/post/{id}", name="viewPost")
     * @param $id
     * @return Response
     */
    public function viewPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('GeekBlogBundle:Post')->find($id);

        if (!$post) {
            $this->addFlash('danger', 'Something wrong!');
        }

        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));
        $breadcrumbs->addRouteItem("Post №".$id, "viewPost", [
            'id' => $id,
        ]);
        $form = $this->createForm(NewCommentType::class, null, ['action' => $this->generateUrl('newcomment', ['post_id' => $post->getId()])]);
        return $this->render('@GeekBlog/Post/viewPost.html.twig', ['post' => $post, 'form'=> $form->createView()]);
    }

    /**
     * @Route("/newpost/", name="newpost")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function newPostAction(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $post = new Post();
        $post->setUser($this->getUser());

        $form = $this->createForm(NewPostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('user_room');
        }

        return $this->render('@GeekBlog/Post/NewPost.html.twig', ['id' => $post->getId(),'form'=> $form->createView()]);
    }

    /**
     * @Route("/deletepost/{post}", name="deletepost")
     * @param Post $post
     * @return Response
     * @ParamConverter("post", class="Geek\BlogBundle\Entity\Post")
     */
    public function deletePostAction(Post $post)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();

            return $this->redirectToRoute('user_room');
    }

    /**
     * @Route("/updatepost/{post}", name="updatepost")
     * @param Request $request
     * @param Post $post
     * @return Response* @ParamConverter("post", class="Geek\BlogBundle\Entity\Post")
     */
    public function UpdatePostAction(Request $request, Post $post)
    {
        $form = $this->createForm(UpdatePostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('user_room');
        }
        return $this->render('@GeekBlog/Post/NewPost.html.twig', ['id' => $post->getId(),'form'=> $form->createView()]);
    }

    /**
     * @Route("/likecheck/{post}", name="likecheck")
     * @param Post $post
     * @return Response
     * @ParamConverter("post", class="Geek\BlogBundle\Entity\Post")
     */
    public function likesCheckerAction(Post $post)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $em = $this->getDoctrine()->getManager();
        $postrepository = $em->getRepository('GeekBlogBundle:Post');
        $user = $this->getUser();
        $like =$postrepository->findLikes($post, $user);

        if ($like == null){
            $post->addLike($user);
            $em->persist($post);
            $em->flush();
        }else{
            $post->removeLike($user);
            $em->persist($post);
            $em->flush();
        }

        return $this->redirectToRoute('homepage');
    }
}
