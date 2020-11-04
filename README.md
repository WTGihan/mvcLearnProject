# mvcLearnProject
MVC Learning Project

IN app->config->config.php
  define("BURL", "Your Public folder URL must be there");
  
  AND
  define("HOST", "HOST SERVERNAME");
  define("USER", "USER NAME");
  define("PASS", "PASSWORD");
  define("DBNAME", "DATABASENAME");
  
  AND
  <form action="<?php url('CLASSNAME/CLASSNAME'S METHOD'); ?>" method="post">
  
  AND
  url('CLASSNAME/CLASSNAME'S METHOD');
  url('');===This is index page it is initialize according to follow this in app->core->app.php
    isset($url[0]) ? ucwords($url[0])."Controller":"HomeController"; 
    When not set $url direct to HomeController and in HomeController view home => view::load('home');
    
  AND
  Database class get as library
  
