<?php
class Reg
{
    private $objValidator;
    private $objDb;
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

    private function getPatternLog()
    {
        return $this->objValidator->chekLogin();
    }

    private function getPatternPass()
    {
        return $this->objValidator->chekPassword();
    }

    private function getPatternConfirmPass()
    {
        return $this->objValidator->chekConfirmPassword();
    }

    public function getUser()
    {
        $this->user = $this->objDb->getRow($this->getPatternLog());
        return $this->user;
    }

    public function comparePassword()
    {
        if(!($this->user) && ($this->getPatternLog() && $this->getPatternPass()) && $this->getPatternPass() === $this->getPatternConfirmPass())
        {
            $this->objDb->writeInfo($this->getPatternLog(), $this->getPatternPass());
        }
            return false;
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
        if(!($this->getPatternPass() === $this->getPatternConfirmPass()))
        {
            $this->errors[patternconfirmpass] = "Oshibka pri povtornom vvedenii passworda";
        }
        return $this->errors;
    }
}
?>
