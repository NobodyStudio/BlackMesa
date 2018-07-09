<?php
defined('BASEPATH') or exit('No se permite acceso directo');
spl_autoload_register(function ($class) {
  if(is_file(CORE . ucfirst(strtolower("$class.php"))))
    return require CORE . ucfirst(strtolower("$class.php"));
  if(is_file(MODELS . ucfirst(strtolower("$class.php"))))
    return require MODELS . ucfirst(strtolower("$class.php"));
    if(is_file(CONTROLLERS . ucfirst(strtolower("$class.php"))))
    return require CONTROLLERS . ucfirst(strtolower("$class.php"));
});