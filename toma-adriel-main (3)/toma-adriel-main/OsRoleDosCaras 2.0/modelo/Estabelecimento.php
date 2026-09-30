<?php

class Estabelecimento {
    protected $Endereco;
    protected $Nome;

    /**
     * Get the value of Endereco
     */
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Set the value of Endereco
     */
    public function setEndereco($Endereco): self
    {
        $this->Endereco = $Endereco;

        return $this;
    }

    /**
     * Get the value of Nome
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome($Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }
}
