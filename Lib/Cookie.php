<?php
class Cookie
{
    public function __construct($login)
    {
        setcookie('Cuka', $login, time() + (86400 * 30), "/");
    }
}
?>
