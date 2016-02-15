<?php

namespace FooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function footerAction()
    {
        $home = $this->getDoctrine()->getRepository('AdminBundle:Home')->find(1);
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('p')
            ->from('AdminBundle:Blogpost','p')
            ->setMaxResults(3)
            ->getQuery();
        $postages = $q->execute();
        return $this->render('footer.html.twig', array(
            'home'=>$home,
            'postages'=>$postages
        ));
    }
}
