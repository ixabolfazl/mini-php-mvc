<?php


define("BASE_URL","http://yourdomin.com/mvc/");
define("BASE_DIR","/mvc/");


$temp=explode('?',$_SERVER["REQUEST_URI"])[0];

if($temp==BASE_DIR){
    $temp="/mvc/home";
}
$current_route=str_replace(BASE_DIR,"",$temp);
define("DB_HOST","");
define("DB_NAME","");
define("DB_USERNAME","");
<<<<<<< Updated upstream
define("DB_PASSWORD","");
=======
define("DB_PASSWORD","");
>>>>>>> Stashed changes
