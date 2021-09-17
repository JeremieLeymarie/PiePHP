<h2><?= htmlentities($film["titre"])?></h2>

<section>
    <div class="film-info">
        <?php if(isset($film["genre"]["nom"])):?>
        <p><strong>
                <?= htmlentities(ucfirst($film["genre"]["nom"]))?>
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
    <p><?= htmlentities($film["resum"])?></p>
</section>