<?php 

spl_autoload_register(function($lass){
    require_once 'Core/'.$class.'.php';
});