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
            <a href="javascript:GoPage('art')">To Establish Art</a>
            <span></span>
            <p class="now">My Own Docent</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">My Own Docent</p>
            <p class="subPage--title-text2">2022. 09. 03 ~ 22. 10. 03<span></span>The Whole Area of Mireuksa Temple Site/p>
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
                <img src="../common/img/art03_img01.png" alt="">
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
                        <p><b>From 3rd Sep to 3rd Oct</b></p>
                    </div>
                    <div class="subPacade--main-text-info-row">
                        <p><b>Place</b></p>
                        <p><b>The Whole Area of Mireuksa Temple Site</b></p>
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
                    <p class="subPacade--text1">Description</p>
                </div>
                <div id="slide01" class="subPacade--slide subPacade--slide1" data-slide-number="01">
                    <p class="subPacade--text2">
                    Various web-based docent programs have been created to help visitors better understand and enjoy the media façades, sculptures, and screens.
                    </p>
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

<script src="../common/js/introduce2.js"></script>
<?php
include_once('_tail.php');
