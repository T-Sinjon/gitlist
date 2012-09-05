<?php

/* menu.twig */
class __TwigTemplate_b0ea42917b332fb5aafe06e70b8096ef extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
    <li";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ == "files")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/tree/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "\">Files</a></li>
    <li";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ == "commits")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/commits/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "\">Commits</a></li>
    <li";
        // line 4
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($_page_ == "stats")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/stats/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "\">Stats</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  85 => 14,  82 => 13,  63 => 11,  58 => 10,  51 => 8,  32 => 6,  20 => 2,  17 => 1,  248 => 64,  246 => 63,  241 => 60,  234 => 57,  228 => 55,  224 => 53,  221 => 52,  217 => 50,  203 => 47,  198 => 46,  173 => 45,  170 => 44,  164 => 43,  147 => 38,  144 => 37,  141 => 36,  118 => 24,  103 => 21,  100 => 19,  97 => 18,  73 => 17,  55 => 9,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 3,  33 => 4,  27 => 5,);
    }
}
