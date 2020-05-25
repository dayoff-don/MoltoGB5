<?
    //$Jmode = 'git01';
    include_once('../../common.php');
    //$set_git_id = 'dogcolley';
    
    $og_url = G5_URL.$_SERVER['PHP_SELF'].'?set_git_id='.$set_git_id;
    $sql = "select mb_id from ".$g5['member_table']." where mb_1 = '".$set_git_id."'";
    $mb_id = sql_fetch($sql);
    $mb_id = $mb_id['mb_id'];
    $ch_data = false;

    if($mb_id){
        $sql = "SELECT * FROM g5_git_record WHERE date = '".date('Ymd')."' AND id = '".$mb_id."'";
        $data = sql_fetch($sql);
        if($data)$ch_data = true;
    }
    if($ch_data){
        $og_description = $set_git_id.'님 깃허브 금일 인증하셨습니다.' ;
        $og_url = G5_IMG_URL.'/ok.png';
    }
    if(!$og_description) {
        $og_description = '인증정보가 없습니다. ㅠㅠ';
        $og_url = G5_IMG_URL.'/no.png';
    }
    include_once("../_head.php");
    //goto_url(G5_URL);
?>

<?
    include_once("../_tail.php");
?>
