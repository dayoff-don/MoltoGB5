<?php
include_once('../common.php');

// 커뮤니티 사용여부
if(defined('G5_COMMUNITY_USE') && G5_COMMUNITY_USE === false) {
    if (!defined('G5_USE_SHOP') || !G5_USE_SHOP)
        die('<p>쇼핑몰 설치 후 이용해 주십시오.</p>');

    define('_SHOP_', true);
}
$mt_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//관리자일땐 어디든 들어갈수있게
if($is_admin){

}else if( strpos($mt_url, 'register') !== false || strpos($mt_url, 'social') !== false || strpos($mt_url, 'login') !== false || strpos($mt_url, 'logout') !== false || $is_member  || strpos($mt_url, 'ajax')) {
    
} else {  
    goto_url(G5_BBS_URL.'/login.php'); 
} 

?>