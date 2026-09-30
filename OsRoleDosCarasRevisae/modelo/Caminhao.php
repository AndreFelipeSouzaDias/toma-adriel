<?php

require_once ("Camioneta.php");

class Caminhao extends Camioneta {

    protected $qntEixos;


    /**
     * Get the value of qntEixos
     */
    public function getQntEixos()
    {
        return $this->qntEixos;
    }

    /**
     * Set the value of qntEixos
     */
    public function setQntEixos($qntEixos): self
    {
        $this->qntEixos = $qntEixos;

        return $this;
    }
}