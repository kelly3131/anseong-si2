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
                <h3 class="section-title-with-icon">조직 구성도</h3>
                <div class="org-chart-container">
                    <div class="org-chart-image">
                        <svg viewBox="0 0 800 600" class="org-chart-svg">
                            <!-- 조직도 배경 -->
                            <rect width="800" height="600" fill="#f8f9fa"/>
                            
                            <!-- 관장 -->
                            <g class="org-item" data-target="director">
                                <circle cx="400" cy="480" r="40" fill="#4a90e2" stroke="#fff" stroke-width="3"/>
                                <text x="400" y="485" text-anchor="middle" fill="white" font-weight="bold" font-size="14">관장</text>
                            </g>
                            
                            <!-- 부장 -->
                            <g class="org-item" data-target="deputy">
                                <rect x="360" y="340" width="80" height="40" fill="#5ba7f7" stroke="#fff" stroke-width="2" rx="5"/>
                                <text x="400" y="365" text-anchor="middle" fill="white" font-weight="bold" font-size="12">부장</text>
                            </g>
                            
                            <!-- 총무과 과장 -->
                            <g class="org-item" data-target="general-affairs">
                                <ellipse cx="160" cy="220" rx="60" ry="25" fill="#f4a261" stroke="#fff" stroke-width="2"/>
                                <text x="160" y="225" text-anchor="middle" fill="white" font-weight="bold" font-size="11">총무과 과장</text>
                            </g>
                            
                            <!-- 복지과 과장 -->
                            <g class="org-item" data-target="welfare">
                                <ellipse cx="440" cy="220" rx="60" ry="25" fill="#2a9d8f" stroke="#fff" stroke-width="2"/>
                                <text x="440" y="225" text-anchor="middle" fill="white" font-weight="bold" font-size="11">복지과 과장</text>
                            </g>
                            
                            <!-- 운영지원팀 -->
                            <g class="org-item" data-target="operation-support">
                                <rect x="70" y="80" width="70" height="30" fill="#e76f51" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="105" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">운영지원팀</text>
                            </g>
                            
                            <!-- 기획총무팀 -->
                            <g class="org-item" data-target="planning">
                                <rect x="160" y="80" width="70" height="30" fill="#e76f51" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="195" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">기획총무팀</text>
                            </g>
                            
                            <!-- 맞춤돌봄팀 -->
                            <g class="org-item" data-target="customized-care">
                                <rect x="280" y="80" width="70" height="30" fill="#264653" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="315" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">맞춤돌봄팀</text>
                            </g>
                            
                            <!-- 사회참여팀 -->
                            <g class="org-item" data-target="social-participation">
                                <rect x="390" y="80" width="70" height="30" fill="#264653" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="425" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">사회참여팀</text>
                            </g>
                            
                            <!-- 문화건강팀 -->
                            <g class="org-item" data-target="culture-health">
                                <rect x="500" y="80" width="70" height="30" fill="#264653" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="535" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">문화건강팀</text>
                            </g>
                            
                            <!-- 사례관리팀 -->
                            <g class="org-item" data-target="case-management">
                                <rect x="610" y="80" width="70" height="30" fill="#264653" stroke="#fff" stroke-width="2" rx="3"/>
                                <text x="645" y="100" text-anchor="middle" fill="white" font-weight="bold" font-size="10">사례관리팀</text>
                            </g>
                            
                            <!-- 연결선 -->
                            <line x1="400" y1="440" x2="400" y2="380" stroke="#333" stroke-width="2"/>
                            <line x1="400" y1="340" x2="160" y2="245" stroke="#333" stroke-width="2"/>
                            <line x1="400" y1="340" x2="440" y2="245" stroke="#333" stroke-width="2"/>
                            <line x1="160" y1="195" x2="105" y2="110" stroke="#333" stroke-width="2"/>
                            <line x1="160" y1="195" x2="195" y2="110" stroke="#333" stroke-width="2"/>
                            <line x1="440" y1="195" x2="315" y2="110" stroke="#333" stroke-width="2"/>
                            <line x1="440" y1="195" x2="425" y2="110" stroke="#333" stroke-width="2"/>
                            <line x1="440" y1="195" x2="535" y2="110" stroke="#333" stroke-width="2"/>
                            <line x1="440" y1="195" x2="645" y2="110" stroke="#333" stroke-width="2"/>
                            
                            <!-- 운영위원회 -->
                            <g class="org-item" data-target="management-committee">
                                <ellipse cx="100" cy="440" rx="50" ry="20" fill="#6c757d" stroke="#fff" stroke-width="2"/>
                                <text x="100" y="445" text-anchor="middle" fill="white" font-weight="bold" font-size="10">운영위원회</text>
                            </g>
                            
                            <!-- 인사위원회 -->
                            <g class="org-item" data-target="personnel-committee">
                                <ellipse cx="700" cy="440" rx="50" ry="20" fill="#6c757d" stroke="#fff" stroke-width="2"/>
                                <text x="700" y="445" text-anchor="middle" fill="white" font-weight="bold" font-size="10">인사위원회</text>
                            </g>
                        </svg>
                    </div>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 조직도 클릭 이벤트
    const orgItems = document.querySelectorAll('.org-item');
    
    orgItems.forEach(item => {
        item.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const targetElement = document.getElementById(target);
            
            if (targetElement) {
                // 부드러운 스크롤 효과
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // 하이라이트 효과
                targetElement.classList.add('highlight');
                setTimeout(() => {
                    targetElement.classList.remove('highlight');
                }, 2000);
            }
        });
        
        // 호버 효과
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.cursor = 'pointer';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
</script>