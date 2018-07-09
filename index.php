<?php
	define('BASEPATH', true);
    require_once('core/core.php');
    require_once(CORE. 'autoload.php');
    if (isset($_GET['view'])){
        if(file_exists(CORE . ucfirst(strtolower($_GET['view'])) . '.php')){
            require_once(CORE . ucfirst(strtolower($_GET['view'])) . '.php');
	    }else{
			header('Location:?view=router&action=error404');
	    }   	
	}else{
		header('Location:?view=router&action=index');
	}
	
?>