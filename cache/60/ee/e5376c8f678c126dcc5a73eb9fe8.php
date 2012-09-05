<?php

/* stats.twig */
class __TwigTemplate_60eee5376c8f678c126dcc5a73eb9fe8 extends Twig_Template
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
        <li>Statistics</li>
    </ul>

    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th width=\"30%\">File extensions (";
        // line 23
        if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_stats_, "extensions")), "html", null, true);
        echo ")</th>
                <th width=\"40%\">Authors (";
        // line 24
        if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_authors_), "html", null, true);
        echo ")</th>
                <th width=\"30%\">Other</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                    ";
        // line 32
        if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_stats_, "extensions"));
        foreach ($context['_seq'] as $context["ext"] => $context["amount"]) {
            // line 33
            echo "                        <li><strong>";
            if (isset($context["ext"])) { $_ext_ = $context["ext"]; } else { $_ext_ = null; }
            echo twig_escape_filter($this->env, $_ext_, "html", null, true);
            echo "</strong>: ";
            if (isset($context["amount"])) { $_amount_ = $context["amount"]; } else { $_amount_ = null; }
            echo twig_escape_filter($this->env, $_amount_, "html", null, true);
            echo " files</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ext'], $context['amount'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "                    </ul>
                </td>
                <td>
                    <ul>
                    ";
        // line 39
        if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_authors_);
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 40
            echo "                        <li><strong><a href=\"mailto:";
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_author_, "email"), "html", null, true);
            echo "\">";
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_author_, "name"), "html", null, true);
            echo "</a></strong>: ";
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_author_, "commits"), "html", null, true);
            echo " commits</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "                    </ul>
                </td>
                <td>
                    <p>
                        <strong>Total files:</strong> ";
        // line 46
        if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "files"), "html", null, true);
        echo "
                    </p>

                    <p>
                        <strong>Total bytes:</strong> ";
        // line 50
        if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "size"), "html", null, true);
        echo " bytes (";
        if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($_stats_, "size") / 1024) / 1024)), "html", null, true);
        echo " MB)
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <hr>

    ";
        // line 59
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "stats.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  164 => 59,  148 => 50,  140 => 46,  134 => 42,  118 => 40,  113 => 39,  107 => 35,  94 => 33,  89 => 32,  77 => 24,  72 => 23,  55 => 16,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
