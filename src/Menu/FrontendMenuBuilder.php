<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class FrontendMenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root', ['childrenAttributes' => ['class' => 'menu one-page']]);

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Work', array('route' => 'homepage'));
        $menu->addChild('Team', array('route' => 'homepage'));
        $menu->addChild('Contact', array('route' => 'contact'));

        return $menu;
    }
}