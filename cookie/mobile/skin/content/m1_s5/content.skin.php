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
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab active">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-logo">
                <!-- 로고 이미지 영역 -->
            </div>
            <div class="foundation-info">
                <h2 class="title-with-icon">조직도</h2>
                <p class="foundation-subtitle">안성시노인복지관 조직 구성</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">조직도</h3>
                <div class="organ s_style">
                    <div class="organ_tree_wrap">	
                        <div class="organ_tree_img">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/organ.jpg" usemap="#img01Map" id="img01" style="width: 100%;">
                            <map name="img01Map" id="img01Map">
                                <area shape="rect" coords="374,592,520,725" onclick="show_history(1)" class="organ_maps">
                                <area shape="rect" coords="336,377,553,454" onclick="show_history(2)" class="organ_maps">
                                <area shape="rect" coords="54,184,279,273" onclick="show_history(3)" class="organ_maps">
                                <area shape="rect" coords="332,186,569,267" onclick="show_history(4)" class="organ_maps">
                                <area shape="rect" coords="23,55,157,99" onclick="show_history(5)" class="organ_maps">
                                <area shape="rect" coords="166,53,295,100" onclick="show_history(6)" class="organ_maps">
                                <area shape="rect" coords="308,54,438,101" onclick="show_history(7)" class="organ_maps">
                                <area shape="rect" coords="446,55,578,101" onclick="show_history(8)" class="organ_maps">
                                <area shape="rect" coords="586,54,717,101" onclick="show_history(9)" class="organ_maps">
                                <area shape="rect" coords="726,56,858,102" onclick="show_history(10)" class="organ_maps">
                            </map>
                        </div>
                    </div>  
                    
                    <b class="history_info">※ 내용이 안 보일경우 터치(마우스)로 좌우로 스크롤을 밀면 자세히 보실수 있습니다.</b>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">직원현황</h3>
                <div class="staff-statistics">
                    <table class="organ_table1" style="width: 100%; border-collapse: collapse; background: #fff; border: 2px solid #4a90e2;">
                        <tbody>
                            <tr>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">구분</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">관장</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">부장</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">과장</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">선임<br>사회복지사</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">사회복지사</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">간호사</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">물리치료사</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">사무원</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">회계원</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">시설관리</th>
                                <th style="background: #4a90e2; color: #fff; padding: 12px 8px; border: 1px solid #ddd; text-align: center;">노인 상담<br>센터 상담사</th>
                            </tr>
                            <tr>
                                <td>인원(명)</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>구분</th>
                                <th>영양사</th>
                                <th>조리사</th>
                                <th>조리원</th>
                                <th>노인맞춤돌봄<br>전담<br>사회복지사</th>
                                <th>응급관리요원</th>
                                <th>노인 일자리<br>담당자</th>
                                <th>생활<br>지원사</th>
                                <th>아침밥상<br>전담·<br>조리원</th>
                                <th>공도<br>나소향<br>나눔밥상<br>영양사</th>
                                <th>공도<br>나소향<br>나눔밥상<br>조리원</th>
                                <th>전체</th>
                            </tr>
                            <tr>
                                <td>인원(명)</td>
                                <td>1</td>
                                <td>1</td>
                                <td>4</td>
                                <td>5</td>
                                <td>3</td>
                                <td>4</td>
                                <td>50</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>94</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">조직 현황</h3>
                <div class="org-details">
                    
                    <div class="org-department" id="director">
                        <h4>관장</h4>
                        <div class="department-info">
                            <ul>
                                <li><strong>역할:</strong> 복지관 전체 운영 총괄</li>
                                <li><strong>주요업무:</strong> 정책수립, 대외협력, 운영방향 설정</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="org-department" id="deputy">
                        <h4>부장</h4>
                        <div class="department-info">
                            <ul>
                                <li><strong>역할:</strong> 관장 업무 보좌 및 실무 총괄</li>
                                <li><strong>주요업무:</strong> 각 팀 업무 조정, 사업계획 수립</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="general-affairs">
                        <h4>총무과 과장</h4>
                        <div class="department-info">
                            <p><strong>담당팀:</strong> 운영지원팀, 기획총무팀</p>
                            <ul>
                                <li><strong>운영지원팀:</strong> 시설관리, 안전관리, 환경정비</li>
                                <li><strong>기획총무팀:</strong> 인사관리, 회계관리, 기획업무</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="welfare">
                        <h4>복지과 과장</h4>
                        <div class="department-info">
                            <p><strong>담당팀:</strong> 맞춤돌봄팀, 사회참여팀, 문화건강팀, 사례관리팀</p>
                            <ul>
                                <li><strong>맞춤돌봄팀:</strong> 노인맞춤돌봄서비스, 재가서비스</li>
                                <li><strong>사회참여팀:</strong> 노인일자리, 사회활동지원</li>
                                <li><strong>문화건강팀:</strong> 평생교육, 건강증진프로그램</li>
                                <li><strong>사례관리팀:</strong> 통합사례관리, 상담서비스</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="operation-support">
                        <h4>운영지원팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>시설 유지 관리</li>
                                <li>안전 관리</li>
                                <li>환경 정비</li>
                                <li>차량 관리</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="planning">
                        <h4>기획총무팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>인사 관리</li>
                                <li>회계 관리</li>
                                <li>기획 업무</li>
                                <li>예산 편성</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="customized-care">
                        <h4>맞춤돌봄팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>노인맞춤돌봄서비스</li>
                                <li>재가서비스</li>
                                <li>응급안전안심서비스</li>
                                <li>방문상담</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="social-participation">
                        <h4>사회참여팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>노인일자리 사업</li>
                                <li>사회활동지원사업</li>
                                <li>자원봉사 운영</li>
                                <li>지역사회 연계</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="culture-health">
                        <h4>문화건강팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>평생교육 프로그램</li>
                                <li>건강증진 프로그램</li>
                                <li>문화여가 프로그램</li>
                                <li>체육활동 지원</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="case-management">
                        <h4>사례관리팀</h4>
                        <div class="department-info">
                            <ul>
                                <li>통합사례관리</li>
                                <li>상담서비스</li>
                                <li>치매예방 프로그램</li>
                                <li>정신건강 지원</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="management-committee">
                        <h4>운영위원회</h4>
                        <div class="department-info">
                            <ul>
                                <li>복지관 운영 자문</li>
                                <li>사업계획 심의</li>
                                <li>예산 심의</li>
                                <li>정책 자문</li>
                            </ul>
                        </div>
                    </div>

                    <div class="org-department" id="personnel-committee">
                        <h4>인사위원회</h4>
                        <div class="department-info">
                            <ul>
                                <li>인사정책 수립</li>
                                <li>직원 평가</li>
                                <li>교육계획 수립</li>
                                <li>복무관리</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 조직도 상세 정보 팝업 -->
<div class="organ_pop_wrap">
    <div class="orgac_bg"></div>
    <div class="organ_pop_con">
        <div class="organ_pop_top">
            <p class="orgac_tit"></p>
            <p class="orgac_close">×</p>
        </div>
        <div class="organ_pop_txt"></div>
    </div>
</div>

<script>
// 각 부서별 상세 정보 데이터
const orgData = {
    1: { // 관장
        title: "관장",
        content: `
            <h4>역할 및 책무</h4>
            <ul>
                <li>복지관 전체 운영 총괄</li>
                <li>정책수립 및 대외협력</li>
                <li>운영방향 설정</li>
                <li>지역사회 네트워크 구축</li>
            </ul>
            <h4>담당업무</h4>
            <ul>
                <li>복지관 운영 기획 및 총괄</li>
                <li>예산 편성 및 집행 관리</li>
                <li>대외기관 협력 관계 구축</li>
                <li>직원 관리 및 조직 운영</li>
            </ul>
        `
    },
    2: { // 부장
        title: "부장",
        content: `
            <h4>역할 및 책무</h4>
            <ul>
                <li>관장 업무 보좌 및 실무 총괄</li>
                <li>각 팀 업무 조정 및 관리</li>
                <li>사업계획 수립 및 실행</li>
                <li>품질관리 및 서비스 향상</li>
            </ul>
            <h4>담당업무</h4>
            <ul>
                <li>각 과 및 팀 업무 조정</li>
                <li>사업계획 수립 및 평가</li>
                <li>서비스 품질 관리</li>
                <li>직원 교육 및 개발</li>
            </ul>
        `
    },
    3: { // 총무과
        title: "총무과",
        content: `
            <h4>담당팀</h4>
            <p><strong>운영지원팀, 기획총무팀</strong></p>
            
            <h4>주요업무</h4>
            <ul>
                <li><strong>운영지원팀</strong>
                    <ul>
                        <li>시설관리 및 유지보수</li>
                        <li>안전관리 및 환경정비</li>
                        <li>차량관리 및 운행</li>
                        <li>물품구매 및 관리</li>
                    </ul>
                </li>
                <li><strong>기획총무팀</strong>
                    <ul>
                        <li>인사관리 및 급여</li>
                        <li>회계관리 및 예산</li>
                        <li>기획업무 및 보고</li>
                        <li>문서관리 및 보안</li>
                    </ul>
                </li>
            </ul>
        `
    },
    4: { // 복지과
        title: "복지과",
        content: `
            <h4>담당팀</h4>
            <p><strong>맞춤돌봄팀, 사회참여팀, 문화건강팀, 사례관리팀</strong></p>
            
            <h4>주요업무</h4>
            <ul>
                <li><strong>맞춤돌봄팀</strong>
                    <ul>
                        <li>노인맞춤돌봄서비스</li>
                        <li>재가서비스 제공</li>
                        <li>응급안전안심서비스</li>
                        <li>방문상담 및 지원</li>
                    </ul>
                </li>
                <li><strong>사회참여팀</strong>
                    <ul>
                        <li>노인일자리 사업</li>
                        <li>사회활동지원사업</li>
                        <li>자원봉사 운영</li>
                        <li>지역사회 연계</li>
                    </ul>
                </li>
                <li><strong>문화건강팀</strong>
                    <ul>
                        <li>평생교육 프로그램</li>
                        <li>건강증진 프로그램</li>
                        <li>문화여가 프로그램</li>
                        <li>체육활동 지원</li>
                    </ul>
                </li>
                <li><strong>사례관리팀</strong>
                    <ul>
                        <li>통합사례관리</li>
                        <li>상담서비스</li>
                        <li>치매예방 프로그램</li>
                        <li>정신건강 지원</li>
                    </ul>
                </li>
            </ul>
        `
    },
    5: { // 운영지원팀
        title: "운영지원팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>시설 유지 관리
                    <ul>
                        <li>건물 및 시설물 점검</li>
                        <li>설비 운영 및 관리</li>
                        <li>수선 및 보수 작업</li>
                    </ul>
                </li>
                <li>안전 관리
                    <ul>
                        <li>화재 및 안전 점검</li>
                        <li>응급상황 대응</li>
                        <li>안전교육 실시</li>
                    </ul>
                </li>
                <li>환경 정비
                    <ul>
                        <li>청소 및 위생 관리</li>
                        <li>조경 및 환경 관리</li>
                        <li>폐기물 처리</li>
                    </ul>
                </li>
                <li>차량 관리
                    <ul>
                        <li>차량 운행 및 정비</li>
                        <li>송영 서비스</li>
                        <li>외부 업무 지원</li>
                    </ul>
                </li>
            </ul>
        `
    },
    6: { // 기획총무팀
        title: "기획총무팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>인사 관리
                    <ul>
                        <li>채용 및 인사발령</li>
                        <li>급여 및 복리후생</li>
                        <li>교육 및 연수</li>
                    </ul>
                </li>
                <li>회계 관리
                    <ul>
                        <li>예산 편성 및 집행</li>
                        <li>결산 및 재무 관리</li>
                        <li>후원금 관리</li>
                    </ul>
                </li>
                <li>기획 업무
                    <ul>
                        <li>사업계획 수립</li>
                        <li>평가 및 보고</li>
                        <li>정책 연구</li>
                    </ul>
                </li>
                <li>행정 업무
                    <ul>
                        <li>문서 관리</li>
                        <li>물품 구매</li>
                        <li>계약 업무</li>
                    </ul>
                </li>
            </ul>
        `
    },
    7: { // 맞춤돌봄팀
        title: "맞춤돌봄팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>노인맞춤돌봄서비스
                    <ul>
                        <li>대상자 발굴 및 선정</li>
                        <li>개인별 돌봄계획 수립</li>
                        <li>직접서비스 제공</li>
                        <li>연계서비스 조정</li>
                    </ul>
                </li>
                <li>재가서비스
                    <ul>
                        <li>가사지원 서비스</li>
                        <li>신체활동 지원</li>
                        <li>일상생활 지원</li>
                        <li>정서적 지원</li>
                    </ul>
                </li>
                <li>응급안전안심서비스
                    <ul>
                        <li>응급상황 모니터링</li>
                        <li>안전확인 서비스</li>
                        <li>24시간 상황실 운영</li>
                    </ul>
                </li>
            </ul>
        `
    },
    8: { // 사회참여팀
        title: "사회참여팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>노인일자리 사업
                    <ul>
                        <li>공익활동 운영</li>
                        <li>사회서비스형 사업</li>
                        <li>시장형 사업단 운영</li>
                        <li>취업알선형 사업</li>
                    </ul>
                </li>
                <li>사회활동지원사업
                    <ul>
                        <li>자원봉사 활동</li>
                        <li>지역사회 참여</li>
                        <li>세대간 교류</li>
                        <li>사회공헌 활동</li>
                    </ul>
                </li>
                <li>지역사회 연계
                    <ul>
                        <li>지역 네트워크 구축</li>
                        <li>협력기관 연계</li>
                        <li>자원 개발 및 활용</li>
                    </ul>
                </li>
            </ul>
        `
    },
    9: { // 문화건강팀
        title: "문화건강팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>평생교육 프로그램
                    <ul>
                        <li>교양강좌 운영</li>
                        <li>취미활동 프로그램</li>
                        <li>정보화 교육</li>
                        <li>인문학 강좌</li>
                    </ul>
                </li>
                <li>건강증진 프로그램
                    <ul>
                        <li>건강검진 서비스</li>
                        <li>물리치료 서비스</li>
                        <li>운동 프로그램</li>
                        <li>영양 상담</li>
                    </ul>
                </li>
                <li>문화여가 프로그램
                    <ul>
                        <li>문화공연 관람</li>
                        <li>나들이 프로그램</li>
                        <li>동아리 활동</li>
                        <li>축제 및 행사</li>
                    </ul>
                </li>
            </ul>
        `
    },
    10: { // 사례관리팀
        title: "사례관리팀",
        content: `
            <h4>주요업무</h4>
            <ul>
                <li>통합사례관리
                    <ul>
                        <li>복합적 욕구 사정</li>
                        <li>서비스 계획 수립</li>
                        <li>자원 연계 및 조정</li>
                        <li>사후 관리</li>
                    </ul>
                </li>
                <li>상담서비스
                    <ul>
                        <li>개인 상담</li>
                        <li>가족 상담</li>
                        <li>집단 상담</li>
                        <li>위기개입 상담</li>
                    </ul>
                </li>
                <li>치매예방 프로그램
                    <ul>
                        <li>인지능력 향상</li>
                        <li>치매예방 교육</li>
                        <li>가족 지원</li>
                    </ul>
                </li>
                <li>정신건강 지원
                    <ul>
                        <li>우울증 예방</li>
                        <li>심리상담</li>
                        <li>정신건강 교육</li>
                    </ul>
                </li>
            </ul>
        `
    }
};

// 조직도 팝업 기능
function show_history(num) {
    const data = orgData[num];
    if (!data) return;
    
    document.querySelector('.orgac_tit').textContent = data.title;
    document.querySelector('.organ_pop_txt').innerHTML = data.content;
    document.querySelector('.organ_pop_wrap').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// 팝업 닫기
document.addEventListener('DOMContentLoaded', function() {
    const popupWrap = document.querySelector('.organ_pop_wrap');
    const closeBtn = document.querySelector('.orgac_close');
    const bgClose = document.querySelector('.orgac_bg');
    
    function closePopup() {
        popupWrap.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    if (closeBtn) closeBtn.addEventListener('click', closePopup);
    if (bgClose) bgClose.addEventListener('click', closePopup);
    
    // ESC 키로 팝업 닫기
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && popupWrap.style.display === 'block') {
            closePopup();
        }
    });
});
</script>