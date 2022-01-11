<?php

session_start();

$autoload = function($class){
      include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH_LAND','http://localhost/fanmade/');
define('INCLUDE_PATH_PAGE','http://localhost/fanmade/page/');
define('INCLUDE_PATH_MOVIES','http://localhost/fanmade/page/movies/');

//Connection with database//
define('host', 'localhost');
define('user', 'root');
define('dbname','fanmade_db');
define('pass', '');





?>