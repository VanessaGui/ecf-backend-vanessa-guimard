<?php
  class AdminController {

    public function __construct() {
      session_start();
      if (!isset($_SESSION['id_user'])) {
          header('Location: index.php?controller=accueil&action=connect');
          exit();
      }
  }
    public function index() {
      $admin = Articles::select();
      $editeur = Articles::selectSome();
      require_once('views/admin/index.php');
    }

    public function select() {
     
      require_once('views/admin/index.php');
    }

    public function creer() {
      require_once('views/admin/creer.php');
    }
    public function modifier() {
      $adminArticle =  Articles::selectArticle($_GET['id']);
      require_once('views/admin/modifier.php');  
    }

    public function modifierPass() {
      $adminPass =  AccueilConnection::selectUser($_GET['id']);
      require_once('views/admin/modifier_mdp.php');  
    }

    public function createArticle() {
      $AdminCreate =  Articles::create();
      require_once('views/admin/creer.php');
    }

    public function modifyArticle() {
      if (!isset($_GET['id']))
        return call('accueil', 'error');

      $AdminModify =  Articles::modify($_GET['id']);
      require_once('views/admin/index.php');
    }
    
    public function deleteArticle() {
      if (!isset($_GET['id']))
        return call('accueil', 'error');
      
      $AdminDelete =  Articles::delete($_GET['id']);
      require_once('views/admin/index.php');
    }

    public function modifyPass() {
      $newPassword = AccueilConnection::modifyPassword($_GET['id']);
      require_once('views/admin/index.php');
    }

    public function logout() {
      session_start();
      $_SESSION = [];
      session_destroy();
      header('Location: index.php?controller=accueil&action=index'); 
      exit();
    }
  }
?>