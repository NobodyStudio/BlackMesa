<?php
    //Condición para acceder al index.php declarando si existe tal archivo
    if (file_exists("index.php")) {
    	header('Location:?view=vistas&action=index');
    }else {
    	header('Location:?view=vistas&action=error404');
    }
?>