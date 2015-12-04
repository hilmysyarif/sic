<?php
require 'sqlhelper.php';
$con=$_POST['con'];
//file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$con."/r/n",FILE_APPEND);
function addMessage($con){
    $sql="insert into chat (sender,getter, content,sendTime) values('Admin','Guest','$con',now())";
    $sqlhelper = new SQLHelper();
    $sqlhelper->execute_dml($sql);
}

if(addMessage($con)==1){
    echo "success";

}else{
    echo "error";

}