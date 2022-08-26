<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){

        header("location: http://khalil/poo/TP-2-php/".$url);
        
    }

    static function absolutPath($page){

        return 'http://khalil/poo/TP-2-php/'.$url;

    }

    static function requireLibrary($page){

        return require_once 'library/'.$page.'.php';

    }
}