<?php

/* header.html.twig */
class __TwigTemplate_a00fa51819543fe8222572c1218a2cafa135972a70049ffa9d1232a0b5ba4527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
    <div class=\"container\">
        <a href=\"/\"><img class=\"logo\" src=";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/site/logo.png"), "html", null, true);
        echo " alt=\"\"></a>
        <div class=\"hamburger\">
            <ul>
                <li class=\"first\"></li>
                <li class=\"second\"></li>
                <li class=\"third\"></li>
            </ul>
        </div>
        <nav class=\"menu\">
            <ul>
                <li><a href=\"/\" id=\"home\">Home</a></li>
                <!-- <li><a href=\"/cursos\" id=\"sobre\">Cursos</a></li> -->
                <li><a href=\"http://uninter.com/graduacao-ead/cursos\" target=\"_blank\" id=\"sobre\">Cursos</a></li>
                <li><a href=\"/inscricao\" id=\"especialidades\">Inscrição</a></li>
                <li><a href=\"/portal\" id=\"estrutura\">Portal do aluno</a></li>
                <li><a href=\"/contato\" id=\"contato\">Contato</a></li>
            </ul>
        </nav><!--end menu-->
    </div><!--end container-->
</header><!--end header-->";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
