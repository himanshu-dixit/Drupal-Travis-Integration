<?php

/* profiles/varbase/themes/vartheme_admin/templates/system/html.html.twig */
class __TwigTemplate_2d8d23de8c842bc8756778fd20e64671f998c145ab8b8875a36b392dd5f5e54d extends Twig_Template
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
        $tags = array("set" => 27, "if" => 42);
        $filters = array("clean_class" => 29, "safe_join" => 38, "t" => 53);
        $functions = array("attach_library" => 43);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'safe_join', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 27
        $context["body_classes"] = array(0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : ("")));
        // line 34
        echo "<!DOCTYPE html>
<html";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    <title>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        if (($this->getAttribute(($context["html_attributes"] ?? null), "dir", array(), "array") == "rtl")) {
            // line 43
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("vartheme_admin/global-admin-styling-rtl"), "html", null, true));
        }
        // line 45
        echo "<js-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
  </head>
  <body";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 52
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/vartheme_admin/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  104 => 57,  100 => 56,  96 => 55,  91 => 53,  88 => 52,  84 => 47,  78 => 45,  74 => 43,  71 => 42,  69 => 41,  65 => 39,  61 => 38,  57 => 37,  52 => 35,  49 => 34,  47 => 31,  46 => 30,  45 => 29,  44 => 28,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/varbase/themes/vartheme_admin/templates/system/html.html.twig", "/var/www/html/docroot/profiles/varbase/themes/vartheme_admin/templates/system/html.html.twig");
    }
}
