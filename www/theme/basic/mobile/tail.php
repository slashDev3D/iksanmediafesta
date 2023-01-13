<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}

?>
    <!-- </div> -->
</div>

<div id="foot">
    <div class="foot--wrap">
        <div class="foot--row1">
            <div class="foot--row-col1">
                <div class="foot--company foot--company1">
                    <p class="foot--company-text">주관</p>
                    <div class="foot--company-logo">
                        <img src="common/img/footer_logo04.png" alt="">
                        <img src="common/img/footer_logo05.png" alt="">
                        <img src="common/img/footer_logo01.png" alt="">
                        <img src="common/img/footer_logo02.png" alt="">
                        <img src="common/img/footer_logo03.png" alt="">
                    </div>
                </div>
            </div>
            <div class="foot--row-col2">
                <div class="foot--traffic-button"><a href="/mireuk/docs/introduce04.html"><p>교통안내</p><img src="common/img/foot_green_arrow.png" alt=""></a></div>
                <div id="footTopButton" class="foot--top-button">
                    <img src="common/img/arrow_white_up.png" alt="">
                    <p>TOP</p>
                </div>
            </div>
        </div>
        <div class="foot--row2">
            <div class="foot--row-col3">
                <p class="foot--row2-text01">2022 익산 미륵사지 세계유산 미디어페스타 조직위원회</p>
                <div class="foot--row2-text02">
                    <a href="">사업자정보확인</a>
                    <span></span>
                    <a href="">사이트맵</a>
                    <span></span>
                    <a href="/mireuk/docs/introduce04.html">오시는길</a>
                </div>
                <div class="foot--row2-text03">
                    <p>전라북도 익산시 금마면 기양리 97</p>
                    <p>97, Giyang-ri, Geumma-myeon, Iksan-si, Jeollabuk-do <br>Republic of Korea</p>
                    <p>E-mail : <b>2022iksanworld@gmail.com</b></p>
                </div>
            </div>
            <div class="foot--row-col4">
                <div class="footer--sns">
                    <a href="/mireuk"><img src="common/img/footer_face.png" alt=""></a>
                    <a href="/mireuk"><img src="common/img/footer_insta.png" alt=""></a>
                    <a href="/mireuk"><img src="common/img/footer_youtube.png" alt=""></a>
                    <a href="/mireuk"><img src="common/img/footer_kakao.png" alt=""></a>
                </div>
                <p class="footer--copyright">© 2022 익산 미륵사지 세계유산 미디어아트페스타 All rights reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo G5_URL ?>/common/js/gsap.js"></script>
<script src="<?php echo G5_URL ?>/common/js/swiper.js"></script>
<script src="<?php echo G5_URL ?>/common/js/public.js"></script>
<script src="<?php echo G5_URL ?>/common/js/main.js"></script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
