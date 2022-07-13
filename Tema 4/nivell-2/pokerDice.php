<?php
class PokerDice
{
    private $shapeDice = array("As", "K", "Q", "J", 7, 8);
    public $selectedShape;
    public static $counter = 0; //De inicio habremos tirado 0 veces el conjunto de dados (+1 cada vez que lancemos)

    public function throw()
    {
        $this->selectedShape = array_rand($this->shapeDice, 1);
        //array_rand selecciona 1 valor/objeto aleatorio del array y retorna el índice de este
        return $this->selectedShape;
    }

    public function shapeName()
    {

        echo '<div class="dado">' . $this->shapeDice[$this->throw()] . '</div>';
    }


    public static function letsPlay()

    //palabra reservada static => Declarar propiedades o métodos de clases como estáticos los hacen accesibles sin la necesidad de instanciar la clase. Un método estático puede ser accedido sin un objeto de clase instanciado (una propiedad no puede).

    {
        $numDices = 5;

        for ($i = 0; $i < $numDices; $i++) {
            $dado = new PokerDice();
            echo $dado->shapeName();
        }
        self::$counter += 1;//cada vez que lanzamos los 5 dados, augmentamos el contador en 1
    }


    public static function getTotalThrows()
    {
               return self::$counter;
    }
}
