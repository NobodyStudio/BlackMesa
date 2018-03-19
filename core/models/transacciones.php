<?php
class transacciones{
    private $pdo;
    
    public $id;
    public $name;
    public $lasname;
    public $phone;
    public $username;
    public $password;
    public function __construct()
    {
        try{
            $this->pdo = modelsController::conexion();
        }catch{
            die($e->getMessage());
        }
    }
    
    public function Listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("select * from users");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch{
            die($e->getMessage());
        }
    }
    

}