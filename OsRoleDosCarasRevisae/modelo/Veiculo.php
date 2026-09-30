<?php

class Veiculo {

    protected $modelo;
    protected $velMaxima;
    protected $cor;

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of velMaxima
     */
    public function getVelMaxima()
    {
        return $this->velMaxima;
    }

    /**
     * Set the value of velMaxima
     */
    public function setVelMaxima($velMaxima): self
    {
        $this->velMaxima = $velMaxima;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }
}
