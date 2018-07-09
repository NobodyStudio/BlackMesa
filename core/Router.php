<?php
    /**************************************************************************/
    
    /***************************Vistas*****************************************/
    $request=strtolower($_GET["action"]);
    if (isset($request) && is_file(VIEWS . $request.'.php')) {
        include(PUBLIC_FOLDER .'header.html');
        include(VIEWS . $request.'.php');
        include(PUBLIC_FOLDER .'footer.html');
    }else if ($request == "index") {
        include(PUBLIC_FOLDER .'header.html');
        include(VIEWS . 'menuPrincipal.php');
        include(PUBLIC_FOLDER .'footer.html');
    /***************************Modelo*****************************************/
    }else if (isset($request) && is_file(MODELS . ucfirst($request).'.php')) {
        include(MODELS . ucfirst($request).'.php');
    /***************************Controlador************************************/
    }else if (isset($request) && is_file(CONTROLLERS . ucfirst($request).'.php')) {
        include(CONTROLLERS . ucfirst($request).'.php');
    }else{
        include(PUBLIC_FOLDER .'header.html');
        include(VIEWS . 'error404.php');
        include(PUBLIC_FOLDER .'footer.html');
    }
    /**************************************************************************/
    
    
?>