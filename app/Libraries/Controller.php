<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controller{
    // Load model
   
    public function model($model){
      // Require model file
      require_once 'app/Model/' . $model . '.php';
      
      // Instatiate model
      return new $model();
    }
   

    // Load view
    public function view($view, $data = array()){
      // Check for view file
      if(file_exists('resources/views/frontend/' . $view . '.php')){
        require_once 'resources/views/frontend/' . $view . '.php';
      }elseif(file_exists('resources/views/admin/' . $view . '.php')){
        require_once 'resources/views/admin/' . $view . '.php';
      }else {
        if(file_exists('resources/views/errors/' . $view . '.php')){
          require_once 'resources/views/errors/' . $view . '.php';
        }
        
      }
    }
  }