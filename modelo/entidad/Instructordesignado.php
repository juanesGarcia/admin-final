<?php

class Instructordesignado{

    public $idinstructordesignado;
	public $idinstructor;
	public $idusuario;
	public $fechainicio;

    public function __construct($idinstructordesignado, $idinstructor, $idusuario, $fechainicio)
    {
        $this->idinstructordesignado = $idinstructordesignado;
        $this->idinstructor = $idinstructor;
        $this->idusuario = $idusuario;
        $this->fechainicio = $fechainicio;
    }

    //Metodos GET
    public function getIdinstructordesignado(){
        return $this->idinstructordesignado;
    }
    public function getIdinstructor(){
        return $this->idinstructor;
    }
    public function getIdusuario(){
        return $this->idusuario;
    }
    public function getFechainicio(){
        return $this->fechainicio;
    }

    //Metodos SET
    public function setIdinstructordesignado($idinstructordesignado){
        $this->idinstructordesignado = $idinstructordesignado;
        return $this;
    }
    public function setIdinstructor($idinstructor){
        $this->idinstructor = $idinstructor;
        return $this;
    }
    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
        return $this;
    }
    public function setFechainicio($fechainicio){
        $this->fechainicio = $fechainicio;
        return $this;
    }

}