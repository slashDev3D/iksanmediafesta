<?php
include_once('_common.php');
include_once('_head.php');

?>


<!-- 서브페이지 시작 -->
<div class="uniform--container">
    <div class="wrap1548">
        <div class="uniform--wrap">
            <a class="home" href="/">홈</a>
            <span></span>
            <a href="javascript:GoPage('event')">연계행사</a>
            <span></span>
            <p class="now">플리마켓</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">플리마켓</p>
            <p class="subPage--title-text2">행사 기간 중 매주 금, 토 18:00~22:00<span></span>미륵사지 입구</p>
            <div id="copyLinkButton" class="subPage--title-text3 copyLinkButton">
                <div class="subPage--title-prev"><img src="../common/img/subPrev.png" alt=""></div>
                <div class="subPage--title-next"><img src="../common/img/subNext.png" alt=""></div>
            </div>
        </div>
    </div>
</div>

<div class="subPacade--container">
    <div class="wrap1548">
        <div class="subPacade--main-sect">
        <div class="subPacade--main-img"><img src="../common/img/event02_main.jpg" alt="slide"></div>
            <div class="subPacade--main-text">
                <div class="subPacade--main-text-link">
                    <div class="subPacade--main-text-link-row"><p><b>바로가기</b></p></div>
                    <div class="subPacade--main-text-link-row-wrap">
                        <div class="subPacade--main-text-link-row"><p>이벤트정보</p></div>
                        <div class="subPacade--main-text-link-row"><p>관련소식</p></div>
                    </div>
                </div>
                <div class="subPacade--main-text-info">
                  <div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>일시</b></p>
                        <p>행사 기간 중 매주 금, 토 18:00~22:00</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>장소</b></p>
                        <p><b>미륵사지 입구</b></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="subPacade--sub-sect">
            <div class="subPacade--title">
                <div id="button01" class="subPacade--title-button pcd-button scroll-target" data-button-number="01">
                    <img class="subPacade--downArrow1" src="../common/img/black_arrow_down.png" alt="">
                    <p class="subPacade--text1">이벤트정보</p>
                </div>
                <div id="slide01" class="subPacade--slide subPacade--slide1" data-slide-number="01">
                    <p class="subPacade--text2">익산의 젊은 청년이 만들어내는 다양한 아트 상품을 만난다.</p>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/event02_img01new.jpg"></div>
                        <div class="contbx"><img src="../common/img/event02_img02new.jpg"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subPacade--sub-sect subPacade--sub-sect-none">
            <div class="subPacade--title">
                <div id="button04" class="subPacade--title-button pcd-button scroll-target" data-button-number="04">
                    <img class="subPacade--downArrow1" src="../common/img/black_arrow_down.png" alt="">
                    <p class="subPacade--text1">관련 소식</p>
                </div>
            </div>
            <div id="slide04" class="subPacade--slide subPacade--slide3">
                <div class="subPacade--news-container">
                  <?php include(G5_PATH.'/common/inc/docs_notics.php');?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 서브페이지 끝 -->

<?php
include_once('_tail.php');
