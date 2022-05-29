<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    public $idusuario;
    public $primernombre;
    public $email;
    public $contraseña;
    public $foto;
 
    
    public function __construct($idusuario, $primernombre, $email, $contraseña,$foto){

        $this->idusuario =$idusuario;
        $this->primernombre = $primernombre;
		$this->email = $email;
		$this->contraseña = $contraseña;
        $this->foto = $foto;
     
    }
    
   // Métodos GET
    public function getIdusuario(){
        return $this->idusuario;
    }

    public function getPrimernombre()
    {
        return $this->primernombre;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
     public function getContraseña()
    {
        return $this->contraseña;
    }
    public function getFoto()
    {
        return $this->foto;
    }



    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    //Métodos SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function setFoto($Foto)
    {
        $this->Foto = $Foto;

        return $this;
    }

 
}