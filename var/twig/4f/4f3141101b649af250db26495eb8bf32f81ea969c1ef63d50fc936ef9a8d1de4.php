<?php

/* Welcome/Index.twig */
class __TwigTemplate_4dd263cb0bd37205c93deedc421cd3ec884021a2ad44e7e3f44c8f4583c80cea extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>Welcome!</title>
    <style>
        html {
            background : #232323;
        }

        body {
            font  : 18px/1.5 sans-serif;
            color : #9e9e9e;
        }

        h1, h2 {
            line-height : 1.2;
            margin      : 0 0 .5em;
        }

        h1 {
            font-size : 36px;
        }

        h2 {
            font-size     : 21px;
            margin-bottom : 1em;
        }

        p {
            margin : 0 0 1em 0;
        }

        a {
            color : #0000F0;
        }

        a:hover {
            text-decoration : none;
        }

        code {
            background : #444444;
            max-width  : 100px;
            padding    : 2px 6px;
            word-wrap  : break-word;
            color      : #d8d8d8;
        }

        #wrapper {
            background : #1d1d1d;
            margin     : 1em auto;
            max-width  : 800px;
            width      : 95%;
        }

        #container {
            padding : 2em;
        }

        #welcome, #status {
            margin-bottom : 2em;
        }

        #welcome h1 span {
            display   : block;
            font-size : 75%;
        }

        #comment {
            font-size  : 14px;
            text-align : center;
            color      : #777777;
            background : #FEFFEA;
            padding    : 10px;
        }

        #comment p {
            margin-bottom : 0;
        }

        #icon-status, #icon-book {
            float        : left;
            height       : 64px;
            margin-right : 1em;
            margin-top   : -4px;
            width        : 64px;
        }

        #icon-book {
            display : none;
        }

        @media (min-width : 768px) {
            #wrapper {
                width  : 80%;
                margin : 2em auto;
            }

            #icon-book {
                display : inline-block;
            }

            #status a, #next a {
                display : block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity : 0;
                }
                100% {
                    opacity : 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity : 0;
                }
                100% {
                    opacity : 1;
                }
            }
            .sf-toolbar {
                opacity           : 0;
                -webkit-animation : fade-in 1s .2s forwards;
                animation         : fade-in 1s .2s forwards;
            }
        }
    </style>
    <script type=\"application/javascript\" src=\"assets/qatrix.js\"></script>
</head>
<body>
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>Welcome to</span> Eskirex ";
        // line 137
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "</h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\"
                     xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\"
                          fill=\"#759E1A\"/>
                </svg>

                Your application is now ready. You can start working on it at:<br>
                <code>";
        // line 149
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
        echo "</code>
            </p>
        </div>
    </div>
</div>
<script>
    var template = \"";
        // line 155
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "\";

    var data = {
        header: \"Header\",
        header2: \"Header2\",
        header3: \"Header3\"
    };

    \$append(\$(\"#container\"), \$template(template, data));
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Welcome/Index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 155,  172 => 149,  157 => 137,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Welcome/Index.twig", "C:\\Server\\htdocs\\skeleton\\app\\View\\Welcome\\Index.twig");
    }
}
