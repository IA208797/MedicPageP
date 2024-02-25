<?php
$servername = "localhost";

$username = "id21229683_izhantea";
$password = "rootAdmin.-1";
$dbname = "id21229683_basededatosprrona";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}
?>