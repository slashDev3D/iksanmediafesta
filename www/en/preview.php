<?php
define('_THEME_PREVIEW_', true);
include_once('./_common.php');
function get_theme_dir()
{
    $result_array = array();
    $dirname = G5_PATH.'/'.G5_THEME_DIR.'/';
    $handle = opendir($dirname);
    while ($file = readdir($handle)) {
        if($file == '.'||$file == '..') continue;
        if (is_dir($dirname.$file)) {
            $theme_path = $dirname.$file;
            if(is_file($theme_path.'/index.php') && is_file($theme_path.'/head.php') && is_file($theme_path.'/tail.php'))
                $result_array[] = $file;
        }
    }
    closedir($handle);
    natsort($result_array);
    return $result_array;
}
$theme_dir = get_theme_dir();
if(!$theme || !in_array($theme, $theme_dir))
    alert_close('테마가 존재하지 않거나 올바르지 않습니다.');

function get_theme_info($dir)
{
    $info = array();
    $path = G5_PATH.'/'.G5_THEME_DIR.'/'.$dir;
    if(is_dir($path)) {
        $screenshot = $path.'/screenshot.png';
        if(is_file($screenshot)) {
            $size = @getimagesize($screenshot);
            if($size[2] == 3)
                $screenshot_url = str_replace(G5_PATH, G5_URL, $screenshot);
        }
        $info['screenshot'] = $screenshot_url;
        $text = $path.'/readme.txt';
        if(is_file($text)) {
            $content = file($text, false);
            $content = array_map('trim', $content);
            preg_match('#^Theme Name:(.+)$#i', $content[0], $m0);
            preg_match('#^Theme URI:(.+)$#i', $content[1], $m1);
            preg_match('#^Maker:(.+)$#i', $content[2], $m2);
            preg_match('#^Maker URI:(.+)$#i', $content[3], $m3);
            preg_match('#^Version:(.+)$#i', $content[4], $m4);
            preg_match('#^Detail:(.+)$#i', $content[5], $m5);
            preg_match('#^License:(.+)$#i', $content[6], $m6);
            preg_match('#^License URI:(.+)$#i', $content[7], $m7);
            $info['theme_name'] = trim($m0[1]);
            $info['theme_uri'] = trim($m1[1]);
            $info['maker'] = trim($m2[1]);
            $info['maker_uri'] = trim($m3[1]);
            $info['version'] = trim($m4[1]);
            $info['detail'] = trim($m5[1]);
            $info['license'] = trim($m6[1]);
            $info['license_uri'] = trim($m7[1]);
        }
        if(!$info['theme_name'])
            $info['theme_name'] = $dir;
    }
    return $info;
}
$info = get_theme_info($theme);
$arr_mode = array('index', 'list', 'view');
$mode = substr(strip_tags($_GET['mode']), 0, 20);
if(!in_array($mode, $arr_mode))
    $mode = 'index';
$qstr_index  = '&mode=index';
$qstr_list   = '&mode=list';
$qstr_view   = '&mode=view';
$qstr_device = '&mode='.$mode.'&device='.(G5_IS_MOBILE ? 'pc' : 'mobile');
$sql = " select bo_table, wr_parent from {$g5['board_new_table']} order by bn_id desc limit 1 ";
$row = sql_fetch($sql);
$bo_table = $row['bo_table'];
$board = sql_fetch(" select * from {$g5['board_table']} where bo_table = '$bo_table' ");
$write_table = $g5['write_prefix'] . $bo_table;

function get_theme_config_value($dir, $key='*')
{
    $tconfig = array();
    $theme_config_file = G5_PATH.'/'.G5_THEME_DIR.'/'.$dir.'/theme.config.php';
    if(is_file($theme_config_file)) {
        include($theme_config_file);
        if($key == '*') {
            $tconfig = $theme_config;
        } else {
            $keys = array_map('trim', explode(',', $key));
            foreach($keys as $v) {
                $tconfig[$v] = trim($theme_config[$v]);
            }
        }
    }
    return $tconfig;
}
// theme.config.php 미리보기 게시판 스킨이 설정돼 있다면
$tconfig = get_theme_config_value($theme, 'set_default_skin, preview_board_skin, preview_mobile_board_skin');
if($mode == 'list' || $mode == 'view') {
    if($tconfig['preview_board_skin'])
        $board['bo_skin'] = preg_match('#^theme/.+$#', $tconfig['preview_board_skin']) ? $tconfig['preview_board_skin'] : 'theme/'.$tconfig['preview_board_skin'];
    if($tconfig['preview_mobile_board_skin'])
        $board['bo_mobile_skin'] = preg_match('#^theme/.+$#', $tconfig['preview_mobile_board_skin']) ? $tconfig['preview_mobile_board_skin'] : 'theme/'.$tconfig['preview_mobile_board_skin'];
}
// 스킨경로
if (G5_IS_MOBILE) {
    $board_skin_path    = get_skin_path('board', $board['bo_mobile_skin']);
    $board_skin_url     = get_skin_url('board', $board['bo_mobile_skin']);
    $member_skin_path   = get_skin_path('member', $config['cf_mobile_member_skin']);
    $member_skin_url    = get_skin_url('member', $config['cf_mobile_member_skin']);
    $new_skin_path      = get_skin_path('new', $config['cf_mobile_new_skin']);
    $new_skin_url       = get_skin_url('new', $config['cf_mobile_new_skin']);
    $search_skin_path   = get_skin_path('search', $config['cf_mobile_search_skin']);
    $search_skin_url    = get_skin_url('search', $config['cf_mobile_search_skin']);
    $connect_skin_path  = get_skin_path('connect', $config['cf_mobile_connect_skin']);
    $connect_skin_url   = get_skin_url('connect', $config['cf_mobile_connect_skin']);
    $faq_skin_path      = get_skin_path('faq', $config['cf_mobile_faq_skin']);
    $faq_skin_url       = get_skin_url('faq', $config['cf_mobile_faq_skin']);
} else {
    $board_skin_path    = get_skin_path('board', $board['bo_skin']);
    $board_skin_url     = get_skin_url('board', $board['bo_skin']);
    $member_skin_path   = get_skin_path('member', $config['cf_member_skin']);
    $member_skin_url    = get_skin_url('member', $config['cf_member_skin']);
    $new_skin_path      = get_skin_path('new', $config['cf_new_skin']);
    $new_skin_url       = get_skin_url('new', $config['cf_new_skin']);
    $search_skin_path   = get_skin_path('search', $config['cf_search_skin']);
    $search_skin_url    = get_skin_url('search', $config['cf_search_skin']);
    $connect_skin_path  = get_skin_path('connect', $config['cf_connect_skin']);
    $connect_skin_url   = get_skin_url('connect', $config['cf_connect_skin']);
    $faq_skin_path      = get_skin_path('faq', $config['cf_faq_skin']);
    $faq_skin_url       = get_skin_url('faq', $config['cf_faq_skin']);
}
$conf = sql_fetch(" select cf_theme from {$g5['config_table']} ");
$name = get_text($info['theme_name']);
if($conf['cf_theme'] != $theme) {
    if($tconfig['set_default_skin'])
        $set_default_skin = 'true';
    else
        $set_default_skin = 'false';
    $btn_active = '<li><button type="button" class="theme_sl theme_active" data-theme="'.$theme.'" '.'data-name="'.$name.'" data-set_default_skin="'.$set_default_skin.'">테마적용</button></li>';
} else {
    $btn_active = '';
}
$g5['title'] = get_text($info['theme_name']).' 테마 미리보기';
require_once(G5_PATH.'/head.sub.php');
?>
<link rel="stylesheet" href="<?php echo G5_ADMIN_URL; ?>/css/theme.css">
<script src="<?php echo G5_ADMIN_URL; ?>/theme.js"></script>
<section id="preview_item">
    <ul>
        <li><a href="./theme_preview.php?theme=<?php echo $theme.$qstr_index; ?>">인덱스 화면</a></li>
        <li><a href="./theme_preview.php?theme=<?php echo $theme.$qstr_list; ?>">게시글 리스트</a></li>
        <li><a href="./theme_preview.php?theme=<?php echo $theme.$qstr_view; ?>">게시글 보기</a></li>
        <li><a href="./theme_preview.php?theme=<?php echo $theme.$qstr_device; ?>"><?php echo (G5_IS_MOBILE ? 'PC 버전' : '모바일 버전'); ?></a></li>
    </ul>
</section>
<section id="preview_content">
    <?php
    switch($mode) {
        case 'list':
            include(G5_BBS_PATH.'/board.php');
            break;
        case 'view':
            $wr_id = $row['wr_parent'];
            $write = sql_fetch(" select * from $write_table where wr_id = '$wr_id' ");
            include(G5_BBS_PATH.'/board.php');
            break;
        default:
            include(G5_PATH.'/index.php');
            break;
    }
    ?>
</section>
<?php
require_once(G5_PATH.'/tail.sub.php');
?>