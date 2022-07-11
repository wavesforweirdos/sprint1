    <?php
    require_once "pokerDice.php";

    //Creación y asignación de objetos
    $dado1 = new PokerDice();
    $tirada = $dado1->throw();
    $dado1->shapeName($tirada);

    echo '<br>';

    $dado2 = new PokerDice();
    $tirada = $dado2->throw();
    $dado2->shapeName($tirada);

    echo '<br>';

    $dado3 = new PokerDice();
    $tirada = $dado3->throw();
    $dado3->shapeName($tirada);

    echo '<br>';

    $dado4 = new PokerDice();
    $tirada = $dado4->throw();
    $dado4->shapeName($tirada);

    echo '<br>';

    $dado5 = new PokerDice();
    $tirada = $dado5->throw();
    $dado5->shapeName($tirada);

    function getTotalThrows(){
        echo 'El número total de tiradas es'
    }
    ?>
