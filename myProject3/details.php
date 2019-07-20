<?php


    require_once ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/header/index.php");

?>

<?

$good = new Goods($_GET['id']);
echo   $good->getField('title');


?>

<?php
require_once ($_SERVER['DOCUMENT_ROOT']. "/nordic/sofia/myProject3/components/footer/index.php");


?> 