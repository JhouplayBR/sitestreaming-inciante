<?php 

class Mysql{

  private static $pdo;

  public static function connect(){

   try {
   	 
   	 self::$pdo = new PDO ("mysql:host=".host.";dbname=".dbname,user,pass);

   	 return self::$pdo;

   } catch (Exception $e) {
   	echo 'Site não esta funcionando';
   }


  }


}


?>