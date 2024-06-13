<?php
  class Articles {
    public $id_article;
    public $titre;
    public $description;
    public $date_article;
    
    public function __construct($id_article, $titre, $description, $date_article) {
      $this->id_article = $id_article;
      $this->titre = $titre;
      $this->description = $description;
      $this->date_article = $date_article;
    }

    public static function select(){ 
      $list =[];
      $db = Db::getInstance();
      $query = $db->prepare('SELECT * FROM article');
      $query->execute();
      foreach($query->fetchAll() as $articles) {
      $list[] = new Articles($articles['id_article'], $articles['titre'], $articles['description'], $articles['date_article']);
      }
      return $list;
    }

    public static function selectSome(){ 
      $list =[];
      $db = Db::getInstance();
      $query = $db->prepare('SELECT * FROM article WHERE id_user = :id');
      $query->execute(['id' => $_SESSION['id_user']]);
      foreach($query->fetchAll() as $articles) {
      $list[] = new Articles($articles['id_article'], $articles['titre'], $articles['description'], $articles['date_article']);
      }
      return $list;
    }

    public static function selectArticle($id){ 
      $db = Db::getInstance();
      $id = intval($id);
      $query = $db->prepare('SELECT * FROM article WHERE id_article =  :id');
      $query->execute(['id' => $id]);
      foreach($query->fetchAll() as $articles) {
      $article = new Articles($articles['id_article'], $articles['titre'], $articles['description'], $articles['date_article']);
      }
      return $article;
    }

    public static function create(){
      $db = Db::getInstance();
      $id = intval($_POST['postid']);
      $title = strip_tags($_POST['titre']);
      $descr = strip_tags($_POST['description']);
      if(isset($title) && !empty($title) && isset($descr) && !empty($descr)) {
          $query = $db->prepare('INSERT INTO article (titre, description, date_article, id_user) VALUES (:titre, :description, :date_article, :id_user)');
          $query->execute([
          'titre' => $title,
          'description' => $descr,
          'date_article' => $_POST['date'],
          'id_user' => $id,
          ]);
          $create = $query->fetchAll();
      } 
        header('Location: index.php?controller=admin&action=index'); 
    }

    public static function modify($id){
      $db = Db::getInstance();
      $id = intval($_POST['postid']);
      $title = strip_tags($_POST['titre']);
      $descr = strip_tags($_POST['description']);
      if (isset($_POST['titre']) AND !empty($_POST['titre'])){
          $query = $db -> prepare('UPDATE article SET titre = :titre, description = :description, date_article = :date, id_user = :id_user WHERE id_article = :id');
          $query-> execute([
              'id' => $id,
              'titre' => $title,
              'description' => $descr,
              'date'=> $_POST['date'],
              'id_user' => $_SESSION['id_user'],
          ]);
          $modify = $query->fetchAll();
      }
        header('Location: index.php?controller=admin&action=index'); 
    }

    public static function delete($id){
      $db = Db::getInstance();
      $id = intval($_GET['id']);
      if (isset($id) AND !empty($id)){
        $del = $db -> prepare('DELETE FROM article WHERE id_article = :id');
        $del -> execute([
            'id' => $id,
        ]);
        $delete = $del->fetchAll();
      }
      header('Location: index.php?controller=admin&action=index'); 
    }
  
}
?>