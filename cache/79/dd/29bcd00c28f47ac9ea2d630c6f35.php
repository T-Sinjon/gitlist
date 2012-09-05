<?php

/* index.twig */
class __TwigTemplate_79dd29bcd00c28f47ac9ea2d630c6f35 extends Twig_Template
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

    ";
        // line 9
        if (isset($context["repositories"])) { $_repositories_ = $context["repositories"]; } else { $_repositories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_repositories_);
        foreach ($context['_seq'] as $context["_key"] => $context["repository"]) {
            // line 10
            echo "    <div class=\"repository\">
        <div class=\"repository-header\">
            <i class=\"icon-folder-open icon-spaced\"></i> <a href=\"";
            // line 12
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repository"])) { $_repository_ = $context["repository"]; } else { $_repository_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_repository_, "name"), "html", null, true);
            echo "\">";
            if (isset($context["repository"])) { $_repository_ = $context["repository"]; } else { $_repository_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_repository_, "name"), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 13
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repository"])) { $_repository_ = $context["repository"]; } else { $_repository_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_repository_, "name"), "html", null, true);
            echo "/master/rss/\"><i class=\"rss pull-right\"></i></a>
        </div>
        <div class=\"repository-body\">
            <p>";
            // line 16
            if (isset($context["repository"])) { $_repository_ = $context["repository"]; } else { $_repository_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_repository_, "description"), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repository'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
    <hr>

    ";
        // line 23
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  89 => 23,  84 => 20,  73 => 16,  63 => 13,  52 => 12,  48 => 10,  43 => 9,  38 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
