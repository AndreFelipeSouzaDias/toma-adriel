<?php

require_once ("BarResenha.php");

class Posto extends Bar{
    private $qtdBomba;


    /**
     * Get the value of qtdBomba
     */
    public function getQtdBomba()
    {
        return $this->qtdBomba;
    }

    /**
     * Set the value of qtdBomba
     */
    public function setQtdBomba($qtdBomba): self
    {
        $this->qtdBomba = $qtdBomba;

        return $this;
    }
}