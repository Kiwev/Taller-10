<?php

// Obtener el número del usuario
$numero = (int)readline("Ingrese un número para generar la tabla de multiplicar: ");

// Validar que el número sea válido
if ($numero < 0) {
    echo "Ingrese un número positivo.<br>";
} else {
    // Mostrar la tabla de multiplicar del 0 al 30 para el número dado
    echo "Tabla de multiplicar para $numero:<br>";
    
    for ($i = 0; $i <= 30; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

?>
