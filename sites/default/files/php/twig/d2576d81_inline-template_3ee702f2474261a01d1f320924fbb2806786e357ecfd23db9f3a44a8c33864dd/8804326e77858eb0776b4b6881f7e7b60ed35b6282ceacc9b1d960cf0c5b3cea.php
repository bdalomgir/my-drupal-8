<?php

/* {# inline_template_start #}            	<article class="row">
                	<div class="row">
                    	<div class="col image">{{ field_block_image }}</div>
                        <div class="col info">
                        	<div class="row title"><h4>{{ field_b }}</h4></div>
                            <div class="row text">{{ field_block_description }}</div>
                            <div class="row click">{{ field_block_link }}</div>
                        </div>
                    </div>
                </article> */
class __TwigTemplate_e98ae11315515628fe6228d1769678e0579620c2154fb32f2f41d4f6ffa4ad7f extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "            \t<article class=\"row\">
                \t<div class=\"row\">
                    \t<div class=\"col image\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_block_image"]) ? $context["field_block_image"] : null), "html", null, true));
        echo "</div>
                        <div class=\"col info\">
                        \t<div class=\"row title\"><h4>";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_b"]) ? $context["field_b"] : null), "html", null, true));
        echo "</h4></div>
                            <div class=\"row text\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_block_description"]) ? $context["field_block_description"] : null), "html", null, true));
        echo "</div>
                            <div class=\"row click\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_block_link"]) ? $context["field_block_link"] : null), "html", null, true));
        echo "</div>
                        </div>
                    </div>
                </article>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}            \t<article class=\"row\">
                \t<div class=\"row\">
                    \t<div class=\"col image\">{{ field_block_image }}</div>
                        <div class=\"col info\">
                        \t<div class=\"row title\"><h4>{{ field_b }}</h4></div>
                            <div class=\"row text\">{{ field_block_description }}</div>
                            <div class=\"row click\">{{ field_block_link }}</div>
                        </div>
                    </div>
                </article>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  65 => 6,  61 => 5,  56 => 3,  52 => 1,);
    }
}
/* {# inline_template_start #}            	<article class="row">*/
/*                 	<div class="row">*/
/*                     	<div class="col image">{{ field_block_image }}</div>*/
/*                         <div class="col info">*/
/*                         	<div class="row title"><h4>{{ field_b }}</h4></div>*/
/*                             <div class="row text">{{ field_block_description }}</div>*/
/*                             <div class="row click">{{ field_block_link }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </article>*/
