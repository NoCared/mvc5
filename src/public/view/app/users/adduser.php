<section>
    <form method="POST">
        <div>
            <?= $formAdd->label('nom') ?>
            <?= $formAdd->input('nom') ?>
            <?= $formAdd->error('nom') ?>
        </div>

        <div>
            <?= $formAdd->label('email') ?>
            <?= $formAdd->input('email','email') ?>
            <?= $formAdd->error('email') ?>
        </div>

        <div>
            <?= $formAdd->submit('submitted', 'Créer un user') ?>
        </div>

    </form>
</section>