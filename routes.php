<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'accueil':
        require_once('models/articles.php');
        require_once('models/accueilConnection.php');
        $controller = new AccueilController();
      break;
      case 'admin':
        require_once('models/articles.php');
        require_once('models/accueilConnection.php');
        $controller = new AdminController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('accueil' => ['error', 'article', 'connect', 'createConnexion', 'index', 'select', 'selectSome'],
                       'admin' => ['createArticle', 'creer', 'index', 'modifier_mdp', 'modifierPass', 'modifier', 'modifyArticle', 'modifyPass', 'deleteArticle', 'logout']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('accueil', 'error');
    }
  } else {
    call('accueil', 'error');
  }
?>