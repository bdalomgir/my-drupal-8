<?php

/* {# inline_template_start #}<article class="article-front">
	<div class="article-image">{{ field_image }}</div>
	<div class="article-title">{{ title }}</div>
</article> */
class __TwigTemplate_945ca11cbcd5f69f26990f3879e020b84021e69c824f6623876f4aae59b6662b extends Twig_Template
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
        echo "<article class=\"article-front\">
\t<div class=\"article-image\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
\t<div class=\"article-title\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
</article>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<article class=\"article-front\">
\t<div class=\"article-image\">{{ field_image }}</div>
\t<div class=\"article-title\">{{ title }}</div>
</article>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  49 => 2,  46 => 1,);
    }
}
/* {# inline_template_start #}<article class="article-front">*/
/* 	<div class="article-image">{{ field_image }}</div>*/
/* 	<div class="article-title">{{ title }}</div>*/
/* </article>*/
