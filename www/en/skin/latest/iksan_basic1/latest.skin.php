<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php for ($i=0; $i<$list_count; $i++) {  ?>

      <?php
        if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
          echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\" class='sect5--boards-listItem'> ";
        // if ($list[$i]['is_notice'])
        //   echo "<strong>".$list[$i]['subject']."</strong>";
        // else
          if($bo_table=="notice")
            echo '<div class="sect5--boards-text1"><p>공지사항</p></div>';
          echo '<div class="sect5--boards-text2"><p>'.$list[$i]['subject'].'</p></div>';
      ?>
        <span class="sect5--boards-text3"><?=date("Y.m.d", strtotime($list[$i][wr_datetime]))?></span>
      </a>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
      <a href="javascript:void(0)" class='sect5--boards-listItem'><div class="sect5--boards-text2"><p>게시물이 없습니다.</p></div></a>
    <?php }  ?>
