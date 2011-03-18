<? include("__include.php"); ekg_header(); ?>

<?
function build_ChangeLog()
{
	$ul = 0;
	$li = 0;
	$count = 0;

	$in = fopen("tmp/ChangeLog", "r");
	$out = fopen("tmp/ChangeLog.html", "w");

	while (!feof($in)) {
		$buf = chop(fgets($in, 4096));
		$buf = htmlspecialchars($buf, ENT_NOQUOTES);
		$buf = preg_replace("/\@/", "-at-", $buf);

		if (preg_match("/^\$Id/", $buf)) {
			if ($ul)
				fputs($out, "</ul>\n\n");
			fputs($out, "<font color=gray>$buf</font>\n");
			continue;
		}

		if ($count < 10) {
			if (preg_match("|^// (.*)|", $buf, $matches)) {
				$count++;
				if ($li)
				{
					fputs($out, "</li>\n");
					$li = 0;
				}
				if ($ul)
					fputs($out, "</ul>\n\n");
				if ($count == 10)
					continue;
				fputs($out, "<p>\n<b>" . $matches[1] . "</b> </p>\n<ul>\n");
				$ul = 1;
				continue;
			}

			if (preg_match("/^[[:space:]]*\* (.*)/", $buf, $matches)) {
				if ($li) fputs($out, "</li>\n");
				fputs($out, "<li>" . $matches[1] . "\n");
				$li = 1;
				continue;
			}
			if (preg_match("/^$/", $buf))
			{
				if ($li) fputs ($out, "<br />");
				continue;
			}

			fputs($out, "$buf\n");
		}
	}
}

if (filemtime("tmp/ChangeLog") > filemtime("tmp/ChangeLog.html"))
	build_ChangeLog();
?>

<? include("tmp/ChangeLog.html"); ?>

<p>
Tutaj można obejrzeć <a href="ChangeLog">cały  ChangeLog</a>.
</p>

<? ekg_footer(); ?>
