<?php 
    class modelsController{
        
        public static function conexion(){
            $pdo = new PDO('mysql:host=localhost;dbname=tradearte_studio;charset=utf8','root','');
            $pdo->setAttribute(PDO::ATT_ERRMODE, PDO::EERMODE_EXCEPTION);
            return $pdo;
        }
    }