<?php

require_once ("Carro.php");

class Camioneta extends Carro {

    protected $capacidadeCarga;


    /**
     * Get the value of capacidadeCarga
     */
    public function getCapacidadeCarga()
    {
        return $this->capacidadeCarga;
    }

    /**
     * Set the value of capacidadeCarga
     */
    public function setCapacidadeCarga($capacidadeCarga): self
    {
        $this->capacidadeCarga = $capacidadeCarga;

        return $this;
    }
}