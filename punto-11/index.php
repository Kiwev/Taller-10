<?php

// Inicializar la suma
$suma = 0;

// Mostrar números pares y realizar la suma
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . "<br>";
    $suma += $i;
}

// Mostrar la suma total
echo "La suma de los números pares del 1 al 100 es: $suma<br>";

?>
