<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $home = $this->getDoctrine()->getRepository('AdminBundle:Home')->find(1);
        $imagesbannerhome = $this->getDoctrine()->getRepository('AdminBundle:Imagebannerhome')->findAll();
        $estruturas = $this->getDoctrine()->getRepository('AdminBundle:Estrutura')->findAll();

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('p')
            ->from('AdminBundle:Blogpost','p')
            ->setMaxResults(4)
            ->getQuery();
        $postages = $q->execute();

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q=$qb->select('e')
            ->from('AdminBundle:Especialidade','e')
            ->setMaxResults(6)
            ->getQuery();

        $especialidades = $q->execute();
        $sobre = $this->getDoctrine()->getRepository('AdminBundle:Sobre')->find(1);
        return $this->render('home/Home.html.twig', array('home'=>$home,'imagesbannerhome'=>$imagesbannerhome, 'estruturas'=>$estruturas, 'especialidades'=>$especialidades,'sobre'=>$sobre,'postages'=>$postages));
    }

    /**
     * @Route("/home/send")
     */
    public function sendEmail()
    {
        date_default_timezone_set('America/Sao_Paulo');

        $mail = new \PHPMailer();
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtps.bol.com.br';  // Specify main and backup SMTP servers
        $mail->Port = 587;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'replyuninter-no@bol.com.br';                 // SMTP username
        $mail->Password = 'qweasd3274';                           // SMTP password

        $mail->From = 'replyuninter-no@bol.com.br';
        $mail->FromName = 'Website - Contato';
        $mail->addAddress('contato@uninterjuizdefora.com.br');     // Add a recipient

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

        $mail->Subject = 'Inscrição online - Website';
        $mail->Body = 'Um cliente efetuou a inscrição pelo website
                           <br> Nome:<b>' . $_POST['nome'] . '</b>
                           <br> Cpf:<b>' . $_POST['cpf'] . '</b>
                           <br> Cidade:<b>' . $_POST['cidade'] . '</b>
                           <br> UF:<b>' . $_POST['uf'] . '</b>
                           <br> Curso de interesse:<b>' . $_POST['id_curso'] . '</b>
                           <br> Telefone:<b>' . $_POST['telefone'] . '</b>
                           <br> Email:<b>' . $_POST['email'] . '</b>
                           ';
        $mail->AltBody = $mail->Body;
        $mail->CharSet = "UTF-8";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

        $this->addFlash(
            'notice',
            'Obrigado, sua mensagem foi enviada com sucesso!'
        );
        return $this->redirect('/');
    }
}
