<?php
 
 require_once ("Estabelecimento.php");

 class Bar extends Estabelecimento{
    private $Dono;
    private $HorarioFunc;


    /**
     * Get the value of Dono
     */
    public function getDono()
    {
        return $this->Dono;
    }

    /**
     * Set the value of Dono
     */
    public function setDono($Dono): self
    {
        $this->Dono = $Dono;

        return $this;
    }

    /**
     * Get the value of HorarioFunc
     */
    public function getHorarioFunc()
    {
        return $this->HorarioFunc;
    }

    /**
     * Set the value of HorarioFunc
     */
    public function setHorarioFunc($HorarioFunc): self
    {
        $this->HorarioFunc = $HorarioFunc;

        return $this;
    }
 }