<?php
include_once('_common.php');
include_once('_head.php');

?>


<!-- 서브페이지 시작 -->
<div class="uniform--container">
    <div class="wrap1548">
        <div class="uniform--wrap">
            <a class="home" href="/">Home</a>
            <span></span>
            <a href="javascript:GoPage('history')">To Establish History</a>
            <span></span>
            <p class="now">Baekje Heritage Drone in Iksan</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">Baekje Heritage Drone in Iksan</p>
            <p class="subPage--title-text2">2022. 09. 03 / 2022. 09. 11<span></span>Above the stone pagoda of Mireuksa Temple Site</p>
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
                <img src="../common/img/history04_img01.png" alt="">
            </div>
            <div class="subPacade--main-text">
                <div class="subPacade--main-text-link">
                    <div class="subPacade--main-text-link-row"><p><b>바로가기</b></p></div>
                    <div class="subPacade--main-text-link-row-wrap">
                        <div class="subPacade--main-text-link-row"><p>Description</p></div>
                        <div class="subPacade--main-text-link-row"><p>관련소식</p></div>
                    </div>
                </div>
                <div class="subPacade--main-text-info">
                  <div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Dates</b></p>
                        <p><b>3rd Sep,11th Sep</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Place</b></p>
                        <p><b>Above the stone pagoda of Mireuksa Temple Site</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>총연출</b></p>
                        <p>윤기철</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>콘텐츠제작</b></p>
                        <p>김동완</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>드론 디자인</b></p>
                        <p>김은지 강지유 이동규 이제원</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>드론쇼 공연</b></p>
                        <p>다온아이앤씨</p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Time</b></p>
                        <div class="subPacade--main-text-info-time">
                            <div class="subPacade--main-text-info-time-row">
                                <div class="subPacade--main-text-info-time">
                                    <div class="subPacade--main-text-info-time-row">
                                        <p>20:00~20:20</p>
                                        <!-- <p><span>1</span>회차</p> -->
                                    </div>

                                </div>
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
                    <p class="subPacade--text1">Description</p>
                </div>
                <div id="slide01" class="subPacade--slide subPacade--slide1" data-slide-number="01">
                    <!-- <p class="subPacade--text2 pd">300대의 드론들을 활용해 시민들에게 잊을 수 없는 광경을 선사한다</p> -->
                    <p class="subPacade--text2 pd">3탑 3금당의 독특한 가람배치를 지닌 익산 미륵사지는 오늘날 유네스코 백제역사유적지구 중 하나다. 미륵사지 석탑은 돌로 불탑을 만든 최초의 사례로 목탑이 석탑으로 변화하는 당시의 건축기술을 보여주는 중요한 탑이다. <br>첨단 드론을 통해 익산 미륵사지의 탁월한 보편적 가치를 디지털 헤리티지로 재현한다. 익산 미륵사지가 살아숨쉬는 국가유산이 되어 모두의 미래 등불을 밝힌다.</p>

                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/history04_img02.png"></div>
                        <div class="contbx"><img src="../common/img/history04_img03.png"></div>
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
