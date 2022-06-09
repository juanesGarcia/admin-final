<?php

class Tipodeejercicio{

    public $idtipodeejercicio;
    public $nombreejercicio;

    public function __construct($idtipodeejercicio, $nombreejercicio){
        $this->idtipodeejercicio = $idtipodeejercicio;
        $this->nombreejercicio = $nombreejercicio;

    }

    //Metodos GET
    public function getIdtipodeejercicio(){
        return $this->idtipodeejercicio;
    }
    public function getNombreejercicio(){
        return $this->nombreejercicio;
    }

    //Metodos SET

    public function setIdtipodeejercicio($idtipodeejercicio){
        $this->idtipodeejercicio = $idtipodeejercicio;
        return $this;
    }
    public function setNombreejercicio($nombreejercicio){
        $this->nombreejercicio = $nombreejercicio;
        return $this;
    }
}