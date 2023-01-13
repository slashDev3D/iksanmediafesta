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
?>
≠

<div id="head" class="head <?php if(defined("_INDEX_")){ echo "black mainHeader"; } else { echo "white subHeader";} ?>">
    <div class="head--wrap">
        <div class="head--logo"><a href="/en/">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
        <ul class="head--center">
            <li class="head--open-list <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('introduce01')">About the Festival</a></li>
            <li class="head--open-list <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('history')">To Establish History </a></li>
            <li class="head--open-list <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('art')">To Establish Art </a></li>
            <li class="head--open-list <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('hope')">To Establish Wishes</a></li>
            <li class="head--open-list <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>"><a href="javascript:GoPage('event')">Related Events</a></li>
        </ul>
        <div class="head--right">
            <a href="javascript:GoPage('board01')">Notice·Participation</a>
            <a href="javascript:GoPage('kr')">KR</a>
        </div>
        <div id="headHam" class="head--ham"><span></span><span></span><span></span></div>
    </div>
    <div id="headSub" class="head--sub-menu">
        <div class="head--sub-menu-list <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/introduce01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce01')">About Mireuksa Temple Site</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce02')">Event Overview</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce03')">Guide Map</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce04')">Leaflet & Poster</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/introduce05/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('introduce05')">Getting to Mireuksa Temple Site</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/history01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history01')">The Country of Pagodas Establishes Wishes</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history02')">The Land of Maitreya, the Citizens of One Thousand Years(XR)</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history03')">The Land of Maitreya, the Citizens of One Thousand Years(LIVE)</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/history04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('history04')">Baekje Heritage Drone in Iksan</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/art01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art01')">Making Iksan Myself</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art02')">Tree of Light & resilence - Forest</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art03')">My Own Docent</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art04')">Metaverse Mireuksa Temple Site</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art05/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art05')">Digital Homecoming</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/art06/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('art06')">BeopGoChangShin (Review the old and Learn the new)</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/hope01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope01')">I･Story･U</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope02')">Waterdrop Garden</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope03')">Firefly Garden</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/hope04/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('hope04')">Festival Photobooth</a></div>
        </div>
        <div class="head--sub-menu-list <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>">
            <div class="head--sub-menu-item <?php if(preg_match("/event01/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event01')">Related Events</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event03')">National Taekwondo Demonstration</a></div>
            <div class="head--sub-menu-item <?php if(preg_match("/event02/", $nowFileName)) { echo "on"; } ?>"><a href="javascript:GoPage('event02')">Flea Market</a></div>
        </div>
    </div>
    <div id="aside" class="on">
        <div class="aside--wrap">
            <div class="aside--row1">
                <div class="aside--logo"><a href="/">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
                <div id="asideClose" class="aside--close"><span></span><span></span></div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/introduce/", $nowFileName)) { echo "this"; } ?>"><p>About the Festival</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce01')">About Mireuksa Temple Site</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce02')">Event Overview</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce03')">Guide Map</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce04')">Leaflet & Poster</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/introduce05/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('introduce05')">Getting to Mireuksa Temple Site</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/history/", $nowFileName)) { echo "this"; } ?>"><p>To Establish History</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/history01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history01')">The Country of Pagodas Establishes Wishes</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history02')">The Land of Maitreya, the Citizens of One Thousand Years(XR)</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history03')">The Land of Maitreya, the Citizens of One Thousand Years(LIVE)</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/history04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('history04')">Baekje Heritage Drone in Iksan</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/art/", $nowFileName)) { echo "this"; } ?>"><p>To Establish Art</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/art01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art01')">Making Iksan Myself</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art02')">Tree of Light & resilence - Forest</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art03')">My Own Docent</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art04')">Metaverse Mireuksa Temple Site</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art05/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art05')">Digital Homecoming</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/art06/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('art06')">BeopGoChangShin (Review the old and Learn the new)</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/hope/", $nowFileName)) { echo "this"; } ?>"><p>To Establish Wishes</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope01')">I･Story･U</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope02/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope02')">Waterdrop Garden</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope03')">Firefly Garden</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/hope04/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('hope04')">Festival Photobooth</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button <?php if(preg_match("/event/", $nowFileName)) { echo "this"; } ?>"><p>Related Events</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList  <?php if(preg_match("/event01/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event01')">Related Events</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event03')">National Taekwondo Demonstration</a>
                    <a class="aside--row2-slideList  <?php if(preg_match("/event03/", $nowFileName)) { echo "on"; } ?>" href="javascript:GoPage('event02')">Flea Market</a>
                </div>
            </div>
            <div class="aside--row3">
                <a href="javascript:GoPage('board01')">Notice·Participation</a>
                <a href="https://blog.naver.com/PostList.nhn?blogId=hiksanin&from=postList&categoryNo=78" target="blank">Places to eat<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path class="cls-1" d="M4.5,17a1.5,1.5,0,0,1-1.1-.4A1.5,1.5,0,0,1,3,15.5V4.5a1.5,1.5,0,0,1,.4-1.1A1.5,1.5,0,0,1,4.5,3H10V4.5H4.5v11h11V10H17v5.5a1.5,1.5,0,0,1-.4,1.1,1.37,1.37,0,0,1-1.1.4Zm3.6-4L7,11.9l7.4-7.4H12V3h5V8H15.5V5.6Z" transform="translate(-3 -3)"/></svg></a>
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
                    <a class="home" href="/">home</a>
                    <span></span>
                    <p class="now"><?php if($bo_table == "notice") {echo "notice";} else if($bo_table == "faq") { echo "FAQs";} ?></p>
                </div>
            </div>
        </div>
        <div class="page--title">
            <div class="wrap1548">
                <div class="page--title-wrap <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                    <p class="page--title-text1"><?php if($bo_table == "notice") {echo "notice";} else if($bo_table == "faq") { echo "FAQs";} ?></p>
                    <p class="page--title-text2">익산 미륵사지 미디어아트 페스타에서<br>눈길을 사로잡는 전시물에 시각적 아름다움을 느껴보세요.</p>
                </div>
            </div>
        </div>
        <div class="pacade--container">
            <div class="wrap1548">
              <div class="board--wrap <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                <div class="board--buttons  <?php if($nowFileName == 'board' && !$_GET['wr_id']) { echo'list-page'; }?>">
                    <div id="board01button" class="board--button <?php if($bo_table == "notice") {echo "on";} ?>"><a href="javascript:GoPage('board01')">notice</a></div>
                    <div id="board02button" class="board--button <?php if($bo_table == "faq") {echo "on";} ?>"><a href="javascript:GoPage('board02')">FAQs</a></div>
                </div>
  <?php } ?>
