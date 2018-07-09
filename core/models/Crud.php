<?php 
    /**
     * Update/Select/Drop/Insert
     */
    class Crud extends model
    {
        public function __construct(){
            parent::__construct();//ejecutando el constructor de model
        }
        public function consultar($tabla, $campos, $postCondicion)
        {
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
            // $sql = "SELECT * FROM users ";
            //echo $sql;
            try {
                foreach($this->conexion->query($sql) as $fila){
                    echo $fila['username']." ".$fila['email']." ".$fila['password']." ";
                }
            } catch (Exception $e) {
                echo $e;
            }
        }
        public function insertar()
        {
            echo "hola soy insertar";
        }
        public function modificar()
        {
            // code...
        }
        public function login($clave, $valor){
            $this->consultar('users','','(email="'.$valor[0].'" or username="'.$valor[0].'") and password='.$valor[1].'');
        }
    }