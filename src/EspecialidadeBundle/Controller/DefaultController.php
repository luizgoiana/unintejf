<?php

namespace EspecialidadeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/inscricao")
     */
    public function indexAction()
    {
        $especialidades = $this->getDoctrine()->getRepository('AdminBundle:Especialidade')->findAll();
        $estruturas = $this->getDoctrine()->getRepository('AdminBundle:Estrutura')->findAll();
        return $this->render('especialidade/Especialidade.html.twig', array('estruturas'=>$estruturas, 'especialidades'=>$especialidades));
    }
}
