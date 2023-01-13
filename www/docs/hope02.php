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
            <p class="now">물방울 정원</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">물방울 정원</p>
            <p class="subPage--title-text2">2022. 09. 03 ~ 22. 10. 03<span></span>서연지 주변</p>
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
        <div class="subPacade--main-img"><img src="../common/img/hope02_img01.png" alt="slide"></div>
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
                        <p><b>서연지 주변</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>상영시간</b></p>
                        <div class="subPacade--main-text-info-time">
                            <div class="subPacade--main-text-info-time-row">
                                <p>상설</p>
                            </div>
                        </div>
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
                    <p class="subPacade--text2">
                      미륵사지 서연지 앞에서 형형색색 아름답게 빛나는 물방울 빛조형물. <br>
                      미륵사 서탑에서 발견된 사리장엄구의 배경에는 다산과 풍요를 상징하는 물고기 알을 촘촘히 그려 넣었다. <br>
                      물방울 조형물에 손이 닿으면 빛이 변하는 인터랙티브 미디어아트로, 시민들과 소통하는 빛의 이야기를 표현한 작품</p>
                      <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/hope02_img01new.jpg"></div>
                        <div class="contbx"><img src="../common/img/hope02_img02new.jpg"></div>
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
