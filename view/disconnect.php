/*
* Author : Dmitri Meili
* Date : 24.01.2020
* Project : Rent a snow
*/
<?php
ob_start();
$title="disconnect";
?>
<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>