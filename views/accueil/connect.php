<?php require_once('header_accueil.php');?>
<h1>Éco pratiques</h1>
<hr>
<div>
    <div>
        <h2>Se connecter</h2>
        <form action="index.php?controller=accueil&action=connect" method="post">
            <label for="login">Login</label>
            <input type="text" name="login">
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass">
            <input class="form-button" type="submit" name="button" value="VALIDER">
        </form>
    </div>
    <hr>
    <div>
        <h2>Créer un compte</h2>
        <form action="index.php?controller=accueil&action=createConnexion" method="post">
            <label for="newlogin">Login</label>
            <input type="text" name="newlogin">
            <label for="mail">Email</label>
            <input type="email" name="mail">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp">
            <input class="form-button" type="submit" name="button" value="VALIDER">
        </form>
    </div>
</div> 
