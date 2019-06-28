<?php
	# >>unset()<<
	# Das Sprachkonstrukt unset(Variable) löscht eine Variable. Sie benötigen diese 
	# Funktion beispielsweise, wenn Sie bewusst im Hauptspeicher Platz schaffen möchten.
	
	$test = "Eine Variable.";
	echo $test;
	unset($test);
	echo $test;
	# Dieses Beispiel gibt nur einmal den Text 'Eine Variable.' aus. Bei der zweiten Ausgabe 
	# existiert die Variable schon nicht mehr. Hier zeigt PHP als Fehlermeldung die Notice 'Undefined variable'.
?>