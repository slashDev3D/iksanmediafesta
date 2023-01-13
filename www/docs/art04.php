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
            <p class="now">메타버스 미륵사지</p>
        </div>
    </div>
</div>
<div class="subPage--title">
    <div class="wrap1548">
        <div class="subPage--title-wrap">
            <p class="subPage--title-text1">메타버스 미륵사지</p>
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
                        <p><b>일시</b></p>
                        <p><b>09월 03일부터 10월 03일까지</b></p>
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
                      메타버스 미륵사지에서는 첨단기술을 활용하여 창조한 온라인 아이덴티티를 이용해 가상세계를 방문할 수 있다. <br>
                      2022 익산 미륵사지 세계유산 미디어아트 페스타에서는 미륵사지 석탑과 동탑, 당간지주의 전통적 가치를 훼손하지 않고 실제와 유사하게 구현한 콘텐츠를 제공한다. 관람객들은 어디서든지 찬란한 백제 문화유산인 미륵사지의 가치와 아름다움을 재발견하고 더욱 현실감 넘치는 가상의 미륵사지를 감상할 수 있다.<br><br>
                    </p>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><img src="../common/img/art04_img02.png"></div>
                        <div class="contbx"><img src="../common/img/art04_img03.png"></div>
                    </div>
                    <div class="subPacade--main-sect-cont">
                        <div class="contbx"><video muted autoplay loop playsinline in src="https://player.vimeo.com/progressive_redirect/playback/749001974/rendition/360p/file.mp4?loc=external&signature=9627925e8ef43416eca11bf2e68ccf0bf37202747f4cf81e8655673f3ec9f7cf" style="width:100%;display:block;"></video></div>
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
