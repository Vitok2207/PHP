<?php
$var = "du";
$Var = "ich";
// echo "$var, $Var"; // gibt "du, ich" aus
?>

<?php
$foo = 'Viktor';			// 'Viktor' der Variablen $foo zuweisen.
$bar = &$foo;				// $foo per $bar referenzieren.
$bar = "Ich heiße $bar";	// $bar verändern...
echo $bar;
// echo $foo;				// $foo wurde ebenfalls verändert.
?>

<?php
// Zu beachten ist, dass nur Variablenbezeichner referenziert werden können.

// $foo = 25;
// $bar = &$foo;		// Gültige Zuweisung.
// $bar = &
// (24 * 7); // Ungültig, da ein unbenannte Ausdruck referenziert wird.

// function test()
// {
//	return 25;
// }

// $bar &test();	// Ungültig.
?>

<?php
// Beispiel #1 Vorgabewerte uninitialisierter Variablen

// Nicht gesetzte UND nicht referenzierte (kein Verwendungskontext) Variable; gibt NULL aus
// var_dump($unset_var);

// Verwendung als Boolescher Wert; gibt 'false' aus (siehe den ternären Operator für Details zu dieser Syntax)
// echo($unset_bool ? "true\n" : "false\n");

// Verwendung als Zeichenkette; gibt 'string(3) "abc"' aus
// $unset_str .= 'abc';
// var_dump($unset_str);

// Verwendung als Ganzzahl; gibt 'int(25)' aus
// $unset_int += 25; // 0 + 25 => 25
// var_dump($unset_int);

// Verwendung als Fließkommazahl; gibt 'float(1.25)' aus
// $unset_float += 1.25;
// var_dump($unset_float);

// Verwendung als Array; gibt array(1) {  [3]=>  string(3) "def" } aus
// $unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
// var_dump($unset_arr);

// Verwendung als Objekt; erzeugt ein neues stdClass Objekt
// (siehe http://www.php.net/manual/en/reserved.classes.php)
// Gibt aus: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
// $unset_obj->foo = 'bar';
// var_dump($unset_obj);
?>

