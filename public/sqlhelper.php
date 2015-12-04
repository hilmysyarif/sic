<?php
class SQLHelper{


    public $conn;
    public $host = "stem.arvixe.com";
    public $user = "boris";
    public $password = "password";
    public $db_name = "touronto";


    public function __construct(){

        $this->conn = mysql_connect($this->host,$this->user,$this->password) or die("connection error".mysql_error());

        mysql_query("set names utf8") or die("connection error ");

        mysql_select_db($this->db_name,$this->conn) or die("connection error".mysql_error());
    }


    public function execute_dql($sql){
        $arr=array();
        $res = mysql_query($sql,$this->conn) or die("connection error".mysql_error());
        while($row=mysql_fetch_assoc($res)){
            $arr[]=$row;
        }
        mysql_free_result($res);
        return $arr;
    }




    public function execute_dml($sql){
        $status = mysql_query($sql) or die("connection error".mysql_error());
        if(!$status){
            return 0;
        }else{
            if(mysql_affected_rows($this->conn) > 0){
                return 1;
            }else{
                return 2;
            }
        }
    }


    public function close_connect(){
        if(!empty($this->conn)){
            mysql_close($this->conn);
        }
    }

}
?>