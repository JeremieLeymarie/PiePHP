<h2>Admin Panel</h2>

<section>
    <h4>Ajouter un film</h4>
    <hr>
    <form action="http://localhost/pie/addFilm" method="POST">
        <label for="titre">Titre du film</label>
        <input type="text" name="titre" id="titre" required>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" required>
        <label for="resum">Synopsis</label>
        <textarea name="resum" id="resum" cols="30" rows="10"></textarea>
        <div>
            <label for="date_debut_affiche">A l'affiche du </label>
            <input type="date" name="date_debut_affiche" id="date_debut_affiche" required>
            <label for="date_fin_affiche">au </label>
            <input type="date" name="date_fin_affiche" id="date_fin_affiche" required>
            <label for="duree_min">Durée en minutes</label>
            <input type="number" name="duree_min" id="duree_min">
        </div>
        <input type="submit" value="Ajouter">
    </form>
</section>

<section>
    <h4>Modifier/Supprimer un film</h4>
    <hr>
    <form action="http://localhost/pie/searchFilm" method="POST">
        <label for="titre">Nom du film</label>
        <input type="text" name="titre" id="titre">
        <input type="submit" value="Chercher">
    </form>
    <?php if(isset($film)):?>
        <h5>Modifier</h5>
        <form action="http://localhost/pie/modifyFilm/<?= htmlentities($film['id_film'])?>" method="POST">
            <label for="titre">Titre du film</label>
            <input type="text" name="titre" id="titre" value=<?= htmlentities($film["titre"])?> required>
            <!-- <label for="genre">Genre</label> -->
            <!-- <input type="text" name="genre" id="genre" value=required> -->
            <label for="resum">Synopsis</label>
            <textarea name="resum" id="resum" cols="30" rows="10" maxlength="300"><?= htmlentities($film["resum"])?></textarea>
            <div>
                <label for="date_debut_affiche">A l'affiche du </label>
                <input type="date" name="date_debut_affiche" id="date_debut_affiche" value=<?= htmlentities($film["date_debut_affiche"])?> required>
                <label for="date_fin_affiche">au </label>
                <input type="date" name="date_fin_affiche" id="date_fin_affiche"  value=<?= htmlentities($film["date_fin_affiche"])?> required>
                <label for="duree_min">Durée en minutes</label>
                <input type="number" name="duree_min" id="duree_min" value=<?= htmlentities($film["duree_min"])?> required>
            </div>
            <input type="submit" value="Appliquer les modifications">
        </form>

        
        <a href="deleteFilm/<?= htmlentities($film['id_film'])?>"><h5>Supprimer</h5></a>
    <?php endif;?>
</section>