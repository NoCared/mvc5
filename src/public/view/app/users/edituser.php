<section>
    <form method="POST">
        <div>
            <?= $formEdit->label('nom') ?>
            <?= $formEdit->input('nom','text',$userEdit['nom']) ?>
            <?= $formEdit->error('nom') ?>
        </div>

        <div>
            <?= $formEdit->label('email') ?>
            <?= $formEdit->input('email','email',$userEdit['email']) ?>
            <?= $formEdit->error('email') ?>
        </div>

        <div>
            <?= $formEdit->submit('submitted', 'Modifier l\'user') ?>
        </div>

    </form>
</section>