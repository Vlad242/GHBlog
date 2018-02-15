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
        $menu->addChild('Homepage', ['route' => 'homepage']);
        $menu->addChild('Categories', ['route' => 'categorylist']);
        $menu->addChild('Add post', ['route' => 'newpost']);
        $menu->addChild('Search', ['route' => 'search']);
        return $menu;
    }
}