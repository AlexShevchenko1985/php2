<?php
function __autoload($className){
    $filename = str_replace('\\', '/', $className);
    $path = __DIR__.'/'.$filename.'.php';
    require $path;
}