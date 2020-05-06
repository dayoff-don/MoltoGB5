<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
function my_json_encode($arr)
{
    //convmap since 0x80 char codes so it takes all multibyte codes (above ASCII 127). So such characters are being "hidden" from normal json_encoding
    array_walk_recursive($arr, function (&$item, $key) { if (is_string($item)) $item = mb_encode_numericentity($item, array (0x80, 0xffff, 0, 0xffff), 'UTF-8'); });
    return mb_decode_numericentity(json_encode($arr), array (0x80, 0xffff, 0, 0xffff), 'UTF-8');
}
*/

//custom 정의
define('G5_CUSTOM_DIR','custom');
define('G5_CUSTOM_URL',G5_URL.'/'.G5_CUSTOM_DIR);
define('G5_CUSTOM_PATH',G5_PATH.'/'.G5_CUSTOM_DIR);
define('G5_CUSTOM_JS_URL',G5_PATH.'/'.G5_JS_DIR);
define('G5_CUSTOM_CSS_URL',G5_PATH.'/'.G5_CSS_DIR);

define('G5_CUSTOM_USE',true);

if(G5_CUSTOM_USE){

	$custom_tit = '커스텀';

	//new DB ADD
	$sql = "SELECT 1 FROM g5_custom";
	$ck_db =sql_query($sql);

	if(!$ck_db){
		$sql = "CREATE TABLE IF NOT EXISTS `g5_custom` (
			`cutom_idx` int(11) NOT NULL auto_increment,
			`cutom_name` varchar(40) NOT NULL default '',
			`cutom_view_url` varchar(225) NOT NULL default '',
			`cutom_control` text NOT NULL default '',
			`cutom_device` varchar(20) NOT NULL default '',
			PRIMARY KEY  (`cutom_idx`)
		)";
		sql_query($sql, true);
	}

	

}


?>