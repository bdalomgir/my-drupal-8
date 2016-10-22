<?php

/* {# inline_template_start #}<div class="col image">{{ field_staff_image }}</div>
<div class="col info">
<div class="row name">{{ field_name }}</div>
<div class="row designation">{{ field_designation }}</div>
<div class="row category">{{ field_staff_category }}</div>
<div class="row address">{{ field_address }}</div>
<div class="row phone">{{ field_phone }}</div>
<div class="row email"><a href="{{ field_email }}">{{ field_email }}</a></div>
</div> */
class __TwigTemplate_b85513551b3508fc3ac0084d169841e38364e5367262b81b9015fe365664c39c extends Twig_Template
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
        echo "<div class=\"col image\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_staff_image"]) ? $context["field_staff_image"] : null), "html", null, true));
        echo "</div>
<div class=\"col info\">
<div class=\"row name\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true));
        echo "</div>
<div class=\"row designation\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_designation"]) ? $context["field_designation"] : null), "html", null, true));
        echo "</div>
<div class=\"row category\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_staff_category"]) ? $context["field_staff_category"] : null), "html", null, true));
        echo "</div>
<div class=\"row address\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_address"]) ? $context["field_address"] : null), "html", null, true));
        echo "</div>
<div class=\"row phone\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_phone"]) ? $context["field_phone"] : null), "html", null, true));
        echo "</div>
<div class=\"row email\"><a href=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_email"]) ? $context["field_email"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_email"]) ? $context["field_email"] : null), "html", null, true));
        echo "</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col image\">{{ field_staff_image }}</div>
<div class=\"col info\">
<div class=\"row name\">{{ field_name }}</div>
<div class=\"row designation\">{{ field_designation }}</div>
<div class=\"row category\">{{ field_staff_category }}</div>
<div class=\"row address\">{{ field_address }}</div>
<div class=\"row phone\">{{ field_phone }}</div>
<div class=\"row email\"><a href=\"{{ field_email }}\">{{ field_email }}</a></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  73 => 7,  69 => 6,  65 => 5,  61 => 4,  57 => 3,  51 => 1,);
    }
}
/* {# inline_template_start #}<div class="col image">{{ field_staff_image }}</div>*/
/* <div class="col info">*/
/* <div class="row name">{{ field_name }}</div>*/
/* <div class="row designation">{{ field_designation }}</div>*/
/* <div class="row category">{{ field_staff_category }}</div>*/
/* <div class="row address">{{ field_address }}</div>*/
/* <div class="row phone">{{ field_phone }}</div>*/
/* <div class="row email"><a href="{{ field_email }}">{{ field_email }}</a></div>*/
/* </div>*/
