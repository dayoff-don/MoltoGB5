<?
//기본셋팅
include_once("../common.php");
include_once("../head.sub.php");

//경로설정
$data_url = G5_DATA_PATH.'/test';
$set_dir = G5_DATA_PATH.'/test/date';
//$use_dir = @opendir($set_dir);
$set_file = date("Y-m-d").'.txt';
$set_file_url = $set_dir.'/'.$set_file;
$use_file = @fopen($set_file_url, "r");
//폴더체크 & 없으면생성
if(is_dir($set_dir)){
    @mkdir($set_dir,0777,true); 
    $use_dir = @opendir($set_dir);
    @chmod($use_dir, 0777);
}

//파일체크 & 없으면 생성 | 있으면 읽기
if(!$use_file){
    $use_file = @fopen($set_file_url, "w"); 
    $use_file = @fopen($set_file_url, "r");//r, w 읽기쓰기 구분하자잉 ^^?
    @fwrite($use_file, "테스트중입니다.\n");
	$use_readFile = @fread($use_file, @filesize($set_file_url));
}else{
    $use_file = @fopen($set_file_url, "w");
    @fwrite($use_file, "테스트중이고 수정이진행된 파일입니다.");
    $use_file = @fopen($set_file_url, "r");
    $use_readFile = @fread($use_file, @filesize($set_file_url));
}
@fclose($use_file);

echo '정보입니다.'.'<br/>';
echo $use_readFile.'<br/>'; 

/*testChaeck 해야할것
self action으로 상태값받고 액션하기
1.ChackDri > (flase?)makeDir
2.ChackTodayTxt ? 'ChangeTodayTxt's text file ' : 'makeTodayTxt' 
3.action로도 교신해서 보기
*/

?>

<div>

</div>
<?/*
<form action="<?G5_BBS_?>">
    <input type="hidden" name="mode" value="">
    <button type="button" id="makeDir">
        여기에 업로드
    </button>
    <input type="file" id="addfile" name="addffile">
</form>
*/?>

<?

for($i=2; $i <68;$i++){

echo "INSERT INTO g5_5_meta SET mta_db_table = 'board/yp_booking', mta_db_id = '$i', mta_country = 'ko_KR', mta_key = 'wr_roomsale2', mta_value = '10000', mta_reg_dt = NOW();";
echo '<br>';
echo "INSERT INTO g5_5_meta SET mta_db_table = 'board/yp_booking', mta_db_id = '$i', mta_country = 'ko_KR', mta_key = 'wr_roomsale1', mta_value = '5000', mta_reg_dt = NOW();";
echo '<br>';
echo "INSERT INTO g5_5_meta SET mta_db_table = 'board/yp_booking', mta_db_id = '$i', mta_country = 'ko_KR', mta_key = 'wr_roomsale', mta_value = '1', mta_reg_dt = NOW();";
}

include_once("../tail.sub.php");
?>