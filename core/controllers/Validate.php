<?php 
/**
 * Recibe las peticiones hechas en la vista y se las pasa al modelo
 */
class Validate
{
    public function __construct(){
        $i=0;
        foreach ($_POST as $k =>$v){ 
            
            $clave[$i]=$clave[$i].$k." ";
            $valor[$i]=$valor[$i].$v." ";
            $i=$i+1;
            
        }

        $this->validacion($valor, $clave); 
        // $bd= new Crud();
        // $bd->login($clave, $valor);
    }
    
    public function validacion($valor, $clave){
        // var_dump($valor);
        $found = false;
        for ($i = 1; $i < count($valor); $i++) {
            // print_r($clave);
            if (strlen($valor[$i])<=1) {
                // echo "<script>alert('".$clave[$i]." Esta Vacio');</script>";
                // echo " ".$clave[$i]."esta vacio ";
             }else{
                //  echo "hola";
                // $found = true;
                // if ($found != false) {
                //     $limpio = str_replace(" ", "", $clave[0]);
                //     // echo " ".$valor[0]." ";
                //     $bd= new Crud();
                //     $bd->$limpio($valor);
                //     break;
                // }
            }
        }
        // $bd= new Crud();
        // $bd->$limpio($valor);

        // for ($i = 0; $i < count($valor); $i++) {
        //      if (!empty($valor)) {
        //         // print_r($valor);
        //         // echo $valor[$i].' asd';
        //      }else if ($valor==''){
        //         // echo "nope ";
        //      }else{
        //         // echo "nope2 ";
        //      }
        // }
        // if (!empty($valor)) {
        //     for ($i = 0; $i < count($valor); $i++) {
        //         $aux=$valor[$i]." ".$valor[$i];
        //         echo $aux;
        //     }
        // }else{
        //     echo "nope";
        // }
    }
    
}