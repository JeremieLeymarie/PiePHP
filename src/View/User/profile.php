<h3>{{$data->prenom}} {{$data->nom}}</h3>


<div class="profile">
    <section class="profile-1">
        <h4>General information</h4>
        <ul>
            <li>Address : {{ $data->adresse }}</li>
            <li>Email : {{ $data->email }}</li>
        </ul>
    </section>
    <a href="http://localhost/pie/modifyPage/{{$data->id}}">Modifiez vos informations</a>
</div>