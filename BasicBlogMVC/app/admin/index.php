<?php

  // Helper
  foreach (glob(PATH . '/app/admin/helper/*.php') as $helperFile) {
    require_once($helperFile);
  }

  // Add Session Check
  if(!isset($route[1])) $route[1] = 'dashboard';

  if(glob(admin_controller($route[1]))) require_once(admin_controller($route[1]));
  else require_once(admin_controller('dashboard'));


 ?>
