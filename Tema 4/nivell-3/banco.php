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
    require_once "account.php";
    
    echo '<script>alert("¡Formulario enviado correctamente!")</script>';

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $cuenta = $_POST["cuenta"];
    $saldo = $_POST["saldo"];

    $cuenta = new Account($nombre, $apellidos, $cuenta, $saldo);
    echo '¡Felicidades <b>' . $cuenta->getNombreCompleto() . '</b> has añadido la cuenta <b>' . $cuenta->getCuenta() . '</b> correctamente! <br>';
    echo 'El saldo actual de ésta es de  <b>' . $cuenta->getSaldo() . '€</b>.<br>';

    echo '<p>Si quieres realizar una operación, indica la cantidad y la acción:</p>';
    echo '<p><form method="post"><input type="number" name="amount" step="any" placeholder="€">';
    echo '<a href="banco.php?variable=1"><input type="button" value="Ingresar"></a>';
    echo '<a href="banco.php?variable=2"><input type="button" value="Retirar"></a></form></p>';


    if (isset($_GET["variable"])) {
        $consulta = ($_GET['variable']);
        switch ($consulta) {
            case '1':
                $variable = "1";
                break;
            case '2':
                $variable = "2";
                break;
        }
    }
    ?>
</body>

</html>