<h2>Genres</h2>
<section>
    <ul>
        @foreach($genres as $value)
        <li><a href="http://localhost/pie/genre/{{$value['id_genre']}}">{{$value["nom"]}}</a></li>
        @endforeach
    </ul>
    @isset($genre)
        <section>
            <h3>{{ucfirst($genre["nom"])}}</h3>
            <form action="http://localhost/pie/addGenre/{{$genre['id_genre']}}" method="POST">
                <h4>Ajouter un genre</h4>
                <label for="nom">Nom du genre</label>
                <input type="text" name="nom">
                <input type="submit" value="Ajouter">
            </form>
            <form action="http://localhost/pie/modifyGenre/{{$genre['id_genre']}}" method="POST">
                <h4>Modifier le genre</h4>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="{{$genre['nom']}}">
                <input type="submit" value="Modifier">
            </form>
            <a href="http://localhost/pie/deleteGenre/{{$genre['id_genre']}}">
                Supprimer le genre
            </a>
        </section>
    @endisset
</section>