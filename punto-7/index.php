<?php

// Función para realizar la operación
function realizarOperacion($num1, $num2, $operacion) {
    switch ($operacion) {
        case 'sumar':
            return $num1 + $num2;
        case 'restar':
            return $num1 - $num2;
        case 'multiplicar':
            return $num1 * $num2;
        case 'dividir':
            // Manejar la división por cero
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: No se puede dividir por cero.";
            }
        default:
            return "Error: Operación no válida.";
    }
}

// Obtener los números y la operación del usuario
$num1 = (float) readline("Ingrese el primer número: ");
$num2 = (float) readline("Ingrese el segundo número: ");
$operacion = readline("Ingrese la operación (sumar, restar, multiplicar, dividir): ");

// Realizar la operación y mostrar el resultado
$resultado = realizarOperacion($num1, $num2, $operacion);
echo "El resultado de la operación es: " . $resultado . PHP_EOL;

?>
