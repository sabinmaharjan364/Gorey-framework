<?php
// Load Config
  require_once 'config/config.php';
  require_once 'config/session.php';
  require_once 'config/helpers.php';
  // require_once '../../../config/libcommon.php';
  spl_autoload_register(function($className){
    $fullpath='app/Libraries/' . $className . '.php';
    if(!file_exists($fullpath)){
      return false;
    }
    require_once $fullpath;
    
  });
  


  ?>  