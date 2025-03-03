<?php
    class conexion{
        
        //atributos
        private $host;
        private $user;
        private $pass;
        private $bd;
        private $con;

        //metodos
        public function __construct(){
            $this->host="localhost";
            $this->user="root";
            $this->pass="";
            $this->bd="hermes";


            $this->con=mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
            if(mysqli_errno($this->con)){
                echo "fallo la conexion a $this->bd";
            }
            else{
                echo "conexion exitosa a $this->bd";
            }
        }

        public function consultaRetorno($sql){
            $consulta=mysqli_query($this->con,$sql);
            return $consulta;
        }

        public function consultaSimple($sql){
            mysqli_query($this->con,$sql);
        }


    }
    $miconexion= new conexion();

?>