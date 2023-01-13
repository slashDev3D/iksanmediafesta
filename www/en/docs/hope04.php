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
            <a href="javascript:GoPage('hope')">To Establish Wishes</a>
            <span></span>
            <p class="now">Festival Photobooth</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">Festival Photobooth</p>
            <p class="subPage--title-text2">2022. 09. 03 ~ 22. 10. 03<span></span>Right Side of Mireuksa Temple Site Entrance</p>
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
            <div class="subPacade--main-img"><img src="../common/img/hope04_img01.jpg" alt="slide"></div>
            <div class="subPacade--main-text">
                <div class="subPacade--main-text-link">
                    <div class="subPacade--main-text-link-row"><p><b>바로가기</b></p></div>
                    <div class="subPacade--main-text-link-row-wrap">
                        <div class="subPacade--main-text-link-row"><p>부스안내</p></div>
                        <div class="subPacade--main-text-link-row"><p>관련소식</p></div>
                    </div>
                </div>
                <div class="subPacade--main-text-info">
                  <div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Dates</b></p>
                        <p><b>From 3rd Sep to 3rd Oct</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Place</b></p>
                        <p><b>Right Side of Mireuksa Temple Site Entrance</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Time</b></p>
                        <div class="subPacade--main-text-info-time">
                            <div class="subPacade--main-text-info-time-row">
                                <p>Permanent</p>
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
                    <p class="subPacade--text1">Booth Information</p>
                </div>
                <div id="slide01" class="subPacade--slide subPacade--slide1" data-slide-number="01">
                    <p class="subPacade--text2">
                        Participation program to record special memories of &lt;2022 Iksan Mireuksa Temple Site World Heritage Media Art Festa&gt;<br>
                        Experience Fee : 1000 won<br>
                        *The experience fee will be donated to 'Beautiful Donation'.
                    </p>
                </div>
            </div>
        </div>
        <div class="subPacade--sub-sect">
            <div class="subPacade--title">
                <div id="button02" class="subPacade--title-button pcd-button scroll-target" data-button-number="02">
                    <img class="subPacade--downArrow1" src="../common/img/black_arrow_down.png" alt="">
                    <p class="subPacade--text1">How it works</p>
                </div>
                <div id="slide02" class="subPacade--slide subPacade--slide1" data-slide-number="02">
                    <p class="subPacade--text2">1. Select the desired border.<br>2. Select the desired filter.<br>3. If you don't like the picture, press 'Take it again (1 time).<br>4. Press the Output button and wait for the picture to appear.<br></p>
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
