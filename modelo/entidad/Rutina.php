<?php

class Rutina{

    public $idrutina;
    public $series;
    public $repeticiones;
    public $idusuario;
	public $idetapadefisico;
	public $idtipodeejercicio;
    
    public function __construct($idrutina, $series, $repeticiones, $idetapadefisico, $idtipodeejercicio)
    {
        $this->idrutina = $idrutina;
        $this->series = $series;
        $this->repeticiones = $repeticiones;
        $this->idusuario = $idusuario;
        $this->idetapadefisico = $idetapadefisico;
        $this->idtipodeejercicio = $idtipodeejercicio;
    }

    //Metodos GET
    public function getIdrutina(){
        return $this->idrutina;  
    }
    public function getSeries(){
        return  $this->series;
    }
    public function  getRepeticiones(){
        return  $this->repeticiones;
    }
    public function  getIdusuario(){
        return  $this->idusuario;
    }
    public function getIdetapadefisico(){
        return  $this->idetapadefisico;
    }
    public function getIdtipodeejercicio(){
        return $this->idtipodeejercicio;
    }

    //Metodos SET
    public function setIdrutina($idrutina){
        $this->idrutina = $idrutina;  
        return $this;
    }
    public function setSeries($series){
        $this->series = $series;
        return $this;
    }
    public function  setRepeticiones($repeticiones){
        $this->repeticiones = $repeticiones;
        return $this;
    }
    public function  setIdusuario($idusuario){
        $this->idusuario = $idusuario;
        return $this;
    }
    public function setIdetapadefisico($idetapadefisico){
        $this->idetapadefisico = $idetapadefisico;
        return $this;
    }
    public function setIdtipodeejercicio($idtipodeejercicio){
        $this->idtipodeejercicio = $idtipodeejercicio;
        return $this;
    }
}