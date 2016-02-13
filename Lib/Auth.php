<?php
session_start();
class Auth
{
    private $objValidator;
    private $objDb;
    private $objCookie;
    private $objSession;
    private $errors = array();
    private $user;

    public function __construct(array $data)
    {
        if ($this->init($data))
        {
            $this->objValidator = new Validator($data);
            $this->objDb = new Db();
        }
    }

    private function init($value)
    {
        if(!isset($value))
        {
            return false;
        }
        return true;
    }

    public function getCookie()
    {
        if ($_COOKIE['Cuka'])
        {
            $res = $this->objDb->getRow($_COOKIE['Cuka']);
            return $res;
        }
        return false;
    }

    public function getSession()
    {
        if($_SESSION['avtoriz'])
        {
            $res = $this->objDb->getRow($_SESSION['avtoriz']);
            return $res;
        }
        return false;
    }

    private function getPatternLog()
    {
        return $this->objValidator->chekLogin();
    }

    private function getPatternPass()
    {
        return $this->objValidator->chekPassword();
    }

    public function getUser()
    {
        $this->user = $this->objDb->getRow($this->getPatternLog());
        return $this->user;
    }

    public function comparePassword()
    {
        if($this->getPatternPass() === $this->user['password'])
        {
            return true;
        }
        return false;
    }

    public function setCookie()
    {
        if($_POST[rememberme] && $this->comparePassword())
        {
            $this->objCookie = new Cookie($this->user['login']);
        }
        return false;
    }

    public function setSession()
    {
        if($this->comparePassword()){
            $this->objSession = new Session($this->user['login']);
        }
    }


    public function getError()
    {
        if(!$this->getPatternLog())
        {
            $this->errors[patternlog] = "Login vveden ne korrektno";
        }
        if(!$this->getPatternPass())
        {
            $this->errors[patternpass] = "Password vveden ne korrektno";
        }
        if($this->getPatternPass() && $this->getPatternLog() && !$this->comparePassword())
        {
            $this->errors[avtoriz] = "A login or password is incorrect";
        }
        return $this->errors;
    }
}
?>
