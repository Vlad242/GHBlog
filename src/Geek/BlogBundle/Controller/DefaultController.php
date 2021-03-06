<?php

namespace Geek\BlogBundle\Controller;

use Geek\BlogBundle\Entity\User;
use Geek\BlogBundle\Form\NewUserType;
use Geek\BlogBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('postlist');
    }

    /**
     * @Route("/redirect", name="redirect")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectAction(){
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_room');
        }

        return $this->redirectToRoute('user_room');
    }

    /**
     * @Route("/login", name="login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            '@GeekBlog/Default/login.html.twig',
            array(
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/register", name="register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \LogicException
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $passwordEncoder = $this->get('security.encoder_factory')->getEncoder($user);
        $form = $this->createForm(NewUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user->getPlainPassword(), $user->getSalt());
            $user->setPassword($password);
            $user->setRoles('ROLE_USER');
            $user->setLocked(false);
            $user->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('login');
        }

        return $this->render('@GeekBlog/User/NewUser.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/search/{str}/{limit}", name="search")
     * @param Request $request
     * @param string $str
     * @param int $limit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(Request $request, $str = '', $limit = 5)
    {
        if ($str == '') {
            $form = $this->createForm(SearchType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $str = $form->get('search')->getData();
                $str = '%' . $str . '%';
                $em = $this->getDoctrine()->getManager();
                $postrepository = $em->getRepository('GeekBlogBundle:Post');
                $paginator = $this->get('knp_paginator');
                $pagination = $paginator->paginate(
                    $postrepository->findByString($str),
                    $request->query->getInt('page', 1),
                    $limit
                );

                return $this->render('@GeekBlog/Post/postByString.html.twig', ['pagination' => $pagination, 'str' => $str]);
            }
            return $this->render('@GeekBlog/Default/search.html.twig', ['form' => $form->createView()]);
        }else{
            $em = $this->getDoctrine()->getManager();
            $postrepository = $em->getRepository('GeekBlogBundle:Post');
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $postrepository->findByString($str),
                $request->query->getInt('page', 1),
                $limit
            );

            return $this->render('@GeekBlog/Post/postByString.html.twig', ['pagination' => $pagination, 'str' => $str]);
        }
    }
}
