<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<ul>
    <?php foreach ($articles as $article) { ?>

        <h2><?= $article->titre?></h2>
        <p><?= $article->contenu?></p>
        <p>Créé le : <?= $article->created_at?></p>


    <?php } ?>

</ul>

<?php
//print_r($articles);