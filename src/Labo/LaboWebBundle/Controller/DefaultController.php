<?php

namespace Labo\LaboWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LaboWebBundle:Default:layout.html.twig', array('name' => $name));
    }
}
