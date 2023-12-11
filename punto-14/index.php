<?php

// Obtener la contraseña del usuario
$contrasena = readline("Ingrese la contraseña: ");

// Realizar validaciones
$longitudValida = strlen($contrasena) > 8;
$tenerMayuscula = preg_match('/[A-Z]/', $contrasena) === 1;
$tenerNumero = preg_match('/[0-9]/', $contrasena) === 1;

// Verificar si la contraseña es segura
if ($longitudValida && $tenerMayuscula && $tenerNumero) {
    echo "La contraseña es segura.<br>";
} else {
    echo "La contraseña no es segura. Asegúrese de que cumple con los siguientes criterios:<br>";
    
    if (!$longitudValida) {
        echo "- Debe tener más de 8 caracteres.<br>";
    }
    
    if (!$tenerMayuscula) {
        echo "- Debe tener al menos una letra mayúscula.<br>";
    }

    if (!$tenerNumero) {
        echo "- Debe tener al menos un número.<br>";
    }
}

?>
