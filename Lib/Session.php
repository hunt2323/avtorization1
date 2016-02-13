<?php
class Session
{
    public function __construct($login)
    {
        $_SESSION['avtoriz'] = $login;
        return true;
    }
}
?>
