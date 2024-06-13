<?php require_once('header_admin.php');?>
<h1>CRÉER UNE BONNE PRATIQUE</h1>

<div>
    <form action="index.php?controller=admin&action=createArticle" method="post">
        <label for="titre">Titre</label>
        <input type="text" name="titre">
        <label for="description">Description</label>
        <textarea name="description"></textarea>
        <label for="date">Date</label>
        <input type="date" name="date">
        <input class="form-button" type="submit" name="button" value="VALIDER"></input>
        <input type="hidden" name="postid" value="<?=$_SESSION['id_user']?>" />
    </form>
</div>