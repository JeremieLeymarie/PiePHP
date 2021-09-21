@isset($success)
    @if($success === false)
        <p>Connection failed</p>
    @endif
@endisset

<form action="login" method="POST">
    <label for="email">Email</label>
    <input type="mail" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Log in">
</form>
<p>Pas encore de compte ?</p><a class="btn" href="http://localhost/pie/register">Inscrivez vous !</a>