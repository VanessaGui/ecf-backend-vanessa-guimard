<?php require_once('header_admin.php');?>
<h1>MODIFIER VOTRE MOT DE PASSE</h1>

<div>
    <form action="index.php?controller=admin&action=modifyPass&id=" method="post">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" value="<?=$adminPass->password?>">
        <label for="pass">Confirmez le mot de passe</label>
        <input type="password" name="pass">
        <input class="form-button" type="submit" name="button" value="VALIDER">
        <input type="hidden" name="postid" value="<?=$adminPass->id_user?>" />
    </form>
</div>