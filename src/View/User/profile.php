<h3>{{ucfirst($data["prenom"])}} {{ucfirst($data["nom"])}}</h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Address : {{ $data["adresse"] }}</li>
            <li>Email : {{ $data["email"] }}</li>
        </ul>
    </section>
    <a href="http://localhost/pie/modifyPage/{{$data['id_fiche_personne']}}">Modifiez vos informations</a>
    <section class="history">
        <h4>Votre historique</h4>
        <form action="http://localhost/pie/addHistory/{{$data['id_fiche_personne']}}" method="POST">
            <label for="titre">Ajouter un film à votre historique</label>
            <input type="text" id="titre" name="titre">
            <input type="hidden" name="id_membre" value={{$idMembre}}>
            <input type="submit" value="Ajouter">
        </form>
        <ul>
            @foreach($data["history"] as $key=>$value)
            <li><a href="http://localhost/pie/film/{{$value['id_film']}}">{{$value["titre"]}}</a><a href="http://localhost/pie/deleteHistory/{{$value['id_film']}}.{{$idMembre}}.{{$data['id_fiche_personne']}}"><img src="http://localhost/pie/webroot/assets/cross.png" class="delete" alt="delete"></a></li>
            @endforeach
        </ul>
    </section>
</div>