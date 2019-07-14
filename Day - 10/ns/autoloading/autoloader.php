<?php
spl_autoload_register(function($className){
    $path = strtolower(str_replace("CloudStorage\\","",$className)).".php";
    include_once($path);
});