<?
    include_once("./_common.php");
    $sql = "select count(*) as cnt from g5_git_record where date = ".date('Ymd')."";
    $row = sql_fetch($sql);
    echo $row['cnt'];
?>