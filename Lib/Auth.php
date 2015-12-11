<?
class Auth{

    private $objValidator;
    private $objDb;
    private $passVal;
    private $passDb;
    private $errors;

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

    public function getUser(){
        $user = $this->objDb->getRow($this->getClearLogin());
        var_dump($user);
    }

    private function getPassVal(){
        $passVal = $this->objValidator->getArrayData();
    }

    private function getPassDb(){
        $passDb = $this->objDb->getInfoUser();
    }

    //if($this->objValidator->chekPassword()){
     //   if($this->passVal[password] === $this->passDb[password]){
      //      header("Location: http://php.net");
      //  }
    }


?>
