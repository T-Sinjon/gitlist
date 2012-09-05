<?php

/* branch_menu.twig */
class __TwigTemplate_b657f1718a17348b2e613d357e038be5 extends Twig_Template
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
        // line 1
        echo "<div class=\"btn-group pull-left space-right\">
    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">browsing: <strong>";
        // line 2
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "</strong> <span class=\"caret\"></span></button>
    <ul class=\"dropdown-menu\">
    <li class=\"dropdown-header\">Branches</li>
    ";
        // line 5
        if (isset($context["branches"])) { $_branches_ = $context["branches"]; } else { $_branches_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_branches_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <li><a href=\"";
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
            echo twig_escape_filter($this->env, $_repo_, "html", null, true);
            echo "/tree/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $_item_, "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $_item_, "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "    ";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 9
            echo "    <li class=\"dropdown-header\">Tags</li>
    ";
            // line 10
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "        <li><a href=\"";
                if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
                echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
                echo "/";
                if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
                echo twig_escape_filter($this->env, $_repo_, "html", null, true);
                echo "/tree/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $_item_, "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $_item_, "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "branch_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  82 => 13,  63 => 11,  58 => 10,  51 => 8,  32 => 6,  20 => 2,  17 => 1,  248 => 64,  246 => 63,  241 => 60,  234 => 57,  228 => 55,  224 => 53,  221 => 52,  217 => 50,  203 => 47,  198 => 46,  173 => 45,  170 => 44,  164 => 43,  147 => 38,  144 => 37,  141 => 36,  118 => 24,  103 => 21,  100 => 19,  97 => 18,  73 => 17,  55 => 9,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  27 => 5,);
    }
}
