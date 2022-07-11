<?php
class Account
{
    private $nombre;
    private $apellidos;
    private $cuenta;
    private $saldo;

    public function initialize($nombre, $apellidos, $cuenta, $saldo)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->cuenta = $cuenta;
        $this->saldo = $saldo;
    }
    public function deposit($amount)
    {
        return $amount;
    }
    public function withdraw($amount)
    {
        if ($this->saldo >= $amount) {
            echo 'Hola';
        } elseif ($this->saldo < $amount) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("No has saldo suficiente para tal cantidad.")';
            echo '</script>';
        } elseif ($this->saldo = 0) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("¡ERROR! No hay dinero en la cuenta.")';
            echo '</script>';
        }
    }
}
