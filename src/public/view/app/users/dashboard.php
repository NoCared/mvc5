<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>
<p>Actuellement il y a <strong><?= $nbUser ?> users</strong> sur notre blog</p>
<table>

    <tr>
        <th>#</th>
        <th>Id</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $key => $user) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $user->id ?></td>
            <td><h3><?= $user->nom ?></h3></td>
            <td><?= $user->email ?></td>


            <td>
                <span>
                    <a href="<?= $view->path('user', [$user->id]); ?>">Voir</a>
                </span>

                <span>
                    <a href="<?= $view->path('user-edit', [$user->id]); ?>">
                        Modifier
                    </a>
                </span>

                <span>
                    <a href="<?= $view->path('user-delete', [$user->id]); ?>">
                        Supprimer
                    </a>
                </span>

            </td>


        </tr>
    <?php endforeach; ?>

</table>