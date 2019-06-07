<?php $title = "gallery";
ob_start();
?>
    <h1>GALLERY</h1>

<?php
$content = ob_get_clean();

require("template.php");