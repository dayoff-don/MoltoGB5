<?
    include_once("./_common.php");
    if(!$is_admin)alert('사용권한이 없습니다.',G5_BBS_URL.'/login.php?url='.G5_CUSTOM_URL);

    include_once("../head.sub.php");
    include_once("./demo.php");
    include_once("../head.tail.php");

?>