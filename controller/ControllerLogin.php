<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('User');
RequirePage::requireModel('Livre');
RequirePage::requireLibrary('Validation');


    class ControllerLogin {
    
        public function index(){
            if($_SESSION) {
                RequirePage::redirect('livre/list');
            }else {
                return Twig::render('login-index.php');
            }
            
        }

        public function authentication(){
            
            extract($_POST);
            
            $user = new ModelUser();
            $checkuser = $user->checkuser($username, $password);

        }

        public function logout(){   
            
            session_destroy();
            RequirePage::redirect('livre/list');

            
        }

    }


?>