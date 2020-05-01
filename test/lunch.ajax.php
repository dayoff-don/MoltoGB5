<?php
include_once('../common.php');

$arr['ip'] = $_SERVER["REMOTE_ADDR"];
$arr['wr_id'] = $_GET['wr_id']; 
$json = my_json_encode($arr);

//여기에 날짜랑 wr_id맞춰서 카운터 다시해서 뿌려주기

echo $json;

?>