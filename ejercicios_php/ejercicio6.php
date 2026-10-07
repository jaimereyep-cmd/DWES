/*Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.*/

<?php

function tablaMultiplicar($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

tablaMultiplicar(5);

?>
