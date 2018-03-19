<?php 
    /////////////////////
    // Conf: MVC
    /////////////////////
    
    define('CORE', 'core/');
    define('HTML_CORE', 'html/');
    define('PUBLIC_FOLDER', HTML_CORE.'/public/');
    define('MODELS', CORE.'models/');
    define('CONTROLLERS', CORE.'controllers/');
    define('VIEWS', HTML_CORE . 'overall/');
    
    /////////////////////
    // Conf: database
    /////////////////////
    
    define('BD_SERVER', 'localhost');
    define('BD_NAME', 'tradearte_studio');
    define('BD_USER', 'elalexoh');
    define('BD_PASSWORD', '');
    define('BD_PORT', '3306');
    
    /////////////////////
    // Conf: Otros
    /////////////////////
    
    define('LIBS', VIEWS.'libs/');
    
?>