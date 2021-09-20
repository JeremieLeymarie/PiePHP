<h2>Genres</h2>
<section>
    <ul>
        <?php foreach($genres as $value):?>
        <li><a href="http://localhost/pie/genre/<?= htmlentities($value['id_genre'])?>"><?= htmlentities($value["nom"])?></a></li>
        <?php endforeach;?>
    </ul>
    <?php if(isset($genre)):?>
        <section>
            <h3><?= htmlentities(ucfirst($genre["nom"]))?></h3>
            <form action="http://localhost/pie/addGenre/<?= htmlentities($genre['id_genre'])?>" method="POST">
                <h4>Ajouter un genre</h4>
                <label for="nom">Nom du genre</label>
                <input type="text" name="nom">
                <input type="submit" value="Ajouter">
            </form>
            <form action="http://localhost/pie/modifyGenre/<?= htmlentities($genre['id_genre'])?>" method="POST">
                <h4>Modifier le genre</h4>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= htmlentities($genre['nom'])?>">
                <input type="submit" value="Modifier">
            </form>
            <a href="http://localhost/pie/deleteGenre/<?= htmlentities($genre['id_genre'])?>">
                Supprimer le genre
            </a>
        </section>
    <?php endif;?>
</section>