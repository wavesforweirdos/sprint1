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
    <div class="container">
    <?php
    require_once "pokerDice_array.php";

    $dado1 = new PokerDice();
    echo $dado1->shapeName();

    $dado2 = new PokerDice();
    echo $dado2->shapeName();
    
    $dado3 = new PokerDice();
    echo $dado3->shapeName();
    
    $dado4 = new PokerDice();
    echo $dado4->shapeName();

    $dado4 = new PokerDice();
    echo $dado4->shapeName();
    ?>
    </div>
</body>

</html>