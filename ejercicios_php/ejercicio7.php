/*Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que 
imprima las tablas demultiplicar entre esos dos números. Utilice la función del ejercicio anterior.*/

<?php

function tablaMultiplicar($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

function tablasEntre($inicio, $fin) {
    for ($i = $inicio; $i <= $fin; $i++) {
        echo "<h3>Tabla del " . $i . "</h3>";
        
        tablaMultiplicar($i);
        
        echo "<br>";
    }
}

tablasEntre(2, 5);

?>
