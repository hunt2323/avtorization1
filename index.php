<?php
include('config.php');
function __autoload($class) {
    include('lib/'.$class.'.php');
}

$objAuth = new Auth($_POST);

//$b = $objAuth->Vardump();

$objAuth->getUser();

$error = $objAuth->getError();

include 'Templates\template.php';


?>
