<?php
$arreglo = [

	'keyStr1' => 'lado',
	0 => 'ledo',

	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'

];

/* Lado, ledo, lido, lodo, ludo,
decirlo al revés lo dudo.
Ludo, lodo, lido, ledo, lado,
¡Qué trabajo me ha costado! */

echo '<h1>Exercise 1</h1>';

echo ucfirst($arreglo['keyStr1']) . ', ';
echo $arreglo[0] . ', ';
echo $arreglo['keyStr2'] . ', ';
echo $arreglo[1] . ', ';
echo $arreglo[2] . ', <br>';
echo 'decirlo al revés lo dudo.<br>';
echo ucfirst($arreglo[2]) . ', ';
echo $arreglo[1] . ', ';
echo $arreglo['keyStr2'] . ', ';
echo $arreglo[0] . ', ';
echo $arreglo['keyStr1'] . ', <br>';
echo '¡Qué trabajo me ha costado!<br>';


echo '<h1>Exercise 1 - second way</h1>';

foreach ($arreglo as $word) {
	echo $word . ', ';
	}
echo '<br>decirlo al revés lo dudo.<br>';

$reverse_arreglo = array_reverse($arreglo);

foreach ($reverse_arreglo as $word) {
	echo $word . ', ';
}
echo '<br>¡Qué trabajo me ha costado!<br>';

echo '<h1>Exercise 1 - third way</h1>';

for($i = 0; $i < 3; $i++) { 
  if ($i == 0) {
    echo ucfirst($arreglo['keyStr1']) . ', ';
    echo $arreglo[$i] . ', ';
    echo $arreglo['keyStr2'] . ', ';
  } else {
    echo $arreglo[$i] . ', ';
  }
}
echo '</br> decirlo al revés lo dudo </br>';
for($e = 2; $e >= 0; $e--) { 
  if ($e == 0) {
    echo $arreglo['keyStr2'] . ', ';
    echo $arreglo[$e] . ', ';
    echo $arreglo['keyStr1'] . ', ';
  } elseif ($e == 2){
    echo ucfirst($arreglo[$e]) . ', ';
  } else {
    echo $arreglo[$e] . ', ';
  }
}
echo '</br> ¡Qué trabajo me ha costado! </br>';

echo '<h1>Exercise 2</h1>';

/* Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a 
ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

	Ejemplo,
	
	México: Monterrey Querétaro Guadalajara
	Colombia: Bogota Cartagena Medellin */

$lands = [
	'Colombia' => [
		'Bogotá',
		'Cali',
		'Medellín'
	],
	'Croacia' => [
		'Zagreb',
		'Zadar',
		'Osjek'
	],
	"China" => [
		'Beijing',
		'Hangzhou',
		'Shenzhen'
	],
	"Italia" => [
		'Venecia',
		'Roma',
		'Milán'
	],
	'Holanda' => [
		'Amsterdam',
		'Rotterdam',
		'Mastritch'
	]
	];

foreach($lands as $land => $cities) {
	echo '<br>';
	echo '<b>' . $land . ': </b>';
	foreach ($cities as $city) {
		echo $city . ', ';
	}
};

echo '<h1>Exercise 3</h1>';

/* Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:
 */
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

rsort($valores);

echo 'Los tres números más grandes son: ';

for ($i = 0; $i < 3; $i++) {
	echo  $valores[$i] . ', ';
}

sort($valores);

echo '<br>Y los tres números más pequeños son: ';
for ($i = 0; $i < 3; $i++) {
	echo  $valores[$i] . ', ';
}
?>