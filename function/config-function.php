<?php 
if(file_exists("../model/conexion.php")){
    require_once "../model/conexion.php";
    require_once "../core/configuration-router.php";
}else{
    require_once "model/conexion.php";
    require_once "core/configuration-router.php";
}

class config_function {

    public static function obtenerLista($procedure){
        $lista = array();
        if($query = mysqli_query(conexion::connect(),$procedure)){
            if(mysqli_num_rows($query) !== 0){
                while($row = mysqli_fetch_assoc($query)){
                    $lista[] = $row;
                }
            }else{
                $lista = null;
            }
        }else {
            $lista = null;
        }
    
        return $lista;
    }

    public static function ejecutarConsulta($procedure){
        return mysqli_query(conexion::connect(),$procedure);
    }

    public static function validarMetodos($method,$value){
        $valorCampo = "";
        if($method === "POST"){
            if(isset($_POST[$value])) $valorCampo = $_POST[$value];
        }else if($method === "GET"){
            if(isset($_GET[$value])) $valorCampo = $_GET[$value];
        }else if($method === "SESSION"){
            if(isset($_SESSION[$value]) && $_SESSION[$value] != null && $_SESSION[$value] != "" && count($_SESSION[$value])){
                $valorCampo =  true;
            }
        }else if($method === "FILES"){
            if($_FILES[$value]["name"]!= ""){
                $valorCampo = true;
            }
        }

        return trim($valorCampo);
    }

    public static function convertirCadena($lista){
        $cadena = "";

        if($lista != null){
            for($i = 0; $i < count($lista); $i++){
                $cadena .= implode("|",$lista[$i])."~";
            }
        }
    
        $cadena = substr($cadena,0,-1);

        return $cadena;
    }

    public static function validarDirectorio($ruta){
        if(!file_exists($ruta)){
            mkdir($ruta,0777,true);
        }
    }

    public static function validarVariablesExistentes($parametro){
        if($parametro != "" && $parametro != null && count($parametro) != 0 ){
            return true;
        }else{
            return false;
        }
    }

    public static function generarUrlDinamico($id,$url){
        if($id === ""){
            $url = $url;
        }else{
            $url = $id.'-'.$url;
        }
        $url = trim($url);
        $url = str_replace(
            array('á','à','ä','â','ª','Á','À','Ä','Â','A'),'a',$url
        );
    
        $url = str_replace(
            array('é','è','ë','ê','É','È','Ë','Ê','E'),'e',$url
        );
    
        $url = str_replace(
            array('í','ì','ï','î','I','Ì','Ï','Î','Í'),'i',$url
        );
    
        $url = str_replace(
            array('ó','ò','ö','ô','Ó','Ò','Ö','Ô','O'),'o',$url
        );
    
        $url = str_replace(
            array('ú','ù','ü','û','Ú','Ù','Ü','Û','U'),'u',$url
        );
    
        $url = str_replace(
            array('ñ','Ñ','ç',"Ç"),
            array('n','N','c','C'),$url
        );
    
        $url = str_replace(
            array("\\","¨","º","°","-","#","@","|","!","¡","\","."$","%","&","/","(",")","?","¿","'","[","]","^"," "),'-',$url
        );

        $url = str_replace(
            array("`","´","*","+","{","}",">","<",",",";",":","_"),'',$url
        );
    
        return strtolower($url);
    }

}