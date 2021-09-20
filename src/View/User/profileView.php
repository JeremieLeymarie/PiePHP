<h3><?= htmlentities(ucfirst($data["prenom"]))?> <?= htmlentities(ucfirst($data["nom"]))?></h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Address : <?= htmlentities( $data["adresse"] )?></li>
            <li>Email : <?= htmlentities( $data["email"] )?></li>
        </ul>
    </section>
    <a href="http://localhost/pie/modifyPage/<?= htmlentities($data['id_fiche_personne'])?>">Modifiez vos informations</a>
    <section class="history">
        <h4>Votre historique</h4>
        <form action="http://localhost/pie/addHistory/<?= htmlentities($data['id_fiche_personne'])?>" method="POST">
            <label for="titre">Ajouter un film à votre historique</label>
            <input type="text" id="titre" name="titre">
            <input type="hidden" name="id_membre" value=<?= htmlentities($idMembre)?>>
            <input type="submit" value="Ajouter">
        </form>
        <ul>
            <?php foreach($data["history"] as $key=>$value):?>
            <li><a href="http://localhost/pie/film/<?= htmlentities($value['id_film'])?>"><?= htmlentities($value["titre"])?></a><a href="http://localhost/pie/deleteHistory/<?= htmlentities($value['id_film'])?>.<?= htmlentities($idMembre)?>.<?= htmlentities($data['id_fiche_personne'])?>"><img src="http://localhost/pie/webroot/assets/cross.png" class="delete" alt="delete"></a></li>
            <?php endforeach;?>
        </ul>
    </section>
</div>