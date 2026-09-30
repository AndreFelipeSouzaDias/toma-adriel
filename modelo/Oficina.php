<?php

require_once ("BarResenha.php");

class Oficina extends Bar{
    private $qtdElevador;


    /**
     * Get the value of Elevador
     */
    public function getqtdElevador()
    {
        return $this->qtdElevador;
    }

    /**
     * Set the value of Elevador
     */
    public function setqtdElevador($qtdElevador): self
    {
        $this->qtdElevador = $qtdElevador;

        return $this;
    }
}