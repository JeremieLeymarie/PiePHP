<?php if(isset($success)):?>
    <?php if($success === false):?>
        <p>Connection failed</p>
    <?php endif;?>
<?php endif;?>

<form action="login" method="POST">
    <label for="email">Email</label>
    <input type="mail" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Log in">
</form>
