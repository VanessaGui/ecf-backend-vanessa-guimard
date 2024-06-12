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
      $login = strip_tags($_POST['login']);
      $mail = strip_tags($_POST['mail']);
      $pass = strip_tags($_POST['pass']);

      if (!isset($_POST['mail']) || empty($_POST['mail']) || !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) ){
        $query = $db->prepare('INSERT INTO users (login, password, email, role) VALUES (:login, :password, :email, :role)');
        $query->execute([
          'login' => $login,
          'password' => password_hash($pass, PASSWORD_DEFAULT),
          'email' => $mail,
          'role' => 'éditeur',
        ]);
        foreach($query->fetchAll() as $createConnection) {
        $newConnection = new Connection($createConnection['id_user'], $createConnection['login'], $createConnection['password'], $createConnection['email'], $createConnection['role']);
        }
        return $newConnection;
      }
      header('Location: index.php?controller=admin&action=index');
    }

    public static function modifyPassword($id){
      $db = Db::getInstance();
      $id = intval($_POST['postid']);
      $pass = strip_tags($_POST['pass']);
      $query = $db -> prepare('UPDATE users SET password = :pass WHERE id_users = :id');
      $query-> execute([
          'id' => $id,
          'pass' => password_hash($pass, PASSWORD_DEFAULT),
      ]);
      $modifyPassword = $query->fetchAll();
      header('Location: index.php?controller=admin&action=index'); 
    }

    public static function logout($id){
      session_start();
      $_SESSION = [];
      session_destroy();
      header('Location: index.php?controller=accueil&action=index'); 
    }
}
?>