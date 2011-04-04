<? include("__include.php"); ekg_header(); ?>

<p>
<strong>Released versions and daily snapshots</strong>
</p>

<table border="0">
<thead>
  <tr>
    <th scope="col"></th>
    <th scope="col" abbr="name">File Name</th>
    <th scope="col">md5</th>
    <th scope="col">Size</th>
    <th scope="col">Date</th>
  </tr>
</thead>
<tbody>
<?
// setlocale("LC_ALL", "pl_PL");

chdir("../");
$dir = opendir("./");

while ($file = @readdir($dir)) {
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

chdir("en/");
?>
</tbody>
</table>


<p>
The snapshots are <a href="http://pl.ekg2.org/script-logs"</a>generated</a> around 4 a.m. Polish time.
There is also an <a href="archive/">an archive of old snapshots</a>.
</p>

<p>
<strong>Repository Access</strong>
</p>

<p>
The official source code repository location is
<a href="https://github.com/leafnode/ekg2">https://github.com/leafnode/ekg2</a>.
Active development takes place in the <a
href="https://github.com/leafnode/ekg2/tree/master">master branch</a>, while
the <a href="https://github.com/leafnode/ekg2/tree/0.3.x">0.3.x branch</a> is
used for maintaining the current stable release.</p>

<ul id="download-svn">
  <li> You can retrieve a copy of the source code by running: </li>
  <li class="code">
  $ <strong>git clone git://github.com/leafnode/ekg2.git</strong>
  </li>

  <li> That follows the <em>master</em> branch by default. To get sources for the <em>stable</em> branch (currently <tt>0.3.x</tt>), additionally run: </li>
  <li class="code">
  $ <strong>git checkout 0.3.x</strong>
  </li>
  <li> in the created <tt>ekg2</tt> directory. </li>
</ul>

<p>
Apart from github there is an <a href="http://bugs.ekg2.org/projects/ekg2/repository">additional repository browser</a>.
</p>

<p>
<strong>Other UNIX clients:</strong>
</p>
<ul>
<li><a href="http://dev.null.pl/ekg/"><strong>EKG - Eksperymentalny Klient Gadu-Gadu</strong></a> </li>
<li><a href="http://www.gnugadu.org/"><strong>GNU Gadu</strong></a> (gtk+)</li> 
<li><a href="http://gaim.sourceforge.net/"><strong>Gaim</strong></a> (gtk+)</li>
</ul>

<? ekg_footer(); ?>
