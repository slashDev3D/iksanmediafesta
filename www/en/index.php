<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>



<!-- 메인화면 최신글 시작 -->
<div id="sect1">
    <div class="wrap1548">
        <div class="sect1--wrap">
            <div class="sect1--obj">
                <!-- <img src="<?php echo G5_URL; ?>/common/img/main_01.png" alt=""> -->
                <video muted autoplay loop playsinline src="https://player.vimeo.com/progressive_redirect/playback/737396177/rendition/1080p/file.mp4?loc=external&signature=8efa7b850260e168febcd9b9deb69f1d1235891932877cd2a30abaf26a7fbe19"></video>
            </div>
            <div class="sect1--title">
                <!-- <p class="sect1--text1">World Heritage Media Art</p> -->
                <p class="sect1--text2">2022 익산 미륵사지<br>세계유산 미디어아트 페스타</p>
                <!-- <p class="sect1--text2">세계유산 미디어아트 페스타</p> -->
                <!-- <p class="sect1--text2">페스타</p> -->
                <p class="sect1--text4">2022 IKSAN WORLD HERITAGE MEDIA ART FESTA</p>
                <p class="sect1--text5">2022. 9. 3 sat ~ 10. 3 mon</p>
                <p class="sect1--text6">The Whole Area of Mireuksa Temple Site</p>
                <!-- <img src="<?php echo G5_URL; ?>/common/img/main_text.png" alt=""> -->
                <div class="sect1--logos">
                    <div class="sect1--logos-row">
                        <p>Organizer</p>
                        <div class="sect1--logoWrap">
                            <img src="<?php echo G5_URL; ?>/common/img/logo_01.png" alt="">
                            <img src="<?php echo G5_URL; ?>/common/img/logo_02.png" alt="">
                            <img src="<?php echo G5_URL; ?>/common/img/logo_03.png" alt="">
                            <img src="<?php echo G5_URL; ?>/common/img/logo_04.png" alt="">
                            <img src="<?php echo G5_URL; ?>/common/img/logo_05.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sect1--belt">
    <div class="sect1--belt-wrap">
        <div class="sect1--belt-item"><p>2022. 9. 3 sat ~ 10. 3 mon</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""><p>2022 IKSAN WORLD HERITAGE MEDIA ART FESTA</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""></div>
        <div class="sect1--belt-item"><p>2022. 9. 3 sat ~ 10. 3 mon</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""><p>2022 IKSAN WORLD HERITAGE MEDIA ART FESTA</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""></div>
        <div class="sect1--belt-item"><p>2022. 9. 3 sat ~ 10. 3 mon</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""><p>2022 IKSAN WORLD HERITAGE MEDIA ART FESTA</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""></div>
        <div class="sect1--belt-item"><p>2022. 9. 3 sat ~ 10. 3 mon</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""><p>2022 IKSAN WORLD HERITAGE MEDIA ART FESTA</p><img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt=""></div>
    </div>
</div>
<div id="sect2">
    <div class="sect2--bg"></div>
    <div class="sect2--wrap">
        <div class="wrap1548">
            <div class="sect--head sect2--head">
                <div class="sect2--head-text">
                    <p class="font52">Program Guide</p>
                    <p class="font20">Meet the various programs prepared by the World Heritage <br>Media Art Festa at Mireuksa Temple Site in Iksan in 2022.</p >
                </div>
                <!-- <div class="sect3--box sect3--box3 sect2--box"><a href="<?php echo G5_URL; ?>/docs/introduce02.php#schedule">일정안내 보기</a></div> -->
            </div>
            <div class="main--goto sect2--title">
                <a href="javascript:GoPage('history')">
                    <div>
                        <p>To Establish History </p>
                        <img src="<?php echo G5_URL; ?>/common/img/white_arrow.png" alt="">
                    </div>
                </a>
            </div>
            <div class="sect2--list">
                <a href="javascript:GoPage('history01')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_history01.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">The Country of Pagodas Establishes Wishes</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('history02')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_history02.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">The Land of Maitreya, the Citizens of One Thousand Years (XR)</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('history03')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_history03.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">The Land of Maitreya, the Citizens of One Thousand Years (LIVE)</p>
                    <p class="sect2--list-text2">09.03 / 09.17 / 09.24 / 10.01 / 10.02</p>
                </a>
                <a href="javascript:GoPage('history04')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_history04.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Baekje Heritage Drone in Iksan</p>
                    <p class="sect2--list-text2">2022. 09. 03 / 2022. 09. 11</p>
                </a>
            </div>
            <div class="main--goto sect2--title">
                <a href="javascript:GoPage('art')">
                    <div>
                        <p>To Establish Art</p>
                        <img src="<?php echo G5_URL; ?>/common/img/white_arrow.png" alt="">
                    </div>
                </a>
            </div>
            <div class="sect2--list">
                <a href="javascript:GoPage('art01')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art01.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Making Iksan Myself</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('art02')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art02.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Tree of Light & resilence - Forest</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('art03')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art03.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">My Own Docent</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('art04')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art04.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Metaverse Mireuksa Temple Site</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('art05')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art05.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Digital Homecoming</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('art06')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_art06.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">BeopGoChangShin (Review the old and Learn the new)</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
            </div>
            <div class="main--goto sect2--title">
                <a href="javascript:GoPage('hope')">
                    <div>
                        <p>To Establish Wishes</p>
                        <img src="<?php echo G5_URL; ?>/common/img/white_arrow.png" alt="">
                    </div>
                </a>
            </div>
            <div class="sect2--list sect2--list-last">
                <a href="javascript:GoPage('hope01')" class="sect2--listItem">
                    <!-- <div class="sect2--list-thumb" style="background-image:url('<?php ; ?>/common/img/main_hope01.png');"><span></span><span></span><span></span><span></span></div> -->
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_hope01new.jpg');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">I·Story·U</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('hope02')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_hope02.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Waterdrop Garden</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('hope03')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_hope03.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Firefly Garden</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
                <a href="javascript:GoPage('hope04')" class="sect2--listItem">
                    <div class="sect2--list-thumb" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_hope04.png');"><span></span><span></span><span></span><span></span></div>
                    <p class="sect2--list-text1">Festival Photobooth</p>
                    <p class="sect2--list-text2">2022. 09. 03 ~ 22. 10. 03</p>
                </a>
            </div>
            <!-- <div class="sect3--box sect3--box3 sect2--box sect2--boxUnder"><a href="/mireuk/docs/introduce01.html#schedule">일정안내 보기</a></div> -->
        </div>
    </div>
</div>
<div id="sect3" class="sect3--sekai">
    <div class="sect3--sekai-wrap">
        <!-- <div class="sect3--box"><img src="<?php echo G5_URL; ?>/common/img/sekai_art.png" alt=""></div> -->
        <div class="sect3--text">
            <div class="sect3--title"><p>World Heritage Media Art</p></div>
            <div class="sect3--box sect3--sub"><p>To Gather Wishes of the Generations <br>through the Night of the Healing Festival Enjoyed with Citizens</p></div>
        </div>
        <div class="sect3--box sect3--box3"><a href="javascript:GoPage('introduce02')">Festa Overview</a></div>
    </div>
</div>
<div id="sect4">
    <div class="sect4--line wrap1548">
        <!-- <div class="sect--head"></div> -->
        <div class="main--goto sect4--title">
            <a href="javascript:GoPage('event')">
                <div>
                    <p>Related Events</p>
                    <img src="<?php echo G5_URL; ?>/common/img/white_arrow.png" alt="">
                </div>
            </a>
        </div>
    </div>
    <div class="wrap1548">
        <div class="sect4--event">
            <div class="sect4--event-button">
                <div class="sect4--event-buttonItem clicked">
                    <div class="sect4--event-title"><p class="sect4--event-num">01</p>Opening Ceremony</div>
                    <div class="sect4--event-arrow"></div>
                </div>
                <div class="sect4--event-buttonItem">
                    <div class="sect4--event-title"><p class="sect4--event-num">02</p>Kukkiwon Taekwondo Demonstration Team</div>
                    <div class="sect4--event-arrow"></div>
                </div>
                <div class="sect4--event-buttonItem">
                    <div class="sect4--event-title"><p class="sect4--event-num">03</p>Flea Market</div>
                    <div class="sect4--event-arrow"></div>
                </div>
            </div>
            <div class="sect4--event-img">
                <div class="sect4--event-imgItem on" style="background-image:url('<?php echo G5_URL; ?>/common/img/main_event_img03.jpg');">
                    <a href="javascript:GoPage('event01')">
                        <div class="sect4--event-imgRow">
                            <p class="sect4--event-text1">EVENT 01</p>
                            <p class="sect4--event-text2">Opening Ceremony</p>
                        </div>
                        <div class="sect4--event-imgRow2">
                            <p class="sect4--event-text3">09/03 (sat) 19:30</p>
                            <img src="<?php echo G5_URL; ?>/common/img/white_arrow_big.png" alt="">
                        </div>
                    </a>
                </div>

                <div class="sect4--event-imgItem"  style="background-image:url('<?php echo G5_URL; ?>/common/img/main_event_img01.png')">
                    <a href="javascript:GoPage('event03')">
                        <div class="sect4--event-imgRow">
                            <p class="sect4--event-text1">EVENT 02</p>
                            <p class="sect4--event-text2">Kukkiwon Taekwondo Demonstration Team</p>
                        </div>
                        <div class="sect4--event-imgRow2">
                            <p class="sect4--event-text3">09/03 (sat) 20:00</p>
                            <img src="<?php echo G5_URL; ?>/common/img/white_arrow_big.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="sect4--event-imgItem sect4--event-imgItem3">
                  <a href="javascript:GoPage('event02')">
                    <div class="sect4--event-imgRow">
                        <p class="sect4--event-text1">EVENT 03</p>
                        <p class="sect4--event-text2">Flea Market</p>
                    </div>
                    <div class="sect4--event-imgRow2">
                        <p class="sect4--event-text3">every fri,sat 18:00~22:00</p>
                        <img src="<?php echo G5_URL; ?>/common/img/white_arrow_big.png" alt="">
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <div class="sect4--emo">
        <div class="wrap1040">
            <div class="sect4--emo-text"><p>Iksan Here and There</p></div>
            <div class="sect4--emo-list">
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun01')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb1"></div>
                    <div class="sect4--emo-list-text">#Places to eat</div>
                  </a>
                </div>
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun02')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb2"></div>
                    <div class="sect4--emo-list-text">#Places to stay</div>
                  </a>
                </div>
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun03')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb3"></div>
                    <div class="sect4--emo-list-text">#Iksan National Museum</div>
                  </a>
                </div>
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun04')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb4"></div>
                    <div class="sect4--emo-list-text">#Iksan Children's Museum</div>
                  </a>
                </div>
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun05')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb5"></div>
                    <div class="sect4--emo-list-text">#Iksan Jewelry Museum</div>
                  </a>
                </div>
                <div class="sect4--emo-listItem">
                  <a href="javascript:GoPage('fun06')">
                    <div class="sect4--emo-list-thumb sect4--emo-list-thumb6"></div>
                    <div class="sect4--emo-list-text">#Baekje Royal Palace Museum</div>
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sect5">
    <div class="sect5--container">
        <div class="wrap1548">
            <div class="sect5--wrap">
                <div class="sect5--teaser">
                    <p class="sect5--teaser-text">Teaser Video</p>
                    <!-- <div class="sect5--teaser-fig"><img src="<?php echo G5_URL; ?>/common/img/main_fig.png" alt=""></div> -->
                    <div class="sect5--teaser-fig"><video autoplay loop muted playsinline src="https://player.vimeo.com/progressive_redirect/playback/739945126/rendition/720p/file.mp4?loc=external&signature=52cc2592dd48cfa2a420fde7342b153a1d03f1ec354bfb9bde49d63f8669234c"></video></div>
                </div>
                <div class="sect5--boards">
                    <div class="sect5--boards-top">
                        <ul>
                            <li class="on"><p>Notice</p></li>
                            <li><p>FAQ</p></li>
                        </ul>
                        <a href="javascript:GoPage('board01')" class="sect5--boards-link">
                            <p>View All</p>
                            <img src="<?php echo G5_URL; ?>/common/img/black_arrow.png" alt="">
                        </a>
                    </div>
                    <div class="sect5--boards-list on">
                        <?php echo latest('iksan_basic1', 'notice', 5, 24); ?>
                        <!--
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=5" class="sect5--boards-listItem">
                            <div class="sect5--boards-text1"><p>공지사항</p></div>
                            <p class="sect5--boards-text2">교통정보가 궁금하신가요?</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=4" class="sect5--boards-listItem">
                            <div class="sect5--boards-text1"><p>공지사항</p></div>
                            <p class="sect5--boards-text2">Flea Market Open!</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=3" class="sect5--boards-listItem">
                            <div class="sect5--boards-text1"><p>공지사항</p></div>
                            <p class="sect5--boards-text2">COVID-19 행사 참여안내</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=2" class="sect5--boards-listItem">
                            <div class="sect5--boards-text1"><p>공지사항</p></div>
                            <p class="sect5--boards-text2">2022 익산 미륵사지 세계유산 미디어아트페스타 홈페이지 오픈</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=1" class="sect5--boards-listItem">
                            <div class="sect5--boards-text1"><p>공지사항</p></div>
                            <p class="sect5--boards-text2">2022 익산 미륵사지 세계유산 미디어아트페스타 안내</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        -->
                    </div>
                    <div class="sect5--boards-list">
                      <?php echo latest('iksan_basic1', 'faq', 5, 24); ?>
                        <!--
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=faq&wr_id=1" class="sect5--boards-listItem">
                            <p class="sect5--boards-text2">묻고 답하기 제목</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=faq&wr_id=1" class="sect5--boards-listItem">
                            <p class="sect5--boards-text2">묻고 답하기 제목</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=faq&wr_id=1" class="sect5--boards-listItem">
                            <p class="sect5--boards-text2">묻고 답하기 제목</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=faq&wr_id=1" class="sect5--boards-listItem">
                            <p class="sect5--boards-text2">묻고 답하기 제목</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        <a href="https://iksanlightfesta.kr/bbs/board.php?bo_table=faq&wr_id=1" class="sect5--boards-listItem">
                            <p class="sect5--boards-text2">묻고 답하기 제목</p>
                            <p class="sect5--boards-text3">2022.01.01</p>
                        </a>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 메인화면 최신글 끝 -->



<?php
include_once(G5_PATH.'/tail.php');
