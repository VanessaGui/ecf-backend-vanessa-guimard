<?php require_once('header_accueil.php');?>
<h1>Éco pratiques</h1>
<hr>
<div class="container">
    <div class="container-content">
    <?php arsort($accueil);
    foreach (array_slice($accueil, 0, 3) as $index){ ?>
        <div class="content">
            <h2><?=$index-> titre?></h2>                
            <p><?=substr($index-> description,0, 200)?> ...</p>
            <p></p>
            <div>Le <?=date('d-m-y', strtotime($index-> date_article))?></div>
            <div class="lire"><a href="index.php?controller=accueil&action=article&id=<?=$index->id_article?>">LIRE</a></div>
        </div>
    <?php } ?>
    </div>
</div>
