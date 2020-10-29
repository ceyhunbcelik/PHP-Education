<?php

  function controller($controllerName){
    return PATH . '/app/controller/' . strtolower($controllerName) . '.php';
  }

  function view($viewName){
    return PATH. '/app/view/' . strtolower($viewName) . '.php';
  }

  function css($fileName){
    return URL . '/public/css/' . strtolower($fileName) . '.css';
  }

 ?>
