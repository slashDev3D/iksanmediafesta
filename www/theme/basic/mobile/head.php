<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
} ?>

<div id="head" class="head black">
    <div class="head--wrap">
        <div class="head--logo"><a href="/mireuk">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
        <ul class="head--center">
            <li class="head--open-list"><a href="<?php echo G5_URL ?>/docs/introduce01.php">행사소개</a></li>
            <li class="head--open-list"><a href="docs/pacade.html">역사를 쌓다</a></li>
            <li class="head--open-list"><a href="docs/art.html">예술을 쌓다</a></li>
            <li class="head--open-list"><a href="docs/light.html">소망을 쌓다</a></li>
            <li class="head--open-list"><a href="docs/event.html">연계행사</a></li>
        </ul>
        <div class="head--right">
            <a href="docs/board01.html">소식·참여</a>
        </div>
        <div id="headHam" class="head--ham"><span></span><span></span><span></span></div>
    </div>
    <div id="headSub" class="head--sub-menu">
        <div class="head--sub-menu-list">
            <div class="head--sub-menu-item"><a href="docs/introduce00.html">익산 미륵사지 소개</a></div>
            <div class="head--sub-menu-item"><a href="docs/introduce01.html">행사개요</a></div>
            <div class="head--sub-menu-item"><a href="docs/introduce02.html">전시구성도</a></div>
            <div class="head--sub-menu-item"><a href="docs/introduce03.html">리플릿 & 포스터</a></div>
            <div class="head--sub-menu-item"><a href="docs/introduce04.html">오시는 길</a></div>
        </div>
        <div class="head--sub-menu-list">
            <div class="head--sub-menu-item"><a href="docs/pacade01.html">탑의 나라, 소망을 쌓다</a></div>
            <div class="head--sub-menu-item"><a href="docs/pacade02.html">미륵의 땅, 천년의 시민(XR)</a></div>
            <div class="head--sub-menu-item"><a href="docs/pacade022.html">미륵의 땅, 천년의 시민(라이브)</a></div>
            <div class="head--sub-menu-item"><a href="docs/event03.html">백제 헤리티지 드론 in 익산</a></div>
        </div>
        <div class="head--sub-menu-list">
            <div class="head--sub-menu-item"><a href="docs/art01.html">내가 만드는 익산</a></div>
            <div class="head--sub-menu-item"><a href="docs/art02.html">빛의 트리 & resilience-숲 권치규</a></div>
            <div class="head--sub-menu-item"><a href="docs/art03.html">나만의 도슨트</a></div>
            <div class="head--sub-menu-item"><a href="docs/art04.html">미륵사지 메타버스</a></div>
            <div class="head--sub-menu-item"><a href="docs/pacade03.html">디지털 귀향</a></div>
            <div class="head--sub-menu-item"><a href="docs/pacade04.html">법고창신</a></div>
        </div>
        <div class="head--sub-menu-list">
            <div class="head--sub-menu-item"><a href="docs/light01.html">I･Story･U</a></div>
            <div class="head--sub-menu-item"><a href="docs/light02.html">물방울 정원</a></div>
            <div class="head--sub-menu-item"><a href="docs/light03.html">반딧불 정원</a></div>
            <div class="head--sub-menu-item"><a href="docs/light04.html">추억한장 인생네컷</a></div>
        </div>
        <div class="head--sub-menu-list">
            <div class="head--sub-menu-item"><a href="docs/event01.html">개막행사</a></div>
            <div class="head--sub-menu-item"><a href="docs/event04.html">플리마켓</a></div>
        </div>
    </div>
    <div id="aside" class="on">
        <div class="aside--wrap">
            <div class="aside--row1">
                <div class="aside--logo"><a href="/mireuk">2022 익산 미륵사지<br>미디어아트 페스타</a></div>
                <div id="asideClose" class="aside--close"><span></span><span></span></div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button"><p>행사소개</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList" href="/mireuk/docs/introduce00.html">익산 미륵사지 소개</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/introduce01.html">행사개요</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/introduce02.html">전시구성도</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/introduce03.html">리플릿 & 포스터</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/introduce04.html">오시는 길</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button"><p>역사를 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList" href="/mireuk/docs/pacade01.html">탑의 나라, 소망을 쌓다</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/pacade02.html">미륵의 땅, 천년의 시민(XR)</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/pacade022.html">미륵의 땅, 천년의 시민(라이브)</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/event03.html">백제 헤리티지 드론 in 익산</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button"><p>예술을 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList" href="/mireuk/docs/art01.html">내가 만드는 익산</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/art02.html">빛의 트리 & resilience-숲 권치규</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/art03.html">나만의 도슨트</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/art04.html">미륵사지 메타버스</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/pacade03.html">디지털 귀향</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/pacade04.html">법고창신</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button"><p>소망을 쌓다</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList" href="/mireuk/docs/light01.html">I･Story･U</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/light02.html">물방울 정원</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/light03.html">반딧불 정원</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/light04.html">추억한장 인생네컷</a>
                </div>
            </div>
            <div class="aside--row2">
                <div class="aside--row2-button"><p>연계행사</p><div class="aside--row2-arrow"><span></span><span></span></div></div>
                <div class="aside--row2-slide">
                    <a class="aside--row2-slideList" href="/mireuk/docs/event01.html">개막행사</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/event02.html">융복합 퍼포먼스</a>
                    <a class="aside--row2-slideList" href="/mireuk/docs/event04.html">플리마켓</a>
                </div>
            </div>
            <div class="aside--row3">
                <a href="/mireuk/docs/board01.html">소식·참여</a>
                <a href="https://blog.naver.com/PostList.nhn?blogId=hiksanin&from=postList&categoryNo=78" target="blank">맛집소개<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path class="cls-1" d="M4.5,17a1.5,1.5,0,0,1-1.1-.4A1.5,1.5,0,0,1,3,15.5V4.5a1.5,1.5,0,0,1,.4-1.1A1.5,1.5,0,0,1,4.5,3H10V4.5H4.5v11h11V10H17v5.5a1.5,1.5,0,0,1-.4,1.1,1.37,1.37,0,0,1-1.1.4Zm3.6-4L7,11.9l7.4-7.4H12V3h5V8H15.5V5.6Z" transform="translate(-3 -3)"/></svg></a>
            </div>
        </div>
    </div>
</div>





<div class="container">
