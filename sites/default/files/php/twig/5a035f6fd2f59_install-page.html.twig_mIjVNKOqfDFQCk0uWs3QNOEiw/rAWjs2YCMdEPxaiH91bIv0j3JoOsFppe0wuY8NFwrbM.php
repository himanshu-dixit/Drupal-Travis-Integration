<?php

/* profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig */
class __TwigTemplate_43d079d069dfe2209928bc8e832d6f9b7aa089afe4dc1a6cd8efdf5d1da5e445 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array("active_theme_path" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('active_theme_path')
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

        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if (($context["site_name"] ?? null)) {
            // line 16
            echo "      <h1 class=\"page-title\">
        ";
            // line 17
            if (($context["profile_logo"] ?? null)) {
                // line 18
                echo "          <img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_logo"] ?? null), "html", null, true));
                echo "\" class=\"installer-logo\">
        ";
            } else {
                // line 20
                echo "          <img src=\"../";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true));
                echo "/images/varbase-medium-logo.png\" class=\"installer-logo\">
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if (($context["site_version"] ?? null)) {
                // line 24
                echo "          <span class=\"site-version\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_version"] ?? null), "html", null, true));
                echo "</span>
        ";
            }
            // line 26
            echo "      </h1>
    ";
        }
        // line 28
        echo "  </header>

  ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 31
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
    </aside>";
            // line 34
            echo "  ";
        }
        // line 35
        echo "
  <main role=\"main\">
    ";
        // line 37
        if (($context["title"] ?? null)) {
            // line 38
            echo "      <h2>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h2>
    ";
        }
        // line 40
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
  </main>

  ";
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 45
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
    </aside>";
            // line 48
            echo "  ";
        }
        // line 49
        echo "
</div>";
        // line 51
        echo "
<footer class=\"installer-footer clearfix\">
      <div id=\"credit\" class=\"clearfix\">
        <div class=\"message\">Proudly built by</div>
        <div class=\"logo\">
          <a href=\"http://www.vardot.com\" target=\"_blank\">Vardot Company</a>
        </div>
      </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  133 => 49,  130 => 48,  126 => 46,  123 => 45,  121 => 44,  115 => 41,  110 => 40,  104 => 38,  102 => 37,  98 => 35,  95 => 34,  91 => 32,  88 => 31,  86 => 30,  82 => 28,  78 => 26,  72 => 24,  70 => 23,  67 => 22,  61 => 20,  55 => 18,  53 => 17,  50 => 16,  48 => 15,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig", "/var/www/html/docroot/profiles/varbase/themes/vartheme_admin/templates/install/install-page.html.twig");
    }
}
