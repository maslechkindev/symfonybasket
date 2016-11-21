<?php

namespace Product\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    const DEFAULT_COUNTRY = 1;

    public function indexAction()
    {
        return $this->render('ProductBundle:Product:index.html.twig');
    }


    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('ProductBundle:Product')->findAll();
        $countries = $em->getRepository('ProductBundle:Country')->findAll();
//        $taxes = $em->getRepository('ProductBundle:Country')->findBy([
//            'countryId' => !empty($request->request->get('countryId')) ?
//                $request->request->get('countryId') : self::DEFAULT_COUNTRY
//        ]);
        return $this->render('ProductBundle:Product:list.html.twig', array(
            'products' => $products,
            'countries' => $countries,
//            'taxes' => $taxes,
        ));
    }

    public function getCountryAction(Request $request)
    {
//var_dump(!empty($request->request->get('countryId')) ? $request->request->get('countryId') : self::DEFAULT_COUNTRY);
        echo 5;die;
        //die();

    }
}
