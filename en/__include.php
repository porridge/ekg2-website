<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>EKG2 :: <?

$ekg_tabs = array(
        "index.php" 		=> "about",
        "docs.php" 		=> "documentation",
//	"changelog.php" 	=> "changes",
        "download.php" 		=> "download",
	"screenshots.php" 	=> "screenshots",
	"authors.php" 		=> "authors",
        "contact.php" 		=> "contact",
//	"support.php" 		=> "support",
//	"sponsors.php" 		=> "sponsors",
	"http://bugs.ekg2.org" 	=> "wiki/bugs"
);

function ekg_header()
{
        global $ekg_tabs;

        echo ucfirst($ekg_tabs[basename($_SERVER['SCRIPT_NAME'])]);
?></title>
<meta name="Description" content="Strona projektu EKG2" />
<meta name="Keywords" content="EKG2 Eksperymentalny klient Gadu Gadu Gadu-Gadu" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<meta http-equiv="Content-Language" content="en" />
<meta name="Author" content="EKG2 Team" />
<meta name="Generator" content="vim" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="wrapper">
<div id="main">
  <div id="titlebar">
    <div id="ekg2toplogo">
            <img src="logs/logo.gif" width="60" height="47" alt="ekg2logo" />
    </div>
    <div id="titlebartext">
<?
    echo '<a href="http://pl.ekg2.org' . $_SERVER['SCRIPT_NAME'] . '">  Polish  </a>';
?>
    </div>
  </div>
  <div id="srodek">
    <div id="menubar">
      <ul id="mainmenu">
<?
	foreach ($ekg_tabs as $link => $desc)
	{
		echo '<li class="menuitem"> <a href="' . $link . '"> <strong>' . ucfirst($desc) . '</strong> </a> </li>' . "\n";
	}
?>
      </ul>

      <p>
        <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
      </p>
    </div>
    <div id="content">
<? 
}
?>


<?
function ekg_footer()
{
?>

    </div> <!-- // content -->
  </div> <!-- srodek -->
  <div id="footer">
    EKG2 Team 
    <a href="http://komunikatory.bajo.pl/"><img src="http://komunikatory.bajo.pl/wsparcie/komunikatory15.gif" alt="komunikatory" /></a>
  </div>

</div> <!-- // main -->
</div> <!-- // wrapper -->
</body>
</html>
<?
}
?>
