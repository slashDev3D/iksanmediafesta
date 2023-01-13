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
            <a href="javascript:GoPage('hope')">소망을 쌓다</a>
            <span></span>
            <p class="now">반딧불 정원</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">반딧불 정원</p>
            <p class="subPage--title-text2">2022. 09. 03 ~ 22. 10. 03<span></span>동연지 주변</p>
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
            <div class="subPacade--main-img">
              <img src="../common/img/hope03_img03.jpg" alt="slide">
            </div>
            <div class="subPacade--main-text">
                <div class="subPacade--main-text-link">
                    <div class="subPacade--main-text-link-row"><p><b>바로가기</b></p></div>
                    <div class="subPacade--main-text-link-row-wrap">
                        <div class="subPacade--main-text-link-row"><p>작품설명</p></div>
                        <div class="subPacade--main-text-link-row"><p>관련소식</p></div>
                    </div>
                </div>
                <div class="subPacade--main-text-info">
                  <div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>기간</b></p>
                        <p><b>09월 03일부터 10월 03일까지</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>장소</b></p>
                        <p><b>동연지 주변</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>상연시간</b></p>
                        <p>상설</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="subPacade--sub-sect">
            <div class="subPacade--title">
                <div id="button01" class="subPacade--title-button pcd-button scroll-target" data-button-number="01">
                    <img class="subPacade--downArrow1" src="../common/img/black_arrow_down.png" alt="">
                    <p class="subPacade--text1">작품설명</p>
                </div>
                <div id="slide01" class="subPacade--slide subPacade--slide1" data-slide-number="01">
                    <p class="subPacade--text2">가든레이저를 활용하여 동연지 주변 나무에 다채롭게 반짝이는 빛. 영롱하게 빛나는 반딧불 숲 속을 탐험하는 듯한 상상과 함께 저 너머로 빛나는 문화재와 자연의 아름다움을 느낄 수 있는 작품<br><br></p>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/hope03_img02.jpg"></div>
                        <!-- <div class="contbx"><img src="../common/img/hope03_img03.jpg"></div> -->
                        <div class="contbx"><img src="../common/img/hope03_img04.jpg"></div>
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
