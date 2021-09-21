<h3>{{ucfirst($data["prenom"])}} {{ucfirst($data["nom"])}}</h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Addresse : {{ $data["adresse"] }}</li>
            <li>Email : {{ $data["email"] }}</li>
            @isset($data["ville"])
            <li> Ville : {{$data["ville"]}}</li>
            @endisset
            <li>Date de naissance : {{substr($data["date_naissance"], 0, 10)}}</li>
        </ul>
    </section>
    @isset($_SESSION["user"])
    @if($_SESSION["user"]["id_fiche_personne"] == $data["id_fiche_personne"])
    <a class="btn" href="http://localhost/pie/modifyPage/{{$data['id_fiche_personne']}}">Modifiez vos informations</a>
    @endif
    @endisset
    <section class="history">
        <h4>Votre historique</h4>
        @isset($_SESSION["user"])
        @if($_SESSION["user"]["id_fiche_personne"] == $data["id_fiche_personne"])
        <form action="http://localhost/pie/addHistory/{{$data['id_fiche_personne']}}" method="POST">
            <label for="titre">Ajouter un film à votre historique</label>
            <input type="text" id="titre" name="titre">
            <input type="hidden" name="id_membre" value={{$idMembre}}>
            <input type="submit" value="Ajouter">
        </form>
        @endif
        @endisset

        @isset($data["history"])
        <ul>
            @foreach($data["history"] as $key=>$value)
            <li class="history-item"><a href="http://localhost/pie/film/{{$value['id_film']}}">{{$value["titre"]}}</a><a href="http://localhost/pie/deleteHistory/{{$value['id_film']}}.{{$idMembre}}.{{$data['id_fiche_personne']}}"><img src="http://localhost/pie/webroot/assets/white_cross2.png" class="delete" alt="delete"></a></li>
            @endforeach
        </ul>
        @endisset
    </section>
</div>