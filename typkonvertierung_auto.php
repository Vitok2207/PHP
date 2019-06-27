<?php
	# Typkonvertierung
	# Normalerweise müssen Sie sich in PHP um die Typkonvertierung nicht kümmern.
	# Das folgende Skript würde in vielen Programmiersprachen die Zahl an den String anhängen.
	# Da PHP allerdings für das Verbinden von Strings einen eigenen Operator, den Punkt (.),
	# verwendet, funktioniert hier die Typkonvertierung richtig:
	$a = "3";
	$b = 5;
	$erg = $a + $b;
	echo $erg;
?>