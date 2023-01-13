<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_BBS_PATH.'/newwin.inc.php'); 
?>


<div id="head" class="head <?php if(defined("_INDEX_")){ echo "black mainHeader"; } else { echo "white subHeader";} ?>">
    <div class="head--wrap">
        <div class="head--logo"><a href="/">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
        <ul class="head--center">
            <li class="head--open-list <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('introduce01')">행사소개</a></li>
            <li class="head--open-list <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('history')">역사를 쌓다</a></li>
            <li class="head--open-list <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('art')">예술을 쌓다</a></li>
            <li class="head--open-list <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('hope')">소망을 쌓다</a></li>
            <li class="head--open-list <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('event')">연계행사</a></li>
        </ul>
        <div class="head--right">
            <a href="javascript:GoPage('board01')">소식·참여</a>
            <a href="javascript:GoPage('en')">EN</a>
        </div>
        <div id="headHam" class="head--ham"><span></span><span></span><span></span></div>
    </div>
    <div id="headSub" class="head--sub-menu">
        <div class="head--sub-menu-list <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/introduce01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce01')">익산 미륵사지 소개</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce02')">행사개요</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce03')">전시구성도</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce04')">리플렛 & 포스터</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce05/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce05')">오시는 길</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/history01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history01')">탑의 나라, 소망을 쌓다</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history02')">미륵의 땅, 천년의 시민(XR)</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history03')">미륵의 땅, 천년의 시민(라이브)</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history04')">백제 헤리티지 드론 in 익산</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/art01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art01')">내가 만드는 익산</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art02')">빛의 트리, 회복 탄력성 - 숲 / 권치규</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art03')">나만의 도슨트</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art04')">메타버스 미륵사지</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art05/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art05')">디지털 귀향</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art06/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art06')">법고창신</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/hope01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope01')">I･Story･U</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope02')">물방울 정원</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope03')">반딧불 정원</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope04')">추억한장 인생네컷</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/event01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event01')">개막행사</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event03')">국기원 태권도 시범</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/event02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event02')">플리마켓</a></div>
        </div>
    </div>
    <div id="aside" class="aside">
        <div class="aside--wrap">
            <div class="aside--row1">
                <div class="aside--logo"><a href="/">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
                <div id="asideClose" class="aside--close"><span></span><span></span></div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>"><p>행사소개</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce01')">익산 미륵사지 소개</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce02')">행사개요</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce03')">전시구성도</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce04')">리플렛 & 포스터</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce05/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce05')">오시는 길</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>"><p>역사를 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/history01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history01')">탑의 나라, 소망을 쌓다</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history02')">미륵의 땅, 천년의 시민(XR)</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history03')">미륵의 땅, 천년의 시민(라이브)</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history04')">백제 헤리티지 드론 in 익산</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>"><p>예술을 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/art01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art01')">내가 만드는 익산</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art02')">빛의 트리, 회복 탄력성 - 숲 / 권치규</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art03')">나만의 도슨트</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art04')">메타버스 미륵사지</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art05/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art05')">디지털 귀향</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art06/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art06')">법고창신</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>"><p>소망을 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope01')">I･Story･U</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope02')">물방울 정원</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope03')">반딧불 정원</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope04')">추억한장 인생네컷</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>"><p>연계행사</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/event01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event01')">개막행사</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event03')">국기원 태권도 시범</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event02')">플리마켓</a>
                </div>
            </div>
            <div class="aside--row3">
                <a href="javascript:GoPage('board01')">소식·참여</a>
                <a href="https://blog.naver.com/PostList.nhn?blogId=hiksanin&from=postList&categoryNo=78" target="blank">맛집소개<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path class="cls-1" d="M4.5,17a1.5,1.5,0,0,1-1.1-.4A1.5,1.5,0,0,1,3,15.5V4.5a1.5,1.5,0,0,1,.4-1.1A1.5,1.5,0,0,1,4.5,3H10V4.5H4.5v11h11V10H17v5.5a1.5,1.5,0,0,1-.4,1.1,1.37,1.37,0,0,1-1.1.4Zm3.6-4L7,11.9l7.4-7.4H12V3h5V8H15.5V5.6Z" transform="translate(-3 -3)"/></svg></a>
            </div>
        </div>
    </div>
</div>


<!-- } 상단 끝 -->

<div class="container">
  <?php if($bo_table == "notice" || $bo_table == "faq") {?>
    <div class="uniform--container">
            <div class="wrap1548">
                <div class="uniform--wrap">
                    <a class="home" href="/">홈</a>
                    <span></span>
                    <p class="now"><?php if($bo_table == "notice") {echo "공지사항";} else if($bo_table == "faq") { echo "묻고 답하기";} ?></p>
                </div>
            </div>
        </div>
        <div class="page--title">
            <div class="wrap1548">
                <div class="page--title-wrap <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                    <p class="page--title-text1"><?php if($bo_table == "notice") {echo "공지사항";} else if($bo_table == "faq") { echo "묻고 답하기";} ?></p>
                    <p class="page--title-text2">익산 미륵사지 미디어아트 페스타에서<br>눈길을 사로잡는 전시물에 시각적 아름다움을 느껴보세요.</p>
                </div>
            </div>
        </div>
        <div class="pacade--container">
            <div class="wrap1548">
              <div class="board--wrap <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                <div class="board--buttons  <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                    <div id="board01button" class="board--button <?php if($bo_table == "notice") {echo "on";} ?>"><a href="javascript:GoPage('board01')">공지사항</a></div>
                    <div id="board02button" class="board--button <?php if($bo_table == "faq") {echo "on";} ?>"><a href="javascript:GoPage('board02')">묻고 답하기</a></div>
                </div>
  <?php } ?>
