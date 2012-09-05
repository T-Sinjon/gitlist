<?php

/* commits.twig */
class __TwigTemplate_5ca05dc7e33ccfd52ddb82b5afa1b2bd extends Twig_Template
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
        <li><a href=\"";
        // line 16
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "\">";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "</a> <span class=\"divider\">/</span></li>
        <li>Commit history</li>
    </ul>

    ";
        // line 20
        if (isset($context["commits"])) { $_commits_ = $context["commits"]; } else { $_commits_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_commits_);
        foreach ($context['_seq'] as $context["date"] => $context["commit"]) {
            // line 21
            echo "    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th colspan=\"3\">";
            // line 24
            if (isset($context["date"])) { $_date_ = $context["date"]; } else { $_date_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_date_, "F j, Y"), "html", null, true);
            echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 28
            if (isset($context["commit"])) { $_commit_ = $context["commit"]; } else { $_commit_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_commit_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "            <tr>
                <td width=\"5%\"><img src=\"http://gravatar.com/avatar/";
                // line 30
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, md5($this->getAttribute($this->getAttribute($_item_, "getAuthor"), "getEmail")), "html", null, true);
                echo "?s=40\" /></td>
                <td width=\"95%\">
                    <span class=\"pull-right\"><a class=\"btn btn-small\" href=\"";
                // line 32
                if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
                echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
                echo "/";
                if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
                echo twig_escape_filter($this->env, $_repo_, "html", null, true);
                echo "/commit/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getShortHash"), "html", null, true);
                echo "\"><i class=\"icon-list-alt\"></i> View ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getShortHash"), "html", null, true);
                echo "</a></span>
                    <h4>";
                // line 33
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getMessage"), "html", null, true);
                echo "</h4>
                    <span><a href=\"mailto:";
                // line 34
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "getAuthor"), "getEmail"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "getAuthor"), "getName"), "html", null, true);
                echo "</a> authored in ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "getDate"), "d/m/Y \\a\\t H:i:s"), "html", null, true);
                echo "</span>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "        </tbody>
    </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['commit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "
    <ul class=\"pager\">
        ";
        // line 43
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if (($this->getAttribute($_pager_, "current") != 0)) {
            // line 44
            echo "        <li class=\"previous\">
            <a href=\"?page=";
            // line 45
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "previous"), "html", null, true);
            echo "\">&larr; Newer</a>
        </li>
        ";
        }
        // line 48
        echo "        ";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if (($this->getAttribute($_pager_, "current") != $this->getAttribute($_pager_, "last"))) {
            // line 49
            echo "        <li class=\"next\">
            <a href=\"?page=";
            // line 50
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "next"), "html", null, true);
            echo "\">Older &rarr;</a>
        </li>
        ";
        }
        // line 53
        echo "    </ul>

    <hr>

    ";
        // line 57
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 58
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "commits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  182 => 57,  176 => 53,  169 => 50,  166 => 49,  162 => 48,  155 => 45,  152 => 44,  149 => 43,  145 => 41,  137 => 38,  120 => 34,  115 => 33,  101 => 32,  95 => 30,  92 => 29,  87 => 28,  79 => 24,  74 => 21,  69 => 20,  55 => 16,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
