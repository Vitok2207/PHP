<html>
	<head>
		<title>PHP-Einbau</title>
	</head>
	<body>
		<?php
			include "extern.php";
			# require "extern.php";		|Selbe Funktion wie: include "extern.php";
			# Hinweis
			# Anweisungen sind von PHP angebotene Sprachkonstrukte, um ein bestimmtes Ziel
			# zu erreichen. Die Parameter für Anweisungen werden in Anführungszeichen nach
			# der Anweisungen geschrieben. Alternativ ist hier auch eine Syntax mit runden 
			# Klammern möglich:
			# require("extern.php");
			
			include_once "extern.php";
			# require_once "extern.php;		|Selbe Funktion wie: include_once "extern.php"; 
			# 
			# <<include_once>> und <<require_once>>
			# Diese beiden Sprachkonstrukte prüfen zuerst, ob die Datei bereits eingefügt wurde.
			# Sollte sie schon eingebunden worden sein, geschieht dies nicht noch einmal.
			# Dieses Verhalten ist dann wünschenswert, wenn das Skript wirklich Gefahr läuft, eine
			# Datei mehrmals einzulesen.

			# Besonderheiten in <<if>>-Anweisungen und Schleifen
			# Wird eine include()- oder require()-Anweisung in anderen Anweisungen wie if-Bedingungen
			# oder Schleifen eingebettet, muss diese Anweisung geschweifte Klammern besitzen,
			# also ein abgeschlossener Block sein. Die Kurzform:
			# if (Bedingug)
			#	include "extern.php";
			# else
			#	include "extern2.php";
			# ist also nicht erlaubt, funktioniert allerdings in manchen PHP-Versionen dennoch.
			# Korrekt ist:
			# if (Bedingung) {
			#	include "extern.php";
			# }
			# else {
			#	include "extern2.php";
			# }
		?>
	</body>
	
	<body>
		<?php
			# Ausgabe mit PHP
			# PHP besitzt zwei Sprachkonstrukte für die Ausgabe:
			
			# >> die echo-Anweisung:
			echo "Ausgabe";
			# >> die print-Anweisung:
			print "Ausgabe";
			
			# Die beiden Anweisungen unterscheiden sich dadurch, dass echo einfach nur das
			# Übergebene ausgibt, print dagegen einen Rückgabewert liefert.
		?>
	</body>
</html>