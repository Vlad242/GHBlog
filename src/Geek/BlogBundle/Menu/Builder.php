<?php

namespace Geek\BlogBundle\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu()
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Login', array('route' => 'login'));
        $menu->addChild('List', array('route' => 'list'));
        // ... add more children

        return $menu;
    }
}