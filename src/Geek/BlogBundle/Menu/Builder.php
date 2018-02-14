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

        $menu->addChild('Homepage', array('route' => 'homepage'));
        $menu->addChild('Posts', array('route' => 'postlist'));
        $menu->addChild('Categories', array('route' => 'categorylist'));
        $menu->addChild('Search', array('route' => 'taglist'));
        // ... add more children

        return $menu;
    }
}