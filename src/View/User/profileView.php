<h3><?= htmlentities(ucfirst($data["prenom"]))?> <?= htmlentities(ucfirst($data["nom"]))?></h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Addresse : <?= htmlentities( $data["adresse"] )?></li>
            <li>Email : <?= htmlentities( $data["email"] )?></li>
            <?php if(isset($data["ville"])):?>
            <li> Ville : <?= htmlentities($data["ville"])?></li>
            <?php endif;?>
            <li>Date de naissance : <?= htmlentities(substr($data["date_naissance"], 0, 10))?></li>
        </ul>
    </section>
    <?php if(isset($_SESSION["user"])):?>
    <?php if($_SESSION["user"]["id_fiche_personne"] == $data["id_fiche_personne"]):?>
    <a class="btn" href="http://localhost/pie/modifyPage/<?= htmlentities($data['id_fiche_personne'])?>">Modifiez vos informations</a>
    <?php endif;?>
    <?php endif;?>
    <section class="history">
        <h4>Votre historique</h4>
        <?php if(isset($_SESSION["user"])):?>
        <?php if($_SESSION["user"]["id_fiche_personne"] == $data["id_fiche_personne"]):?>
        <form action="http://localhost/pie/addHistory/<?= htmlentities($data['id_fiche_personne'])?>" method="POST">
            <label for="titre">Ajouter un film à votre historique</label>
            <input type="text" id="titre" name="titre">
            <input type="hidden" name="id_membre" value=<?= htmlentities($idMembre)?>>
            <input type="submit" value="Ajouter">
        </form>
        <?php endif;?>
        <?php endif;?>

        <?php if(isset($data["history"])):?>
        <ul>
            <?php foreach($data["history"] as $key=>$value):?>
            <li class="history-item"><a href="http://localhost/pie/film/<?= htmlentities($value['id_film'])?>"><?= htmlentities($value["titre"])?></a><a href="http://localhost/pie/deleteHistory/<?= htmlentities($value['id_film'])?>.<?= htmlentities($idMembre)?>.<?= htmlentities($data['id_fiche_personne'])?>"><img src="http://localhost/pie/webroot/assets/white_cross2.png" class="delete" alt="delete"></a></li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
    </section>
</div>