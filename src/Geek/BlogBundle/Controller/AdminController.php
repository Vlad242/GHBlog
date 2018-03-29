<?php

namespace Geek\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminController extends Controller
{
    /**
     * @Route("/admin/room", name="admin_room")
     * @param UserInterface $user
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(UserInterface $user)
    {
        return $this->render('@SonataAdmin/standard_layout.html.twig');
    }
}
