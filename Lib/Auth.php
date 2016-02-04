<?
class Auth{

    private $objValidator;
    private $objDb;
    private $errors = array();
    private $user;

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

   private function getPatternLog(){
        return $this->objValidator->chekLogin();
       }

    private function getPatternPass(){
        return $this->objValidator->chekPassword();
    }

    public function getUser(){
        $this->user = $this->objDb->getRow($this->getPatternLog());
        return $this->user;

        }


   public function comparePassword(){
            if($this->getPatternPass() === $this->user['password']){
            header("Location: http://www.ukr.net/");
            }
       //return $this->errors[avtoriz] = "A login or password is incorrect";
        return false;
    }

    public function getError(){

        if(!$this->getPatternLog()){
            $this->errors[patternlog] = "Login vveden ne korrektno";
        }
        if(!$this->getPatternPass()){
            $this->errors[patternpass] = "Password vveden ne korrektno";
        }
        if($this->getPatternPass() && $this->getPatternLog() && !$this->comparePassword()){
            $this->errors[avtoriz] = "A login or password is incorrect";
        }
        return $this->errors;
        }

}


?>
