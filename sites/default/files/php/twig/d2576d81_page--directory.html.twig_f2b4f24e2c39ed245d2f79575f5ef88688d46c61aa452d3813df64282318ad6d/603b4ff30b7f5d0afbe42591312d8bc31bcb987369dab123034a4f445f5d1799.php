<?php

/* themes/theme/templates/page/page--directory.html.twig */
class __TwigTemplate_dc4b5913db6e242da9cb3f0d50515dc2568e5eb5d0d6238da9c5dd2a5c19aa1d extends Twig_Template
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
<div class=\"row cover\">
     ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
</div>

";
        // line 10
        if ((isset($context["cover_image"]) ? $context["cover_image"] : null)) {
            // line 11
            echo "    <section class=\"row cover\" style=\"background-image: url(";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cover_image"]) ? $context["cover_image"] : null), "html", null, true));
            echo ");\"></section>
";
        } else {
        }
        // line 14
        echo "


<section class=\"row nav\">
\t<div class=\"row content\">
        <div class=\"row nav\">
            <div class=\"row heading\"><h5>Navigate This Section</h5></div>
\t\t\t";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
        echo "
        </div>
    </div>
</section><!-- row.nav -->

";
        // line 26
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 27
            echo "\t<section class=\"row main sidebar\">
\t\t<div class=\"row content\">
\t\t\t<div class=\"col prime\">
\t\t\t\t<div class=\"row box\">
\t\t\t\t\t
                    ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                        
                          <div class=\"row heading\"><h2>Staff Directory</h2></div>
                        
                    ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

\t\t\t\t\t<div class=\"row bread\">
\t\t\t\t\t\t";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row entry\">";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col aside\">
\t\t\t\t<div class=\"row nav\">";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
            echo "</div>
\t\t\t\t
\t\t\t\t";
            // line 47
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "additional_resources", array())) {
                // line 48
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "additional_resources", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 50
            echo "\t\t\t</div><!-- col.aside -->
\t\t</div><!-- row.content -->
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/page/page--directory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  126 => 48,  124 => 47,  119 => 45,  112 => 41,  107 => 39,  101 => 36,  94 => 32,  87 => 27,  85 => 26,  77 => 21,  68 => 14,  61 => 11,  59 => 10,  53 => 7,  49 => 5,  46 => 3,  43 => 2,);
    }
}
/* {# #}*/
/* */
/* {% if is_front %}*/
/* {% endif %}*/
/* */
/* <div class="row cover">*/
/*      {{ page.slideshow }}*/
/* </div>*/
/* */
/* {% if(cover_image) %}*/
/*     <section class="row cover" style="background-image: url({{ cover_image }});"></section>*/
/* {% else %}*/
/* {% endif %}*/
/* */
/* */
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
/*                           <div class="row heading"><h2>Staff Directory</h2></div>*/
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
/* 				{% if page.additional_resources %}*/
/* 					{{ page.additional_resources }}*/
/* 				{% endif %}*/
/* 			</div><!-- col.aside -->*/
/* 		</div><!-- row.content -->*/
/* 	</section>*/
/* {% endif %}*/
