<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_6266dac1563fe4c0d0cc1e1524831cfe2ecee862334ca7a2ac3d461cb04a9fda extends Twig_Template
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
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  26 => 3,  31 => 5,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 2,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 7,  27 => 4,  79 => 21,  72 => 13,  69 => 25,  47 => 18,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 39,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 16,  52 => 21,  50 => 14,  43 => 6,  41 => 5,  35 => 4,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 6,  57 => 12,  54 => 11,  51 => 9,  48 => 9,  45 => 17,  42 => 6,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
