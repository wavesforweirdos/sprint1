<?php
class PokerDice
{
    private $shapeDice = array("As", "K", "Q", "J", 7, 8);
    public $selectedShape;
    
    public $counter = 0; //De inicio habremos tirado 0 veces el dado (+1 cada vez que lancemos)

    public function throw()
    {
        $this->selectedShape = array_rand($this->shapeDice,1);
        //array_rand selecciona 1 valor/objeto aleatorio del array y retorna el índice de este
        $this->counter += 1;

        return $this->selectedShape;
    }

    public function shapeName()
    {

        echo '<div class="dado">'. $this->shapeDice[$this->throw()] . '</div>';   
    }

    public function getTotalThrows(){
        return $this->counter;
    }
}
