<?php
// Definir el nombre y la edad del usuario
$nombre = "Jeremy";
$edad = 20;

// Verificar si el usuario es mayor de edad
if ($edad >= 18) {
    $mensaje = "Hola, $nombre. Eres mayor de edad.";
} else {
    $mensaje = "Hola, $nombre. Eres menor de edad.";
}

echo $mensaje;
?>

