<?php
$servername = "localhost";
$database = "inventario";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conectado correctamente";

?>