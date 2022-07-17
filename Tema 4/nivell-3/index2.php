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
    $visibility_form1 = 'display: null';
    $visibility_form2 = 'display: none';
    $nombre = '';
    $apellidos = '';
    $cuenta = '';
    $saldo = '';

    if (!(empty($_POST))) //si se ha enviado el formulario
    {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $cuenta = $_POST["cuenta"];
        $saldo = $_POST["saldo"];

        if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['cuenta'])) {  //si alguno de los 3 primeros campos está vacío
            echo '<script>alert("Debes especificar todos los campos.")</script>';
        } elseif (empty($_POST['saldo'])) {  //si el campo del saldo está vacío
            echo '<script>alert("No has introducido una cantidad en tu cuenta.")</script>';
        } elseif ($_POST['saldo'] <= 0) {
            echo '<script>alert("Introduce una cantidad positiva de dinero.")</script>';
        } else {
            $visibility_form1 = 'display: none';
            $visibility_form2 = 'display: inline-block';
            require_once "account.php";

            echo '<script>alert("¡Formulario enviado correctamente!")</script>';

            $cliente = new Account($nombre, $apellidos, $cuenta, $saldo);

            echo '¡Felicidades <b>' . $cliente->getNombreCompleto() . '</b> has añadido la cuenta <b>' . $cliente->getCuenta() . '</b> correctamente! <br>';
            echo 'El saldo inicial de ésta es de  <b>' . $cliente->getSaldo() . '€</b>.<br>';

            echo '<p>Si quieres realizar una operación, indica la cantidad y la acción:</p>';
        }
    }

    ?>

    <div>
        <form class="formulario" method="post">
            <div class="form-container" style="<?php echo $visibility_form1 ?>">
                <p>*Nombre: <input type="text" name="nombre" placeholder="Marta" value="<?php echo $nombre ?>" autofocus></p>
                <p>*Apellidos: <input type="text" name="apellidos" placeholder="Cruz Quimasó" value="<?php echo $apellidos ?>"></p>
                <p>*Cuenta: <input type="text" name="cuenta" placeholder="ABC" value="<?php echo $cuenta ?>"></p>
                <p>*Saldo inicial: <input type="number" name="saldo" step="any" placeholder="0 €" value="<?php echo $saldo ?>"></p>
                <p class="txt-right"><input type="submit" value="Enviar"></p>
            </div>
            <div style="<?php echo $visibility_form1 ?>">
                <p class="txt-right obligatorio">*Campos obligatorios</p>
            </div>
            <div class="form-container2" style="<?php echo $visibility_form2 ?>">
                <input type="number" name="amount" step="any" placeholder="€">
                <select name="opcion">
                    <option value="ingresar">Ingresar</option>
                    <option value="retirar">Retirar</option>
                </select>
                <p class="txt-right"><input type="submit" value="Operar"></p>
            </div>
        </form>
    </div>

    <?php
    if (!(empty($_POST))) {
        $visibility_form2 = 'display: null';

        $amount = $_POST["amount"];
        $operacion = $_POST["opcion"];

        echo $cliente->operar($amount, $operacion);
    }
    ?>
</body>

</html>