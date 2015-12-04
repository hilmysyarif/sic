<?php
require 'sqlhelper.php';
header("content-type: text/xml;charset=utf-8");
header("Cache-Control: no-cache");
function getMessage()
{
    $sql = "select * from chat where sent=0";
    $sqlhelper = new SQLHelper();
    $array = $sqlhelper->execute_dql($sql);

    $messageInfo = "<mes>";
    for ($i = 0; $i < count($array); $i++) {
        $row = $array[$i];
        $messageInfo .= "<mesid>{$row['id']}</mesid><sender>{$row['sender']}</sender>

<getter>{$row['getter']}</getter><con>{$row['content']}</con>

<sendTime>{$row['sendTime']}</sendTime>";

    }
    $messageInfo .= "</mes>";
    file_put_contents("chatlog.log", $messageInfo . "/r/n", FILE_APPEND);
    $sql = "update chat set sent=1";
    $sqlhelper->execute_dml($sql);
    return $messageInfo;
    $sqlhelper->close_connect();
}

$mesList = getMessage();
echo $mesList;