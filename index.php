<?php
include('config.php');
function __autoload($class) {
    include('lib/'.$class.'.php');
}

$objAuth = new Auth($_POST);

$objAuth->getUser();


$error = $objAuth->getError();
//var_dump($objAuth->comparePassword());
/*if(($objAuth->comparePassword()) === true){
    header('Location: http://google.ru/');
}*/
include 'Templates\template.php';


?>
