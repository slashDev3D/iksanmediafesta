<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>


  <?php if($bo_table == "notice" || $bo_table == "faq") {?>
        </div><!-- .board--wrap -->
      </div><!-- .wrap1548 -->
    </div><!-- .pacade--container -->
  <?php } ?>

</div><!-- .container -->

</div>
<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<div id="foot">
    <div class="foot--wrap">
        <div class="foot--row1">
            <div class="foot--row-col1">
                <div class="foot--company foot--company1">
                    <p class="foot--company-text">주최</p>
                    <div class="foot--company-logo">
                        <img src="<?php echo G5_URL; ?>/common/img/footer_logo04.png" alt="">
                        <img src="<?php echo G5_URL; ?>/common/img/footer_logo05.png" alt="">
                        <img src="<?php echo G5_URL; ?>/common/img/footer_logo01.png" alt="">
                        <img src="<?php echo G5_URL; ?>/common/img/footer_logo03.png" alt="">
                        <img src="<?php echo G5_URL; ?>/common/img/footer_logo02.png" alt="">
                    </div>
                </div>
            </div>
            <div class="foot--row-col2">
                <div class="foot--traffic-button"><a href="javascript:GoPage('introduce05')"><p>교통안내</p><img src="<?php echo G5_URL; ?>/common/img/foot_green_arrow.png" alt=""></a></div>
                <div id="footTopButton" class="foot--top-button">
                    <img src="<?php echo G5_URL; ?>/common/img/arrow_white_up.png" alt="">
                    <p>TOP</p>
                </div>
            </div>
        </div>
        <div class="foot--row2">
            <div class="foot--row-col3">
                <p class="foot--row2-text01">2022 익산 미륵사지<br>미디어아트 페스타</p>
                <div class="foot--row2-text02">
                    <a href="javascript:GoPage('board01')">소식･참여</a>
                    <span></span>
                    <a href="javascript:GoPage('introduce05')">오시는길</a>
                </div>
                <div class="foot--row2-text03">
                    <p>전라북도 익산시 미륵사지로 362</p>
                    <p>362, Mireuksaji-ro, Iksan-si, Jeollabuk-do <br>Republic of Korea</p>
                    <!-- <p>E-mail : <b>2022iksanworld@gmail.com</b></p> -->
                </div>
            </div>
            <div class="foot--row-col4">
                <div class="footer--sns">
                    <!-- <a href="javascript:GoPage('facebook')"><img src="<?php echo G5_URL; ?>/common/img/footer_face.png" alt=""></a> -->
                    <!-- <a href="javascript:GoPage('instagram')"><img src="<?php echo G5_URL; ?>/common/img/footer_insta.png" alt=""></a> -->
                    <a href="javascript:GoPage('youtube')"><img src="<?php echo G5_URL; ?>/common/img/footer_youtube.png" alt=""></a>
                    <!-- <a href="javascript:GoPage('kakao')"><img src="<?php echo G5_URL; ?>/common/img/footer_kakao.png" alt=""></a> -->
                </div>
                <p class="footer--copyright">© 2022 익산 미륵사지 세계유산 미디어아트페스타 All rights reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo G5_URL ?>/common/js/public.js"></script>
<?php if(!$bo_table){ ?>
<script src="<?php echo G5_URL ?>/common/js/gsap.js"></script>
<script src="<?php echo G5_URL ?>/common/js/swiper.js"></script>
<?php } ?>
<?php
if (defined("_INDEX_")) {
  echo '<script src="'.G5_URL.'/common/js/main.js"></script>'.PHP_EOL;
} else {
?>
  <?php if($nowFileName == "introduce02"){ ?>
    <script src="<?php G5_URL?>/common/js/introduce.js"></script>
  <?php } else if(!preg_match("/introduce/", $nowFileName)  || $nowFileName == "introduce04" ) { ?>
    <script src="<?php G5_URL?>/common/js/pacadeSub.js"></script>
  <?php } ?>
  <script>
    var swiper = new Swiper(".posterSwiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    var swiper2 = new Swiper(".pcdSwiper01", {
      slidesPerView: 1.2,
      spaceBetween: 10,
      pagination: {
        // el: ".swiper-pagination",
        clickable: true,
      },

      breakpoints:{
        480:{
            spaceBetween: 20,
            slidesPerView:2,
        },
        767:{
            slidesPerView:3,
        },
        1024:{
            slidesPerView:4,
        },
      }
    });


    var swiper3 = new Swiper(".pcdSwiperMain", {
      slidesPerView: 1.2,
      spaceBetween: 10,
      autoplay:{
        delay:3000,
      },
      pagination: {
        // el: ".swiper-pagination",
        clickable: true,
      },

      breakpoints:{
        480:{
            slidesPerView:1.5,
            spaceBetween: 20,
        },
        767:{
            slidesPerView:2.5,
        },
        1024:{
            slidesPerView:2.5,
        },
      }
    });

    var swiper4 = new Swiper(".posterSwiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });


    var swier5 = new Swiper(".intro01Slider", {
      slidesPerView: "auto",
      spaceBetween: 20,
      scrollbar: {
        el: ".swiper-scrollbar",
        clickable: true,
      },
    })

  </script>
<?php } ?>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<?php
include_once(G5_PATH."/tail.sub.php");
?>
