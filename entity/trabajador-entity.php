<?php
class trabajadorEntity {

    public $idTrabajador;
    public $nombreTrabajador;
    public $apellidoTrabajador;
    public $correoTrabajador;
    public $passwordTrabajador;
    public $tipoTrabajador;

    // GETTER
    public function getIdTrabajador(){
        return $this->idTrabajador;
    }

    public function getNombreTrabajador(){
        return $this->nombreTrabajador;
    }

    public function getApellidoTrabajador(){
        return $this->apellidoTrabajador;
    }

    public function getCorreoTrabajador(){
        return $this->correoTrabajador;
    }

    public function getPasswordTrabajador(){
        return $this->passwordTrabajador;
    }

    public function getTipoTrabajador(){
        return $this->tipoTrabajador;
    }
    
    // SETTER
    public function setIdTrabajador($idTrabajador){
        return $this->idTrabajador = $idTrabajador;
    }
    public function setNombreTrabajador($nombreTrabajador){
        return $this->nombreTrabajador = $nombreTrabajador;
    }
    public function setApellidoTrabajador($apellidoTrabajador){
        return $this->apellidoTrabajador = $apellidoTrabajador;
    }
    public function setCorreoTrabajador($correoTrabajador){
        return $this->correoTrabajador = $correoTrabajador;
    }
    public function setPasswordTrabajador($passwordTrabajador){
        return $this->passwordTrabajador = $passwordTrabajador;
    }
    public function setTipoTrabajador($tipoTrabajador){
        return $this->tipoTrabajador = $tipoTrabajador;
    }
}