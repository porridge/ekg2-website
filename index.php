<? include("__include.php"); ekg_header(); ?>

    <img src="logs/logob.gif" width="120" height="90" class="right" alt="EKG2 logo big" />
    <h1> EKG2 </h1> 
    <h2> Wieloplatformowy, <a href="http://pl.wikipedia.org/wiki/Multikomunikator_internetowy" class="wiki">multikomunikator</a>, z interfejsem u¿ytkownika (graficznym opartym o GTK2 || konsolowym opartym o ncurses)!</h2>

<p>EKG2 jest wolnodostêpnym komunikatorem internetowym dla systemów unixowych (Linux, *BSD, SunOS, Solaris, MacOS, X, BeOS) dostêpnym na licencji <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.</p>
<p>EKG2 jest oparty na wtyczkach, dziêki temu, mo¿e obs³ugiwaæ wiele ró¿nych protoko³ów. Dziêki temu, mo¿e równie¿ obs³ugiwaæ ró¿ne interfejsy u¿ytkownika! Poni¿ej znajduje siê lista dostêpnych pluginów! </p>

<p><strong>Zosta³a wydana wersja 0.3.1! Pobierz <a href="ekg2-0.3.1.tar.gz">gotow± do kompilacji paczkê</a>. Inne wersje &mdash; w sekcji <a href="download.php">download</a>. </strong></p>

<p> Wtyczki protoko³ów: </p>
<ul>
  <li> <strong> Jabber </strong>		- (wsparcie dla XMPP, gtalka oraz Tlena), [protokó³ mo¿e byæ szyfrowany przy u¿yciu gpg]</li>
  <li> <strong> GG </strong> (gadu-gadu)	- (poprzez libgadu), [protokó³ mo¿e byæ szyfrowany z u¿yciem wtyczki sim] </li>
  <li> <strong> IRC </strong> 			- (z nastawieniem g³ównie na IRCnet), [protokó³ mo¿e byæ szyfrowany wtyczk± rot ;)]</li>
</ul>
<p> Wtyczki interfejsu u¿ytkownika: </p>
<ul>
  <li> GTK2 					- w budowie, </li>
  <li> ncurses 					- aktualnie g³ówny (konsolowy) interfejs ekg2, </li>
  <li> readline 				</li>
</ul>
<p> Wtyczki do logowania: </p>
<ul>
  <li> <strong> logs </strong> 			- wtyczka pozwala na logowanie w wielu formatach: irssi-like, xml, simple oraz raw, </li>
  <li> <strong> logsqlite </strong> 		- logowanie do bazy danych sqlite w pliku, </li>
  <li> <strong> logsoracle </strong> 		- logowanie do bazy danych Oracle.  </li>
</ul>
<p> Bindingi do jêzyków skryptowych: <strong> Python </strong>, <strong> Perl </strong>, <strong> Ruby </strong> (ostatni w budowie) </p>
<p> Inne niesamowite pluginy: </p>
<ul>
  <li> <strong> dbus </strong> 			- podstawowa obs³uga dbus'a (pozwala na tworzenie w prosty sposób wspania³ych skryptów now-playing ;) !), </li>
  <li> <strong> sim </strong> (using openssl) &amp; <strong> gpg </strong> &amp; <strong> rot </strong> ;) - te wtyczki pozwalaj± na szyfrowanie wspieranych przez ekg2 protoko³ów, </li>
  <li> <strong> xosd </strong> 			- pozwala na wy¶wietlanie wiadomo¶ci na ekranie (e.g. gdy kto¶ do nas pisze, lub zmieni³ stan), </li>
  <li> <strong> rc </strong> &amp; <strong> httprc_xajax </strong> - wtyczki rc (remote control) pozwalaj± na zdalne sterowanie klientem ekg2, </li>
  <li> xmsg					- proste przesy³anie wiadomo¶ci za po¶rednictwem systemu plików (np. powiadomienia od aplikacji), </li>
  <li> jogger 					- interfejs do <a href="http://wiki.jogger.pl/wiki/Bot">Jogger Bota</a> poprzez ekg2, </li>
  <li> mail 					- sprawdzanie lokalnych plików/katalogów z poczt± i powiadamianie o nowych wiadomo¶ciach, </li>
  <li> sms 					- wysy³anie smsów, </li>
  <li> sniff 					- wbudowany sniffer umo¿liwiaj±cy analizowanie protoko³ów. </li>
</ul>
<p><strong>Istnieje tak¿e kilka innych wtyczek nie wymienionych tutaj!</strong></p>

<? ekg_footer(); ?>
