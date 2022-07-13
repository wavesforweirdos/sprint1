<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hojadeestilos.css">
    <title>Banco</title>
</head>

<body>
    <?php

    $nombre = $apellidos = $cuenta = '';
    $saldo = 0;

    ?>
    
    <div>
        <form class="formulario" method="post">
            <div class="form-container">
                <p>*Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>" autofocus></p>
                <p>*Apellidos: <input type="text" name="apellidos" placeholder="Cruz"></p>
                <p>*Cuenta: <input type="text" name="cuenta" placeholder="ABC"></p>
                <p>*Saldo inicial: <input type="number" name="saldo" step="any" placeholder="0 €"></p>
                <p class="txt-right"><input type="submit" submit="banco.php" value="Enviar"></p>
            </div>
            <div>
                <p class="txt-right obligatorio">*Campos obligatorios</p>
            </div>
        </form>
    </div>
    <?php

    if (!(empty($_POST))) //si se ha enviado el formulario
    {

        if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['cuenta'])) {  //si alguno de los 3 primeros campos está vacío
            echo '<script>alert("Debes especificar todos los campos.")</script>';
        } elseif (empty($_POST['saldo'])) {  //si el campo del saldo está vacío
            echo '<script>alert("No has introducido una cantidad en tu cuenta.")</script>';
        } elseif ($_POST['saldo'] <= 0) {
            echo '<script>alert("Introduce una cantidad positiva de dinero.")</script>';
        } else {
            header("Location: banco.php");
        }
    }
    ?>
</body>

</html>