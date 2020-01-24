<?php
ob_start();
$title="disconnect";
?>
<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>