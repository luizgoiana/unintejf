<?php

namespace EstruturaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/portal")
     */
    public function indexAction()
    {
        $estruturas = $this->getDoctrine()->getRepository('AdminBundle:Estrutura')->findAll();
        return $this->render('estrutura/Estrutura.html.twig', array('estruturas'=>$estruturas));
    }
}
