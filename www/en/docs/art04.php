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
            <p class="now">Metaverse Mireuksa Temple Site</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">Metaverse Mireuksa Temple Site</p>
            <p class="subPage--title-text2">2022. 09. 03 ~ 22. 10. 03</p>
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
              <img src="../common/img/art04_img01.png" alt="">
          </div>
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
                        <p><b>Dates</b></p>
                        <p><b>From 3rd Sep to 3rd Oct</b></p>
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
                        Visitors can use their online identities to visit and explore the virtual world of the Metaverse Mireuksa Temple Site, which has been created with cutting-edge digital technologies. <br>
                        The 2022 Iksan World Heritage Media Art Festa offers a wide range of realistic digital contents without damaging the traditional value of the Stone Stupas of the Mireuksa Temple Site and the Dangganjiju Flagpoles. <br>
                        Visitors can watch the value and beauty of Mireuksa Temple, the splendid cultural heritage of the Baekje kingdom, and explore the virtual - yet more realistic - world of the Mireuksa Temple Site.<br><br>
                    </p>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/art04_img02.png"></div>
                        <div class="contbx"><img src="../common/img/art04_img03.png"></div>
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

<script src="../common/js/introduce2.js"></script>
<?php
include_once('_tail.php');
