<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>
<p>Actuellement il y a <strong><?= $nbArticle ?> articles</strong> sur notre blog</p>
<table>

    <tr>
        <th>#</th>
        <th>Id</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($articles as $key => $article) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $article->id ?></td>
            <td><h3><?= $article->titre ?></h3></td>
            <td><?= substr_replace($article->contenu, '(...)', 40, -1)  ?></td>

            <td>Créé le : <?= $article->created_at ?></td>

            <td>
                <span>
                    <a href="<?= $view->path('article', [$article->id]); ?>">Voir</a>
                </span>

                <span>
                    <a href="<?= $view->path('article-edit', [$article->id]); ?>">
                        Modifier
                    </a>
                </span>

                <span>
                    <a href="<?= $view->path('article-delete', [$article->id]); ?>">
                        Supprimer
                    </a>
                </span>

            </td>


        </tr>
    <?php endforeach; ?>

</table>