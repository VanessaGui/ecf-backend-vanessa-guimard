<?php
  class AccueilController {
    public function index() {
      $accueil = Articles::select();
      require_once('views/accueil/index.php');
    }

    public function article() {
      $articleLire = Articles::selectArticle($_GET['id']);
      require_once('views/accueil/article.php');
    }

    public function error() {
      require_once('views/accueil/error.php');
    }

    public function connect() {
      $connect = AccueilConnection::login();
      require_once('views/accueil/connect.php');
    }

    public function createConnexion() {
      $newConnect = AccueilConnection::createConnection();
      require_once('views/accueil/connect.php');
    }

  }
?>