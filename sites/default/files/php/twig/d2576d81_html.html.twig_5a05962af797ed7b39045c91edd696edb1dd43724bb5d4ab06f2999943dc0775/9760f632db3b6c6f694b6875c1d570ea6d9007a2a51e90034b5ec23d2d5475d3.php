<?php

/* themes/theme/templates/html.html.twig */
class __TwigTemplate_29193fa3204e9962d416f369e7824b6e2c4ff896804472f677f55270166f08ae extends Twig_Template
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
        $tags = array("set" => 48);
        $filters = array("clean_class" => 50, "raw" => 60, "safe_join" => 61, "t" => 78);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join', 't'),
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

        // line 48
        $context["body_classes"] = array(0 => ((        // line 49
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 51
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 52
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 53
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-is-" . $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array()))) : ("")));
        // line 56
        echo "
<!DOCTYPE html>
<html ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
  <body";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
  
\t<div id=\"fb-root\"></div>
\t<script>(function(d, s, id) {
\tvar js, fjs = d.getElementsByTagName(s)[0];
\tif (d.getElementById(id)) return;
\tjs = d.createElement(s); js.id = id;
\tjs.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=322102227936038\";
\tfjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));
\t</script>
  
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
\t
\t";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "alert_minor", array()), "html", null, true));
        echo "
    <header class=\"row\">
    \t<div class=\"row top\">
            <div class=\"row content\">
        \t<div class=\"logo left\"><a class=\"block\" href=\"http://sdsdev.co/PTN8\"><img class=\"img-block\" src=\"http://sdsdev.co/PTN8/";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/logo.png\"/></a></div>
                <div class=\"mobile right\"><a></a></div>
                <div class=\"options right\">
                    <div class=\"row nav-small\">";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_small", array()), "html", null, true));
        echo "</div>
                    <div class=\"row nav-medium\">";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_medium", array()), "html", null, true));
        echo "</div>
                    <!--<div class=\"row search relative\">
                        <input type=\"text\" placeholder=\"Search this website\">
                        <button type=\"submit\"><i class=\"icon-search\"></i></button>
                    </div>-->
\t\t\t\t\t<div class=\"row search relative\">
                        ";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_form_block"]) ? $context["search_form_block"] : null), "html", null, true));
        echo " 
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row bottom\">
            <section class=\"row mobile\">
                <div class=\"row content\">";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_mobile", array()), "html", null, true));
        echo "</div>
        \t</section>

        \t<div class=\"row tabs desktop\">
                <div class=\"row content\">";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "ptn_main", array()), "html", null, true));
        echo "</div>
            </div>

        \t<div class=\"row tabs mobile\">
                <div class=\"row content\">";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav_small", array()), "html", null, true));
        echo "</div>
            </div>
        </div>
    </header>

\t";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "alert_major", array()), "html", null, true));
        echo "
\t
\t<main>
    ";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
\t</main>

    <footer class=\"row\">
        <div class=\"row top\">
        \t<div class=\"row content\">
                <div class=\"row navigate\">
                    <div class=\"row a\">
                        <div class=\"c-4 numbers\">
                            <div class=\"row box\">";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "phone_numbers", array()), "html", null, true));
        echo "</div>
                        </div>
                        <div class=\"c-4 nav\">";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
        echo "</div>
                        <div class=\"c-4 nav\">";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
        echo "</div>
                    </div>
                    <div class=\"row b\">
                        <div class=\"c-4 nav\">";
        // line 136
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
        echo "</div>
                        <div class=\"c-4 nav\">";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
        echo "</div>
                        <div class=\"c-4 nav\">";
        // line 138
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_5", array()), "html", null, true));
        echo "</div>
                    </div><!-- row.b -->
                </div><!-- navigate -->
                <div class=\"row contact\">
                    <div class=\"social left\">
                        <div class=\"row heading\"><h4>Stay Connected</h4></div>
                        <div class=\"row data\">
                            <ul>
                            <li><a href=\"https://www.facebook.com/pudps\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a href=\"https://publicsafety.princeton.edu/news-feed\"><i class=\"icon-rss\"></i></a></li>
                            </ul>
                        </div>
    \t\t\t\t</div>
                    <div class=\"map left\">
                        <div class=\"row heading\"><h4>Visiting Public Safety</h4></div>
                        <div class=\"row data\">
                            <div class=\"col info\">
                                Department of Public Safety,<br/>
                                200 Elm Drive, Princeton, NJ 08544
                            </div>
                            <div class=\"col icon\"><a class=\"button grey\" href=\"http://publicsafety.princeton.edu/visitors/visiting-campus\"><i class=\"icon-map-marker\"></i></a></div>
                        </div>
                    </div>
                    <div class=\"feedback right\">
                        <div class=\"row heading\">&nbsp;</div>
                        <div class=\"row data\"><a class=\"button grey\" href=\"http://publicsafety.princeton.edu/forms/dps-feedback-form\">Send Us Feedback!</a></div>
                    </div>
                </div><!-- row.contact -->
            </div>
        </div><!-- top -->
        <div class=\"row bottom\">
        \t<div class=\"row content\">
            \t<div class=\"col logo\"><img class=\"img-block\" src=\"http://sdsdev.co/PTN8/themes/theme/images/footer_logo.png\"/></div>
                <div class=\"col mid copy\">©2013 The Trustees of <a target=\"_blank\" href=\"http://www.princeton.edu/main/administration/legal_compliance/copyright/\">Princeton University</a> · Princeton, New Jersey 08544 USA, Operator: (609) 258-3000 · <a target=\"_blank\" href=\"http://princeton.edu\">Copyright infringement</a> · <a target=\"_blank\" href=\"/forms/dps-feedback-form\">Website Feedback</a> · Last update: April 27th, 2016</div>
            </div>
        </div>
    </footer>
    <js-bottom-placeholder token=\"";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 175,  206 => 138,  202 => 137,  198 => 136,  192 => 133,  188 => 132,  183 => 130,  171 => 121,  167 => 120,  161 => 117,  153 => 112,  146 => 108,  139 => 104,  128 => 96,  119 => 90,  115 => 89,  109 => 86,  102 => 82,  97 => 80,  92 => 78,  76 => 65,  71 => 63,  67 => 62,  63 => 61,  59 => 60,  54 => 58,  50 => 56,  48 => 53,  47 => 52,  46 => 51,  45 => 50,  44 => 49,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display the basic html structure of a single*/
/*  * Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - $css: An array of CSS files for the current page.*/
/*  * - $language: (object) The language the site is being displayed in.*/
/*  *   $language->language contains its textual representation.*/
/*  *   $language->dir contains the language direction. It will either be 'ltr' or*/
/*  *   'rtl'.*/
/*  * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.*/
/*  * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.*/
/*  * - $head_title: A modified version of the page title, for use in the TITLE*/
/*  *   tag.*/
/*  * - $head_title_array: (array) An associative array containing the string parts*/
/*  *   that were used to generate the $head_title variable, already prepared to be*/
/*  *   output as TITLE tag. The key/value pairs may contain one or more of the*/
/*  *   following, depending on conditions:*/
/*  *   - title: The title of the current page, if any.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site, if any, and if there is no title.*/
/*  * - $head: Markup for the HEAD section (including meta tags, keyword tags, and*/
/*  *   so on).*/
/*  * - $styles: Style tags necessary to import all CSS files for the page.*/
/*  * - $scripts: Script tags necessary to load the JavaScript files and settings*/
/*  *   for the page.*/
/*  * - $page_top: Initial markup from any modules that have altered the*/
/*  *   page. This variable should always be output first, before all other dynamic*/
/*  *   content.*/
/*  * - $page: The rendered page content.*/
/*  * - $page_bottom: Final closing markup from any modules that have altered the*/
/*  *   page. This variable should always be output last, after all other dynamic*/
/*  *   content.*/
/*  * - $classes String of classes that can be used to style contextually through*/
/*  *   CSS.*/
/*  **/
/*  * @see bootstrap_preprocess_html()*/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_html()*/
/*  * @see template_process()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set body_classes = [*/
/*     logged_in ? 'user-logged-in',*/
/*     not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*     node_type ? 'page-node-type-' ~ node_type|clean_class,*/
/*     db_offline ? 'db-offline',*/
/*     theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,*/
/*   ]*/
/* %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*   */
/* 	<div id="fb-root"></div>*/
/* 	<script>(function(d, s, id) {*/
/* 	var js, fjs = d.getElementsByTagName(s)[0];*/
/* 	if (d.getElementById(id)) return;*/
/* 	js = d.createElement(s); js.id = id;*/
/* 	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=322102227936038";*/
/* 	fjs.parentNode.insertBefore(js, fjs);*/
/* 	}(document, 'script', 'facebook-jssdk'));*/
/* 	</script>*/
/*   */
/*     <a href="#main-content" class="visually-hidden focusable skip-link">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/* 	*/
/* 	{{ page.alert_minor }}*/
/*     <header class="row">*/
/*     	<div class="row top">*/
/*             <div class="row content">*/
/*         	<div class="logo left"><a class="block" href="http://sdsdev.co/PTN8"><img class="img-block" src="http://sdsdev.co/PTN8/{{ base_path ~ directory }}/images/logo.png"/></a></div>*/
/*                 <div class="mobile right"><a></a></div>*/
/*                 <div class="options right">*/
/*                     <div class="row nav-small">{{ page.nav_small }}</div>*/
/*                     <div class="row nav-medium">{{ page.nav_medium }}</div>*/
/*                     <!--<div class="row search relative">*/
/*                         <input type="text" placeholder="Search this website">*/
/*                         <button type="submit"><i class="icon-search"></i></button>*/
/*                     </div>-->*/
/* 					<div class="row search relative">*/
/*                         {{ search_form_block }} */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row bottom">*/
/*             <section class="row mobile">*/
/*                 <div class="row content">{{ page.nav_mobile }}</div>*/
/*         	</section>*/
/* */
/*         	<div class="row tabs desktop">*/
/*                 <div class="row content">{{ page.ptn_main }}</div>*/
/*             </div>*/
/* */
/*         	<div class="row tabs mobile">*/
/*                 <div class="row content">{{ page.nav_small }}</div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/* 	{{ page.alert_major }}*/
/* 	*/
/* 	<main>*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/* 	</main>*/
/* */
/*     <footer class="row">*/
/*         <div class="row top">*/
/*         	<div class="row content">*/
/*                 <div class="row navigate">*/
/*                     <div class="row a">*/
/*                         <div class="c-4 numbers">*/
/*                             <div class="row box">{{ page.phone_numbers }}</div>*/
/*                         </div>*/
/*                         <div class="c-4 nav">{{ page.footer_1 }}</div>*/
/*                         <div class="c-4 nav">{{ page.footer_2 }}</div>*/
/*                     </div>*/
/*                     <div class="row b">*/
/*                         <div class="c-4 nav">{{ page.footer_3 }}</div>*/
/*                         <div class="c-4 nav">{{ page.footer_4 }}</div>*/
/*                         <div class="c-4 nav">{{ page.footer_5 }}</div>*/
/*                     </div><!-- row.b -->*/
/*                 </div><!-- navigate -->*/
/*                 <div class="row contact">*/
/*                     <div class="social left">*/
/*                         <div class="row heading"><h4>Stay Connected</h4></div>*/
/*                         <div class="row data">*/
/*                             <ul>*/
/*                             <li><a href="https://www.facebook.com/pudps"><i class="icon-facebook"></i></a></li>*/
/*                             <li><a href="https://publicsafety.princeton.edu/news-feed"><i class="icon-rss"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*     				</div>*/
/*                     <div class="map left">*/
/*                         <div class="row heading"><h4>Visiting Public Safety</h4></div>*/
/*                         <div class="row data">*/
/*                             <div class="col info">*/
/*                                 Department of Public Safety,<br/>*/
/*                                 200 Elm Drive, Princeton, NJ 08544*/
/*                             </div>*/
/*                             <div class="col icon"><a class="button grey" href="http://publicsafety.princeton.edu/visitors/visiting-campus"><i class="icon-map-marker"></i></a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="feedback right">*/
/*                         <div class="row heading">&nbsp;</div>*/
/*                         <div class="row data"><a class="button grey" href="http://publicsafety.princeton.edu/forms/dps-feedback-form">Send Us Feedback!</a></div>*/
/*                     </div>*/
/*                 </div><!-- row.contact -->*/
/*             </div>*/
/*         </div><!-- top -->*/
/*         <div class="row bottom">*/
/*         	<div class="row content">*/
/*             	<div class="col logo"><img class="img-block" src="http://sdsdev.co/PTN8/themes/theme/images/footer_logo.png"/></div>*/
/*                 <div class="col mid copy">©2013 The Trustees of <a target="_blank" href="http://www.princeton.edu/main/administration/legal_compliance/copyright/">Princeton University</a> · Princeton, New Jersey 08544 USA, Operator: (609) 258-3000 · <a target="_blank" href="http://princeton.edu">Copyright infringement</a> · <a target="_blank" href="/forms/dps-feedback-form">Website Feedback</a> · Last update: April 27th, 2016</div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
