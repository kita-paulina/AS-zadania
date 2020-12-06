<?php require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$operation = $_REQUEST['operation'];

$result = null;
$messages = array();

if ( !isset($x,$y,$operation)) {
        $messages [] = 'Błędne wywołanie. Brak parametrów.';
}

if ( $x == "") {
	$messages []= 'Nie podano liczby 1';
}

if ( $y == "") {
	$messages []= 'Nie podano liczby 2';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}

if (empty ( $messages )) { 	
	$x = intval($x);
	$y = intval($y);
	
	switch ($operation) {
		case 'subtract' :
			$result = $x - $y;
			break;
		case 'multiply' :
			$result = $x * $y;
			break;
		case 'divide' :
			$result = $x / $y;
			break;
		default :
			$result = $x + $y;
			break;
	}
}
include './calc_view.php';