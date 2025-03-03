<?php

//incluir la clase pára la conexion a la base de datos
include_once("modelos/conexion.php");

class persona{

    //atributos
    private $id;
    private $placa;
    private $Marca;
    private $cuentadante;
    private $a_cuentadante;

    private $con;

    //metodos

    //conexion
    public function __construct(){
        $this->con=new conexion();

    }

    //set sirve para mandar datos a la bd
    public function set($atributo, $contenido){
        $this->$atributo=$contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function crear(){
        $sql2="SELECT * FROM equipos WHERE placa='{$this->placa}'";
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);

        if ($filas==0) {
            $sql="INSERT INTO equipos (placa,Marca,cuentadante,a_cuentadante) VALUES ('{$this->placa}','{$this->Marca}','{$this->cuentadante}','{$this->a_cuentadante}')";
            $this->con->consultaSimple($sql);
            return true;
        }else{
            return false;
        }
    }

    public function listar(){
        $sql="SELECT * FROM equipos";
        $resultado=$this->con->consultaRetorno($sql);
        return $resultado;
    }
    public function eliminar(){
        $sql="DELETE FROM equipos WHERE id='{$this->id}'";
        echo $sql;
        $this->con->consultaSimple($sql);
    }
    
    public function ver (){
        $sql="SELECT * FROM equipos WHERE id='{$this->id}'";
        $resultado=$this->con->consultaRetorno($sql);
        $row=mysqli_fetch_assoc($resultado); // convertimos el resultado en un array asociativo

        $this->placa=$row['placa'];
        $this->Marca=$row['Marca'];
        $this->cuentadante=$row['cuentadante'];
        $this->a_cuentadante=$row['a_cuentadante'];

        return $row; 
    }


}