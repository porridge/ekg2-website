<html>
<head>
<? include("__include.php"); ekg_header(); ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1" bgcolor="#FFFFFF"></td>
      </tr>
      <tr>
        <td height="1" valign="top" bgcolor="#D6D6D6"></td>
      </tr>
    </table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="frame_m">
  <tr>
    <td valign="top" bgcolor="#FFFFFF" class="into_m padding6">
       <!--tutaj jest poczatek zawartosci strony
 -->
<br>
<? 
        $in = fopen("docs/README", "r");
	while (!feof($in)) {
		$buf = chop(fgets($in, 4096));
		$buf = htmlspecialchars($buf, ENT_NOQUOTES);

		if (preg_match("/^\DId\:/", $buf)) 
			continue;

		echo "$buf<br>";
	}

?>


       <!--tutaj jest koniec zawartosci strony
 -->
    </td>
  </tr>
</table>  
<? ekg_footer(); ?>
</head>
<body>
</body>
</html>
