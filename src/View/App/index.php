<p>HOME PAGE</p>

<section class="films-container">
    @foreach($films as $key => $value)
    <a href="http://localhost/pie/film/{{$value['id_film']}}">
        <div class="film-card">
            <h4>{{$value["titre"]}}</h4>
            <p>
                @isset($value["genre"]["nom"])
                {{$value["genre"]["nom"]}}
                @endisset
            </p>
            <p>
                @isset($value["annee_prod"])
                {{$value["annee_prod"]}}
                @endisset
            </p>
        </div>
    </a>
    @endforeach
</section>