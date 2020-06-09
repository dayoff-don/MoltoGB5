<?
    include_once("./_common.php");
    $sql = "select * from g5_config";
    $g5_config = sql_fetch($sql);
?>

<div>
    <h1>개인정보처리방침</h1>
    <div class="py_con">
        <?=$g5_config['cf_privacy']?>
    </div>
</div>