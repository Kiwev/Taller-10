<?php
    echo '<br><b>QUINTO PUNTO:</b><br>';
    $tipoAfiliacion = 'A'; 
    $numeroPersonas = 5;

    $valorPorPersona = 25000;

    $totalSinDescuento = $valorPorPersona * $numeroPersonas;

    // Aplicar descuento solo si el tipo de afiliación es 'A' o 'B'
    if ($tipoAfiliacion == 'A' || $tipoAfiliacion == 'B') {
        $descuento = 0.3 * $totalSinDescuento;
        $totalConDescuento = $totalSinDescuento - $descuento;

        echo "Total con descuento (30%): $totalConDescuento\n";
    } else {
        // Si no es 'A' ni 'B', no hay descuento
         echo "No hay descuento aplicado.\n";
    }
    echo "<br>Total sin descuento: $totalSinDescuento\n";
?>
