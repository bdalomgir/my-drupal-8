<?php

/* themes/theme/templates/page/page.html.twig */
class __TwigTemplate_b77287698acd59645cf3bc50818591a07e3530467cae1c17e238e0a16d67fae5 extends Twig_Template
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
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
        echo "
        </div>
    </div>
</section><!-- row.nav -->

";
        // line 24
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 25
            echo "\t<section class=\"row main sidebar\">
\t\t<div class=\"row content\">
\t\t\t<div class=\"col prime\">
\t\t\t\t<div class=\"row box\">
\t\t\t\t\t
                    ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                        
                          <div class=\"row heading\"><h2>";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h2></div>
                        
                    ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

\t\t\t\t\t<div class=\"row bread\">
\t\t\t\t\t\t";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row entry\">";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col aside\">
\t\t\t\t<div class=\"row nav\">";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_menu", array()), "html", null, true));
            echo "</div>
\t\t\t\t
\t\t\t\t";
            // line 45
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popular_posts", array())) {
                // line 46
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popular_posts", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t
\t\t\t\t";
            // line 49
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facebook_likes", array())) {
                // line 50
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facebook_likes", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t
\t\t\t\t";
            // line 53
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "crime_definitions", array())) {
                // line 54
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "crime_definitions", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t
\t\t\t\t";
            // line 57
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "additional_resources", array())) {
                // line 58
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "additional_resources", array()), "html", null, true));
                echo "
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t</div><!-- col.aside -->
\t\t</div><!-- row.content -->
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  160 => 58,  158 => 57,  155 => 56,  149 => 54,  147 => 53,  144 => 52,  138 => 50,  136 => 49,  133 => 48,  127 => 46,  125 => 45,  120 => 43,  113 => 39,  108 => 37,  102 => 34,  97 => 32,  92 => 30,  85 => 25,  83 => 24,  75 => 19,  68 => 14,  61 => 11,  59 => 10,  53 => 7,  49 => 5,  46 => 3,  43 => 2,);
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
/*                           <div class="row heading"><h2>{{ title }}</h2></div>*/
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
/* 				*/
/* 				{% if page.crime_definitions %}*/
/* 					{{ page.crime_definitions }}*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if page.additional_resources %}*/
/* 					{{ page.additional_resources }}*/
/* 				{% endif %}*/
/* 			</div><!-- col.aside -->*/
/* 		</div><!-- row.content -->*/
/* 	</section>*/
/* {% endif %}*/
