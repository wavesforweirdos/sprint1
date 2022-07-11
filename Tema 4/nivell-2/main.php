<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./hojadestilos.css" rel="stylesheet" type="text/css">
    <title>Aplicación de Dados</title>
</head>

<body>
    <?php
    require_once "pokerDice.php";

    $tirada_dado1 = '?';
    $tirada_dado2 = '?';
    $tirada_dado3 = '?';
    $tirada_dado4 = '?';
    $tirada_dado5 = '?';

    echo ('<div class="container">
        <div class="dado" id="dado1">' . $tirada_dado1 . '</div>
        <div class="dado" id="dado2">' . $tirada_dado2 . '</div>
        <div class="dado" id="dado3">' . $tirada_dado3 . '</div>
        <div class="dado" id="dado4">' . $tirada_dado4 . '</div>
        <div class="dado" id="dado5">' . $tirada_dado5 . '</div>
        <p class="tirar">
            <button id="tirada" onclick="starGame()">Tirar dados</button>
        </p></div>');



    function starGame()
    {
        $dado1 = new PokerDice();
        $tirar = $dado1->throw();
        $tirada_dado1 = $dado1->shapeName($tirar);

        echo ('<div class="container">
        <div class="dado" id="dado1">' . $tirada_dado1 . '</div>
        <div class="dado" id="dado2">' . $tirada_dado2 . '</div>
        <div class="dado" id="dado3">' . $tirada_dado3 . '</div>
        <div class="dado" id="dado4">' . $tirada_dado4 . '</div>
        <div class="dado" id="dado5">' . $tirada_dado5 . '</div>
        <p class="tirar">
            <button id="tirada" onclick="starGame()">Tirar dados</button>
        </p></div>');

    }


    /*
    $dado2 = new PokerDice();
    $tirar = $dado2->throw();
    $tirada_dado2 = $tirada = $dado2->shapeName($tirar);

    echo '<br>';

    $dado3 = new PokerDice();
    $tirar = $dado3->throw();
    $tirada_dado3 = $dado3->shapeName($tirar);

    echo '<br>';

    $dado4 = new PokerDice();
    $tirar = $dado4->throw();
    $tirada_dado4 = $dado4->shapeName($tirar);

    echo '<br>';

    $dado5 = new PokerDice();
    $tirar = $dado5->throw();
    $tirada_dado5 = $dado5->shapeName($tirar);

    function getTotalThrows()
    {
        echo 'El número total de tiradas es';
    }

    */



    ?>
    
<script>
    document.getElementById['dado1'].innertHTML = tirada_dado1;
</script>
</body>

</html>