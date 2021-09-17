<h3><?= htmlentities($data->prenom)?> <?= htmlentities($data->nom)?></h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Address : <?= htmlentities( $data->adresse )?></li>
            <li>Email : <?= htmlentities( $data->email )?></li>
        </ul>
    </section>
    <a href="http://localhost/pie/modifyPage/<?= htmlentities($data->id)?>">Modifiez vos informations</a>
</div>