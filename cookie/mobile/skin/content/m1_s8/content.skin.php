<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m1_s1" class="main-tab">법인소개</a>
        <a href="/bbs/content.php?co_id=m1_s2" class="main-tab">인사말</a>
        <a href="/bbs/content.php?co_id=m1_s3" class="main-tab">미션 및 비전</a>
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab active">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-logo">
                <!-- 로고 이미지 영역 -->
            </div>
            <div class="foundation-info">
                <h2 class="title-with-icon">오시는길</h2>
                <p class="foundation-subtitle">안성시노인복지관 찾아오시는 길</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <p style="padding:15px; text-align:right;">※ 지도가 안보일경우 <a href="http://get.adobe.com/flashplayer/" target="_blank"><b style="color:blue; font-size:1.5em;">여기</b></a>를 클릭하세요.</p>
                
                <div id="map_wrap">
                    <div id="mapWrapper">
                        <div id="daum_map" style="width:100%; height:400px;"></div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">오시는 길</h3>
                <ul class="directions-list">
                    <li><strong>경부고속도로:</strong> 안성 IC→안성·공도방면 우회전 약 15㎞→안성시노인복지관</li>
                    <li><strong>중부고속도로:</strong> 일죽 IC→안성방면 우회전→38국도→봉산로타리 끼고 좌회전→안성시노인복지관</li>
                    <li><strong>대중교통이용:</strong></li>
                    <li><strong>시버스노선:</strong></li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">연락처 정보</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <span class="contact-label">주소:</span>
                        <span class="contact-value">경기도 안성시 장기로 109 (낙원동 68-24)</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">전화:</span>
                        <span class="contact-value"><a href="tel:031-674-0794">031-674-0794~6</a></span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">팩스:</span>
                        <span class="contact-value">031-674-0797</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=YOUR_APP_KEY"></script>
<script>
var mapContainer = document.getElementById('daum_map'),
    mapOption = {
        center: new kakao.maps.LatLng(37.004366, 127.275061),
        level: 3
    };

var map = new kakao.maps.Map(mapContainer, mapOption);

var markerPosition = new kakao.maps.LatLng(37.004366, 127.275061);
var marker = new kakao.maps.Marker({
    position: markerPosition
});

marker.setMap(map);

var iwContent = '<div style="padding:5px;">안성시노인복지관<br><a href="https://map.kakao.com/link/map/안성시노인복지관,37.004366,127.275061" style="color:blue" target="_blank">큰지도보기</a> <a href="https://map.kakao.com/link/to/안성시노인복지관,37.004366,127.275061" style="color:blue" target="_blank">길찾기</a></div>',
    iwPosition = new kakao.maps.LatLng(37.004366, 127.275061);

var infowindow = new kakao.maps.InfoWindow({
    position: iwPosition,
    content: iwContent
});

infowindow.open(map, marker);
</script>