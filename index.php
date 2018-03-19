<?php

    require_once('core/core.php');
    if (isset($_GET['view'])){
        if(file_exists(CONTROLLERS . strtolower($_GET['view']) . 'Controller.php')){
            require_once(CONTROLLERS . strtolower($_GET['view']) . 'Controller.php');
	    }else{
		require_once(VIEWS . 'errorPage404.phtml');
	    }   	
	}else{
		require_once(CONTROLLERS. 'indexController.php');
	}
	
?>