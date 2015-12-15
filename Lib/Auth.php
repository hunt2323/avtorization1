<?
class Auth{

    private $objValidator;
    private $objDb;
    private $errors = array();
    private $user;
        //private $passwodr;

    public function __construct(array $data){
        if ($this->init($data)){
            $this->objValidator = new Validator($data);
            $this->objDb = new Db();
        }
    }

    private function init($value){
        if(!isset($value)){
            return false;
        }
        return true;
    }

    private function getClearLogin(){
       return $this->objValidator->chekLogin();
    }

    private function getClearPassword(){
        return $this->objValidator->chekPassword();
    }

    public function getUser(){
        $this->user = $this->objDb->getRow($this->getClearLogin());
        return $this->user;

        }


   public function comparePassword(){
            if($this->getClearPassword() === $this->user['password']){
            header("Location: http://www.ukr.net/");
            }
        return false;
    }

    public function getError(){
        if($this->getClearLogin() and $this->comparePassword()){
            $this->errors;
        }

        $this->errors[avtoriz] = "A login or password is incorrect";
        return $this->errors;
    }

}


?>
