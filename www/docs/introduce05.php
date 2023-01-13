<?php
include_once('_common.php');
include_once('_head.php');

?>


<!-- 서브페이지 시작 -->
<div id="uniform" class="uniform--container">
    <div class="wrap1548">
        <div class="uniform--wrap">
            <a class="home" href="/">홈</a>
            <span></span>
            <p>행사소개</p>
            <span></span>
            <p class="now">오시는 길</p>
        </div>
    </div>
</div>
<div id="pageTitle" class="page--title">
    <div class="wrap1548">
        <div class="page--title-wrap border-bottom-none">
            <p class="page--title-text1">2022 익산 미륵사지 <br>세계유산 미디어아트 페스타</p>
            <p class="page--title-text2">백제의 빛, 희망을 쌓다</p>
        </div>
    </div>
</div>
<div class="intro--container">
    <div id="sect4" class="scroll-position">
        <div class="intro--info-content wrap1548">
            <p class="intro--text01">오시는 길</p>
            <div class="intro--navi-map">
                <div id="daumRoughmapContainer1660178451022" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                	new daum.roughmap.Lander({
                		"timestamp" : "1660178451022",
                		"key" : "2bc7y",
                		// "mapWidth" : "640",
                		// "mapHeight" : "360"
                	}).render();
                </script>
            </div>
            <div class="intro--navi-info">
                <div class="intro--navi-info-col1">
                    <div class="intro--navi-info-col1-row">
                        <p class="intro--navi-text01 bold">Tel</p>
                        <p class="intro--navi-text01">1577-0072</p>
                    </div>
                    <div class="intro--navi-info-col1-row">
                        <p class="intro--navi-text01 bold">Address</p>
                        <p class="intro--navi-text01">전라북도 익산시 미륵사지로 362</p>
                    </div>
                    <div class="intro--navi-link">
                        <div class="intro--navi-link-button intro--navi-link-naver"><a href="https://naver.me/xkx9cQBD" target="_blank"><img src="../common/img/naver.png" alt=""><p>네이버맵</p></a></div>
                        <div class="intro--navi-link-button intro--navi-link-kakao"><a href="https://place.map.kakao.com/12753294" target="_blank"><img src="../common/img/kakaomap.png" alt=""><p>카카오맵</p></a></div>
                    </div>
                </div>
                <div class="intro--navi-info-col2">
                    <div class="intro--navi-scroll">
                        <div class="intro--navi-scroll-button"><p class="intro--navi-text01">기차 (KTX, SRT, 새마을호, 무궁화호)</p><img src="../common/img/black_arrow_down.png" alt=""></div>
                        <div class="intro--navi-scroll-wrap"><p class="intro--navi-text02">익산역 하차, 익산역 정류장에서 시내버스 (41, 41-1, 60, 60-1, 60-3) 이용</p></div>
                    </div>
                    <div class="intro--navi-scroll">
                        <div class="intro--navi-scroll-button"><p class="intro--navi-text01">버스</p><img src="../common/img/black_arrow_down.png" alt=""></div>
                        <div class="intro--navi-scroll-wrap">
                            <p class="intro--navi-text02">익산공용버스터미널 하차 평화동 정류장에서 시내버스(60, 60-1, 60-3) 이용 미륵사지 정류장에서 하차</p>
                            <p class="intro--navi-text02">전주 공용버스터미널에서 금마행 직행버스가 (1일 6회) 운행</p>
                            <p class="intro--navi-text02">금마에서 41, 41-1, 60, 60-1, 60-3 시내버스 이용 또는 금마에서 미륵사지까지 택시 이용 (소요시간 5분, 요금 5000원 정도)</p>
                        </div>
                    </div>
                    <div class="intro--navi-scroll">
                        <div class="intro--navi-scroll-button"><p class="intro--navi-text01">택시</p><img src="../common/img/black_arrow_down.png" alt=""></div>
                        <div class="intro--navi-scroll-wrap"><p class="intro--navi-text02">익산역 기준 소요시간 약 30분, 택시비 약 15,000원</p></div>
                    </div>
                    <div class="intro--navi-scroll">
                        <div class="intro--navi-scroll-button"><p class="intro--navi-text01">승용차</p><img src="../common/img/black_arrow_down.png" alt=""></div>
                        <div class="intro--navi-scroll-wrap">
                            <p class="intro--navi-text02">호남고속도로 익산 I.C → (722번 지방도) → 익산시내방면 5.3㎞ → 금마사거리 → 우회전 → 금마, 미륵사지</p>
                            <p class="intro--navi-text02">삼례 I.C → (1번 국도, 10.4㎞) → 금마, 미륵사지</p>
                            <p class="intro--navi-text02">논산 I.C → (1번 국도) → 연무 → 여산 → 금마, 미륵사지</p>
                            <p class="intro--navi-text02">서해안 고속도로 이용 시 동군산 I.C → 718번 지방도 이용</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 서브페이지 끝 -->

<script src="<?php echo G5_URL ?>/common/js/introduce4.js"></script>
<?php
include_once('_tail.php');
