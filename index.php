<?php
include('config.php');

function __autoload($class)
{
    include('lib/'.$class.'.php');
}

$view = empty($_GET['page']) ? 'Autorization' : $_GET['page'];
switch($view)
{
	case('Autorization'):
    	$objAuth = new Auth($_POST);
        if ($objAuth->getCookie())
        {
            header("Location: Templates/new.php");
        }
        if ($objAuth->getSession())
        {
            header("Location: Templates/new.php");
        }
        $objAuth->getUser();
        $objAuth->setCookie();
        $objAuth->setSession();
    if($objAuth->comparePassword())
    {
        header("Location: Templates/new.php");

    }
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $error = $objAuth->getError();
        }


        include 'Templates\template.php';
	break;

	case('reg'):
		$objReg = new Reg($_POST);
        $objReg->getUser();
        $objReg->comparePassword();
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $error = $objReg->getError();
        }
        include 'Templates\reg.php';

    break;
}
?>
