<div class="title">
    <h1>Éco pratiques</h1>
</div>
<hr>

<div class="container">
    <div class="container-content">
        <div class="content">
            <h2><?=$articleLire-> titre?><h2>                
            <p><?=$articleLire-> description?> ...</p>
            <p></p>
            <div>Le <?=date('d-m-y', strtotime($articleLire-> date_article))?></div>
            
        </div>
    </div>
</div>