<?php
class AccueilConnection {
      public $id_user;
      public $login;
      public $password;
      public $email;
      public $role;
     
      public function __construct($id_user, $login, $password, $email, $role) {
        $this->id_user = $id_user;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
      }
  
    public static function login(){
      session_start();
      $db = Db::getInstance();
      if (isset($_POST['login']) && isset($_POST['pass'])){
        $login = strip_tags($_POST['login']);
        $pass = strip_tags($_POST['pass']);
      
        $query = $db->prepare('SELECT * FROM users WHERE login = :login');
        $query->execute([
            'login' => $login
        ]);
        $users = $query->fetchAll();
        foreach ($users as $user) {
          if (password_verify($pass, $user['password'])) {
              $_SESSION['login'] = $login;
              $_SESSION['role'] = $user['role'];
              $_SESSION['id_user'] = $user['id_user'];  
          }
        } header('Location: index.php?controller=admin&action=index');
      }
    }

    public static function createConnection(){ 
      $db = Db::getInstance();
      if (isset($_POST['mail']) || !empty($_POST['mail']) || filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) ){
        $login2 = strip_tags($_POST['newlogin']);
        $mail = strip_tags($_POST['mail']);
        $pass2 = strip_tags($_POST['mdp']);
        $query = $db->prepare('INSERT INTO users (login, password, email, role) VALUES (:login, :password, :email, :role)');
        $query->execute([
          'login' => $login2,
          'password' => password_hash($pass2, PASSWORD_DEFAULT),
          'email' => $mail,
          'role' => 'éditeur',
        ]);
        foreach($query->fetchAll() as $createConnection) {
        $newConnection = new AccueilConnection($createConnection['id_user'], $createConnection['login'], $createConnection['password'], $createConnection['email'], $createConnection['role']);
        }
        header('Location: index.php?controller=accueil&action=connect');
      }
      
    }

    public static function selectUser($id){ 
      $db = Db::getInstance();
      $id = intval($id);
      $query = $db->prepare('SELECT * FROM users WHERE id_user =  :id');
      $query->execute(['id' => $id]);
      foreach($query->fetchAll() as $users) {
      $user = new AccueilConnection($users['id_user'], $users['login'],  $users['password'],  $users['email'], $users['role']);
      }
      return $user;
    }

    public static function modifyPassword($id){
      $db = Db::getInstance();
      $id = intval($_POST['postid']);
      $pass = strip_tags($_POST['mdp']);
      $password = strip_tags($_POST['pass']);
      if($pass = $password){
        $query = $db -> prepare('UPDATE users SET password = :pass WHERE id_user = :id');
        $query-> execute([
            'id' => $id,
            'pass' => password_hash($pass, PASSWORD_DEFAULT),
        ]);
        $modifyPassword = $query->fetchAll();}
        header('Location: index.php?controller=admin&action=index'); 
      
    }

  
}
?>