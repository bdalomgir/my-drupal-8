<?php

/* themes/theme/templates/page/page--gallery.html.twig */
class __TwigTemplate_3cfdc13c566bd0ee75cd87bf2c8f9239566833f8a1ed3a354721880fb2f8101a extends Twig_Template
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
<div class=\"row cover custom-image\">
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
        }
        // line 13
        echo "
<section class=\"row nav\">
\t<div class=\"row content\">
        <div class=\"row nav\">
            <div class=\"row heading\"><h5>Navigate This Section</h5></div>
            <div class=\"row data\">
                <ul>
                <li class=\"active parent\"><a href=\"\">Parent</a>
                    <ul>
                    <li><a href=\"\">Child</a></li>
                    <li><a href=\"\">Child</a></li>
                    <li><a href=\"\">Child</a></li>
                    <li><a href=\"\">Child</a></li>
                    <li><a href=\"\">Child</a></li>
                    </ul>
                </li>
                <li><a href=\"\">Link</a></li>
                <li><a href=\"\">Link</a></li>
                <li><a href=\"\">Link</a></li>
                <li><a href=\"\">Link</a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- row.nav -->

";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 40
            echo "\t<section class=\"row main \">
\t\t<div class=\"row content\">
\t\t\t<div class=\" prime\">
\t\t\t\t<div class=\"row box\">
\t\t\t\t\t<div class=\"row heading\"><h2>Gallery</h2></div>
\t\t\t\t\t<div class=\"row bread\">
\t\t\t\t\t\t";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row entry\">";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- row.content -->
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/page/page--gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  105 => 46,  97 => 40,  95 => 39,  67 => 13,  61 => 11,  59 => 10,  53 => 7,  49 => 5,  46 => 3,  43 => 2,);
    }
}
/* {# #}*/
/* */
/* {% if is_front %}*/
/* {% endif %}*/
/* */
/* <div class="row cover custom-image">*/
/*      {{ page.slideshow }}*/
/* </div>*/
/* */
/* {% if(cover_image) %}*/
/*     <section class="row cover" style="background-image: url({{ cover_image }});"></section>*/
/* {% endif %}*/
/* */
/* <section class="row nav">*/
/* 	<div class="row content">*/
/*         <div class="row nav">*/
/*             <div class="row heading"><h5>Navigate This Section</h5></div>*/
/*             <div class="row data">*/
/*                 <ul>*/
/*                 <li class="active parent"><a href="">Parent</a>*/
/*                     <ul>*/
/*                     <li><a href="">Child</a></li>*/
/*                     <li><a href="">Child</a></li>*/
/*                     <li><a href="">Child</a></li>*/
/*                     <li><a href="">Child</a></li>*/
/*                     <li><a href="">Child</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="">Link</a></li>*/
/*                 <li><a href="">Link</a></li>*/
/*                 <li><a href="">Link</a></li>*/
/*                 <li><a href="">Link</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section><!-- row.nav -->*/
/* */
/* {% if page.content %}*/
/* 	<section class="row main ">*/
/* 		<div class="row content">*/
/* 			<div class=" prime">*/
/* 				<div class="row box">*/
/* 					<div class="row heading"><h2>Gallery</h2></div>*/
/* 					<div class="row bread">*/
/* 						{{ page.breadcrumb }}*/
/* 					</div>*/
/* 					<div class="row entry">{{ page.content }}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!-- row.content -->*/
/* 	</section>*/
/* {% endif %}*/
