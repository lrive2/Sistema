<?php

require_once "conexion.php";
$conexion = conexion();

$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO registro (nombre,apellido,email,telefono)
				VALUES ('$nombre','$apellido','$email','$telefono')";

echo $result = mysqli_query($conexion, $sql);
