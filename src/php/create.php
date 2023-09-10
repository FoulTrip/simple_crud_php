<?php

require_once "server.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $genero = $_POST["genero"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $objetivo = $_POST["objetivo"];

    // Consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO hoja_vida (nombre, fecha_nacimiento, genero, telefono, email, objetivo) VALUES ('$nombre', '$fecha_nacimiento', '$genero', '$telefono', '$email', '$objetivo')";

    if (mysqli_query($connetion, $sql)) {
        //El uso de %20 en la URL se refiere a la codificación de espacios en blanco en la dirección URL. En una URL, los espacios en blanco no son válidos y deben codificarse antes de enviarse a través de la web. %20 es el código de porcentaje para un espacio en blanco en una URL.
        header("Location: sucess.php?mensaje=Datos%20guardados%20correctamente");
    } else {
        echo "Error al guardar los datos: " . mysqli_error($connetion);
    }
}

mysqli_close($connetion);

?>