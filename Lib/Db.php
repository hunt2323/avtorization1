<?php
class Db
{
    public function __construct()
    {
        mysql_connect(HOST, USER, PASS) or die('No coonection to mysql');
        mysql_select_db(DB) or die('no connection to DB');
    }

    public function getRow($login)
    {
        $result = mysql_query('SELECT login, password, role FROM avtorizacia WHERE login = "'.$login.'"');
            while($row = mysql_fetch_assoc($result))
            {
                $infoUser = $row;
            }
        return $infoUser;
    }

    public function writeInfo($log, $pass)
    {
        $result = mysql_query("INSERT INTO avtorizacia(login, password) VALUES('$log', '$pass')");
        return $result;
    }
}
?>
