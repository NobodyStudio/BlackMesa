<?php 
    /**
     * Update/Select/Drop/Insert
     */
    class Crud extends model{
        
        public function __construct(){
            parent::__construct(); //Ejecutando el constructor de la clase Model (Conexion)
        }
        
        public function consultar($tabla, $campos, $postCondicion){
            if (empty($campos)) {
                $campos="*";
            } else {
                $campos=$campos;
            }
            
            if (empty($postCondicion)) {
                $postCondicion="";
            } else {
                $postCondicion="WHERE ".$postCondicion;
            }
            
            $sql = "SELECT ".$campos." FROM ".$tabla." ".$postCondicion;
            try {
                if ($this->conexion->query($sql)) {
                    echo "Login Exitoso";
                }else{
                    // header("Location: ?view=router&action=index");
                    echo "La cuenta no existe";
                }
                // foreach($this->conexion->query($sql) as $fila){
                //     // echo $fila['username']." ".$fila['email']." ".$fila['password']." ";
                //     echo "Login Exitoso";
                // }
            } catch (Exception $e) {
                echo $e;
            }
        }
        
        public function insertar(){
            
            echo "hola soy insertar";
        }
        public function modificar(){
            echo "hola soy modificar";   
        }
        public function login($valor){
            $this->consultar('usuarios','','(email="'.$valor[1].'" or username="'.$valor[1].'") and password='.$valor[2].'');
        }
    }