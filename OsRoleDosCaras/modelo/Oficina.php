<?php

require_once ("BarResenha.php");

class Oficina extends Bar{
    private $Elevador;


    /**
     * Get the value of Elevador
     */
    public function getElevador()
    {
        return $this->Elevador;
    }

    /**
     * Set the value of Elevador
     */
    public function setElevador($Elevador): self
    {
        $this->Elevador = $Elevador;

        return $this;
    }
}