<?php
/**
 * Created by PhpStorm.
 * User: Luiz Guilherme
 * Date: 15/07/2015
 * Time: 18:02
 */

namespace AdminBundle\Controller;

use AdminBundle\Entity\Blogpost;
use AdminBundle\Entity\Especialidade;
use AdminBundle\Entity\Estrutura;
use AdminBundle\Entity\Home;
use AdminBundle\Entity\Imagebannerhome;
use AdminBundle\Entity\Cursos;
use AdminBundle\Entity\Sobre;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Image\ImagineInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
        /**
         *@Route("/admin", name="admin")
         */
        public function indexAction(){
            return $this->redirect('/admin/home');
        }

        /**
         *@Route("/admin/home", name="admin.home")
         */
        public function homeAction(){
            $home = $this->getDoctrine()->getRepository('AdminBundle:Home')->find(1);
            $imagesbannerhome = $this->getDoctrine()->getRepository('AdminBundle:Imagebannerhome')->findAll();
            if ( count($home)==0){
                $home = new Home();
            }
            return $this->render('admin/HomeAdmin.html.twig', array('home'=>$home,'imagesbannerhome'=>$imagesbannerhome));
        }


        /**
         *@Route("/admin/home/update", name="admin.home.update")
         */
        public function homeUpdate(){
            $em = $this->getDoctrine()->getManager();
            $home = $em->getRepository('AdminBundle:Home')->find(1);

            if ($home != null){
                $home->setShortDescription($_POST['shortDescription']);
                $home->setSpecialtyShortDescription($_POST['specialtyShortDescription']);
                $home->setBannerMiddleFrase($_POST['bannerMiddleFrase']);
                $em->flush();
            }else{
                $home = new Home();

                $home->setShortDescription($_POST['shortDescription']);
                $home->setSpecialtyShortDescription($_POST['specialtyShortDescription']);
                $home->setBannerMiddleFrase($_POST['bannerMiddleFrase']);

                $em = $this->getDoctrine()->getManager();
                $em->persist($home);
                $em->flush();


            }
            return $this->redirect('/admin/home');

        }

        /**
         *@Route("/admin/home/add", name="admin.home.add")
         */
        public function homeBannerTopImageAdd()
        {
            $em = $this->getDoctrine()->getManager();

            $home = $em->getRepository('AdminBundle:Home')->find(1);

            if ($_FILES['imageBannerTop']['name']) {

                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES['imageBannerTop']['name'], $ext);
                $imageDestNome = md5(uniqid(time())) . "." . $ext[1];

                $destino = 'uploads/' . $imageDestNome;
                $arquivo_tmp = $_FILES['imageBannerTop']['tmp_name'];

                $imagine = new Imagine();
                $size = new Box(200, 200);
                $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                //Cria a miniatura da imagem
                $imagine->open($arquivo_tmp)->thumbnail($size, $mode)->save('uploads/thumb/' . $imageDestNome);

                //Faz o upload da imagem para o diret�rio
                move_uploaded_file($arquivo_tmp, $destino);

                $imageBannerHome = new Imagebannerhome();
                $imageBannerHome->setIdhome($home);
                $imageBannerHome->setPath($destino);

                $em->persist($imageBannerHome);
                $em->flush();
            }
            return $this->redirect('/admin/home');
        }

        /**
         *@Route("/admin/home/delete{id}", name="admin.home.delete")
         */
        public function homeBannerTopImageDelete($id){
            $em = $this->getDoctrine()->getManager();
            $image = $em->getRepository('AdminBundle:Imagebannerhome')->find($id);
            if (unlink($image->getPath()) && unlink($image->getThumbPath())){
                $em->remove($image);
            }
            $em->flush();

            return $this->redirect('/admin/home');
        }

        /**
         *@Route("/admin/sobre", name="admin.sobre")
         */
        public function sobreAction(){
            $em= $this->getDoctrine()->getManager();
            $listCursos = $em->getRepository('AdminBundle:Cursos')->findAll();
            $sobre = $this->getDoctrine()->getRepository('AdminBundle:Sobre')->find(1);
            if ( count($sobre)==0){
                $sobre = new Sobre();
            }
            return $this->render('admin/SobreAdmin.html.twig', array('listCursos'=>$listCursos,'sobre'=>$sobre));
        }

        /**
         *@Route("/admin/sobre/update", name="admin.sobre.update")
         */
        public function sobreUpdate(){
            $em = $this->getDoctrine()->getManager();

            if ($em->getRepository('AdminBundle:Sobre')->find(1)==null){
                $sobre = new Sobre();
            }else{
                $sobre = $em->getRepository('AdminBundle:Sobre')->find(1);
            }

            $sobre->setTexto($_POST['texto']);

            //Somente tenta atualizar a imagem se o usu�rio upar alguma
            if ($_FILES['imagem']['name']) {
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES['imagem']['name'], $ext);
                $imageDestNome = 'sobre-image' . "." . $ext[1];

                $destino = 'uploads/' . $imageDestNome;
                $arquivo_tmp = $_FILES['imagem']['tmp_name'];

                $imagine = new Imagine();
                $size = new Box(200, 200);
                $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                //Cria a miniatura da imagem
                $imagine->open($arquivo_tmp)->thumbnail($size, $mode)->save('uploads/thumb/' . $imageDestNome);

                //Faz o upload da imagem para o diret�rio
                move_uploaded_file($arquivo_tmp, $destino);

                $sobre->setImagem($destino);
            }

            //Somente tenta atualizar a imagem se o usu�rio upar alguma
            if ($_FILES['imagemlateral']['name']) {
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES['imagemlateral']['name'], $ext);
                $imageDestNome = 'sobre-imagem-side' . "." . $ext[1];

                $destino = 'uploads/' . $imageDestNome;
                $arquivo_tmp = $_FILES['imagemlateral']['tmp_name'];

                $imagine = new Imagine();
                $size = new Box(200, 200);
                $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                //Cria a miniatura da imagem
                $imagine->open($arquivo_tmp)->thumbnail($size, $mode)->save('uploads/thumb/' . $imageDestNome);

                //Faz o upload da imagem para o diret�rio
                move_uploaded_file($arquivo_tmp, $destino);

                $sobre->setImagemlateral($destino);
            }

            if ($em->getRepository('AdminBundle:Sobre')->find(1)==null){
                $em->persist($sobre);
            }
            $em->flush();

            return $this->redirect('/admin/sobre');

        }

        /**
         *@Route("/admin/sobre/add", name="admin.sobre.add")
         */
        public function sobreQueFazemosAdd(){
            $oquefazemos = new Cursos();

            $em = $this->getDoctrine()->getManager();

            if ($em->getRepository('AdminBundle:Sobre')->find(1)==null) {
                $sobre = new Sobre();
                $sobre->setImagem("");
                $sobre->setTexto("");
                $sobre->setImagemlateral("");
                $em->persist($sobre);
                $em->flush();
            }else{
                $sobre = $em->getRepository('AdminBundle:Sobre')->find(1);
            }
            $oquefazemos->setIdsobre(1);
            $oquefazemos->setDescricao($_POST['cursoNome']);
            $oquefazemos->setUrl($_POST['cursoLink']);
            $oquefazemos->setTipo($_POST['cmbType']);
            $em->persist($oquefazemos);
            $em->flush();

            return $this->redirect('/admin/sobre');

        }


        /**
         *@Route("/admin/sobre/delete/{id}", name="admin.sobre.delete")
         */
        public function sobreQueFazemosDelete($id){
            $em = $this->getDoctrine()->getManager();
            $oquefazemos = $em->getRepository('AdminBundle:Cursos')->find($id);
            $em->remove($oquefazemos);
            $em->flush();

            return $this->redirect('/admin/sobre');

        }



        /**
         *@Route("/admin/especialidades", name="admin.especialidades")
         */
        public function especialidadesAction(){
            $especialidades = $this->getDoctrine()->getRepository('AdminBundle:Especialidade')->findAll();
            return $this->render('admin/EspecialidadesAdmin.html.twig', array('especialidades'=>$especialidades));
        }

        /**
         *@Route("/admin/especialidades/add/{id}", name="admin.especialidades.add", defaults={"id" = -1})
         */
        public function especialidadesAdd($id){
            $em = $this->getDoctrine()->getManager();
            if ($id==-1){
                $especialidade = new Especialidade();
            }else{
                $especialidade = $this->getDoctrine()->getRepository('AdminBundle:Especialidade')->find($id);
            }

            $especialidade->setTitulo($_POST['titulo']);
            $especialidade->setDescricao($_POST['descricao']);

             if ( $_FILES['icoEspecialidade']['name']) {
                 preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES['icoEspecialidade']['name'], $ext);
                 $imageDestNome = md5(uniqid(time())) . "." . $ext[1];

                 $destino = 'uploads/' . $imageDestNome;

                 $arquivo_tmp = $_FILES['icoEspecialidade']['tmp_name'];
                 move_uploaded_file($arquivo_tmp, $destino);

                 $especialidade->setImagem($destino);

                 if ($id == -1) {
                     $em->persist($especialidade);
                 }
             }

            $em->flush();

            return $this->redirect('/admin/especialidades');
        }

            /**
             *@Route("/admin/especialidades/delete{id}", name="admin.especialidades.delete")
             */
            public function especialidadesDelete($id){
                $em = $this->getDoctrine()->getManager();

                $especialidade = $this->getDoctrine()->getRepository('AdminBundle:Especialidade')->find($id);

                if(unlink($especialidade->getImagem())){
                    $em->remove($especialidade);
                }

                $em->flush();

                return $this->redirect('/admin/especialidades');
            }

        /**
         *@Route("/admin/especialidades/preparaedicao/{id}", name="admin.especialidades.preparaedicao", defaults={"id" = -1})
         */
        public function especialidadesPreparaEdicao($id){
            $especialidade = $this->getDoctrine()->getRepository('AdminBundle:Especialidade')->find($id);

            header("content-type:application/json");
            $pg1 = array(
                array
                (
                    'titulo' => $especialidade->getTitulo() ,
                    'descricao' => $especialidade->getDescricao(),
                    'image' =>$especialidade->getImagem(),
                    'id' =>$especialidade->getId()
                ),
            );
            echo json_encode($pg1);
            exit();
        }

        /**
         *@Route("/admin/estrutura", name="admin.estrutura")
         */
        public function estruturaAction(){
            $estruturas = $this->getDoctrine()->getRepository('AdminBundle:Estrutura')->findAll();
            return $this->render('admin/EstruturaAdmin.html.twig', array('estruturas'=>$estruturas));
        }

        /**
         *@Route("/admin/estrutura/add", name="admin.estrutura.add")
         */
        public function estruturaImageAdd()
        {


            if ($_FILES['imageEstrutura']['name']) {

                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES['imageEstrutura']['name'], $ext);
                $imageDestNome = md5(uniqid(time())) . "." . $ext[1];

                $destino = 'uploads/' . $imageDestNome;
                $arquivo_tmp = $_FILES['imageEstrutura']['tmp_name'];

                $imagine = new Imagine();
                $size = new Box(260, 260);
                $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                //Cria a miniatura da imagem
                $imagine->open($arquivo_tmp)->thumbnail($size, $mode)->save('uploads/thumb/' . $imageDestNome);

                //Faz o upload da imagem para o diretório
                move_uploaded_file($arquivo_tmp, $destino);

                $estrutura = new Estrutura();
                $estrutura->setImagepath($destino);

                $em = $this->getDoctrine()->getManager();
                $em->persist($estrutura);
                $em->flush();
            }
            return $this->redirect('/admin/estrutura');
        }

        /**
         *@Route("/admin/estrutura/delete{id}", name="admin.estrutura.delete")
         */
        public function estruturaImageDelete($id){
            $em = $this->getDoctrine()->getManager();
            $estrutura = $em->getRepository('AdminBundle:Estrutura')->find($id);
            if (unlink($estrutura->getImagePath()) && unlink($estrutura->getThumbPath())){
                $em->remove($estrutura);
            }
            $em->flush();

            return $this->redirect('/admin/estrutura');
        }

        /**
         *@Route("/admin/blogpostage{idPost}", name="admin.blogpostage",  defaults={"idPost" = -1})
         */
        public function blogPostage($idPost, Request $request){
            $em = $this->getDoctrine()->getManager();

            if ($idPost==-1){
                $blogpost = new Blogpost();
            }else{
                $blogpost = $em->getRepository('AdminBundle:Blogpost')->find($idPost);
            }

            $form = $this->createFormBuilder($blogpost, array(
                'validation_groups'=>false
            ))
                ->add('titulo', 'text', array(
                    'label'=> false,
                    'attr'=>array(
                        'class'=>'inputText'
                    )
                ))
                ->add('post', 'ckeditor', array(
                    'label'=> false,
//                    'config'=> array(
//                        'enterMode'=>'CKEDITOR.ENTER_BR',
//                        'forcePasteAsPlainText'=>false,
//                        'basicEntities'=>true,
//                        'entities'=>true
//                    )
                ))
                ->add('tags', 'text', array(
                    'attr'=>array(
                        'class'=>'inputText'
                    )
                ))
                ->add('image', 'file',array(
                    'data_class' => null
                ))
                ->add('Salvar', 'submit', array(
                    'attr'=>array(
                        'class'=>'submitButton btn btn-primary link'
                    )
                ))
                ->add('Deletar', 'submit', array(
                    'validation_groups' => false,
                    'attr'=>array(
                        'class'=>'submitButton btn btn-primary link'
                    )
                ))
                ->getForm();

            if ($request->getMethod() == 'POST') {
                $tmpimage = $blogpost->getImage();
                $form->handleRequest($request);


                if ($form->isValid()) {
                    If ($form->get('Salvar')->isClicked()) {

                            foreach ($request->files as $uploadedFile) {
                                if ($uploadedFile['image']) {
                                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $uploadedFile['image']->getClientOriginalName(), $ext);
                                    $imageDestNome = md5(uniqid(time())) . "." . $ext[1];
                                    $file = $uploadedFile['image']->move('uploads/', $imageDestNome);

                                    $imagine = new Imagine();
                                    $size = new Box(400, 265);
                                    $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                                    //Cria a miniatura da imagem
                                    $imagine->open('uploads/' . $imageDestNome)->thumbnail($size, $mode)->save('uploads/thumb/' . $imageDestNome);

                                    $blogpost->setImage('uploads/' . $imageDestNome);
                                }else{
                                    $blogpost->setImage($tmpimage);
                                }
                            }



                        if ($idPost == -1) {
                            $blogpost->setDate(new \DateTime('now'));
                            $em->persist($blogpost);
                        }
                    }
                    If ($form->get('Deletar')->isClicked()) {
                        $em->remove($blogpost);
                    }
                    $em->flush();
                }
                return $this->redirect('/admin/blog');
            }



            return $this->render('admin/BlogPostageAdmin.twig', array('form'=> $form->createView(),'id'=>$idPost,'blogpost'=>$blogpost));
        }

        /**
         *@Route("/admin/blog", name="admin.blog")
         */
        public function blogAction(){
            $em = $this->getDoctrine()->getManager();
            $posts = $em->getRepository('AdminBundle:Blogpost')->findAll();

            return $this->render('admin/BlogAdmin.html.twig', array('posts'=>$posts));
        }

}