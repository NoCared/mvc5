<section>
    <form method="POST">
        <div>
            <?= $formAdd->label('titre') ?>
            <?= $formAdd->input('titre') ?>
            <?= $formAdd->error('titre') ?>
        </div>

        <div>
            <?= $formAdd->label('contenu') ?>
            <?= $formAdd->textarea('contenu') ?>
            <?= $formAdd->error('contenu') ?>
        </div>

        <div>
            <?= $formAdd->submit('submitted', 'Créer un article') ?>
        </div>

    </form>
</section>