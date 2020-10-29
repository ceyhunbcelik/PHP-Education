<?php

  require_once('app/CeyhunPHP/CeyhunMVC.php');

  $route = route();

  if(glob(controller($route[0]))) require_once(controller($route[0]));

 ?>
