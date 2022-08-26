<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('Livre');
RequirePage::requireModel('Categorie');
RequirePage::requireModel('Auteur');
RequirePage::requireLibrary('Validation');
RequirePage::requireLibrary('CheckSession');



class ControllerLivre{

    public function index(){
     
      return Twig::render('livre-index.php');

    }

    public function list(){


        $livre = new ModelLivre;
        $select = $livre->select();
        
        return Twig::render('livre-list.php', ['livres' => $select]);

        
    }

    public function pdf(){

      

      $livre = new ModelLivre;
      $select = $livre->select();
      
      return Twig::render('pdf.php');

      
    }
    
    
    public function auteur(){

      return Twig::render('auteur-insert.php');
      
    }

    public function create(){

      $categories = new ModelCategorie;
      $categories = $categories->select();

      $Auteurs = new ModelAuteur;
      $Auteurs = $Auteurs->select();
      

      return Twig::render('livre-insert.php', ['categories'=> $categories, 'auteurs' => $Auteurs]);

    }
    
    public function store(){
      

        extract($_POST);
        $livre = new ModelLivre;
        $insert = $livre->insert($_POST);
        RequirePage::redirect('livre/list');

       
    }
    
    public function modifier(){
      
        extract($_POST);
        
        $livre = new ModelLivre;

        $insert = $livre->update($_POST);

        RequirePage::redirect('livre/list');

    }

    

    public function edit($value){

      CheckSession::SessionAuth();

      $livre = new ModelLivre;
      $selectId = $livre->selectId($value);

      $categories = new ModelCategorie;
      $categories = $categories->select();

      $Auteurs = new ModelAuteur;
      $Auteurs = $Auteurs->select();

      return Twig::render('livre-edit.php', ['livre' => $selectId, 'categories' => $categories, 'Auteurs' => $Auteurs]);

    }

    public function delete($id){

      $livre = new ModelLivre;
      $delete = $livre->delete($id);

      RequirePage::redirect('livre/list'); 
  }

  public function storeAuteur(){
    

      extract($_POST);
      $auteur = new ModelAuteur;
      $insert = $auteur->insert($_POST);
      RequirePage::redirect('../livre/list');

  }

}




