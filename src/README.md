# Cv

Explicacion detallada:

# `Create.php`

Este archivo PHP se encarga de procesar un formulario HTML y guardar los datos ingresados en una base de datos.
```php
require_once "server.php";
```
 - Esto incluye el archivo `server.php`, que contiene la configuración de la conexión a la base de datos.
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
```
 - Comprueba si la solicitud HTTP es una solicitud POST. Esto significa que el formulario HTML ha sido enviado.
```php
$nombre = $_POST["nombre"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$objetivo = $_POST["objetivo"];
```
 - Recopila los datos del formulario HTML utilizando `$_POST`. Estos datos se almacenan en variables para su posterior procesamiento.
```php
$sql = "INSERT INTO hoja_vida (nombre, fecha_nacimiento, genero, telefono, email, objetivo) VALUES ('$nombre', '$fecha_nacimiento', '$genero', '$telefono', '$email', '$objetivo')";
```
 - Crea una consulta SQL para insertar los datos en una tabla llamada "hoja_vida". Los valores son los datos recopilados del formulario.
```php
if (mysqli_query($connetion, $sql)) {
    header("Location: sucess.php?mensaje=Datos%20guardados%20correctamente");
} else {
    echo "Error al guardar los datos: " . mysqli_error($connetion);
}
```
 - Ejecuta la consulta SQL utilizando `mysqli_query()`. Si la inserción es exitosa, redirige al usuario a sucess.php con un mensaje de éxito. Si falla, muestra un mensaje de error.
```php
mysqli_close($connetion);
```
 - Cierra la conexión a la base de datos al final del archivo.

# `server.php`
Este archivo PHP establece la conexión a la base de datos.
```php
$host = "localhost";
$user = "root";
$password = "";
$database = "students-test";

$connetion = mysqli_connect($host, $user, $password, $database);
```
 - Define las variables para la configuración de la base de datos, como el host, el usuario, la contraseña y la base de datos a la que se conectará.
 - Utiliza `mysqli_connect()` para establecer una conexión con la base de datos.
```php
if (!$connetion) {
    die("Error al conectar la DB" . mysqli_connect_error());
}
```
 - Verifica si la conexión se realizó con éxito. Si no, muestra un mensaje de error y detiene la ejecución del programa.

# `sucess.php`
Este archivo PHP se utiliza para mostrar un mensaje de confirmación después de que los datos se hayan guardado correctamente.
```php
if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
    echo "<div class='boxConf'>
            <div class='subBoxConf'>
                <div class='imgIcon'>
                    <img class='icon' src='../../assets/succes.png' />
                </div>
                <p class='message'>$mensaje</p>
            </div>
        </div>
    </div>";
}
```
 - Verifica si hay un parámetro llamado `mensaje` en la URL.
 - Si existe el parámetro `mensaje`, muestra un mensaje de éxito junto con una imagen en un formato HTML específico.
