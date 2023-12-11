<?php

// Obtener el número del usuario
$numero = (int)readline("Ingrese un número para generar la tabla de multiplicar: ");

// Inicializar el contador
$contador = 0;

// Imprimir la tabla de multiplicar utilizando un bucle while
echo "Tabla de multiplicar del $numero:<br>";
while ($contador <= 30) {
    $resultado = $numero * $contador;
    echo "$numero x $contador = $resultado<br>";
    $contador++;
}

?>
