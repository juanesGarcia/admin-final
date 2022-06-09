<?php

class Etapadefisico{
    public $idetapadefisico;
    public $nombreetapafisico;

    public function __construct($idetapadefisico, $nombreetapafisico){
        $this->idetapadefisico = $idetapadefisico;
        $this->nombreetapafisico = $nombreetapafisico;
    }

    //Metodos GET
    public function getIdetapadefisico(){
        return $this->idetapadefisico;
    }
    public function getNombreetapafisico(){
        return $this->nombreetapafisico;
    }

    //Metodos SET
    public function setIdetapadefisico($idetapadefisico){
        $this->idetapadefisico = $idetapadefisico;
        return $this;
    }
    public function setNombreetapafisico($nombreetapafisico){
        $this->nombreetapafisico = $nombreetapafisico;
        return $this;
    }
}