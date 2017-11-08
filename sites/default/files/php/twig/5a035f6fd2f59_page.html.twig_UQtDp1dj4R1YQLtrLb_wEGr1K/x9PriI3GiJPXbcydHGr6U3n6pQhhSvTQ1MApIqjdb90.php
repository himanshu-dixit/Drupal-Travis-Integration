<?php

/* profiles/varbase/themes/vartheme/templates/system/page.html.twig */
class __TwigTemplate_abcd70013ba313a98901d6aabab6eca764ff897109575208324db11370120996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'hero_slider' => array($this, 'block_hero_slider'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 62, "block" => 63);
        $filters = array("clean_class" => 68, "t" => 81);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 60
        $context["header_container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "header_container", array())) ? ("container-fluid header-margin") : ("container"));
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 63
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 101
        echo "
";
        // line 103
        echo "<div class=\"visible-print-block header-print page-header\">
  <div class=\"";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 108
        echo "        ";
        if (($context["logo_print"] ?? null)) {
            // line 109
            echo "          <img class=\"logo pull-left visible-print-inline-block\" src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo_print"] ?? null), "html", null, true));
            echo "\" />
        ";
        }
        // line 111
        echo "      </div>
    </div>
  </div>
</div>
        
";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "hero_slider", array())) {
            // line 118
            $this->displayBlock('hero_slider', $context, $blocks);
        }
        // line 124
        echo "
";
        // line 126
        $this->displayBlock('main', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 207
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 215
        echo "
";
    }

    // line 63
    public function block_navbar($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        // line 65
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 67
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 68
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["header_container"] ?? null))), 3 =>         // line 69
($context["header_container"] ?? null));
        // line 72
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 73
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["header_container"] ?? null)), "method")) {
            // line 74
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 76
        echo "      <div class=\"navbar-header\">
        ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 79
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 80
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 87
        echo "      </div>

      ";
        // line 90
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 91
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse navbar-right\">
          ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 95
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["header_container"] ?? null)), "method")) {
            // line 96
            echo "        </div>
      ";
        }
        // line 98
        echo "    </header>
  ";
    }

    // line 118
    public function block_hero_slider($context, array $blocks = array())
    {
        // line 119
        echo "  <div class=\"hero_slider\">
    ";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero_slider", array()), "html", null, true));
        echo "
  </div>
";
    }

    // line 126
    public function block_main($context, array $blocks = array())
    {
        // line 127
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 131
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 132
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 141
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 146
            echo "      ";
        }
        // line 147
        echo "
      ";
        // line 149
        echo "      ";
        // line 150
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 151
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 152
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 153
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 154
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 157
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 160
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 161
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 164
            echo "        ";
        }
        // line 165
        echo "
        ";
        // line 167
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 168
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 171
            echo "        ";
        }
        // line 172
        echo "
        ";
        // line 174
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 175
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 178
            echo "        ";
        }
        // line 179
        echo "
        ";
        // line 181
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 182
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 185
            echo "        ";
        }
        // line 186
        echo "
        ";
        // line 188
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 192
        echo "      </section>

      ";
        // line 195
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 196
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 201
            echo "      ";
        }
        // line 202
        echo "    </div>
  </div>
";
    }

    // line 132
    public function block_header($context, array $blocks = array())
    {
        // line 133
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 141
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 142
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 161
    public function block_highlighted($context, array $blocks = array())
    {
        // line 162
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 168
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 169
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 175
    public function block_action_links($context, array $blocks = array())
    {
        // line 176
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 182
    public function block_help($context, array $blocks = array())
    {
        // line 183
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 188
    public function block_content($context, array $blocks = array())
    {
        // line 189
        echo "          <a id=\"main-content\"></a>
          ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 196
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 197
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 198
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 207
    public function block_footer($context, array $blocks = array())
    {
        // line 208
        echo "    <div class=\"footer-wrapper\">
      <footer class=\"footer ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
        ";
        // line 210
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      </footer>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/vartheme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 210,  418 => 209,  415 => 208,  412 => 207,  405 => 198,  402 => 197,  399 => 196,  393 => 190,  390 => 189,  387 => 188,  380 => 183,  377 => 182,  370 => 176,  367 => 175,  360 => 169,  357 => 168,  350 => 162,  347 => 161,  340 => 143,  337 => 142,  334 => 141,  327 => 134,  324 => 133,  321 => 132,  315 => 202,  312 => 201,  309 => 196,  306 => 195,  302 => 192,  299 => 188,  296 => 186,  293 => 185,  290 => 182,  287 => 181,  284 => 179,  281 => 178,  278 => 175,  275 => 174,  272 => 172,  269 => 171,  266 => 168,  263 => 167,  260 => 165,  257 => 164,  254 => 161,  251 => 160,  245 => 157,  243 => 154,  242 => 153,  241 => 152,  240 => 151,  239 => 150,  237 => 149,  234 => 147,  231 => 146,  228 => 141,  225 => 140,  222 => 138,  219 => 137,  216 => 132,  213 => 131,  206 => 127,  203 => 126,  196 => 120,  193 => 119,  190 => 118,  185 => 98,  181 => 96,  178 => 95,  172 => 92,  169 => 91,  166 => 90,  162 => 87,  153 => 81,  150 => 80,  147 => 79,  143 => 77,  140 => 76,  134 => 74,  132 => 73,  127 => 72,  125 => 69,  124 => 68,  123 => 67,  122 => 65,  120 => 64,  117 => 63,  112 => 215,  108 => 207,  106 => 206,  103 => 205,  101 => 126,  98 => 124,  95 => 118,  93 => 117,  86 => 111,  80 => 109,  77 => 108,  71 => 104,  68 => 103,  65 => 101,  61 => 63,  59 => 62,  57 => 60,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/varbase/themes/vartheme/templates/system/page.html.twig", "/var/www/html/docroot/profiles/varbase/themes/vartheme/templates/system/page.html.twig");
    }
}
