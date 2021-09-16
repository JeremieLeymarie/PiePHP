<p>Register</p>

<form action="save" method="POST">
<label for="register-email">Email</label>
    <input type="text" name="email" id="register-email">
    <label for="register-password">Password</label>
    <input type="password" name="password" id="register-password">
    <input type="submit" value="Register now">
</form>

<!-- <?php if(count($records) === 1):?>
    I have one record!
<?php elseif(count($records)>1):?>
    I have multiple records! 
<?php else:?>
    I don't have any records
<?php endif;?> -->

<!-- <?php foreach($users as $user):?>
    <p>This is user <?= htmlentities($user)?></p>
<?php endforeach;?> -->

<!-- <?php if(isset($users) ):?>
     $users is defined and is not null 
<?php endif;?> -->

<?php if(empty($users)):?>
    <!-- $users is not empty -->
<?php endif;?>


