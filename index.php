<? include("__include.php"); ekg_header(); ?>

    <img src="logs/logob.gif" width="120" height="90" class="right" alt="EKG2 logo big" />
    <h1> EKG2 </h1> 
    <h2> Wieloplatformowy, <a href="http://pl.wikipedia.org/wiki/Multikomunikator_internetowy" class="wiki">multikomunikator</a>, z interfejsem u�ytkownika (graficznym opartym o GTK2 || konsolowym opartym o ncurses)!</h2>

<p>EKG2 jest wolnodost�pnym komunikatorem internetowym dla system�w unixowych (Linux, *BSD, SunOS, Solaris, MacOS, X, BeOS) dost�pnym na licencji <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.</p>
<p>EKG2 jest oparty na wtyczkach, dzi�ki temu, mo�e obs�ugiwa� wiele r�nych protoko��w. Dzi�ki temu, mo�e r�wnie� obs�ugiwa� r�ne interfejsy u�ytkownika! Poni�ej znajduje si� lista dost�pnych plugin�w! </p>

<p><strong>Zosta�a wydana wersja 0.3.1! Pobierz <a href="ekg2-0.3.1.tar.gz">gotow� do kompilacji paczk�</a>. Inne wersje &mdash; w sekcji <a href="download.php">download</a>. </strong></p>

<p> Wtyczki protoko��w: </p>
<ul>
  <li> <strong> Jabber </strong>		- (wsparcie dla XMPP, gtalka oraz Tlena), [protok� mo�e by� szyfrowany przy u�yciu gpg]</li>
  <li> <strong> GG </strong> (gadu-gadu)	- (poprzez libgadu), [protok� mo�e by� szyfrowany z u�yciem wtyczki sim] </li>
  <li> <strong> IRC </strong> 			- (z nastawieniem g��wnie na IRCnet), [protok� mo�e by� szyfrowany wtyczk� rot ;)]</li>
</ul>
<p> Wtyczki interfejsu u�ytkownika: </p>
<ul>
  <li> GTK2 					- w budowie, </li>
  <li> ncurses 					- aktualnie g��wny (konsolowy) interfejs ekg2, </li>
  <li> readline 				</li>
</ul>
<p> Wtyczki do logowania: </p>
<ul>
  <li> <strong> logs </strong> 			- wtyczka pozwala na logowanie w wielu formatach: irssi-like, xml, simple oraz raw, </li>
  <li> <strong> logsqlite </strong> 		- logowanie do bazy danych sqlite w pliku, </li>
  <li> <strong> logsoracle </strong> 		- logowanie do bazy danych Oracle.  </li>
</ul>
<p> Bindingi do j�zyk�w skryptowych: <strong> Python </strong>, <strong> Perl </strong>, <strong> Ruby </strong> (ostatni w budowie) </p>
<p> Inne niesamowite pluginy: </p>
<ul>
  <li> <strong> dbus </strong> 			- podstawowa obs�uga dbus'a (pozwala na tworzenie w prosty spos�b wspania�ych skrypt�w now-playing ;) !), </li>
  <li> <strong> sim </strong> (using openssl) &amp; <strong> gpg </strong> &amp; <strong> rot </strong> ;) - te wtyczki pozwalaj� na szyfrowanie wspieranych przez ekg2 protoko��w, </li>
  <li> <strong> xosd </strong> 			- pozwala na wy�wietlanie wiadomo�ci na ekranie (e.g. gdy kto� do nas pisze, lub zmieni� stan), </li>
  <li> <strong> rc </strong> &amp; <strong> httprc_xajax </strong> - wtyczki rc (remote control) pozwalaj� na zdalne sterowanie klientem ekg2, </li>
  <li> xmsg					- proste przesy�anie wiadomo�ci za po�rednictwem systemu plik�w (np. powiadomienia od aplikacji), </li>
  <li> jogger 					- interfejs do <a href="http://wiki.jogger.pl/wiki/Bot">Jogger Bota</a> poprzez ekg2, </li>
  <li> mail 					- sprawdzanie lokalnych plik�w/katalog�w z poczt� i powiadamianie o nowych wiadomo�ciach, </li>
  <li> sms 					- wysy�anie sms�w, </li>
  <li> sniff 					- wbudowany sniffer umo�liwiaj�cy analizowanie protoko��w. </li>
</ul>
<p><strong>Istnieje tak�e kilka innych wtyczek nie wymienionych tutaj!</strong></p>

<? ekg_footer(); ?>
