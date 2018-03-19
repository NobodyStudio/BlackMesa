<?php
    include(PUBLIC_FOLDER .'header.html');
    if (isset($_GET["action"]) && is_file(VIEWS . $_GET["action"].'.php')) {
        $request=$_GET["action"];
        require_once(VIEWS . $request.'.php');
    }else if ($_GET["action"] == "index") {
        $request=$_GET["action"];
        require_once(VIEWS . 'menuPrincipal.php');
    }else{
        require_once(VIEWS . 'errorPage404.phtml');
    }
    include(PUBLIC_FOLDER .'footer.html');
    
?>