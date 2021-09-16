<p>Register</p>

<form action="save" method="POST">
<label for="register-email">Email</label>
    <input type="text" name="email" id="register-email">
    <label for="register-password">Password</label>
    <input type="password" name="password" id="register-password">
    <input type="submit" value="Register now">
</form>

<!-- @if(count($records) === 1)
    I have one record!
@elseif(count($records)>1)
    I have multiple records! 
@else
    I don't have any records
@endif -->

<!-- @foreach($users as $user)
    <p>This is user {{$user}}</p>
@endforeach -->

<!-- @isset($users) 
     $users is defined and is not null 
@endisset -->

<!-- @empty($users)
    $users is not empty
@endempty -->


