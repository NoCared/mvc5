<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<h2><?= $user['nom'] ?></h2>
<p><?= $user['email'] ?></p>
<p>
    <a href="<?= $view->path('user-delete', [$user['id']]); ?>" onclick="return confirmation('Etes vous certain de vouloir supprimer cet user ?')">
        Supprimer cet user
    </a>
</p>
<p>
    <a href="<?= $view->path('user-edit', [$user['id']]); ?>">
        Editer cet user
    </a>
</p>