<?php require_once('header_admin.php');?>
<h1>ADMINISTRATION</h1>
<hr>

<div class="container-admin">
    <a href="index.php?controller=admin&action=creer">Créer une nouvelle pratique</a>
    <p>Modifier une pratique</p>
        <?php
            if($_SESSION['role'] === "administrateur"){
                foreach ($admin as $key){?>
            <ul> 
                <a href="?controller=admin&action=modifier&id=<?=$key->id_article?>">&#8594; <?=$key->titre ?></a>
            </ul> 
        <?php }} else {
            foreach ($editeur as $edit){?>
            <ul> 
                <a href="?controller=admin&action=modifier&id=<?=$edit->id_article?>">&#8594; <?=$edit->titre ?></a>
            </ul> 
       <?php }}?> 
    <p>Supprimer une pratique</p>
        <?php 
            if($_SESSION['role'] === "administrateur"){
                foreach ($admin as $key){?>
            <ul> 
                <a class="delete" href="?controller=admin&action=deleteArticle&id=<?=$key->id_article?>">&#8594; <?=$key->titre ?></a>
            </ul>
        <?php }} else {
            foreach ($editeur as $edit){?>
            <ul> 
                <a class="delete" href="?controller=admin&action=deleteArticle&id=<?=$edit->id_article?>">&#8594; <?=$edit->titre ?></a>
            </ul>
            <?php }}?> 
</div>     
<hr>
<div class="container-admin">
    <a href="?controller=admin&action=modifierPass&id=<?=$_SESSION['id_user']?>">Modifier votre mot de passe</a>
</div> 