/* 
Escribe un script PHP que realice las siguientes acciones: Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. 
Una vez que ha inicializado el array, imprima todos los valores que almacena. 
Buscar el valor mínimo de los valores del array. Muestre el valor mínimo que ha encontrado.
*/

<?php

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 30);
}


echo "Valores del array:<br>";

foreach ($array as $valor) {
    echo $valor . "<br>";
}

$minimo = min($array);

echo "<br>El valor mínimo es: " . $minimo;

?>
