<?php 
/**
 * Recibe las peticiones hechas en la vista y se las pasa al modelo
 */
class Controller
{
    public function __construct()
    {
        print_r($_POST);
    }
    public function get(){
        echo "hola mundo";
    }
    
}
//$obj = new Controller();
