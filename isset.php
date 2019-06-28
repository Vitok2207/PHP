<?php
	# >>isset()<<
	# Die Hilfsfunktion isset(Variable) prüft, ob eine Variable existiert. Sie liefert als Ergebnis 
	# einen Wahrheitswert. Da es wenig spannend wäre, diesen Wahrheitswert einfach nur auszugeben,
	# greifen wir ein wenig vor und zeigen bereits eine Fallunterscheidung, die erst im nächsten Kapitel genauer besprochen wird.
	
	# Das folgende Skript überprüft, ob eine Variable existiert. Wenn ja, wird sie ausgegeben.
	# Ansonsten erscheint eine Alternativmeldung.
	
	$test = "Textvariable";
	if (isset($test)) {
		echo $test;
	} else {
		echo  "Variable nicht gesetzt";
	}
?>