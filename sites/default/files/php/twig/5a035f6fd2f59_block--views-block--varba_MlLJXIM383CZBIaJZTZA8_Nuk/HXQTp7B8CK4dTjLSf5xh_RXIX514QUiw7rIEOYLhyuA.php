<?php

/* modules/contrib/varbase_total_control/templates/block--views-block--varbase-google-analytics-summary-sessions-and-pageviews.html.twig */
class __TwigTemplate_c159f47d97571feff2df57b0ddc9156fed5d73d75b7dec662e1986d67ae24b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "if" => 41, "block" => 46);
        $filters = array("clean_class" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
                array()
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

        // line 29
        $context["classes"] = array(0 => "panel", 1 => "dashboard-block", 2 => "masonry-item", 3 => "masonry-item-2", 4 => "block", 5 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", array()))), 6 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["plugin_id"] ?? null))));
        // line 39
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 41
        if (($context["label"] ?? null)) {
            // line 42
            echo "    <h3 class=\"panel__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3><span class=\"action-links\"><a class=\"button button-action button--primary button--small\" href=\"https://analytics.google.com/analytics/web/\">Go to Google Analytics</a></span>
  ";
        }
        // line 44
        echo "  <div class=\"description\">Over the past 30 days.</div>
  ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "    <div class=\"panel__content\">
      ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/varbase_total_control/templates/block--views-block--varbase-google-analytics-summary-sessions-and-pageviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 48,  82 => 47,  79 => 46,  74 => 51,  72 => 46,  68 => 45,  65 => 44,  59 => 42,  57 => 41,  53 => 40,  48 => 39,  46 => 36,  45 => 35,  44 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/varbase_total_control/templates/block--views-block--varbase-google-analytics-summary-sessions-and-pageviews.html.twig", "/var/www/html/docroot/modules/contrib/varbase_total_control/templates/block--views-block--varbase-google-analytics-summary-sessions-and-pageviews.html.twig");
    }
}
