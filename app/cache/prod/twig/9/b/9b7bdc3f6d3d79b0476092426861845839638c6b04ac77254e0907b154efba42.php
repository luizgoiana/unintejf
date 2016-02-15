<?php

/* footer.html.twig */
class __TwigTemplate_9b7bdc3f6d3d79b0476092426861845839638c6b04ac77254e0907b154efba42 extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <a href=\"/\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/site/logo.png"), "html", null, true);
        echo "\" alt=\"Uninter Juiz de Fora\"></a>
        <div class=\"text\">
            <div class=\"info\">
                <h5>Uninter - Polo Juiz de Fora</h5>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "specialtyshortdescription", array()), "html", null, true);
        echo "</p>
            </div><!--end .info-->
            <div class=\"info\">
                <h5>Contato</h5>
                <p>Avenida Barão do Rio Branco, 1871, sala 1504<br/>Centro<br/>36013-020<br>Juiz de Fora - MG</p>
                <p>(32) 3311-6688<br>(32) 3211-4708<br>(32) 98402-2452<br><br>E-mail: <span>contato@uninterjf.com.br</span></p>
                <p><a target=\"_blank\" href=\"https://www.google.com.br/maps/place/Av.+dos+Andradas,+Juiz+de+Fora+-+MG/@-21.7513759,-43.3561662,17z/data=!3m1!4b1!4m2!3m1!1s0x989c9a6578ee15:0x225e20dc429b6833\">Veja como chegar ></a></p>
            </div><!--end .info-->
            <div class=\"info social\">
                <h5>Redes Sociais</h5>
                <a href=\"https://www.facebook.com/grupouninter?fref=ts\" target=\"_blank\">
                    <img class=\"icon\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/site/icons/face.png"), "html", null, true);
        echo "\" alt=\"Facebook\">
                    <p><span>Facebook</span></p>
                </a>
            </div><!--end .info-->
        </div><!--end .text-->
        <hr>
        <p class=\"right\"><span>2015 © Copyright - Uninter Juiz de Fora</span></p>         <p class=\"true-right\"><span><a target=\"_blank\" href=\"mailto:luizguilherme.goiana@gmail.com\"> Luiz Guilherme Rodrigues</a></span></p>
    </div><!--end .container-->
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  30 => 7,  23 => 3,  19 => 1,);
    }
}
