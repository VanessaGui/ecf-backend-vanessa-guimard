<DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire éco-pratiques</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script type="module" src="script.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <?php if ( $controller = 'accueil'){ ?>
          <a href='?controller=accueil&action=index'>Accueil</a>
          <a href='?controller=accueil&action=connect'>Se connecter</a>
        <?php  } else if ( $controller = 'administration'){  ?>
          <a href='?controller=administration&action=index'>Administration</a>
          <a href='?controller=accueil&action=deconnect'>Se déconnecter</a>
        <?php } ?>
      <nav>
    </header>

    <?php require_once('routes.php'); ?>

  <body>
<html>
