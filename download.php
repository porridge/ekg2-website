<? include("__include.php"); ekg_header(); ?>

<p>
<strong>Wydane wersje oraz snapshoty</strong>
</p>

<p>
Poni�ej zamieszczono zar�wno wydane wersje programu, jak i snapshoty
zawieraj�ce codzienny zapis aktualnych prac nad programem.
</p>

<p>
<table border="0">
<thead>
  <tr>
    <th scope="col"></th>
    <th scope="col" abbr="name">Nazwa Pliku</th>
    <th scope="col">md5</th>
    <th scope="col" abbr="size">Rozmiar</th>
    <th scope="col">Data</th>
  </tr>
</thead>
<tbody>
<?
// setlocale("LC_ALL", "pl_PL");

$dir = opendir(".");
while ($file = readdir($dir)) {
	if (filetype($file) == "dir")
		continue;
	if (ereg("^ekg.*\.tar\.(gz|bz2|lzma)$", $file))
		$files[] = $file;
}

sort($files);
reset($files);

while (list($key, $file) = each($files)) {
	$stat = stat($file);
	$date = date("Y-m-d H:i", $stat[10]);
	$size = round($stat[7] / 1024) . "kB";
	echo '<tr><td><img src="images/document2.png" alt="document icon" width="16" height="16" /></td>';
	echo '<td><a href="http://pl.ekg2.org/'.$file.'">'.$file.'</a></td>';
	echo '<td class="smaller"><a href="http://pl.ekg2.org/'.$file.'.md5">(md5)</a></td>';
	echo '<td class="right">'.$size.'</td>';
	echo '<td>'.$date.'</td></tr>'."\n";
}

?>
</tbody>
</table>

<p>
Snapshoty s� <a href="script-logs">generowane</a> i umieszczane automagicznie oko�o godziny 4 rano.
Jest te� dost�pne <a href="archive/">archiwum starych snapshot�w</a>.
</p>

<p>
<strong>Dost�p do repozytorium</strong>
</p>

<p>
Oficjalna lokalizacja repozytorium kodu �r�d�owego to <a href="https://github.com/leafnode/ekg2">https://github.com/leafnode/ekg2</a>.
Aktywny rozw�j odbywa si� w <a
href="https://github.com/leafnode/ekg2/tree/master">ga��zi master</a>, a <a
href="https://github.com/leafnode/ekg2/tree/0.3.x">ga��� 0.3.x</a> s�u�y do
utrzymania obecnego stabilnego wydania.
</p>

<ul id="download-svn">
  <li>
    Aby pobra� kopi� kodu �r�d�owego:
  </li>
  <li class="code">
  $ <strong>git clone git://github.com/leafnode/ekg2.git</strong>
  </li>

  <li>
    Domy�lnie �ledzona jest ga��� <em>master</em>. Aby uzyska� �r�d�a
    <em>stabilnej</em> wersji (obecnie <tt>0.3.x</tt>), wykonaj dodatkowo:
  </li>
  <li class="code">
  $ <strong>git checkout 0.3.x</strong>
  </li>
  <li> w utworzonym katalogu <tt>ekg2</tt>.</li>
</ul>

<p>
Opr�cz githuba dost�pna jest te� <a
href="http://bugs.ekg2.org/projects/ekg2/repository">dodatkowa przegl�darka
repozytorium</a>.
</p>

<p>
<strong>Inne klienty unixowe:</strong>
</p>
<ul>
<li><a href="http://dev.null.pl/ekg/"><strong>EKG - Eksperymentalny Klient Gadu-Gadu</strong></a> </li>
<li><a href="http://www.gnugadu.org/"><strong>GNU Gadu</strong></a> (gtk+)</li> 
<li><a href="http://gaim.sourceforge.net/"><strong>Gaim</strong></a> (gtk+)</li>
</ul>

<? ekg_footer(); ?>
