<?php

namespace Pcd\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PcdShopBundle:Default:index.html.twig', array('name' => $name));
    }
}
