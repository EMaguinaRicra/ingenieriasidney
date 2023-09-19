<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "ingenie5_ingenieriasidney"; // Nombre de usuario para acceder a la base de datos - El usuario para la base de datos en cPanel es ingenie5_ingenieriasidney
$password = "yxYiw7@KtsmkBM7"; // Contraseña para acceder a la base de datos - La contraseña para cPanel "yxYiw7@KtsmkBM7"
$dbname = "ingenie5_ingenieriasidney"; // Nombre de la base de datos - El nombre de la base de datos en cPanel es ingenie5_ingenieriasidney

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Verificar la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
} 

// Configurar la codificación de caracteres utf8mb4
mysqli_set_charset($conn, "utf8mb4");

?>
