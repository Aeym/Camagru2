<?php $title = "Camagru";
ob_start();
?>

    <div class="home">
        <p>Welcome to Camagru ! Here you can edit photo online with our special tool ! Check the Gallery to see the result :)</p>
    </div>

<?php $content = ob_get_clean(); ?>

<?php
require("template.php");
?>