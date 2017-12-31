<?php

namespace PMG\NoticiasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PMG\NoticiasBundle\Entity\Noticia;

class NoticiasController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
    	$list = $em->getRepository('NoticiasBundle:Noticia')->findAll();
    	
        return $this->render('NoticiasBundle:Noticias:index.html.twig', array('list' => $list));
    }
}
