<?php
class Db{

    //private $infoUser;

        public function __construct(){
            mysql_connect(HOST, USER, PASS) or die('No coonection to mysql');
            mysql_select_db(DB) or die('no connection to DB');
        }

    public function getRow($key1){
        //var_dump($key1);
        $result = mysql_query('SELECT login, password, role FROM avtorizacia WHERE login = "'.$key1.'"');
        //var_dump($result);
        while($row = mysql_fetch_assoc($result)){
            $infoUser[] = $row;
            //var_dump($this->infoUser);
        }
        return $infoUser;
    }

    /*public function getInfoUser(){
        return $this->infoUser;
    }*/
}
?>
