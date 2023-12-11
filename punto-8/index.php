<?php

// Precio por persona
$precioPorPersona = 25000;

// Obtener el tipo de afiliación y el número de personas del usuario
$tipoAfiliacion = readline("Ingrese el tipo de afiliación (A, B, C, D): ");
$numPersonas = (int)readline("Ingrese el número de personas: ");

// Calcular el valor total sin descuento
$valorTotalSinDescuento = $precioPorPersona * $numPersonas;

// Calcular el descuento según el tipo de afiliación
switch ($tipoAfiliacion) {
    case 'A':
        $descuento = 0.3; // 30%
        break;
    case 'B':
        $descuento = 0.25; // 25%
        break;
    case 'C':
        $descuento = 0.1; // 10%
        break;
    case 'D':
        $descuento = 0.05; // 5%
        break;
    default:
        $descuento = 0; // Sin descuento por tipo de afiliación no reconocido
}

// Calcular el valor total con descuento
$valorTotalConDescuento = $valorTotalSinDescuento - ($valorTotalSinDescuento * $descuento);

// Mostrar el resultado con <br> para saltos de línea en HTML
echo "Tipo de Afiliación: $tipoAfiliacion<br>";
echo "Número de Personas: $numPersonas<br>";
echo "Valor total sin descuento: $" . number_format($valorTotalSinDescuento, 2) . "<br>";
echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
echo "Valor total con descuento: $" . number_format($valorTotalConDescuento, 2) . "<br>";

?>
