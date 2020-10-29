<?php

  function admin_controller($controllerName){
    return PATH . '/app/admin/controller/' . strtolower($controllerName) . '.php';
  }

  function admin_view($viewName){
    return PATH . '/app/admin/view/' . strtolower($viewName) . '.php';
  }

  function admin_css($fileName){
    return URL . '/public/css/admin/' . strtolower($fileName) . '.css';
  }

 ?>
