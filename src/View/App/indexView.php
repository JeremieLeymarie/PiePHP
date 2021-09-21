<p>HOME PAGE</p>

<section>
    <?php if(isset($films["films"]) || isset($films["users"])):?>
    <?php if(isset($films["films"])):?>
    <h3>Films</h3>
    <?php if(isset($films["films"]["titre"])):?>
    <a href="http://localhost/pie/film/<?= htmlentities($films['films']['id_film'])?>">
        <div class="film-card">
            <h4><?= htmlentities($films["films"]["titre"])?></h4>
            <p>
                <?php if(isset($films["films"]["annee_prod"])):?>
                <?= htmlentities($films["films"]["annee_prod"])?>
                <?php endif;?>
            </p>
        </div>
    </a>
    <?php else:?>
    <div class="films-container">
    <?php foreach($films["films"] as $key=>$value):?>
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
    </div>
    <?php endif;?>
    <?php endif;?>
    <?php if(isset($films["users"])):?>
    <h3>Utilisateurs</h3>
    <?php if(isset($films["users"]["nom"])):?>
    <a href="http://localhost/pie/profile/<?= htmlentities($films['users']['id_fiche_personne'])?>">
        <div class="film-card">
            <h4><?= htmlentities($films["users"]["prenom"])?><?= htmlentities($films["users"]["nom"])?></h4>
        </div>
    </a>
    <?php else:?>
    <div class="films-container">
        <?php foreach($films["users"] as $key=>$value):?>
        <a href="http://localhost/pie/profile/<?= htmlentities($value['id_fiche_personne'])?>">
            <div class="film-card">
                <h4><?= htmlentities($value["prenom"])?> <?= htmlentities($value["nom"])?></h4>
            </div>
        </a>
        <?php endforeach;?>
    </div>
    <?php endif;?>
    <?php endif;?>
    <?php else:?>
    <div class="films-container">
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
    </div>
    <?php endif;?>
</section>