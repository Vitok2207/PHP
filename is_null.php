<?php
	# >>is_null()<<
	# Die Funktion is_null(Variable) gehört ebenfalls in die Riege der Hilfs- und Testfunktionen.
	# Sie testet, ob eine Variable den Wert NULL (kein Wert) besitzt.
	
	$test = null;
	if (is_null($test)) {
		echo "Variable ist NULL";
	} else {
		echo "Variable ist nicht NULL, sondern" . $test;
	}
?>