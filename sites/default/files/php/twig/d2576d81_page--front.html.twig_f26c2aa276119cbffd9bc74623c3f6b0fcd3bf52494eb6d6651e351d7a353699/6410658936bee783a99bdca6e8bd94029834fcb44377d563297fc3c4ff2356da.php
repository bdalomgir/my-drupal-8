<?php

/* themes/theme/templates/page/page--front.html.twig */
class __TwigTemplate_e7b7f16a197b7c6a3d5801048572024692659a5319940da99d29361aa98bd8f4 extends Twig_Template
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
        echo "<section class=\"row hero relative header-images\" >
   <div class=\"image-header\">
        <img src=\"http://sdsdev.co/PTN8/downloads/1.jpg\">
   </div>
    <div class=\"block absolute info z-2\">
        <div class=\"row max-height\">
            <div class=\"col mid\">
                <div class=\"call\"><a href=\"tel:1-609-258-3333\">Call PSAFE!</a></div>

                <div class=\"row box\">
                    <div class=\"row nav relative\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_box", array()), "html", null, true));
        echo "</div>
                    <div class=\"row social\">
                        <ul>
                            <li><a target=\"_blank\" href=\"https://www.facebook.com/pudps\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a target=\"_blank\" href=\"http://publicsafety.princeton.edu/news-feed\"><i class=\"icon-rss\"></i></a></li>
                        </ul>
                    </div>
                </div><!-- row.box -->
            </div><!-- col.mid -->
        </div><!-- row.max-height -->
    </div><!-- block.absolute.info.z-2 -->
</section>

<section class=\"row boxes\">
    <div class=\"row content\">
        <div class=\"prime front-content\">
            <div class=\"row a\">";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepage_boxes", array()), "html", null, true));
        echo "</div>
        </div>
        <div class=\"aside aside-front\">
            <div class=\"box\">
                <div class=\"heading\"><h4>Recent News</h4></div>
                <div class=\"data\">";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepage_recent_news", array()), "html", null, true));
        echo "</div>
                <div class=\"click\"><a class=\"button\" href=\"http://publicsafety.princeton.edu/news\">View All News</a></div>
            </div><!-- row.box -->
        </div><!-- col.aside -->
    </div><!-- row.content -->
</section>
<div class=\"row entry\">";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  82 => 32,  74 => 27,  55 => 11,  43 => 1,);
    }
}
/* <section class="row hero relative header-images" >*/
/*    <div class="image-header">*/
/*         <img src="http://sdsdev.co/PTN8/downloads/1.jpg">*/
/*    </div>*/
/*     <div class="block absolute info z-2">*/
/*         <div class="row max-height">*/
/*             <div class="col mid">*/
/*                 <div class="call"><a href="tel:1-609-258-3333">Call PSAFE!</a></div>*/
/* */
/*                 <div class="row box">*/
/*                     <div class="row nav relative">{{ page.nav_box }}</div>*/
/*                     <div class="row social">*/
/*                         <ul>*/
/*                             <li><a target="_blank" href="https://www.facebook.com/pudps"><i class="icon-facebook"></i></a></li>*/
/*                             <li><a target="_blank" href="http://publicsafety.princeton.edu/news-feed"><i class="icon-rss"></i></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div><!-- row.box -->*/
/*             </div><!-- col.mid -->*/
/*         </div><!-- row.max-height -->*/
/*     </div><!-- block.absolute.info.z-2 -->*/
/* </section>*/
/* */
/* <section class="row boxes">*/
/*     <div class="row content">*/
/*         <div class="prime front-content">*/
/*             <div class="row a">{{ page.homepage_boxes }}</div>*/
/*         </div>*/
/*         <div class="aside aside-front">*/
/*             <div class="box">*/
/*                 <div class="heading"><h4>Recent News</h4></div>*/
/*                 <div class="data">{{ page.homepage_recent_news }}</div>*/
/*                 <div class="click"><a class="button" href="http://publicsafety.princeton.edu/news">View All News</a></div>*/
/*             </div><!-- row.box -->*/
/*         </div><!-- col.aside -->*/
/*     </div><!-- row.content -->*/
/* </section>*/
/* <div class="row entry">{{ page.content }}</div>*/
