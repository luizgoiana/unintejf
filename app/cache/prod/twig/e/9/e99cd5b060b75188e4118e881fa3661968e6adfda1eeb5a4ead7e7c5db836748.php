<?php

/* home/Home.html.twig */
class __TwigTemplate_e99cd5b060b75188e4118e881fa3661968e6adfda1eeb5a4ead7e7c5db836748 extends Twig_Template
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
    <title>Uninter Juiz de Fora </title>
    ";
        // line 6
        $this->loadTemplate("metas.html.twig", "home/Home.html.twig", 6)->display($context);
        // line 7
        echo "</head>
<body>

";
        // line 10
        $this->loadTemplate("header.html.twig", "home/Home.html.twig", 10)->display($context);
        // line 11
        echo "
<ul id=\"banners\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesbannerhome"]) ? $context["imagesbannerhome"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "        <li><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"\"></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul><!--end #banners-->

<div class=\"container\">

    <div id=\"info-basic\">
        <div class=\"info bg-1\">
            <h4>Inscrição rápida:</h4>
            <form method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" action=\"/home/send\">
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "                    <div id=\"flash-notice\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                <div class=\"field\">
                    <input class=\"input-padrao\" name=\"nome\" id=\"nome\" placeholder=\"Nome *\" required=\"required\" type=\"text\">

                    <input style=\"margin-left: 2%\" class=\"input-padrao\" name=\"cpf\" id=\"cpf\" placeholder=\"CPF *\" type=\"text\">
                </div>
                <div class=\"field\">
                    <input name=\"cidade\" id=\"cidade\" placeholder=\"Cidade *\" class=\"input-padrao2\" required=\"required\" type=\"text\">
                    <input style=\"margin-left: 4%\" name=\"uf\" id=\"uf\" placeholder=\"UF *\" class=\"input-padrao2\" required=\"required\" type=\"text\">

                    <select style=\"margin-left: 2%\" name=\"id_curso\" id=\"id_curso\" class=\"input-padrao\">
                        <option value=\"\" selected=\"selected\">Curso de Interesse *</option>
                        <option value=\"1\">Graduação - Bacharelados - Administração</option>
                        <option value=\"6\">Graduação - Bacharelados - Ciência Política</option>
                        <option value=\"2\">Graduação - Bacharelados - Ciências Contábeis</option>
                        <option value=\"8\">Graduação - Bacharelados - Engenharia da Computação</option>
                        <option value=\"7\">Graduação - Bacharelados - Engenharia de Produção</option>
                        <option value=\"9\">Graduação - Bacharelados - Engenharia Elétrica - Habilitação Eletrônica</option>
                        <option value=\"10\">Graduação - Bacharelados - Relações Internacionais</option>
                        <option value=\"11\">Graduação - Bacharelados - Teologia</option>
                        <option value=\"17\">Graduação - Cursos Superiores de Tecnologia - Análise e Desenvolvimento de Sistemas</option>
                        <option value=\"18\">Graduação - Cursos Superiores de Tecnologia - Comércio Exterior</option>
                        <option value=\"32\">Graduação - Cursos Superiores de Tecnologia - CST em Gestão Hospitalar</option>
                        <option value=\"19\">Graduação - Cursos Superiores de Tecnologia - Gestão Ambiental</option>
                        <option value=\"20\">Graduação - Cursos Superiores de Tecnologia - Gestão Comercial</option>
                        <option value=\"21\">Graduação - Cursos Superiores de Tecnologia - Gestão da Produção Industrial</option>
                        <option value=\"22\">Graduação - Cursos Superiores de Tecnologia - Gestão da Tecnologia da Informação</option>
                        <option value=\"23\">Graduação - Cursos Superiores de Tecnologia - Gestão de Recursos Humanos</option>
                        <option value=\"24\">Graduação - Cursos Superiores de Tecnologia - Gestão de Turismo</option>
                        <option value=\"111\">Graduação - Cursos Superiores de Tecnologia - Gestão em Saúde Pública</option>
                        <option value=\"25\">Graduação - Cursos Superiores de Tecnologia - Gestão Financeira</option>
                        <option value=\"112\">Graduação - Cursos Superiores de Tecnologia - Gestão Legislativa</option>
                        <option value=\"33\">Graduação - Cursos Superiores de Tecnologia - Gestão Pública</option>
                        <option value=\"27\">Graduação - Cursos Superiores de Tecnologia - Logística</option>
                        <option value=\"28\">Graduação - Cursos Superiores de Tecnologia - Marketing</option>
                        <option value=\"29\">Graduação - Cursos Superiores de Tecnologia - Processos Gerenciais</option>
                        <option value=\"30\">Graduação - Cursos Superiores de Tecnologia - Secretariado</option>
                        <option value=\"114\">Graduação - Cursos Superiores de Tecnologia - Segurança Privada</option>
                        <option value=\"113\">Graduação - Cursos Superiores de Tecnologia - Segurança Pública</option>
                        <option value=\"31\">Graduação - Cursos Superiores de Tecnologia - Serviços Jurídicos e Notariais</option>
                        <option value=\"109\">Graduação - Licenciaturas - Artes Visuais</option>
                        <option value=\"16\">Graduação - Licenciaturas - Filosofia</option>
                        <option value=\"3\">Graduação - Licenciaturas - Geografia</option>
                        <option value=\"12\">Graduação - Licenciaturas - História</option>
                        <option value=\"13\">Graduação - Licenciaturas - Letras</option>
                        <option value=\"110\">Graduação - Licenciaturas - Licenciatura em Pedagogia – Segunda Licenciatura</option>
                        <option value=\"15\">Graduação - Licenciaturas - Matemática</option>
                        <option value=\"14\">Graduação - Licenciaturas - Pedagogia</option>
                        <option value=\"35\">Pós-Graduação - Desportivos - Atividade Física para Grupos Especiais</option>
                        <option value=\"36\">Pós-Graduação - Desportivos - Biomecânica da Atividade Física e do Esporte</option>
                        <option value=\"37\">Pós-Graduação - Desportivos - Direito Desportivo</option>
                        <option value=\"38\">Pós-Graduação - Desportivos - Educação Física Escolar</option>
                        <option value=\"39\">Pós-Graduação - Desportivos - Esporte para Pessoas com Deficiência</option>
                        <option value=\"40\">Pós-Graduação - Desportivos - Fisiologia do Exercício</option>
                        <option value=\"41\">Pós-Graduação - Desportivos - Fisioterapia Esportiva</option>
                        <option value=\"42\">Pós-Graduação - Desportivos - Gestão de Academias de Ginástica</option>
                        <option value=\"43\">Pós-Graduação - Desportivos - Gestão e Marketing Esportivo</option>
                        <option value=\"53\">Pós-Graduação - Desportivos - Gestão Profissional do Futebol</option>
                        <option value=\"44\">Pós-Graduação - Desportivos - Jornalismo Esportivo</option>
                        <option value=\"45\">Pós-Graduação - Desportivos - Negócios no Esporte</option>
                        <option value=\"46\">Pós-Graduação - Desportivos - Nutrição Esportiva</option>
                        <option value=\"47\">Pós-Graduação - Desportivos - Organização de Eventos Esportivos</option>
                        <option value=\"48\">Pós-Graduação - Desportivos - Personal Training</option>
                        <option value=\"49\">Pós-Graduação - Desportivos - Políticas Públicas para o Esporte</option>
                        <option value=\"50\">Pós-Graduação - Desportivos - Psicologia do Esporte</option>
                        <option value=\"51\">Pós-Graduação - Desportivos - Saúde e Bem-Estar</option>
                        <option value=\"52\">Pós-Graduação - Desportivos - Treinamento, Técnicas e Táticas Esportivas</option>
                        <option value=\"72\">Pós-Graduação - Educacional - Alfabetização e Letramento</option>
                        <option value=\"108\">Pós-Graduação - Educacional - Educação Especial e Educação Inclusiva</option>
                        <option value=\"107\">Pós-Graduação - Educacional - Educação Infantil</option>
                        <option value=\"90\">Pós-Graduação - Educacional - Inspeção Escolar</option>
                        <option value=\"93\">Pós-Graduação - Educacional - Metodologia do Ensino de Artes</option>
                        <option value=\"91\">Pós-Graduação - Educacional - Metodologia do Ensino de Biologia e Química</option>
                        <option value=\"94\">Pós-Graduação - Educacional - Metodologia do Ensino de Educação Física</option>
                        <option value=\"95\">Pós-Graduação - Educacional - Metodologia do Ensino de História e Geografia</option>
                        <option value=\"96\">Pós-Graduação - Educacional - Metodologia do Ensino de Língua Portuguesa e Estrangeira</option>
                        <option value=\"97\">Pós-Graduação - Educacional - Metodologia do Ensino de Matemática e Física</option>
                        <option value=\"98\">Pós-Graduação - Educacional - Metodologia do Ensino na Educação Superior</option>
                        <option value=\"106\">Pós-Graduação - Educacional - Metodologia do Ensino Religioso</option>
                        <option value=\"99\">Pós-Graduação - Educacional - Organização do Trabalho Pedagógico: Gestão Escolar</option>
                        <option value=\"103\">Pós-Graduação - Educacional - Organização do Trabalho Pedagógico: Orientação Educacional</option>
                        <option value=\"101\">Pós-Graduação - Educacional - Organização do Trabalho Pedagógico: Orientação Educacional, Supervisão e Gestão Escolar</option>
                        <option value=\"104\">Pós-Graduação - Educacional - Pedagogia Empresarial e Educação Corporativa</option>
                        <option value=\"105\">Pós-Graduação - Educacional - Psicopedagogia Clínica e Institucional</option>
                        <option value=\"69\">Pós-Graduação - Engenharia e Meio Ambiente - Engenharia de Produção</option>
                        <option value=\"70\">Pós-Graduação - Engenharia e Meio Ambiente - Gestão Ambiental e Desenvolvimento Sustentável</option>
                        <option value=\"71\">Pós-Graduação - Engenharia e Meio Ambiente - Perícia e Auditoria Ambiental</option>
                        <option value=\"73\">Pós-Graduação - Gestão Empresarial - MBA em Administração do Terceiro Setor</option>
                        <option value=\"74\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Finanças</option>
                        <option value=\"85\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Gestão de Varejo</option>
                        <option value=\"75\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Gestão do Conhecimento</option>
                        <option value=\"76\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Logística</option>
                        <option value=\"77\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Marketing</option>
                        <option value=\"78\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Negócios Internacionais</option>
                        <option value=\"79\">Pós-Graduação - Gestão Empresarial - MBA em Administração e Qualidade</option>
                        <option value=\"89\">Pós-Graduação - Gestão Empresarial - MBA em Agronegócios e Biotecnologia</option>
                        <option value=\"80\">Pós-Graduação - Gestão Empresarial - MBA em Assessoria Executiva</option>
                        <option value=\"88\">Pós-Graduação - Gestão Empresarial - MBA em Controladoria e Finanças</option>
                        <option value=\"86\">Pós-Graduação - Gestão Empresarial - MBA em Gestão de Eventos</option>
                        <option value=\"81\">Pós-Graduação - Gestão Empresarial - MBA em Gestão de Projetos</option>
                        <option value=\"82\">Pós-Graduação - Gestão Empresarial - MBA em Gestão de Recursos Humanos</option>
                        <option value=\"83\">Pós-Graduação - Gestão Empresarial - MBA em Gestão Estratégica de Custos</option>
                        <option value=\"87\">Pós-Graduação - Gestão Empresarial - MBA em Marketing Político e Organização de Campanha Eleitoral</option>
                        <option value=\"84\">Pós-Graduação - Gestão Empresarial - MBA em Planejamento e Gestão Estratégica</option>
                        <option value=\"65\">Pós-Graduação - Gestão Pública - MBA em Administração Pública e Gerência de Cidades</option>
                        <option value=\"67\">Pós-Graduação - Gestão Pública - MBA em Contabilidade Pública e Responsabilidade Fiscal</option>
                        <option value=\"68\">Pós-Graduação - Gestão Pública - Sustentabilidade e Políticas Públicas</option>
                        <option value=\"34\">Pós-Graduação - Humanidades - Política de Assistência Social - SUAS</option>
                        <option value=\"54\">Pós-Graduação - Jurídica - Direito Ambiental</option>
                        <option value=\"55\">Pós-Graduação - Jurídica - Direito do Trabalho e Processo Trabalhista</option>
                        <option value=\"57\">Pós-Graduação - Jurídica - Direito Penal e Criminologia</option>
                        <option value=\"56\">Pós-Graduação - Jurídica - Direito Processual Civil</option>
                        <option value=\"58\">Pós-Graduação - Saúde - Enfermagem do Trabalho</option>
                        <option value=\"59\">Pós-Graduação - Saúde - Farmácia Hospitalar</option>
                        <option value=\"60\">Pós-Graduação - Saúde - Farmacologia e Interações Medicamentosas</option>
                        <option value=\"61\">Pós-Graduação - Saúde - MBA em Auditoria em Saúde</option>
                        <option value=\"62\">Pós-Graduação - Saúde - MBA em Gestão Hospitalar</option>
                        <option value=\"63\">Pós-Graduação - Saúde - Saúde Pública com Ênfase em Saúde da Família</option>
                        <option value=\"64\">Pós-Graduação - Saúde - Vigilância Sanitária</option>
                    </select>
                </div>

                <div class=\"field\">
                    <input class=\"input-padrao\" name=\"telefone\" id=\"telefone\" placeholder=\"Telefone de contato *\" onkeyup=\"criaMascara(this, '(##) ####-####');\" required=\"required\" type=\"text\">
                    <input style=\"margin-left: 2%\" class=\"input-padrao\" name=\"email\" id=\"email\" placeholder=\"Email *\" required=\"required\" type=\"text\">
                </div>

                <input name=\"Submit-contato\" class=\"botao-padrao\" value=\"Inscrever\" type=\"submit\">
            </form>
        </div><!--end .info-->
    </div><!--end #info-basic-->

</div><!--end .container-->

<div class=\"about\">
    <div class=\"container\">
        <div class=\"wrapper\">
            <h2>Bem-vindo ao<br><span>Polo da Uninter em Juiz de Fora</span></h2>
            <p>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sobre"]) ? $context["sobre"] : null), "texto", array()), "html", null, true);
        echo "</p>
        </div>
    </div><!--end .container-->
</div><!--end .about-->

<div id=\"parallax\">
    <div class=\"mask\"></div>
    <div class=\"container\">
        <p>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "bannermiddlefrase", array()), "html", null, true);
        echo "</p>
    </div><!--end .container-->
</div><!--end #ad-->


<div id=\"scroller\">
    ";
        // line 181
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estruturas"]) ? $context["estruturas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estrutura"]) {
            // line 182
            echo "        <a class=\"fresco\" data-fresco-group=\"estrutura\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estrutura"], "imagepath", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["estrutura"], "thumbpath", array()), "html", null, true);
            echo "\" alt=\"\">
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estrutura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "</div><!--end #scroller-->

";
        // line 188
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FooterBundle:Default:footer"));
        echo "

<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("res/bxslider.min.js"), "html", null, true);
        echo "\"></script>

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

    \$(document).ready(function(){
        \$(\"#banners\").bxSlider({
            mode: \"fade\",
            auto: true,
            pause: 5000,
            pager: false,
            controls: false
        });
    });

    document.getElementById('home').style.color=\"#FFC600\";

</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home/Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 190,  260 => 188,  256 => 186,  247 => 183,  242 => 182,  238 => 181,  229 => 175,  218 => 167,  78 => 29,  69 => 26,  66 => 25,  62 => 24,  52 => 16,  43 => 14,  39 => 13,  35 => 11,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }
}
