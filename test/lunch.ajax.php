<?php
include_once('../common.php');

//common
$bo_table = "lunch";
$g5['lunch_table'] = 'add_lunch';
$today = date('Y-m-d');
$ip = $_SERVER["REMOTE_ADDR"];
$wr_id = $_GET['wr_id']; 
//check
$arr['ip'] = $ip;
$arr['wr_id'] =  $wr_id;
$arr['today'] = $today;

//action mode choice
if($_GET['action'] == "choice"){
    $sql = "select COUNT(*) as cnt from ".$g5['lunch_table']." where wr_id = '".$arr['wr_id']."' AND ip ='".$ip."' AND reg_date = '".$today."'";
    //$arr['sql'] = $sql;
    $sql_query = sql_fetch($sql);

    if($sql_query['cnt'] > 0){
        //이미 있음
        $arr['result'] = "remove";
        $sql = "DELETE FROM `add_lunch` WHERE  wr_id = '".$arr['wr_id']."' AND reg_date = '".$today."'";
        $sql_query = sql_fetch($sql);
    }else{
        //없으니 추가
        $sql = " INSERT INTO ".$g5['lunch_table']." 
            SET wr_id = '$wr_id',
                ip = '$ip',
                reg_date = '$today' ";
        $sql_query = sql_fetch($sql);
        //$arr['sql2'] = $sql;
        $arr['result'] = "add";        
    }

    $sql = "select COUNT(*) as cnt from ".$g5['lunch_table']." where wr_id = '".$arr['wr_id']."' AND reg_date = '".$today."'";
    $sql_query = sql_fetch($sql);
    $arr['cnt'] = $sql_query['cnt'];

    $sql = "select COUNT(*) as cnt from ".$g5['lunch_table']." where wr_id = '".$arr['wr_id']."' ";
    $sql_query = sql_fetch($sql);
    $arr['cnt_total'] = $sql_query['cnt'];
}

//make json 
$json = json_encode($arr);
echo $json;

?>