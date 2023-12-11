<?php

// Inicializar el contador
$numero = 1;

// Mostrar números pares del 1 al 100 con un bucle while
while ($numero <= 100) {
    // Verificar si el número es par
    if ($numero % 2 == 0) {
        // Mostrar el número par
        echo $numero;

        // Si no es el último número par, imprimir una coma y un espacio
        if ($numero < 100 - 1) {
            echo ", ";
        }
    }

    // Incrementar el contador
    $numero++;
}

?>
