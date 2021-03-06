<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/head.sub.php')) {
    require_once(G5_THEME_PATH.'/head.sub.php');
    return;
}

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php

//반응형 추가 메타
echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
//echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
echo '<meta http-equiv="X-UA-Compatible" content="IE=Edge">'.PHP_EOL;
 

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<?php
if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
} else {
    $shop_css = '';
    if (defined('_SHOP_')) $shop_css = '_shop';
    echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
}
?>
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_git_id = "<?php echo isset($is_member)?$member['mb_1']:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
if (defined('_SHOP_')) {
    if(!G5_IS_MOBILE) {
        add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    }
} else {
    add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
}
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
//add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
<meta property="og:title" content="잔디정원사<?=$og_tit ? $og_tit : ''?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?=$og_img ? $og_img : G5_IMG_URL.'/favicon_196.png'?>" />
<meta property="og:url" content="<?= $og_url ? $og_url : 'http://grassgardener.kr/'?>" />
<meta property="og:description" content="<?=$og_description ? $og_description : '매일 깃허브 1일 1커밋 하는 프로그래머가 되어 봅시다. 현재는 회원가입후 서비스를 제공하고있습니다.'?>" />
<meta property="og:site_name" content="잔디정원사" />

<link rel="icon" type="image/png" sizes="32x32" href="<?=G5_IMG_URL?>/favicon_32.png" />
<link rel="icon" type="image/png" sizes="196x196" href="<?=G5_IMG_URL?>/favicon_196.png" />
<meta name="google" content="nositelinkssearchbox" /> 
<meta name="google-site-verification" content="8Fhy-8W4oUZ13KG1SXWHMMR45Eiitkx3Li82CsYHxOA" />
<!-- jsh add module start -->

<script>
    var info01 = "<?=$set_git_id?>"
</script>

<?php
if(!defined('G5_IS_ADMIN')){ 
	/* react And Babel JS ES6 */
	//add_javascript('<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>',0);
	//add_javascript('<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>',0);
	//add_javascript('<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.js"></script>',0);
    /*vue And Babel JS ES6*/
    add_javascript('<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>',0);
	add_javascript('<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.js"></script>', 0);
	add_javascript('<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>', 0); //개발모드
    //add_javascript('<script src="https://cdn.jsdelivr.net/npm/vue"></script>', 0); //유통모드
    add_javascript('<script src="https://unpkg.com/axios/dist/axios.min.js"></script>', 0); //aixos
    //add_javascript('<script src="'.G5_JS_URL.'/extend.js?ver=1.0.0"></script>', 0); //j-jmodule
    add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/scss/jmodule.css?ver=1.0.0"> ',0);
    add_javascript('<script src="https://kit.fontawesome.com/936bb0176f.js" crossorigin="anonymous"></script>',0);
    add_javascript('<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>',0);
}

?>

<!-- jsh add module end-->

</head>
<body  <?if($Jmode =="normal" || $Jmode =="my01" || $Jmode =="git01" || $Jmode =="info01" || $Jmode == "main01")echo 'class="gs_bg01"';?>  <?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>

<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>