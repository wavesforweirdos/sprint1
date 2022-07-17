<?php
class Account
{
    public string $nombre;
    public string $apellidos;
    public string $cuenta;
    public $saldo;

    public function __construct($nombre, $apellidos, $cuenta, $saldo)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->cuenta = $cuenta;
        $this->saldo = $saldo;
    }


    //----------------------GETTERS-------------------------

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getNombreCompleto()
    {
        return $this->nombre . ' ' . $this->apellidos;
    }
    public function getCuenta()
    {
        return $this->cuenta;
    }
    public function getSaldo()
    {
        return number_format($this->saldo, 2, ",", ".");
    }

    //----------------------SETTERS-------------------------

    public function setNommbre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function __toString()
    {
        $msj = '<b>' . self::getNombreCompleto() . '</b>, la cuenta <b>' . self::getCuenta();
        $msj .= '</b> tiene un saldo actual de <b>' . self::getSaldo() . '€</b>.<br>';

        return $msj;
    }


    public function deposit($amount)
    {
        $ingreso = $this->saldo + $amount;
        self::setSaldo($ingreso);
        return self::__toString();
    }
    public function withdraw($amount)
    {

        if ($this->saldo >= $amount) {
            $retirada = $this->saldo - $amount;
            self::setSaldo($retirada);
            return self::__toString();
        } elseif ($this->saldo < $amount) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("No hay saldo suficiente para tal cantidad.")';
            echo '</script>';
        } elseif ($this->saldo = 0) {
            echo '<script type ="text/JavaScript">';
            echo 'alert("¡ERROR! No hay dinero en la cuenta.")';
            echo '</script>';
        }
    }

    public function operar($val, $opcion)
    {
        if ($val < 0) {
            echo '<script type ="text/JavaScript">alert("Introduce un valor positivo")</script>';
        } else {
            switch ($opcion) {
                case 'ingresar':
                    return self::deposit($val);
                    break;
                case 'retirar':
                    return self::withdraw($val);
                    break;
            }
        }
    }
}
