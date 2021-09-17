<section class="modify-profile">
    <form action="http://localhost/pie/modify/<?= htmlentities($data->id)?>" method="POST" class="user-form">
        <div>
            <h2>Modify personnal info</h2>
        </div>
        <label for="nom">Last Name</label>
        <input type="text" name="nom" value=<?= htmlentities($data->nom)?>>
        <br>
        <label for="prenom">First name</label>
        <input type="text" name="prenom" value=<?= htmlentities($data->prenom)?>>
        <br>
        <label for="email">Email address</label>
        <input type="text" name="email" value=<?= htmlentities($data->email)?>>
        <br>
        <label for="date_naissance">Birth Date</label>
        <input type="date" name="date_naissance" value=<?= htmlentities($data->date_naissance)?>>
        <br>
        <label for="adresse">Adress</label>
        <input type="text" name="adresse" value=<?= htmlentities($data->adresse)?>>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" value=<?= htmlentities($data->password)?>>
        <br>
        <input type="submit" value="Submit changes">
    </form>
</section>