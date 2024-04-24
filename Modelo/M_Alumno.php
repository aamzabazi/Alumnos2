<?php
/**
     * @author Ahmed
     * @version 1.0
     * @since 1.0.0
     * @package Modelo
     */
    class M_Alumno{
        public $cod;
        public $nome;

        //Array de notas.
        public $nota;
        public $creo;
        
        /**
         * Constructor que crea un Alumno
         * @param int $cod codigo del Alumno
         * @param string $nome nome del Alumno
         * @param int $nota nota del Alumno
         * @return boolean devuelve true si se creo correctamente o false si no se creo
         */
        public function __construct($cod,$nome,$nota){
                $this->cod=$cod;
                $this->nome=$nome;
                $this->nota=$nota;
                
                $conexionbd= new Conexion();
                $sql="SELECT * FROM `alumno` WHERE `Cod` = '$cod'";
                $result=$conexionbd->con->query($sql);
                if($result->num_rows>0){
                    $this->creo=false;
                }else{
                    $sql="INSERT INTO alumno (Cod,Nome,Nota) values( '$this->cod' , '$this->nome' , '$this->nota' )";
                $result=$conexionbd->con->query($sql);
                $this->creo=true;
                }
            }
            /**
             * Visualiza Todos los ALUMNOS
             */
        public static  function Ver_Todos(){
            $sql="SELECT * FROM alumno";
            $conexionbd= new Conexion();
            $result=$conexionbd->con->query($sql);
            $datos=[];
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $datos[]=$row;
                }
            }
            return $datos;
        }
        /**
         * Elimina un Alumno
         * @param int $cod codigo del Alumno
         */
        public static function Eliminar($cod){
            $conexionbd= new Conexion();
            $sql="DELETE FROM alumno WHERE Cod=$cod";
            $conexionbd->con->query($sql);
        }
        public static function Modificar($cod,$nombre,$nota){
            $conexionbd= new Conexion();
            $sql="UPDATE `alumno` SET `Nome` = '$nombre' , `Nota` = '$nota' WHERE `alumno`.`Cod` = $cod";
            $conexionbd->con->query($sql);
        }
        /**
         * @param int $modo campo a modificar de la tabla
         * @param string $param valor a introducir
         * @return array|null devuelve un array con los datos
         */
        public static function Buscar_Al($modo,$param){
            $conexionbd= new Conexion();
            if($modo=="nombre"){
                $sql="SELECT * FROM `alumno` WHERE `Nome` = '$param' ";
                $result=$conexionbd->con->query($sql);
                $datos=[];
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $datos[]=$row;
                    }
                    return $datos;
                }
            }elseif ($modo=="codigo") {
                $sql="SELECT * FROM `alumno` WHERE `Cod`= '$param' ";
                $result=$conexionbd->con->query($sql);
                $datos=[];
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $datos[]=$row;
                    }
                    return $datos;
                }
            }
        }
    }
?>