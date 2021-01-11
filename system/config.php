<?php


define("BASE_URL","http://localhost/mvc/");
define("BASE_DIR","/mvc/");


$temp=explode('?',$_SERVER["REQUEST_URI"])[0];

if($temp==BASE_DIR){
    $temp="/mvc/home";
}
$current_route=str_replace(BASE_DIR,"",$temp);
define("DB_HOST","localhost");
define("DB_NAME","mvc_blog");
define("DB_USERNAME","root");
define("DB_PASSWORD","mysql");