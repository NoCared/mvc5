<section>
    <form method="POST">
        <div>
            <?= $formEdit->label('titre') ?>
            <?= $formEdit->input('titre','text',$articleEdit['titre']) ?>
            <?= $formEdit->error('titre') ?>
        </div>

        <div>
            <?= $formEdit->label('contenu') ?>
            <?= $formEdit->textarea('contenu',$articleEdit['contenu']) ?>
            <?= $formEdit->error('contenu') ?>
        </div>

        <div>
            <?= $formEdit->submit('submitted', 'Modifier l\'article') ?>
        </div>

    </form>
</section>