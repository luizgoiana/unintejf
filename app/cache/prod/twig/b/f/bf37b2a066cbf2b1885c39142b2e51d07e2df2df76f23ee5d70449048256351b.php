<?php

/* contato/Contato.html.twig */
class __TwigTemplate_bf37b2a066cbf2b1885c39142b2e51d07e2df2df76f23ee5d70449048256351b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    <meta charset=\"UTF-8\">
    <title>Contato</title>
    ";
        // line 6
        $this->loadTemplate("metas.html.twig", "contato/Contato.html.twig", 6)->display($context);
        // line 7
        echo "</head>
<body>

";
        // line 10
        $this->loadTemplate("header.html.twig", "contato/Contato.html.twig", 10)->display($context);
        // line 11
        echo "
<div class=\"container\">
    <div id=\"contact\">

        <h1 class=\"title\">Contato</h1>

        <form method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" action=\"/contato/send\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "                <div id=\"flash-notice\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            <p>Estamos aguardando o seu contato. Será um prazer atendê-lo.</p>
            <input type=\"text\" name=\"nome\" placeholder=\"NOME\">
            <input type=\"email\" name=\"email\" placeholder=\"E-MAIL\">
            <input type=\"tel\" name=\"telefone\" id=\"telefone\" placeholder=\"TELEFONE\" pattern=\"\\([0-9]{2}\\)[\\s][0-9]{4}-[0-9]{4,5}\">
            <script type=\"text/javascript\">\$(\"#telefone\").mask(\"(00) 0000-00009\");</script>
            <textarea name=\"mensagem\" placeholder=\"DIGITE AQUI SUA MENSAGEM\"></textarea>
            <input type=\"submit\" value=\"enviar\">
        </form>

        <div class=\"others\">
            <h2>outros meios<br>de contato</h2>
            <br>
            <p>Av. dos Andradas, 547<br>Sala 703 - Centro<br>Juiz de Fora - MG</p>
            <br>
            <p>Telefone:</p>
            <p class=\"tel\">
                <span>(32) 3313-8544</span>
            </p>
            <br>
            <p><span>Geral</span></p>
            <p>contato@uninterjf.com.br</p>
        </div><!--end .others-->

    </div><!--end #contact-->
</div><!--end .container-->

";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FooterBundle:Default:footer"));
        echo "

<script>
    (function() {
        \$(\".magnifier\").on(\"click\", function(e) {
            e.preventDefault();
            \$(\".search\").animate({width: \"toggle\"}).focus();
            if( \$(\"header .menu ul\").is(\":visible\") ) {
                \$(\"header .menu ul\").hide();
            } else {
                \$(\"header .menu ul\").show();
            }

            var width = \$(window).width();

            if (width <= 710) {
                \$(\"header .menu ul\").hide();
            }

            if (\$(\"header .hamburger\").is(\":visible\")) {
                \$(\"header .hamburger\").hide();
            } else {
                \$(\"header .hamburger\").show();
            }

        });
    }());

    \$(\".hamburger\").on(\"click\", function(){
        \$(this).toggleClass(\"checked\");
    });

    document.getElementById('contato').style.color=\"#FFC600\";

</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "contato/Contato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 49,  60 => 23,  51 => 20,  48 => 19,  44 => 18,  35 => 11,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }
}
