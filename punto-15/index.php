<?php

// Función para sumar dos números
function sumar($a, $b) {
    return $a + $b;
}

// Función para restar dos números
function restar($a, $b) {
    return $a - $b;
}

// Función para multiplicar dos números
function multiplicar($a, $b) {
    return $a * $b;
}

// Función para dividir dos números
function dividir($a, $b) {
    // Manejar la división por cero
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Error: No se puede dividir por cero.";
    }
}

// Función principal para obtener la operación y los números del usuario
function realizarOperacion() {
    $num1 = (float)readline("Ingrese el primer número: ");
    $num2 = (float)readline("Ingrese el segundo número: ");
    $operacion = readline("Ingrese la operación (sumar, restar, multiplicar, dividir): ");

    switch ($operacion) {
        case 'sumar':
            return sumar($num1, $num2);
        case 'restar':
            return restar($num1, $num2);
        case 'multiplicar':
            return multiplicar($num1, $num2);
        case 'dividir':
            return dividir($num1, $num2);
        default:
            return "Error: Operación no válida.";
    }
}

// Llamar a la función principal y mostrar el resultado
$resultado = realizarOperacion();
echo "El resultado de la operación es: " . $resultado . PHP_EOL;

?>
