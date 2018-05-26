<?php

/* @Page:/var/www/html/grav/user/pages/02.typography */
class __TwigTemplate_0b283c126c4c3161f380877aff76e64d013202c0fbbc421608def8ae49bdf3af extends Twig_Template
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
        echo "<div class=\"notices yellow\">
<p>Details on the full capabilities of Spectre.css can be found in the <a href=\"https://picturepan2.github.io/spectre/elements.html\">Official Spectre Documentation</a></p>
</div>
<p>The <a href=\"https://github.com/getgrav/grav-theme-quark\">Quark theme</a> is the new default theme for Grav built with <a href=\"https://picturepan2.github.io/spectre/\">Spectre.css</a> the lightweight, responsive and modern CSS framework. Spectre provides  basic styles for typography, elements, and a responsive layout system that utilizes best practices and consistent language design.</p>
<h3>Headings</h3>
<h1>H1 Heading <code>40px</code></h1>
<h2>H2 Heading <code>32px</code></h2>
<h3>H3 Heading <code>28px</code></h3>
<h4>H4 Heading <code>24px</code></h4>
<h5>H5 Heading <code>20px</code></h5>
<h6>H6 Heading <code>16px</code></h6>
<pre><code class=\"language-html\"># H1 Heading
# H1 Heading `40px`&lt;/small&gt;`

&lt;span class=\"h1\"&gt;H1 Heading&lt;/span&gt;</code></pre>
<h3>Paragraphs</h3>
<p>Lorem ipsum dolor sit amet, consectetur <a href=\"/grav/typography\">adipiscing elit. Praesent risus leo, dictum in vehicula sit amet</a>, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
<p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
<h3>Markdown Semantic Text Elements</h3>
<p><strong>Bold</strong> <code>**Bold**</code></p>
<p><em>Italic</em> <code>_Italic_</code></p>
<p><del>Deleted</del> <code>~~Deleted~~</code></p>
<p><code>Inline Code</code> <code>`Inline Code`</code></p>
<h3>HTML Semantic Text Elements</h3>
<p><abbr>I18N</abbr> <code>&lt;abbr&gt;</code></p>
<p><cite>Citation</cite> <code>&lt;cite&gt;</code></p>
<p><kbd>Ctrl + S</kbd> <code>&lt;kbd&gt;</code></p>
<p>Text<sup>Superscripted</sup> <code>&lt;sup&gt;</code></p>
<p>Text<sub>Subscxripted</sub> <code>&lt;sub&gt;</code></p>
<p><u>Underlined</u> <code>&lt;u&gt;</code></p>
<p><mark>Highlighted</mark> <code>&lt;mark&gt;</code></p>
<p><time>20:14</time> <code>&lt;time&gt;</code></p>
<p><var>x = y + 2</var> <code>&lt;var&gt;</code></p>
<h3>Blockquote</h3>
<blockquote>
<p>The advance of technology is based on making it fit in so that you don't really even notice it,
so it's part of everyday life.</p>
<p><cite>- Bill Gates</cite></p>
</blockquote>
<pre><code class=\"language-markdown\">&gt; The advance of technology is based on making it fit in so that you don't really even notice it,
&gt; so it's part of everyday life.
&gt;
&gt; &lt;cite&gt;- Bill Gates&lt;/cite&gt;</code></pre>
<h3>Unordered List</h3>
<ul>
<li>list item 1</li>
<li>list item 2
<ul>
<li>list item 2.1</li>
<li>list item 2.2</li>
<li>list item 2.3</li>
</ul></li>
<li>list item 3</li>
</ul>
<pre><code class=\"language-markdown\">* list item 1
* list item 2
    * list item 2.1
    * list item 2.2
    * list item 2.3
* list item 3</code></pre>
<h3>Ordered List</h3>
<ol>
<li>list item 1</li>
<li>list item 2
<ol>
<li>list item 2.1</li>
<li>list item 2.2</li>
<li>list item 2.3</li>
</ol></li>
<li>list item 3</li>
</ol>
<pre><code class=\"language-markdown\">1. list item 1
1. list item 2
    1. list item 2.1
    1. list item 2.2
    1. list item 2.3
1. list item 3</code></pre>
<h3>Table</h3>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Name</th>
<th style=\"text-align: center;\">Genre</th>
<th style=\"text-align: right;\">Release date</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\">The Shawshank Redemption</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">14 October 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">The Godfather</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">24 March 1972</td>
</tr>
<tr>
<td style=\"text-align: left;\">Schindler's List</td>
<td style=\"text-align: center;\">Biography, Drama, History</td>
<td style=\"text-align: right;\">4 February 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">Se7en</td>
<td style=\"text-align: center;\">Crime, Drama, Mystery</td>
<td style=\"text-align: right;\">22 September 1995</td>
</tr>
</tbody>
</table>
<pre><code class=\"language-markdown\">| Name                        | Genre                         | Release date         |
| :-------------------------- | :---------------------------: | -------------------: |
| The Shawshank Redemption    | Crime, Drama                  | 14 October 1994      |
| The Godfather               | Crime, Drama                  | 24 March 1972        |
| Schindler's List            | Biography, Drama, History     | 4 February 1994      |
| Se7en                       | Crime, Drama, Mystery         | 22 September 1995    |</code></pre>
<h3>Notices</h3>
<p>The notices styles are actually provided by the <code>markdown-notices</code> plugin but are useful enough to include here:</p>
<div class=\"notices yellow\">
<p>This is a warning notification</p>
</div>
<div class=\"notices red\">
<p>This is a error notification</p>
</div>
<div class=\"notices blue\">
<p>This is a default notification</p>
</div>
<div class=\"notices green\">
<p>This is a success notification</p>
</div>
<pre><code class=\"language-markdown\">! This is a warning notification

!! This is a error notification

!!! This is a default notification

!!!! This is a success notification</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/02.typography";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"notices yellow\">
<p>Details on the full capabilities of Spectre.css can be found in the <a href=\"https://picturepan2.github.io/spectre/elements.html\">Official Spectre Documentation</a></p>
</div>
<p>The <a href=\"https://github.com/getgrav/grav-theme-quark\">Quark theme</a> is the new default theme for Grav built with <a href=\"https://picturepan2.github.io/spectre/\">Spectre.css</a> the lightweight, responsive and modern CSS framework. Spectre provides  basic styles for typography, elements, and a responsive layout system that utilizes best practices and consistent language design.</p>
<h3>Headings</h3>
<h1>H1 Heading <code>40px</code></h1>
<h2>H2 Heading <code>32px</code></h2>
<h3>H3 Heading <code>28px</code></h3>
<h4>H4 Heading <code>24px</code></h4>
<h5>H5 Heading <code>20px</code></h5>
<h6>H6 Heading <code>16px</code></h6>
<pre><code class=\"language-html\"># H1 Heading
# H1 Heading `40px`&lt;/small&gt;`

&lt;span class=\"h1\"&gt;H1 Heading&lt;/span&gt;</code></pre>
<h3>Paragraphs</h3>
<p>Lorem ipsum dolor sit amet, consectetur <a href=\"/grav/typography\">adipiscing elit. Praesent risus leo, dictum in vehicula sit amet</a>, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
<p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
<h3>Markdown Semantic Text Elements</h3>
<p><strong>Bold</strong> <code>**Bold**</code></p>
<p><em>Italic</em> <code>_Italic_</code></p>
<p><del>Deleted</del> <code>~~Deleted~~</code></p>
<p><code>Inline Code</code> <code>`Inline Code`</code></p>
<h3>HTML Semantic Text Elements</h3>
<p><abbr>I18N</abbr> <code>&lt;abbr&gt;</code></p>
<p><cite>Citation</cite> <code>&lt;cite&gt;</code></p>
<p><kbd>Ctrl + S</kbd> <code>&lt;kbd&gt;</code></p>
<p>Text<sup>Superscripted</sup> <code>&lt;sup&gt;</code></p>
<p>Text<sub>Subscxripted</sub> <code>&lt;sub&gt;</code></p>
<p><u>Underlined</u> <code>&lt;u&gt;</code></p>
<p><mark>Highlighted</mark> <code>&lt;mark&gt;</code></p>
<p><time>20:14</time> <code>&lt;time&gt;</code></p>
<p><var>x = y + 2</var> <code>&lt;var&gt;</code></p>
<h3>Blockquote</h3>
<blockquote>
<p>The advance of technology is based on making it fit in so that you don't really even notice it,
so it's part of everyday life.</p>
<p><cite>- Bill Gates</cite></p>
</blockquote>
<pre><code class=\"language-markdown\">&gt; The advance of technology is based on making it fit in so that you don't really even notice it,
&gt; so it's part of everyday life.
&gt;
&gt; &lt;cite&gt;- Bill Gates&lt;/cite&gt;</code></pre>
<h3>Unordered List</h3>
<ul>
<li>list item 1</li>
<li>list item 2
<ul>
<li>list item 2.1</li>
<li>list item 2.2</li>
<li>list item 2.3</li>
</ul></li>
<li>list item 3</li>
</ul>
<pre><code class=\"language-markdown\">* list item 1
* list item 2
    * list item 2.1
    * list item 2.2
    * list item 2.3
* list item 3</code></pre>
<h3>Ordered List</h3>
<ol>
<li>list item 1</li>
<li>list item 2
<ol>
<li>list item 2.1</li>
<li>list item 2.2</li>
<li>list item 2.3</li>
</ol></li>
<li>list item 3</li>
</ol>
<pre><code class=\"language-markdown\">1. list item 1
1. list item 2
    1. list item 2.1
    1. list item 2.2
    1. list item 2.3
1. list item 3</code></pre>
<h3>Table</h3>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Name</th>
<th style=\"text-align: center;\">Genre</th>
<th style=\"text-align: right;\">Release date</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\">The Shawshank Redemption</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">14 October 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">The Godfather</td>
<td style=\"text-align: center;\">Crime, Drama</td>
<td style=\"text-align: right;\">24 March 1972</td>
</tr>
<tr>
<td style=\"text-align: left;\">Schindler's List</td>
<td style=\"text-align: center;\">Biography, Drama, History</td>
<td style=\"text-align: right;\">4 February 1994</td>
</tr>
<tr>
<td style=\"text-align: left;\">Se7en</td>
<td style=\"text-align: center;\">Crime, Drama, Mystery</td>
<td style=\"text-align: right;\">22 September 1995</td>
</tr>
</tbody>
</table>
<pre><code class=\"language-markdown\">| Name                        | Genre                         | Release date         |
| :-------------------------- | :---------------------------: | -------------------: |
| The Shawshank Redemption    | Crime, Drama                  | 14 October 1994      |
| The Godfather               | Crime, Drama                  | 24 March 1972        |
| Schindler's List            | Biography, Drama, History     | 4 February 1994      |
| Se7en                       | Crime, Drama, Mystery         | 22 September 1995    |</code></pre>
<h3>Notices</h3>
<p>The notices styles are actually provided by the <code>markdown-notices</code> plugin but are useful enough to include here:</p>
<div class=\"notices yellow\">
<p>This is a warning notification</p>
</div>
<div class=\"notices red\">
<p>This is a error notification</p>
</div>
<div class=\"notices blue\">
<p>This is a default notification</p>
</div>
<div class=\"notices green\">
<p>This is a success notification</p>
</div>
<pre><code class=\"language-markdown\">! This is a warning notification

!! This is a error notification

!!! This is a default notification

!!!! This is a success notification</code></pre>", "@Page:/var/www/html/grav/user/pages/02.typography", "");
    }
}