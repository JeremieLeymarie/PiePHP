<p>HOME PAGE</p>

<section class="films-container">
    <?php foreach($films as $key => $value):?>
    <a href="http://localhost/pie/film/<?= htmlentities($value['id_film'])?>">
        <div class="film-card">
            <h4><?= htmlentities($value["titre"])?></h4>
            <p>
                <?php if(isset($value["genre"]["nom"])):?>
                <?= htmlentities($value["genre"]["nom"])?>
                <?php endif;?>
            </p>
            <p>
                <?php if(isset($value["annee_prod"])):?>
                <?= htmlentities($value["annee_prod"])?>
                <?php endif;?>
            </p>
        </div>
    </a>
    <?php endforeach;?>
</section>