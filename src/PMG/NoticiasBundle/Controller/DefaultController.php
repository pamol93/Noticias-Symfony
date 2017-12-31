<?php

namespace PMG\NoticiasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NoticiasBundle:Noticias:index.html.twig');
    }
}
