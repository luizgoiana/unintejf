<?php

namespace SobreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/cursos")
     * @Template()
     */
    public function indexAction()
    {

        $em= $this->getDoctrine()->getManager();
        $listCursos = $em->getRepository('AdminBundle:Cursos')->findAll();
        $sobre = $this->getDoctrine()->getRepository('AdminBundle:Sobre')->find(1);
        $estruturas = $this->getDoctrine()->getRepository('AdminBundle:Estrutura')->findAll();
        return $this->render('sobre/Sobre.html.twig', array('sobre'=>$sobre,'listCursos'=>$listCursos,'estruturas'=>$estruturas));
    }
}
