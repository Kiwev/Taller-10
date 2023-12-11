<?php

// Definir un arreglo numérico de 5 posiciones
$arregloNumerico = array(10, 20, 30, 40, 50);

// Inicializar la variable para la suma
$suma = 0;

// Utilizar un bucle for para sumar los números
for ($i = 0; $i < count($arregloNumerico); $i++) {
    $suma += $arregloNumerico[$i];
}

// Mostrar el resultado
echo "El arreglo numérico es: [" . implode(", ", $arregloNumerico) . "]<br>";
echo "La suma de los números es: $suma<br>";

?>
