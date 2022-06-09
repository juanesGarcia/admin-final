<?php

class Tipodedieta{

    public $idtipodedieta;
	public $nombre;
	public $idusuario;
	public $iddieta;

    public function __construct($idtipodedieta, $nombre, $idusuario, $iddieta)
    {
        $this->idtipodedieta = $idtipodedieta;
        $this->nombre = $nombre;
        $this->idusuario = $idusuario;
        $this->iddieta = $iddieta;
    }

    //Metodos GET
    public function getIdtipodedieta(){
        return $this->idtipodedieta;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getIdusuario(){
        return  $this->idusuario;
    }
    public function getIddieta(){
        return  $this->iddieta;
    }

    //Metodos SET
    public function setIdtipodedieta($idtipodedieta){
        $this->idtipodedieta = $idtipodedieta;
        return $this;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
        return $this;
    }
    public function setIddieta($iddieta){
        $this->iddieta = $iddieta;
        return $this;
    }
}