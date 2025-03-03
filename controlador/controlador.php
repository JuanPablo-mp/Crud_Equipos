<?php
include_once("modelos/personas.php");

class controladorPersona{
    //atributo
    private $persona;

    //metodos
    public function __construct(){
        $this->persona=new persona();
    }

    public function index(){
        $resultado=$this->persona->listar();
        return $resultado;
    }
    public function eliminar($id){
        $this->persona->set("id",$id);
        $this->persona->eliminar();
    }
    
    public function ver ($id){
        $this->persona->set ("id",$id);
        $resultado=$this->persona->ver();
        return $resultado;
    }

    public function crear ($placa,$marca,$cuentadante,$a_cuentadante){
        $this->persona->set("placa",$placa);
        $this->persona->set("Marca",$marca);
        $this->persona->set("cuentadante",$cuentadante);
        $this->persona->set("a_cuentadante",$a_cuentadante);
        
        $resultado=$this->persona->crear();
        return $resultado;
        
    }

    
}