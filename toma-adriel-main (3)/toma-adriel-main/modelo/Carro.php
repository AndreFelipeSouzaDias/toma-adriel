<?php

require_once ("Veiculo.php");

class Carro extends Veiculo {

    protected $qntPortas;
    protected $peso;


    /**
     * Get the value of qntPortas
     */
    public function getQntPortas()
    {
        return $this->qntPortas;
    }

    /**
     * Set the value of qntPortas
     */
    public function setQntPortas($qntPortas): self
    {
        $this->qntPortas = $qntPortas;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }
}