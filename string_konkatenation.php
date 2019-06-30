<?php
	# >>Strings verbinden<<
	# In vielen Programmiersprachen dient das Plussymbol nicht nur zum Verbinden von
	# Zahlen, sondern auch zum Verbinden von Strings. Dies ist in PHP nicht so.
	# Stattdessen kommt der Punkt (.) zum Einsatz:
	
	$a = "Alles neu, ";
	$b = "macht der Mai.";
	
	$erg = $a . $b;
	echo $erg;
?>