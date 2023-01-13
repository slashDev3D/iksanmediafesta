<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/en/head.sub.php')) {
    require_once(G5_THEME_PATH.'/en/head.sub.php');
    return;
}

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
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
<meta name="title" content="2022 익산 미륵사지 미디어아트 페스타">
<meta name="author" content="https://iksanlightfesta.kr/">
<meta name="subject" content="2022 익산 미륵사지 미디어아트 페스타">
<meta property="og:type" content="website">
<meta property="og:title" content="2022 익산 미륵사지 세계유산 미디어아트 페스타에 초대합니다.">
<meta property="og:subject" content="2022 익산 미륵사지 세계유산 미디어아트 페스타에 초대합니다.">
<meta property="og:image" content="https://iksanlightfesta.kr/invite/img/og2.jpg">
<meta property="og:url" content="https://iksanlightfesta.kr/">
<link rel="canonical" href="https://iksanlightfesta.kr/">

<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" id="meta_viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta name="viewport" id="meta_viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=Edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<?php

$nowLink = $_SERVER['PHP_SELF'];
$nowFileName =  str_replace('.php', '', basename($_SERVER['PHP_SELF']));

if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;

} else {
    $shop_css = '';
    if (defined('_SHOP_')) $shop_css = '_shop';

    if($bo_table || $nowFileName == "login"){
        echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
    }

    echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/swiper.css">'.PHP_EOL;
    echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/public.css?ver='.G5_CSS_VER.'">'.PHP_EOL;


    if (defined("_INDEX_")) {
      echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/main.css">'.PHP_EOL;
    } else {
      if(preg_match("/introduce/", $nowFileName)){
        echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/introduce.css">'.PHP_EOL;
      }else {
        echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/pacadeSub.css">'.PHP_EOL;
        echo '<link rel="stylesheet" href="'.G5_URL.'/common/css/pacade.css">'.PHP_EOL;
      }
    }

    echo '<script src="'.G5_URL.'/common/js/menuScript.js?ver='.G5_JS_VER.'"></script>'.PHP_EOL;
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
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if(defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
<?php } ?>
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js" integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>

<?php
// add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
//add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
if (defined('_SHOP_')) {
    if(!G5_IS_MOBILE) {
        add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    }
} else {
    add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
}
// add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);



if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
<style>
@font-face {
    font-family: 'Pretendard';
    font-weight: 900;
    font-display: swap;
    src: local("Pretendard Black"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Black.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Black.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Black.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 800;
    font-display: swap;
    src: local("Pretendard ExtraBold"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-ExtraBold.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-ExtraBold.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-ExtraBold.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 700;
    font-display: swap;
    src: local("Pretendard Bold"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Bold.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Bold.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Bold.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 600;
    font-display: swap;
    src: local("Pretendard SemiBold"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-SemiBold.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-SemiBold.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-SemiBold.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 500;
    font-display: swap;
    src: local("Pretendard Medium"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Medium.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Medium.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Medium.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 400;
    font-display: swap;
    src: local("Pretendard Regular"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Regular.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Regular.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Regular.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 300;
    font-display: swap;
    src: local("Pretendard Light"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Light.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Light.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Light.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 200;
    font-display: swap;
    src: local("Pretendard ExtraLight"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-ExtraLight.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-ExtraLight.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-ExtraLight.otf") format("otf");
}

@font-face {
    font-family: 'Pretendard';
    font-weight: 100;
    font-display: swap;
    src: local("Pretendard Thin"), url("<?php echo G5_URL?>/common/font/woff2/Pretendard-Thin.woff2") format("woff2"), url("<?php echo G5_URL?>/common/font/woff/Pretendard-Thin.woff") format("woff"), url("<?php echo G5_URL?>/common/font/otf/Pretendard-Thin.otf") format("otf");
}
</style>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    // echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    // echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
