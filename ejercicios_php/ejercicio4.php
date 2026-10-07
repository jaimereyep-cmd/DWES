/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones: Calcular la media. Calcular el valor máximo. 
Calcular el valor mínimo. Mostrar todos los valores calculados. El array de temperaturas lo vamos a generar con números aleatorios.
El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30. */

<?php

$temperaturas = [];

for ($i = 0; $i < 10; $i++) {
    $temperaturas[] = rand(1, 30);
}

echo "Temperaturas:<br>";

foreach ($temperaturas as $temperatura) {
    echo $temperatura . " ºC<br>";
}

$media = array_sum($temperaturas) / count($temperaturas);

$maxima = max($temperaturas);

$minima = min($temperaturas);

echo "<br>";
echo "Temperatura media: " . $media . " ºC<br>";
echo "Temperatura máxima: " . $maxima . " ºC<br>";
echo "Temperatura mínima: " . $minima . " ºC<br>";

?>
