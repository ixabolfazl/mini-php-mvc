<?php
namespace System\Traits;

trait Redirect{

    protected function redirect($url){
        $protocol=stripos($_SERVER['SERVER_PROTOCOL'],"https")===true ? "https://" : "http://";
        header("location: ".$protocol.$_SERVER['HTTP_HOST']."/mvc/".$url);

    }

    protected function back(){
        $http_referer=isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:null;
        if($http_referer!=null){
            header("location: ".$http_referer);
        }
        else{
            echo "route not found!";
        }


    }
}