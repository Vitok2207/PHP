<?php
	# Referenzen
	# Normalerweise hat eine Variable genau einen Wert. Der Wert der Variablen wird vom
	# PHP-Interpreter im Hauptspeicher gespeichert. Sie können allerdings auch mehrere 
	# Variablen auf einen Wert verweisen lassen. Das funktioniert mit dem Et-Zeichen, das
	# oft auch kaufmännisches Und oder, auf Englisch, Ampersand genannt wird (&). Und so
	# geht es: 
	# Sie erstellen eine Variable und weisen dann mithilfe des Et-Zeichens einer
	# anderen Variablen die Referenz auf diese Variable zu:
	
	$a = "Eine Variable";
	$b = &$a;
	$a = "Geänderte Variable";
	echo $b;

	# Wenn Sie dann die ursprüngliche Variable, hier $a, ändern, erhält auch die Variable
	# mit der Referenz, hier also $b, den neuen Wert. Übrigens, zwischen dem Gleichheitszeichen
	# und dem Ampersand kann hier auch ein Leerzeichen folgen oder der Ampersand kann direkt vor der Variablen $a stehen
?>