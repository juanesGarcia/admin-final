<?php

class Dieta{

    public $iddieta;
	public $ingredientes;
	public $descripción;
	public $idtipodedieta;

    public function __construct($iddieta, $ingredientes, $descripción, $idtipodedieta)
    {
        $this->iddieta = $iddieta;
        $this->ingredientes = $ingredientes;
        $this->descripción = $descripción;
        $this->idtipodedieta = $idtipodedieta;
    }

    //Metodos GET
    public function getIddieta(){
        return $this->iddieta;
    }
    public function getIngredientes(){
        return $this->ingredientes;
    }
    public function getDescripción(){
        return $this->descripción;
    }
    public function getIdtipodedieta(){
        return $this->idtipodedieta;
    }

    //Metodos SET
    public function setIddieta($iddieta){
        $this->iddieta = $iddieta;
        return $this;
    }
    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;
        return $this;
    }
    public function setDescripción($descripción){
        $this->descripción = $descripción;
        return $this;
    }
    public function setIdtipodedieta($idtipodedieta){
        $this->idtipodedieta = $idtipodedieta;
        return $this;
    } 
}