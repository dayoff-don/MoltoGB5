<?php
include_once('../common.php');

// 커뮤니티 사용여부
if(defined('G5_COMMUNITY_USE') && G5_COMMUNITY_USE === false) {
    if (!defined('G5_USE_SHOP') || !G5_USE_SHOP)
        die('<p>쇼핑몰 설치 후 이용해 주십시오.</p>');

    define('_SHOP_', true);
}

// 기본공통사항을 여기에 쭉 나열
if(!G5_CUSTOM_USE)goto_url(G5_URL);
$g5['title'] .= $custom_tit;

?>