# mvcLearnProject
**MVC Learning Project**


*Define URL*
- IN app->config->config.php define(*"BURL", "Your Public folder URL must be there"*)
 
*Configure Database* 
- define("HOST", "HOST SERVERNAME"), define("USER", "USER NAME"), define("PASS", "PASSWORD"), define("DBNAME", "DATABASENAME")


*Redirection_Method*
- url(*'CLASSNAME/CLASSNAME'S METHOD'*)
  - url('');===This is index page it is initialize according to follow this in app->core->app.php
  - isset($url[0]) ? ucwords($url[0])."Controller":"HomeController"
  - When not set $url direct to HomeController and in HomeController view home => view::load('home')

*Library*
- Database class get as library
  
