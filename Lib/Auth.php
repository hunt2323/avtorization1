<?
class Auth{

    private $objValidator;
    private $objDb;
    private $errors = array();
    private $user;
    private $passwodr;

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


    private function getClearPassword(){
        return $this->objValidator->chekPassword();
    }

    public function getUser(){
        $user = $this->objDb->getRow($this->getClearLogin());
        //$this->user = $this->objDb->getInfoUser();
        foreach($user as $row){
        var_dump('<pre>row : ');
        var_dump($row['login']);
        }

        var_dump('user : ');
        var_dump($user);
        var_dump('</pre>');
       }

    /*public function getInfoUser(){
        return $this->objDb->getInfoUser();
        //var_dump($this->getInfoUser());
    }*/

    public function comparePassword(){
        //var_dump($this->getClearPassword());
        var_dump($this->user[password]);
            if($this->getClearPassword() === $this->user['password']){
            return true;
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
