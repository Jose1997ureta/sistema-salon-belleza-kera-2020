<?php
    $filename_1 = "../core/configuration-router.php";
    $filename_2 = "core/configuration-router.php";

    if(file_exists($filename_1)){
        include $filename_1;
    }else{
        include $filename_2;
    }

    class conexion {
        public static function connect(){
            $conexion = mysqli_connect(SERVER,USER,PASSWORD,DATABASE,PUERTO);

            if(!$conexion){
                echo "Error: No se puedo conectar a MYSQL." . PHP_EOL;
                echo "Errno de depuración." . mysqli_connect_errno() . PHP_EOL;
                echo "Error de depuración." . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            return $conexion;
        }
    }