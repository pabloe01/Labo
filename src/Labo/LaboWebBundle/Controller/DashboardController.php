<?php

namespace Labo\LaboWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('LaboWebBundle:Dashboard:layout.html.twig');
    }
}
