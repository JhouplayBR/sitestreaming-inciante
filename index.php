<?php 
include('config.php');

if (Users::Check() == false) {
       include('login.php');
}else{
  include('page/inicio.php');
}



?>