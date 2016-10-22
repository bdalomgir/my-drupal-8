<?php

/* {# inline_template_start #}<article class="row">
	<div class="image">{{ field_image }}</div>
	<div class="info">
		<div class="row title"><h3>{{ title }}</h3></div>
		<div class="row meta">{{ created }}</div>
		<div class="row excerpt">{{ body }}</div>
		<div class="row click button">{{ view_node }} </div>
	</div>
</article> */
class __TwigTemplate_638c1acd9da526df47cc457a5a968904fd603c1044062c103bbb37b2c2bba700 extends Twig_Template
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
        echo "<article class=\"row\">
\t<div class=\"image\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
\t<div class=\"info\">
\t\t<div class=\"row title\"><h3>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3></div>
\t\t<div class=\"row meta\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</div>
\t\t<div class=\"row excerpt\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
\t\t<div class=\"row click button\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo " </div>
\t</div>
</article>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<article class=\"row\">
\t<div class=\"image\">{{ field_image }}</div>
\t<div class=\"info\">
\t\t<div class=\"row title\"><h3>{{ title }}</h3></div>
\t\t<div class=\"row meta\">{{ created }}</div>
\t\t<div class=\"row excerpt\">{{ body }}</div>
\t\t<div class=\"row click button\">{{ view_node }} </div>
\t</div>
</article>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  67 => 6,  63 => 5,  59 => 4,  54 => 2,  51 => 1,);
    }
}
/* {# inline_template_start #}<article class="row">*/
/* 	<div class="image">{{ field_image }}</div>*/
/* 	<div class="info">*/
/* 		<div class="row title"><h3>{{ title }}</h3></div>*/
/* 		<div class="row meta">{{ created }}</div>*/
/* 		<div class="row excerpt">{{ body }}</div>*/
/* 		<div class="row click button">{{ view_node }} </div>*/
/* 	</div>*/
/* </article>*/
