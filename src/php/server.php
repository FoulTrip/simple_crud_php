<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "students-test";

$connetion = mysqli_connect($host, $user, $password, $database);

if (!$connetion) {
    die("Error al conectar la DB" . mysqli_connect_error());
}

?>