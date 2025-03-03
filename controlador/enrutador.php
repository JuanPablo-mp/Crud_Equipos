<?php

class Enrutador{

    
    public function cargarVista($vista){

        echo"la vista acargar es... $vista  <br>";
        
        switch ($vista){

            case 'crear';
            include_once("vistas/" . $vista . ".php");
            break;

            case 'ver';
            include_once("vistas/" . $vista . ".php");
            break;

            case 'editar';
            include_once("vistas/" . $vista . ".php");
            break;
            
            case 'eliminar';
            include_once("vistas/" . $vista . ".php");
            break;
            
            default:
            include_once("vistas/error404.php");
        }
    }


    public function validarVista($variable){
        if(empty($variable)){
            include_once("vistas/inicio.php");
        }else{
            return true;
        }
    }

}

?>