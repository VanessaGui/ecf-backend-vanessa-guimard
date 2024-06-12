<?php
  class AdminController {
    public function index() {
      $admin = Articles::select();
      require_once('views/administration/index.php');
    }

    public function creer() {
      require_once('views/administration/creer.php');
    }
    public function modifier() {
      $adminArticle =  Articles::selectArticle();
      require_once('views/administration/modifier.php');  
    }

    public function createArticle() {
      $AdminCreate =  Articles::create();
      require_once('views/administration/creer.php');
    }

    public function modifyArticle() {
      if (!isset($_GET['id']))
        return call('accueil', 'error');

      $AdminModify =  Articles::modify($_GET['id']);
      require_once('views/administration/index.php');
    }
    
    public function deleteArticle() {
      if (!isset($_GET['id']))
        return call('accueil', 'error');
      
      $AdminDelete =  Articles::delete($_GET['id']);
      require_once('views/administration/index.php');
    }
  }
?>