<h2><?= htmlentities($film["titre"])?></h2>

<section>
    <div class="film-info">
        <?php if(isset($film["genre"]["nom"])):?>
        <p><strong>
                <a href="http://localhost/pie/genre/<?= htmlentities($film['genre']['id_genre'])?>"><?= htmlentities(ucfirst($film["genre"]["nom"]))?></a>
            </strong></p>
        <?php endif;?>
        <?php if(isset($film["annee_prod"])):?>
        <p>Produit en
            <?= htmlentities($film["annee_prod"])?>.
        </p>
        <?php endif;?>
        <?php if(isset($film["duree_min"])):?>
        <p>
            <?= htmlentities($film["duree_min"])?> minutes.
        </p>
        <?php endif;?>
    </div>
    <h4>Résumé</h4>
    <p class="resume"><?= htmlentities($film["resum"])?>...</p>
</section>