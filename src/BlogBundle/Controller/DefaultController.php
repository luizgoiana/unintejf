<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/blog/{max}" ,  defaults={"max" = 4})
     */
    public function indexAction($max)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('p')
            ->from('AdminBundle:Blogpost','p')
            ->setMaxResults($max)
            ->getQuery();
        $postages = $q->execute();

        $q=$qb->select('d.date')
            ->from('AdminBundle:Blogpost','d')
            ->distinct('d.date')
            ->orderby('d.date')
            ->getQuery();
        $datafilters = $q->execute();

        $loadmore = (count($em->getRepository('AdminBundle:Blogpost')->findall())>4);

        foreach($datafilters as $datafilter) {
          if( $this->verifyDuplicatedValuesInArray($datafilter['date'], $datafilters)){
              unset($datafilters[key($datafilters)]);
          }
        }

        $max+=4;
        return $this->render('blog/Blog.html.twig', array('postages'=>$postages,'max'=>$max,'datafilters'=>$datafilters,'loadmore'=>$loadmore));
    }

    /**
     * @Route("/blog/{year}/{month}", name="blog.filter")
     */
    public function filterBlog($year,$month)
    {

        $em = $this->getDoctrine()->getManager();
        $emConfig = $em->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');

        $qb = $em->createQueryBuilder();
        $q=$qb->select('p')
            ->from('AdminBundle:Blogpost','p')
            ->where('YEAR(p.date) = :year')
            ->andWhere('MONTH(p.date) = :month')
            ->setParameter('year', $year)
            ->setParameter('month', $month)
            ->getQuery();
        $postages = $q->execute();

        $q=$qb->select('d.date')
            ->from('AdminBundle:Blogpost','d')
            ->distinct('d.date')
            ->orderby('d.date')
            ->getQuery();
        $datafilters = $q->execute();

        foreach($datafilters as $datafilter) {
            if( $this->verifyDuplicatedValuesInArray($datafilter['date'], $datafilters)){
                unset($datafilters[key($datafilters)]);
            }
        }

        return $this->render('blog/Blog.html.twig', array('postages'=>$postages,'max'=>4,'datafilters'=>$datafilters));
    }

    /**
     * @Route("/blogview/{id}", name="blog.home")
     */
    public function showPost($id)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('p')
            ->from('AdminBundle:Blogpost','p')
            ->setMaxResults(4)
            ->orderby('p.date')
            ->getQuery();
        $postages = $q->execute();

        $post = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Blogpost')->find($id);
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('d.date')
            ->from('AdminBundle:Blogpost','d')
            ->distinct('d.date')
            ->orderby('d.date')
            ->getQuery();
        $datafilters = $q->execute();

        foreach($datafilters as $datafilter) {
            if( $this->verifyDuplicatedValuesInArray($datafilter['date'], $datafilters)){
                unset($datafilters[key($datafilters)]);
            }
        }

        return $this->render('blog/Blogpost.html.twig', array('post'=>$post,'datafilters'=>$datafilters, 'postages'=>$postages));
    }

    private function verifyDuplicatedValuesInArray($sarchBy, $arr){
        $counter = 0; //count number of ocorrences for one value
        foreach ($arr as $val){
            if (date_format($val['date'],"F Y") == date_format($sarchBy,"F Y")){
                $counter++;
            }
        }
        if ($counter > 1){
            return true;
        }
        return false;
    }
}
