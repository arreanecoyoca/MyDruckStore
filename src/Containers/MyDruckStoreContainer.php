<?php

namespace MyDruckStore\Containers;

use Plenty\Plugin\Templates\Twig;

class MyDruckStoreContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('MyDruckStore::Stylesheet');
    }
}