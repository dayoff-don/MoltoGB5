<?
    include_once("./_common.php");
    $row = sql_fetch(" select count(*) as cnt from $g5[member_table] ");
    echo $row['cnt'];
?>