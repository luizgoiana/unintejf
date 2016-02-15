<?php

/* metas.html.twig */
class __TwigTemplate_42a318535e79903a122f9e45f4a27cf00ea7af743e0814bd487861e35546acbc extends Twig_Template
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
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/style.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/mCustomScrollbar.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/fresco.css"), "html", null, true);
        echo "\"/>

<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/all.js"), "html", null, true);
        echo "\"></script>
<meta name=\"description\" content=\"Com 24 anos de atuação em Juiz de Fora - MG, a cirurgiã - dentista oferece técnicas eficazes para a reabilitação oral e estética.\" />
<script>
    \$(document).ready(function(){
        \$(\"header .hamburger\").click(function(){
            \$(\"header .menu ul\").slideToggle(\"600\");
        });
    });

    (function(\$){
        \$(window).load(function(){
            \$(\"#scroller\").mCustomScrollbar({
                horizontalScroll: true
            });
        });
    })(jQuery);
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67019402-1', 'auto');
    ga('send', 'pageview');

</script>";
    }

    public function getTemplateName()
    {
        return "metas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
