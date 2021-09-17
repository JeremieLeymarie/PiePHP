<p>HOME PAGE</p>

<?php foreach($films as $key => $value):?>
<div class="film">
    <h4><?= htmlentities($value["titre"])?></h4>
    <p>
        <?php if(isset($value["genre"]["nom"])):?>
            <?= htmlentities($value["genre"]["nom"])?>
        <?php endif;?>
    </p>
    <p>
        <?php if(isset($value["annee_prod"])):?>
            <?= htmlentities($value["annee_prod"])?>
        <?php endif;?>
    </p>
</div>
<?php endforeach;?>