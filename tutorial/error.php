<?php
if (count($error)>0) : ?>
<div class="error">
<?php foreach ($error as $errors):
    echo "<p>$errors</p>";
    endforeach; 
    ?>

</div>

<?php endif ?>