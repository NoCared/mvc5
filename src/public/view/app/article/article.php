<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<h2><?= $article['titre'] ?></h2>
<p><?= $article['contenu'] ?></p>
<p>Créé le : <?= $article['created_at'] ?></p>
<p>
    <a href="<?= $view->path('article-delete', [$article['id']]); ?>" onclick="return confirmation('Etes vous certain de vouloir supprimer cet article ?')">
        Supprimer cet article
    </a>
</p>
<p>
    <a href="<?= $view->path('article-edit', [$article['id']]); ?>">
        Editer cet article
    </a>
</p>