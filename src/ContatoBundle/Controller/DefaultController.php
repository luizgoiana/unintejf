<?php

namespace ContatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/contato")
     */
    public function indexAction()
    {
        return $this->render('contato/Contato.html.twig');
    }

    /**
     * @Route("/contato/send")
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

        $mail->Subject = '[Novo Contato] - Formulário de Contato - Website';
        $mail->Body = 'Um cliente entrou em contato através do formulário de contato
                           <br> Nome:<b>' . $_POST['nome'] . '</b>
                           <br> Email:<b>' . $_POST['email'] . '</b>
                           <br> Telefone:<b>' . $_POST['telefone'] . '</b>
                           <br> Mensagem:<b>' . $_POST['mensagem'] . '</b>
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
        return $this->redirect('/contato');
    }

}
