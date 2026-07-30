<?php

$conexion = mysqli_connect("localhost", "root", "", "cotizaciones");
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

?>