<?php
include('config.php');
function __autoload($class) {
    include('lib/'.$class.'.php');
}

$objAuth = new Auth($_POST);

$objAuth->getUser();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$error = $objAuth->getError();
}
var_dump($error);
include 'Templates\template.php';


?>
