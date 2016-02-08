<?php
include('config.php');

function __autoload($class) {
    include('lib/'.$class.'.php');
}

$view = empty($_GET['page']) ? 'Autorization' : $_GET['page'];

switch($view)
{
	case('Autorization'):
		$objAuth = new Auth($_POST);
        $objAuth->getUser();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $error = $objAuth->getError();
            }

    include 'Templates\template.php';
	break;

	case('reg'):
		$objReg = new Reg($_POST);
        $objReg->getUser();
        $objReg->comparePassword();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $error = $objReg->getError();
            }


    include 'Templates\reg.php';
    break;

}

//$objAuth = new Auth($_POST);
//$objReg = new Reg($_POST);
//$objAuth->getUser();

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
//$error = $objAuth->getError();
//}
//var_dump($error);
//include 'Templates\template.php';
?>
