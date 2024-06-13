<?php require_once('header_admin.php');?>
<h1>MODIFIER UNE PRATIQUE</h1>

<div>
    <form action="index.php?controller=admin&action=modifyArticle&id=" method="post">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="<?=$adminArticle->titre?>">
        <label for="description">Description</label>
        <textarea name="description" placeholder=""><?=$adminArticle->description?></textarea>
        <label for="date">Date</label>
        <input type="date" name="date">
        <input class="form-button" type="submit" name="button" value="VALIDER"></input>
        <input type="hidden" name="postid" value="<?=$adminArticle->id_article?>" />
    </form>
</div>