<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PHP: Syntaxe alternative - Manual </title>

 <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/fr/control-structures.alternative-syntax.php">
 <link rel="shorturl" href="https://www.php.net/alternative-syntax">
 <link rel="alternate" href="https://www.php.net/alternative-syntax" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/fr/index.php">
 <link rel="index" href="https://www.php.net/manual/fr/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/fr/control-structures.elseif.php">
 <link rel="next" href="https://www.php.net/manual/fr/control-structures.while.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.alternative-syntax.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.alternative-syntax.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.alternative-syntax.php" hreflang="zh">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.alternative-syntax.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.alternative-syntax.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.alternative-syntax.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/ro/control-structures.alternative-syntax.php" hreflang="ro">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.alternative-syntax.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.alternative-syntax.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.alternative-syntax.php" hreflang="tr">

<link rel="stylesheet" type="text/css" href="/cached.php?t=1539771603&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1539765004&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1606338002&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1627831203&amp;f=/styles/theme-medium.css" media="screen">

 <!--[if lte IE 7]>
 <link rel="stylesheet" type="text/css" href="https://www.php.net/styles/workarounds.ie7.css" media="screen">
 <![endif]-->

 <!--[if lte IE 8]>
 <script>
  window.brokenIE = true;
 </script>
 <![endif]-->

 <!--[if lte IE 9]>
 <link rel="stylesheet" type="text/css" href="https://www.php.net/styles/workarounds.ie9.css" media="screen">
 <![endif]-->

 <!--[if IE]>
 <script src="https://www.php.net/js/ext/html5.js"></script>
 <![endif]-->

 <base href="https://www.php.net/manual/fr/control-structures.alternative-syntax.php">


</head>
<body class="docs ">

<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="/" class="brand"><img src="/images/logos/php-logo.svg" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="/downloads">Downloads</a></li>
      <li class="active"><a href="/docs.php">Documentation</a></li>
      <li class=""><a href="/get-involved" >Get Involved</a></li>
      <li class=""><a href="/support">Help</a></li>
      <li class="">
        <a href="/releases/8.0/index.php">
          <img src="/images/php8/logo_php8.svg" alt="php8" height="22" width="60">
        </a>
      </li>
    </ul>
    <form class="navbar-search" id="topsearch" action="/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#id2021-10-28-2'>PHP 8.1.0 RC 5 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="control-structures.while.php">
          while &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.elseif.php">
          &laquo; elseif/else if        </a>
      </div>
          <ul>
            <li><a href='index.php'>Manuel PHP</a></li>      <li><a href='langref.php'>R&eacute;f&eacute;rence du langage</a></li>      <li><a href='language.control-structures.php'>Les structures de contr&ocirc;le</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/control-structures.alternative-syntax.php'>English</option>
            <option value='pt_BR/control-structures.alternative-syntax.php'>Brazilian Portuguese</option>
            <option value='zh/control-structures.alternative-syntax.php'>Chinese (Simplified)</option>
            <option value='fr/control-structures.alternative-syntax.php' selected="selected">French</option>
            <option value='de/control-structures.alternative-syntax.php'>German</option>
            <option value='ja/control-structures.alternative-syntax.php'>Japanese</option>
            <option value='ro/control-structures.alternative-syntax.php'>Romanian</option>
            <option value='ru/control-structures.alternative-syntax.php'>Russian</option>
            <option value='es/control-structures.alternative-syntax.php'>Spanish</option>
            <option value='tr/control-structures.alternative-syntax.php'>Turkish</option>
            <option value="help-translate.php">Other</option>
          </select>
        </fieldset>
      </form>
    </div>
    <div class="edit-bug">
      <a href="https://github.com/php/doc-fr/blob/master/language/control-structures/alternative-syntax.xml">Submit a Pull Request</a>
      <a href="https://github.com/php/doc-fr/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.alternative-syntax%0A%0A---">Report a Bug</a>
    </div>
  </div><div id="control-structures.alternative-syntax" class="sect1">
 <h2 class="title">Syntaxe alternative</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="para">
  PHP propose une autre manière de rassembler des
  instructions à l&#039;intérieur d&#039;un bloc, pour les
  fonctions de contrôle <code class="literal">if</code>,
  <code class="literal">while</code>, <code class="literal">for</code>,
  <code class="literal">foreach</code> et <code class="literal">switch</code>.
  Dans chaque cas, le principe
  est de remplacer l&#039;accolade d&#039;ouverture par deux points (:)
  et l&#039;accolade de fermeture par, respectivement,
  <code class="literal">endif;</code>, <code class="literal">endwhile;</code>,
  <code class="literal">endfor;</code>, <code class="literal">endforeach;</code>, ou
  <code class="literal">endswitch;</code>.
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$a&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">):&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>A&nbsp;égal&nbsp;5<br /><span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">endif;&nbsp;</span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  Dans l&#039;exemple ci-dessus, le bloc HTML &quot;A égal 5&quot; est inclus
  à l&#039;intérieur d&#039;un <code class="literal">if</code> en
  utilisant cette nouvelle syntaxe. Ce code HTML ne sera
  affiché que si la variable <var class="varname">$a</var> est égale à 5.
 </p>
 <p class="para">
  Cette autre syntaxe fonctionne aussi avec le <code class="literal">else</code> et
  <code class="literal">elseif</code>. L&#039;exemple suivant montre une structure avec un
  <code class="literal">if</code>, un <code class="literal">elseif</code> et un
  <code class="literal">else</code> utilisant cette autre syntaxe :
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$a&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">):<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"a&nbsp;égale&nbsp;5"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"..."</span><span style="color: #007700">;<br />elseif&nbsp;(</span><span style="color: #0000BB">$a&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">):<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"a&nbsp;égale&nbsp;6"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"!!!"</span><span style="color: #007700">;<br />else:<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"a&nbsp;ne&nbsp;vaut&nbsp;ni&nbsp;5&nbsp;ni&nbsp;6"</span><span style="color: #007700">;<br />endif;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Vous ne pouvez pas utiliser différentes syntaxes dans le même bloc de contrôle.
  </p>
 </p></blockquote>
 <div class="warning"><strong class="warning">Avertissement</strong>
  <p class="para">
   Tout affichage (y compris d&#039;espaces) entre une structure
   <code class="literal">switch</code> et le premier <code class="literal">case</code>
   va produire une erreur de syntaxe. Par exemple, ceci n&#039;est pas valide :
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">switch&nbsp;(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">):&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&nbsp;&nbsp;&nbsp;...<br /><span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">endswitch&nbsp;</span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <p class="para">
   Alors que ceci est valide, vu que la dernière nouvelle ligne après
   la structure <code class="literal">switch</code> est considérée comme faisant
   partie de la balise de fin <code class="literal">?&gt;</code> et donc,
   rien n&#039;est affiché entre <code class="literal">switch</code> et <code class="literal">case</code> :
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">switch&nbsp;(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">):&nbsp;</span><span style="color: #0000BB">?&gt;<br />&lt;?php&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&nbsp;&nbsp;&nbsp;...<br /><span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">endswitch&nbsp;</span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>
 <p class="para">
  Voir aussi
  <a href="control-structures.while.php" class="link">while</a>,
  <a href="control-structures.for.php" class="link">for</a>, et <a href="control-structures.if.php" class="link">if</a> pour d&#039;autres exemples.
 </p>
</div>
<section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.alternative-syntax&amp;redirect=https://www.php.net/manual/fr/control-structures.alternative-syntax.php"><img src='/images/notes-add@2x.png' alt='add a note' width='12' height='12'> <small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Les structures de contr&ocirc;le</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.alternative-syntax.php" title="Syntaxe alternative">Syntaxe alternative</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/copyright.php">Copyright &copy; 2001-2021 The PHP Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
        <li><a href="https://github.com/php/web-php/blob/master/manual%2Ffr%2Fcontrol-structures.alternative-syntax.php">View Source</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
 <!-- External and third party libraries. -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" integrity="sha384-aBL3Lzi6c9LNDGvpHkZrrm3ZVsIwohDD7CDozL0pk8FwCrfmV7H9w8j3L7ikEv6h" crossorigin="anonymous"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/modernizr.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/hogan-2.0.0.min.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/typeahead.min.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/mousetrap.min.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/search.js"></script>
<script src="/cached.php?t=1607972402&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

</body>
</html>
