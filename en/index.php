<? include("__include.php"); ekg_header(); ?>

    <img src="logs/logob.gif" width="120" height="90" class="right" alt="EKG2 logo big" />
    <h1> EKG2 </h1> 
    <h2> Multiplatform, multiprotocol, plugin-based instant messanger with (GTK2 GUI || console UI)!</h2>

<p>EKG2 is OpenSource <abbr title="instant messaging">IM</abbr> application for Unix systems (Linux, *BSD, SunOS, Solaris, MacOS, X, BeOS) available under the terms of <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.</p>
<p>EKG2 is plugin-based, because of this it can support many diffrent protocols. It can also support different GUIs! Below is a list of available plugins. </p>

<p><strong>Version 0.3.0 has been released! You can directly download <a href="http://pl.ekg2.org/ekg2-0.3.0.tar.gz">a tarball ready for building</a>. Other versions are in the <a href="download.php">download section</a>. </strong></p>

<p> Protocol plugins: </p>
<ul>
  <li> <strong> Jabber </strong>- (XMPP, gtalk and Tlen support), </li>
  <li> <strong> GG </strong> (gadu-gadu)	- (using libgadu, the most popular polish IM protocol), </li>
  <li> <strong> IRC </strong> 	- (mostly IRCnet oriented), </li>
</ul>
<p> GUI plugins: </p>
<ul>
  <li> GTK2 - under development, </li>
  <li> ncurses - primary ekg2 ui, console </li>
  <li> readline </li>
</ul>
<p> Logging facility: </p>
<ul>
  <li> <strong> logs </strong> - multi plugin, that allows logging in irssi like format, xml, simple and raw, </li>
  <li> <strong> logsqlite </strong> - logging in sqlite db file, </li>
  <li> <strong> logsoracle </strong> - logging in oracle db </li>
</ul>
<p> Script languages bindings: <strong> Python </strong>, <strong> Perl </strong>, <strong> Ruby </strong> (under development) </p>
<p> Other superb plugins: </p>
<ul>
  <li> <strong> dbus </strong> - basic dbus support (allows you creating superb now-playing ;) !), </li>
  <li> <strong> sim </strong> (using openssl) &amp; <strong> gpg </strong> &amp; <strong> rot </strong> ;) - these plugins allow encrypting supported protocols, </li>
  <li> <strong> xosd </strong> - on screen display, </li>
  <li> <strong> rc </strong> &amp; <strong> httprc_xajax </strong> - rc plugins allows remote control over ekg2, </li>
  <li> xmsg - simple messaging through filesystem (e.g. notifications from other apps), </li>
  <li> jogger - allows to manipulate <a href="http://wiki.jogger.pl/wiki/Bot">JoggerBot</a> via ekg2, </li>
  <li> mail - checking local maildir/mailbox for new messages, </li>
  <li> sms - sms sending, </li>
  <li> sniff - built-in sniffer for analyzing protocols </li>
</ul>
<p><strong>There are also few others not mentioned here!</strong></p>

<? ekg_footer(); ?>
