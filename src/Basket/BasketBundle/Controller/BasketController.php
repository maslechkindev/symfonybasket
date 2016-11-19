<?php

namespace Basket\BasketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BasketController extends Controller
{
    public function indexAction()
    {
        return $this->render('BasketBundle:Basket:index.html.twig');
    }
}
