<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<ul>
    <p>Actuellement il y a <strong><?= $nbArticle ?> articles</strong> sur notre blog</p>
    <?php foreach ($articles as $article) { ?>

        <h2>
              <a href="<?= $view->path('article',[$article->id]); ?>"><?= $article->titre?></a>
        </h2> 
        <p>Créé le : <?= $article->created_at ?></p>
        <br>
    <?php } ?>

</ul>