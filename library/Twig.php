<?php

class Twig{
  static public function render($template, $data = array()){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
    $twig->addGlobal('path', 'https://e2196079.webdev.cmaisonneuve.qc.ca/TP-3-php-MVC/');
    $twig->addGlobal('session',$_SESSION);
    if(isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint']==md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])){
      $guest = false;
    } else{
        $guest = true;
    }
    $twig->addGlobal('guest', $guest);

    echo $twig->render($template, $data);
    
  }
}