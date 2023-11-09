<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<ul>
    <p>Actuellement il y a <strong><?= $nbUsers ?> users</strong> sur notre blog</p>
    <?php foreach ($users as $user) { ?>

        <h2>
            <a href="<?= $view->path('user', [$user->id]); ?>"><?= $user->nom ?></a>
        </h2>
        <br>
    <?php } ?>


</ul>