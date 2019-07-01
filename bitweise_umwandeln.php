<?php
	$zahl = "";
	$binaer = ""; 
	if ($_GET["Senden"] == "Umwandeln") {
		$zahl = $_GET["eingabe"];
		$binaerwerte = array();
		
		for ($i = 7; $i >= 0; $i--) {
			if ($zahl & pow(2, $i)) {
				$binaerwerte[$i] = 1;
			} else {
				$binaerwerte[$i] = 0;
			}
		}
		$binaer = join("", $binaerwerte);
	}
?>
<html>
	<head>
		<title>Bin&auml;r</title>
	</head>
	<body>
		<hl>Zahlen in Binär</hl>
		<p>Hier kannst du eine Zahl in eine Binärzahl umwandeln lassen.</p>
		<form>
			<input type="text" name="eingabe" value="<?=$zahl ?>" />
			<input type="text" name="ausgabe" value="<?=$binaer ?>" />
			<input type="submit" name="Senden" value="Umwandeln" />
		</form>
<?php
	echo date("d.m.y H:i:s")
?>
		<p>Viel Spaß</p>
	</body>
</html>