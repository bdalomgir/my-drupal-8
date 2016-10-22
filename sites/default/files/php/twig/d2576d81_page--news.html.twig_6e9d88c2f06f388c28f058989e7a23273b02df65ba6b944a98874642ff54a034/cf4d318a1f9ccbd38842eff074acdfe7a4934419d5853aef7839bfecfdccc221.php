<?php

/* themes/theme/templates/page/page--news.html.twig */
class __TwigTemplate_112162cea00fe24a44bdcc9cfaeff6d3765adf844b7490155429e9a757f2a3cf extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "
";
        // line 3
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
        }
        // line 5
        echo "
<section class=\"row cover\">
     ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
</section>

<section class=\"row nav\">
\t<div class=\"row content\">
        <div class=\"row nav\">
            <div class=\"row heading\"><h5>Navigate This Section</h5></div>
\t\t\t";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
        echo "
        </div>
    </div>
</section><!-- row.nav -->

";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 20
            echo "\t<section class=\"row main sidebar\">
\t\t<div class=\"row content\">
\t\t\t<div class=\"col prime\">
\t\t\t\t<div class=\"row box\">
\t\t\t\t\t
                    ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                        
                          <div class=\"row heading\"><h2>News</h2></div>
                        
                    ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

\t\t\t\t\t<div class=\"row bread\">
\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row entry\">";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col aside\">
\t\t\t\t<div class=\"row nav\">";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
            echo "</div>
\t\t\t\t
\t\t\t\t";
            // line 40
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popular_posts", array())) {
                // line 41
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popular_posts", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t
\t\t\t\t";
            // line 44
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facebook_likes", array())) {
                // line 45
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facebook_likes", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t</div><!-- col.aside -->
\t\t</div><!-- row.content -->
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/page/page--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  123 => 45,  121 => 44,  118 => 43,  112 => 41,  110 => 40,  105 => 38,  98 => 34,  93 => 32,  87 => 29,  80 => 25,  73 => 20,  71 => 19,  63 => 14,  53 => 7,  49 => 5,  46 => 3,  43 => 2,);
    }
}
/* {# #}*/
/* */
/* {% if is_front %}*/
/* {% endif %}*/
/* */
/* <section class="row cover">*/
/*      {{ page.slideshow }}*/
/* </section>*/
/* */
/* <section class="row nav">*/
/* 	<div class="row content">*/
/*         <div class="row nav">*/
/*             <div class="row heading"><h5>Navigate This Section</h5></div>*/
/* 			{{ page.sidebar_menu }}*/
/*         </div>*/
/*     </div>*/
/* </section><!-- row.nav -->*/
/* */
/* {% if page.content %}*/
/* 	<section class="row main sidebar">*/
/* 		<div class="row content">*/
/* 			<div class="col prime">*/
/* 				<div class="row box">*/
/* 					*/
/*                     {{ title_prefix }}*/
/*                         */
/*                           <div class="row heading"><h2>News</h2></div>*/
/*                         */
/*                     {{ title_suffix }}*/
/* */
/* 					<div class="row bread">*/
/* 						{{ page.breadcrumb }}*/
/* 					</div>*/
/* 					<div class="row entry">{{ page.content }}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col aside">*/
/* 				<div class="row nav">{{ page.sidebar_menu }}</div>*/
/* 				*/
/* 				{% if page.popular_posts %}*/
/* 					{{ page.popular_posts }}*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if page.facebook_likes %}*/
/* 					{{ page.facebook_likes }}*/
/* 				{% endif %}*/
/* 			</div><!-- col.aside -->*/
/* 		</div><!-- row.content -->*/
/* 	</section>*/
/* {% endif %}*/
