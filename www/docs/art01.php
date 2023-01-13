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
            <a href="javascript:GoPage('art')">예술을 쌓다</a>
            <span></span>
            <p class="now">내가만드는 익산</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">내가만드는 익산</p>
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
            <div class="subPacade--main-img">
                <img src="../common/img/art01_img01.png" alt="">
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
                        <p><b>서연지 주변</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>제작</b></p>
                        <p>다넷</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>상영시간</b></p>
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
                    <p class="subPacade--text2">재미와 환경을 생각하는 친환경 그린 페스티벌. <br><br>익산시 심볼마크의 전체적인 모습은 위대한 백제문화유산인 미륵사지 석탑과 익산의 한자표기 첫 글자인 ´더할 익(益)´의 모양을 모티브로 하여, 찬란한 문화와 역사도시 익산을 상징적으로 보여주고 있다. 이러한 상징적인 의미를 담은 익산시 로고를 예술적 조형물로 제작하여 많은 시민들이 자전거 발전기의 페달을 밟아 층층이 불을 켜 완성해가는 작품이다. 자전거 발전기를 활용한 이 작품을 통해 시민들은 친환경적이고 역동적인 컨텐츠를 즐길 수 있다.</p>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/art01_img01new.jpg"></div>
                        <div class="contbx"><img src="../common/img/art01_img02new.jpg"></div>
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
