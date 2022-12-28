<?php

//1. Array con indice numerico
echo "<b>Array con indice numerico</b><br/>";
$cars = array("Volvo", "BMW", "Toyota");
echo "Mi piacciono le " . $cars[0] . ", le " . $cars[1] . " e le " . $cars[2];
echo "<br><br>";

//2. Array associativo
echo "<b>Array associativo</b><br/>";
$cars = array("volvo" => "Volvo", "bmw" => "BMW", "toyota" => "Toyota");
echo "Mi piacciono le " . $cars['bmw'] . ", le " . $cars['volvo'] . " e le " . $cars['toyota'];
echo "<br><br>";

//3. count - numero elementi di un array
echo "<b>count - numero elementi di un array</b><br/>";
echo "L'array cars contiene " . count($cars) . " elementi";
echo "<br><br>";

//4. in_array - indica se un elemento e' contenuto o meno in un array
echo "<b>in_array - indica se un elemento e' contenuto o meno in un array</b><br/>";
if(in_array("Volvo",$cars)){
    echo "Volvo si trova all'interno dell'array cars";
} else {
    echo "Volvo non si trova all'interno dell'array cars";
}
echo "<br><br>";

//5. array_reverse - array in ordine inverso
echo "<b>array_reverse - array in ordine inverso</b><br/>";
var_dump(array_reverse($cars));
echo "<br><br>";

//6. array_merge - fusione di 2 array
echo "<b>array_merge - fusione di 2 array</b><br/>";
$cars2 = array("lamborghini"=>"Lamborghini", "pagani" => "Pagani", "bugatti" => "Bugatti");
$cars_merged = array_merge($cars, $cars2);
var_dump($cars_merged);
echo "<br><br>";

//7. array_slice - estrarre una porzione di un array
echo "<b>array_slice - estrarre una porzione di un array</b><br/>";
$cars_sliced = array_slice($cars_merged,2,3);
var_dump($cars_sliced);
echo "<br><br>";

//8. array_keys - recupera il set di chiavi di un array
echo "<b>array_keys - recupera il set di chiavi di un array</b><br/>";
$keys = array_keys($cars_merged);
var_dump($keys);
echo "<br>";
echo $keys[2];
echo "<br><br>";

//9. array_values - recupera il set di valori di un array
echo "<b>array_values - recupera il set di valori di un array</b><br/>";
$values = array_values($cars_merged);
var_dump($values);
echo "<br>";
echo $values[3];
echo "<br><br>";

//10. array_push - inserisce un elemento in un array
echo "<b>array_push - inserisce un elemento in un array</b><br/>";
array_push($values,"Citroen");
var_dump($values);

?>