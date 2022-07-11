<?php
class PokerDice
{
    private $cara_As = 'As';
    private $cara_K = 'K';
    private $cara_Q = 'Q';
    private $cara_J = 'J';
    private $cara_7 = '7';
    private $cara_8 = '8';

    public function throw()
    {
        $val = mt_rand(0, 5);
        return $val;
    }

    public function shapeName($val)
    {
        $cara_selecionada = $val;
        
        switch ($val) {
            case 0:
                $cara_selecionada = $this->cara_As;
                break;
            case 1:
                $cara_selecionada = $this->cara_K;
                break;
            case 2:
                $cara_selecionada = $this->cara_Q;
                break;
            case 3:
                $cara_selecionada = $this->cara_J;
                break;
            case 4:
                $cara_selecionada =  $this->cara_7;
                break;
            case 5:
                $cara_selecionada = $this->cara_8;
                break;
        }

        return $cara_selecionada;
    }
}

?>
