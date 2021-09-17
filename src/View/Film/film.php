<h2>{{$film["titre"]}}</h2>

<section>
    <div class="film-info">
        @isset($film["genre"]["nom"])
        <p><strong>
                {{ucfirst($film["genre"]["nom"])}}
            </strong></p>
        @endisset
        @isset($film["annee_prod"])
        <p>Produit en
            {{$film["annee_prod"]}}.
        </p>
        @endisset
        @isset($film["duree_min"])
        <p>
            {{$film["duree_min"]}} minutes.
        </p>
        @endisset
    </div>
    <h4>Résumé</h4>
    <p>{{$film["resum"]}}</p>
</section>