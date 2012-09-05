<?php

/* file.twig */
class __TwigTemplate_5da9c1728962b1be83b370439c48b0f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "GitList";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 6
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            ";
        // line 10
        $this->env->loadTemplate("branch_menu.twig")->display($context);
        // line 11
        echo "            ";
        $this->env->loadTemplate("menu.twig")->display($context);
        // line 12
        echo "        </div>
    </div>

    <ul class=\"breadcrumb\">
        ";
        // line 16
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                echo " class=\"active\"";
            }
            echo ">";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                echo "<a href=\"";
                if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
                echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
                if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "path"), "html", null, true);
                echo "\">";
                if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "dir"), "html", null, true);
                echo "</a>";
            }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "dir"), "html", null, true);
            }
            // line 18
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                // line 19
                echo "<span class=\"divider\">/</span></li>";
            } else {
                // line 21
                echo "</li>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ul>

    <div class=\"source-view\">
        <div class=\"source-header\">
            <div class=\"meta\"></div>

            <div class=\"btn-group pull-right\">
                <a href=\"";
        // line 31
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/raw/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "/";
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "\" class=\"btn btn-small\"><i class=\"icon-file\"></i> Raw</a>
                <a href=\"";
        // line 32
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/blame/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "/";
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "\" class=\"btn btn-small\"><i class=\"icon-bullhorn\"></i> Blame</a>
                <a href=\"";
        // line 33
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/commits/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "/";
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "\" class=\"btn btn-small\"><i class=\"icon-list-alt\"></i> History</a>
            </div>
        </div>
        ";
        // line 36
        if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
        if (($_fileType_ == "image")) {
            // line 37
            echo "        <center><img src=\"";
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
            echo twig_escape_filter($this->env, $_repo_, "html", null, true);
            echo "/raw/";
            if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
            echo twig_escape_filter($this->env, $_branch_, "html", null, true);
            echo "/";
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $_file_, "html", null, true);
            echo "\" alt=\"";
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $_file_, "html", null, true);
            echo "\" class=\"image-blob\" /></center>
        ";
        } else {
            // line 39
            echo "        <textarea id=\"sourcecode\" language=\"";
            if (isset($context["fileType"])) { $_fileType_ = $context["fileType"]; } else { $_fileType_ = null; }
            echo twig_escape_filter($this->env, $_fileType_, "html", null, true);
            echo "\" readonly=\"readonly\">";
            if (isset($context["blob"])) { $_blob_ = $context["blob"]; } else { $_blob_ = null; }
            echo twig_escape_filter($this->env, $_blob_, "html", null, true);
            echo "</textarea>
        ";
        }
        // line 41
        echo "    </div>

    <hr>

    ";
        // line 45
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 46,  209 => 45,  203 => 41,  193 => 39,  174 => 37,  171 => 36,  155 => 33,  141 => 32,  127 => 31,  118 => 24,  103 => 21,  100 => 19,  97 => 18,  73 => 17,  55 => 16,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
