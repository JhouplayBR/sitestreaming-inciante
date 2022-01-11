<?php 

class Users{


   public static function Check(){
          
          return isset($_SESSION['log_sucess']) ? true : false; 


   }

   public static function Select($var){
   
   $sql = Mysql::connect()->prepare("SELECT * FROM `usuarios_tb` WHERE email_user = ? ");
   $sql->execute(array($var));
   
   if ($sql->rowCount() > 0) {
      return false;
   }else{
      return true;
   }


   }
   public static function Logout(){
      session_destroy();
      header('Location: '.INCLUDE_PATH_LAND);
   }

}

?>