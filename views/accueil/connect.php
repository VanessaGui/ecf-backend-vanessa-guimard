<h1>Éco pratiques</h1>
<div>
    <div>
        <h2>Se connecter</h2>
        <form action="index.php?controller=accueil&action=connect" method="post">
            <label for="login">Login</label>
            <input type="text" name="login">
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass">
            <input type="submit" name="button" value="VALIDER">
        </form>
    </div>
    <hr>
    <div>
        <h2>Créer un compte</h2>
        <form action="index.php?controller=accueil&action=createConnection" method="post">
            <label for="login2">Login</label>
            <input type="text" name="login2">
            <label for="mail">Email</label>
            <input type="email" name="mail">
            <label for="pass2">Mot de passe</label>
            <input type="password" name="pass2">
            <input type="submit" name="button" value="VALIDER">
    </form>
    </div>
</div> 
