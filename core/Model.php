<?php
    /**
     * Clase Conexion
     */
    // include('../core.php');
    class model{
        protected $conexion;
        public function __construct(){
            $dsn = 'mysql:dbname='.BD_NAME.';host='.BD_SERVER;
            $usuario = BD_USER;
            $contraseña = BD_PASSWORD;
            try {
                $this->conexion = new PDO($dsn, $usuario, $contraseña);
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
                return null;
            }
        }
        
        // public function consultar(){
        //     if (empty($campo)) {
        //         $query="Select * FROM ".$tabla;
        //     }else{
        //         $query="Select ".$campo." FROM ".$tabla;
        //     }
        //     foreach($conexion->query("SELECT * FROM users") as $fila) {
        //         echo $fila['username'].' | ';
        //         //  print_r($fila);
        //     }
            
        // }

    }