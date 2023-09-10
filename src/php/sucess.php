<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Confirmación</title>
</head>

<body>
    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje = $_GET['mensaje'];
        echo "<div class='boxConf'>
                <div class='subBoxConf'>
                    <div class='imgIcon'>
                        <img class='icon' src='../../assets/succes.png' />
                    </div>
                    <p class='message'>$mensaje</p></div>
                </div>
            </div>";
    }
    ?>
</body>

</html>