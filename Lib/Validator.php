<?php
class Validator {

    //protected $result;
    private $arrayData = array();

    public function __construct($data){
        if(is_array($data)){
            foreach($data as $key=>$val){
                $this->arrayData[$key] = trim($val);
            }
        }
    }

    public function getArrayData(){
        return $this->arrayData;
    }

    public function chekLogin(){
        if(preg_match(PATTERNLOG, $this->arrayData[login])){
            return $this->arrayData[login];
        }

        return false;
    }

    public function chekPassword(){
        //var_dump($this->arrayData[pass]);
        if(preg_match(PATTERNPASS, $this->arrayData[pass])){
            return $this->arrayData[pass];
        }

        return false;
    }
}

?>
