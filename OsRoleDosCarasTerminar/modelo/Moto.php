<?php

require_once ("Veiculo.php");

class Moto extends Veiculo {

    protected $Maestria;


    /**
     * Get the value of Maestria
     */
    public function getMaestria()
    {
        return $this->Maestria;
    }

    /**
     * Set the value of Maestria
     */
    public function setMaestria($Maestria): self
    {
        $this->Maestria = $Maestria;

        return $this;
    }
}