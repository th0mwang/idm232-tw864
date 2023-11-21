<?php
  consoleMsg("env.php file LOADED!");

  $domain = $_SERVER['HTTP_HOST'];
  consoleMsg("Domain is: $domain" );

  if ($domain == 'localhost') {
    $APP_CONFIG = [
      'environment' => 'local',
      'site_url' => 'http://localhost/',
      'database_host' => 'localhost',
      'database_user' => 'root',
      'database_pass' => 'root',
      'database_name' => 'idm232',
    ];  
  } else {
    $APP_CONFIG = [
      'environment' => 'live',
      'site_url' => 'https://www.thwang.io/',
      'database_host' => 'mysql.thwang.io',
      'database_user' => 'thwang',
      'database_pass' => 'Kazinga3758',
      'database_name' => 'thwang_idm232',
    ];
  
  }

  // Specific to the current environment you're on.
  
  
?>