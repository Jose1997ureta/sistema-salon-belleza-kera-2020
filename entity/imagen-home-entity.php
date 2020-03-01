<?php
class imagenHomeEntity {

    public $idImagen;
    public $tipoLang;
    public $tituloImagen;
    public $imagen;
    public $flagImagen;
    
    // GETTER
    public function getIdImagen(){
        return $this->idImagen;
    }

    public function getTipoLang(){
        return $this->tipoLang;
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
    public function setTipoLang($tipoLang){
        return $this->tipoLang = $tipoLang;
    }
    
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