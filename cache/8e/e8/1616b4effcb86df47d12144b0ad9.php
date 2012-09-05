<?php

/* tree.twig */
class __TwigTemplate_8ee81616b4effcb86df47d12144b0ad9 extends Twig_Template
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
        echo "        <a href=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/";
        if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
        echo twig_escape_filter($this->env, $_repo_, "html", null, true);
        echo "/";
        if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
        echo twig_escape_filter($this->env, $_branch_, "html", null, true);
        echo "/rss/\"><i class=\"rss pull-right\"></i></a>
    </ul>

    <table class=\"tree\">
        <thead>
            <tr>
                <th width=\"80%\">name</th>
                <th width=\"10%\">mode</th>
                <th width=\"10%\">size</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        if (isset($context["parent"])) { $_parent_ = $context["parent"]; } else { $_parent_ = null; }
        if ((!twig_test_empty($_parent_))) {
            // line 37
            echo "            <tr>
                <td><i class=\"icon-spaced\"></i> <a href=\"";
            // line 38
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
            echo twig_escape_filter($this->env, $_repo_, "html", null, true);
            echo "/tree/";
            if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
            echo twig_escape_filter($this->env, $_branch_, "html", null, true);
            if (isset($context["parent"])) { $_parent_ = $context["parent"]; } else { $_parent_ = null; }
            echo twig_escape_filter($this->env, $_parent_, "html", null, true);
            echo "\">..</a></td>
                <td></td>
                <td></td>
            </tr>
            ";
        }
        // line 43
        echo "            ";
        if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_files_);
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 44
            echo "            <tr>
                <td><i class=\"";
            // line 45
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo (((($this->getAttribute($_file_, "type") == "folder") || ($this->getAttribute($_file_, "type") == "symlink"))) ? ("icon-folder-open") : ("icon-file"));
            echo " icon-spaced\"></i> <a href=\"";
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/";
            if (isset($context["repo"])) { $_repo_ = $context["repo"]; } else { $_repo_ = null; }
            echo twig_escape_filter($this->env, $_repo_, "html", null, true);
            echo "/";
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo (((($this->getAttribute($_file_, "type") == "folder") || ($this->getAttribute($_file_, "type") == "symlink"))) ? ("tree") : ("blob"));
            echo "/";
            if (isset($context["branch"])) { $_branch_ = $context["branch"]; } else { $_branch_ = null; }
            echo twig_escape_filter($this->env, $_branch_, "html", null, true);
            echo "/";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, ((($this->getAttribute($_file_, "type") == "symlink")) ? ($this->getAttribute($_file_, "path")) : ($this->getAttribute($_file_, "name"))), "html", null, true);
            echo "\">";
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_file_, "name"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 46
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_file_, "mode"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if ($this->getAttribute($_file_, "size")) {
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($_file_, "size") / 1024)), "html", null, true);
                echo " kb";
            }
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "        </tbody>
    </table>
    ";
        // line 52
        if (isset($context["readme"])) { $_readme_ = $context["readme"]; } else { $_readme_ = null; }
        if ((!twig_test_empty($_readme_))) {
            // line 53
            echo "        <div class=\"readme-view\">
            <div class=\"readme-header\">
                <div class=\"meta\">";
            // line 55
            if (isset($context["readme"])) { $_readme_ = $context["readme"]; } else { $_readme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_readme_, "filename"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"readme-content\">";
            // line 57
            if (isset($context["readme"])) { $_readme_ = $context["readme"]; } else { $_readme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_readme_, "content"), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        // line 60
        echo "
    <hr>

    ";
        // line 63
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 64
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 64,  246 => 63,  241 => 60,  234 => 57,  228 => 55,  224 => 53,  221 => 52,  217 => 50,  203 => 47,  198 => 46,  173 => 45,  170 => 44,  164 => 43,  147 => 38,  144 => 37,  141 => 36,  118 => 24,  103 => 21,  100 => 19,  97 => 18,  73 => 17,  55 => 16,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
