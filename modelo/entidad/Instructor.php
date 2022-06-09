<?php

class Instructor{

    public $idinstructor;
	public $primernombre;
    public $primerapellido;
	public $foto;

    public function __construct($idinstructor, $primernombre, $primerapellido, $foto)
    {
        $this->idinstructor = $idinstructor;
        $this->primernombre = $primernombre;
        $this->primerapellido = $primerapellido;
        $this->foto = $foto;
    }

    //Metodos GET
    public function getIdinstructor(){
        return $this->idinstructor;
    }
    public function getPrimernombre(){
        return $this->primernombre;
    }
    public function getPrimerapellido(){
        return $this->primerapellido;
    }
    public function getFoto(){
        return $this->foto;
    }

    //Metodos SET
    public function setIdinstructor($idinstructor){
        $this->idinstructor = $idinstructor;
        return $this;
    }
    public function setPrimernombre($primernombre){
        $this->primernombre = $primernombre;
        return $this;
    }
    public function setPrimerapellido($primerapellido){
        $this->primerapellido = $primerapellido;
        return $this;
    }
    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }

}