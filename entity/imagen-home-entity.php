<?php
class imagenHomeEntity {

    public $idImagen;
    public $tituloImagen;
    public $imagen;
    public $flagImagen;
    
    // GETTER
    public function getIdImagen(){
        return $this->idImagen;
    }

    public function getTituloImagen(){
        return $this->tituloImagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getFlagImagen(){
        return $this->flagImagen;
    }

    // SETTER
    public function setIdImagen($idImagen){
        return $this->idImagen = $idImagen;
    }
    public function setTituloImagen($tituloImagen){
        return $this->tituloImagen = $tituloImagen;
    }
    public function setImagen($imagen){
        return $this->imagen = $imagen;
    }
    public function setFlagImagen($flagImagen){
        return $this->flagImagen = $flagImagen;
    }
}