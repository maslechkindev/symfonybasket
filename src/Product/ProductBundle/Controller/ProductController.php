<?php

namespace Product\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductBundle:Product:index.html.twig');
    }


    public function listAction()
    {
        return $this->render('ProductBundle:Product:list.html.twig');
    }
}
