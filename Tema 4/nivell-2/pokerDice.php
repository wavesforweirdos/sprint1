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
        switch ($val) {
            case 0:
                echo $this->cara_As;
                break;
            case 1:
                echo $this->cara_K;
                break;
            case 2:
                echo $this->cara_Q;
                break;
            case 3:
                echo $this->cara_J;
                break;
            case 4:
                echo  $this->cara_7;
                break;
            case 5:
                echo $this->cara_8;
                break;
        }
    }
}