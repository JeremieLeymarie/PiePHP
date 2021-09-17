<section class="modify-profile">
    <form action="http://localhost/pie/modify/{{$data->id}}" method="POST" class="user-form">
        <div>
            <h2>Modify personnal info</h2>
        </div>
        <label for="nom">Last Name</label>
        <input type="text" name="nom" value={{$data->nom}}>
        <br>
        <label for="prenom">First name</label>
        <input type="text" name="prenom" value={{$data->prenom}}>
        <br>
        <label for="email">Email address</label>
        <input type="text" name="email" value={{$data->email}}>
        <br>
        <label for="date_naissance">Birth Date</label>
        <input type="date" name="date_naissance" value={{$data->date_naissance}}>
        <br>
        <label for="adresse">Adress</label>
        <input type="text" name="adresse" value={{$data->adresse}}>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" value={{$data->password}}>
        <br>
        <input type="submit" value="Submit changes">
    </form>
</section>