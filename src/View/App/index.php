<p>HOME PAGE</p>

<section>
    @if(isset($films["films"]) || isset($films["users"]))
    @isset($films["films"])
    <h3>Films</h3>
    @if(isset($films["films"]["titre"]))
    <a href="http://localhost/pie/film/{{$films['films']['id_film']}}">
        <div class="film-card">
            <h4>{{$films["films"]["titre"]}}</h4>
            <p>
                @isset($films["films"]["annee_prod"])
                {{$films["films"]["annee_prod"]}}
                @endisset
            </p>
        </div>
    </a>
    @else
    <div class="films-container">
    @foreach($films["films"] as $key=>$value)
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
    </div>
    @endif
    @endisset
    @isset($films["users"])
    <h3>Utilisateurs</h3>
    @if(isset($films["users"]["nom"]))
    <a href="http://localhost/pie/profile/{{$films['users']['id_fiche_personne']}}">
        <div class="film-card">
            <h4>{{$films["users"]["prenom"]}}{{$films["users"]["nom"]}}</h4>
        </div>
    </a>
    @else
    <div class="films-container">
        @foreach($films["users"] as $key=>$value)
        <a href="http://localhost/pie/profile/{{$value['id_fiche_personne']}}">
            <div class="film-card">
                <h4>{{$value["prenom"]}} {{$value["nom"]}}</h4>
            </div>
        </a>
        @endforeach
    </div>
    @endif
    @endisset
    @else
    <div class="films-container">
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
    </div>
    @endif
</section>