<?php
$conexion = mysqli_connect("sql100.infinityfree.com", "if0_40536351", "YSLHYqAvwzpFl9d", "if0_40536351_interactivo");

if (!$conexion) {
   
    echo "Error: No se pudo conectar a MySQL.<br>";
    echo "Número de error de depuración: " . mysqli_connect_errno() . "<br>";
    echo "Error de depuración: " . mysqli_connect_error() . "<br>";
    exit;
}
echo "Conexión exitosa.<br>";
?>