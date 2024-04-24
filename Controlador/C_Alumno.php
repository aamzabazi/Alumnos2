<?php
    require ("Modelo/Conexion.php");
    require ("Modelo/M_Alumno.php");
    /**
     * @author Ahmed
     * @version 1.0
     * @since 1.0.0
     * @package Controlador
     * @requires Modelo/Conexion.php
     * @requires Modelo/M_Alumno.php
     */
    class C_Alumno{

        public $opcion;
        public function capturar_opcion(){
        $opcion='';
        if($_GET){
            if(array_key_exists('opcion',$_GET)){
              $opcion=$_GET['opcion'];
            }
        }
        $this->opcion=$opcion;
      }

      function Accion(){

      }

      /**
       * Llamamos al modelo que ejecuta el codigo de dar de alta 
       */
      public function Alta(){
        if(isset($_POST["EnvEj_Form"])){
            $nome=$_POST["Nombre"];
            $codigo=$_POST["Cod"];
            $nota=$_POST["Nota"];
            $alumno=new M_Alumno($codigo,$nome,$nota);
            if($alumno->creo){
              $aviso="Usuario Creado Correctamente";
              $color="success";
              require("Vista/incluye/Alerta.php");
            }else{
              $aviso="Usuario No Creado. Datos Incorrectos.";
              $color="danger";
              require("Vista/incluye/Alerta.php");
            }
        }
        require ("Vista/AltaForm.php");
      }
      /**
       * Llamamos al modelo de ver todos , en el que nos da el array y lo mostramos requiriendo a la vista.
       */
      public static function Ver_T(){
      
          $datos=M_Alumno::Ver_Todos();
          /* print_r($datos); */
          require ("Vista/Ver_T.php");
      }
      public static function Eliminar(){
        M_Alumno::Eliminar($_GET["id"]);
        $datos=M_Alumno::Ver_Todos();
        require("Vista/Ver_T.php");
      }
      public static function Modificar(){
        
        if(isset($_POST["modificar"])){
          $id=$_POST["id"];
          $nombre=$_POST["Nombre"];
          $nota=$_POST["Nota"];
          M_Alumno::Modificar($id,$nombre,$nota);
          $datos=M_Alumno::Ver_Todos();
          require("Vista/Ver_T.php");
        }else{
          require("Vista/Modificar.php");
        }
        
      }
      public static function Buscar_Al(){
        if(isset($_POST["Buscar"])){
          if($_POST["Buscar"]=="BuscarNombre"){
            $modo="nombre";
            $param=$_POST["Nombre"];
            $datos=M_Alumno::Buscar_Al($modo,$param);
            require ("Vista/Ver_T.php");
          }elseif ($_POST["Buscar"]=="BuscarCod") {
            $modo="codigo";
            $param=$_POST["Cod"];
            $datos=M_Alumno::Buscar_Al($modo,$param);
            require ("Vista/Ver_T.php");
          }
        }else{
          require ("Vista/Buscar_Al.php");
        }
      }
    }
?>