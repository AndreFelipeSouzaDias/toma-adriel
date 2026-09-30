<?php

require_once ("Estabelecimento.php");

class Casa extends Estabelecimento{
    private $qtdComodos;

    /**
     * Get the value of qtdComodos
     */
    public function getQtdComodos()
    {
        return $this->qtdComodos;
    }

    /**
     * Set the value of qtdComodos
     */
    public function setQtdComodos($qtdComodos): self
    {
        $this->qtdComodos = $qtdComodos;

        return $this;
    }
 }
 