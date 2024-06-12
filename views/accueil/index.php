<div class="title">
    <h1>Éco pratiques</h1>
</div>
<hr>

<div class="container">
    <div class="container-content">
    <?php foreach ($accueil as $index){  ?>
        <div class="content">
            <h2><?=$index-> titre?><h2>                
            <p><?=substr($index-> description,0, 200)?> ...</p>
            <p></p>
            <div>Le <?=date('d-m-y', strtotime($index-> date_article))?></div>
            <div><a href="index.php?controller=accueil&action=article&id=$index->id_article">Lire</a></div>
        </div>
    <?php } ?>
    </div>
</div>
