<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){

        header("location: https://e2196079.webdev.cmaisonneuve.qc.ca/TP-3-php-MVC/".$url);
        
    }

    static function absolutPath($page){

        return 'https://e2196079.webdev.cmaisonneuve.qc.ca/TP-3-php-MVC/'.$url;

    }

    static function requireLibrary($page){

        return require_once 'library/'.$page.'.php';

    }
}