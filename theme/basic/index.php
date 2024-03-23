<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="' . G5_THEME_CSS_URL . '/page/main.css">', 0);
?>


<!-- 24.2.13 (화) main-skill Ui 수정, main-contact form code 추가 -->
<h1>push test</h1>
<!-- main start -->
    <div class="main-wrap">
		<!-- 240319 - 스크롤매직 참고 소스 
			<div class="wrap"> 
			<div class="header">
				<h1>ScrollMagic</h1>
				<p>스크롤매직 라이브러리 포스팅 예제입니다.<br/>스크롤매직 공식사이트 예제 라이브러리 : <a href="http://scrollmagic.io/examples/" target="_blank">http://scrollmagic.io/</a></p>
			</div>
			<div class="container">
				<h2>Let's start showing off some magic...</h2>
				<p class="h2_text">Please note: Most of the examples are not optimized for mobile devices,<br> so the sourcecode can be as simple as possible. The obvious exceptions are the examples on mobile support.</p>
				<div class="spacer"></div>
				<div class="trigger" id="trigger1">Trigger 1</div>
				<div id="animate" class="icon-round">ScrollMagic</div>
				<div class="space"></div>
			</div>
		</div>-->
        <!-- 메인 스크롤 박스 start -->
        <div class="main-scroll-box main-sec-box" id="scroll">
			<div class="scroll_box">↓ 스크롤 해주세요!</div>
			<div class="txt_box">
				<h6>안녕하세요!</h6>
				<p>웹 퍼블리셔 이예솔입니다.</p>
			</div>
			<div class="txt_box2">
				<!-- <h6>웹 퍼블리셔 이예솔</h6> -->
				<h6>저는,</h6>
				<p>
					4년차 웹 퍼블리셔입니다.<br>
					퍼블리싱과 프론트엔드 분야에 관심이 있으며,<br>
					끊임없는 성장과 발전을 추구합니다.
				</p>
				<a href="#"><span>제가 궁금하신가요?</span></a>
			</div>
			<script>
				var controller = new ScrollMagic.Controller();
				// Create a scene
				var scene = new ScrollMagic.Scene({
					triggerElement: '.main-scroll-box', // Trigger when .main-scroll-box enters the viewport
					triggerHook: 0.9, // Trigger at 90% of the viewport
					duration: 500 // Animation duration
				})
				.setClassToggle('.main-scroll-box', 'fade-in') // Add class 'fade-in' to .main-scroll-box when scrolled into view
				.addTo(controller);
			</script>
        </div>
        <!-- 메인 스크롤 박스 end -->

        <!-- 메인 자기소개 start -->
        <div class="main-about-box main-sec-box" id="about">
            <div class="content-wrap">
                <div class="container-fluid">
                    <div class="main_common_tit">
						<h3>About</h3>
					</div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <h6>이름</h6>
                                <p>이예솔</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <h6>생년월일</h6>
                                <p>1997.06.23</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <h6>연락처</h6>
                                <p>
                                    010-3338-0864<br />
                                    dpthf9596@naver.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 메인 자기소개 end -->

        <!-- 메인 스킬 start -->
        <div class="main-skill-box main-sec-box" id="skill">
			<div class="container-md">
				<div class="main_common_tit">
					<h3>Skill</h3>
				</div>
				<div class="skill-content">
					<div class="skill-box">
						<h6 class="skil-box-tilte">FrontEnd</h6>
						<div>
							<div class="skill-box-top row gy-5">
								<div class="skill-item col-md-12"><!-- html -->
                                    <!-- 03.08 html progress bar start  -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
                                            <img src="<?php echo G5_THEME_IMG_URL ?>/html_logo.png" alt="html">
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar100 html-bg text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter100">0%</p>
                                        </div>
                                    </div>
                                    <!-- 03.08 html progress bar end  -->
								</div>
								<div class="skill-item col-md-12"><!-- css -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
                                            <img src="<?php echo G5_THEME_IMG_URL ?>/css_logo.png" alt="css"> 
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar100 css-bg text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter100">0%</p>
                                        </div>
									</div>
								</div>
								<div class="skill-item col-md-12"><!-- js -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
                                            <img src="<?php echo G5_THEME_IMG_URL ?>/js_logo.png" alt="js"> 
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar75 js-bg text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter75">0%</p>
                                        </div>
									</div>
								</div>
								<div class="skill-item col-md-12"><!-- jquery -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
											<img src="<?php echo G5_THEME_IMG_URL ?>/jquery_logo.png" alt="jquery">
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar75 jquery-bg text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter75">0%</p>
                                        </div>
									</div>
								</div>
								<div class="skill-item col-md-12"><!-- bootstrap -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
											<img src="<?php echo G5_THEME_IMG_URL ?>/bootstrap_logo.svg" alt="bootstrap">
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar60 bootstrap-bg text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter60">0%</p>
                                        </div>
									</div>
								</div>
								<div class="skill-item col-md-12"><!-- 리액트 -->
                                    <div class="skill-item-info-box justify-content-between">
                                        <div class="logo-box">
											<img src="<?php echo G5_THEME_IMG_URL ?>/React-icon.svg.png" alt="React">
                                        </div>
                                        <div class="progress-box">
                                            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar30 bg-info text-white text-center" style="width: 0%; transition: width 2s ease;" aria-valuenow="0">0%</div>
                                            </div>
                                        </div>
                                        <div class="counter-box">
                                            <p class="counter30">0%</p>
                                        </div>
									</div>
								</div>
								<!-- <div class="skill-item col-md-2">// 추가할게 뭐가 있남..?
									<img src="https://via.placeholder.com/68.jpg" alt="">
								</div> -->
								<!-- <div class="skill-item col-md-2">
									<img src="https://via.placeholder.com/68.jpg" alt="">
								</div> -->
								<!-- <div class="skill-item">
									<img src="https://via.placeholder.com/68.jpg" alt="">
								</div> -->
							</div>
							<!-- <div class="skill-box-bottom">
								<div class="skill-item">
									<img src="https://via.placeholder.com/160x55.jpg" alt="">
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
        </div>
        <script>
            function animateValue(obj, start, end, duration) {
                let range = end - start;
                let current = start;
                let increment = end > start ? 1 : -1;
                let stepTime = Math.abs(Math.floor(duration / range));
                let timer = setInterval(function() {
                    current += increment;
                    obj.textContent = current + "%";
                    if (current === end) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }

            document.addEventListener('DOMContentLoaded', (event) => {
				/* progressBar */
                document.querySelectorAll('.progress-bar100').forEach(function(progressBar) {
                    progressBar.style.width = '100%';
                    progressBar.setAttribute('aria-valuenow', 100);
                    progressBar.textContent = '100%';
                });
                document.querySelectorAll('.progress-bar75').forEach(function(progressBar) {
                    progressBar.style.width = '75%';
                    progressBar.setAttribute('aria-valuenow', 75);
                    progressBar.textContent = '75%';
                });
                document.querySelectorAll('.progress-bar60').forEach(function(progressBar) {
                    progressBar.style.width = '60%';
                    progressBar.setAttribute('aria-valuenow', 60);
                    progressBar.textContent = '60%';
                });
                document.querySelectorAll('.progress-bar30').forEach(function(progressBar) {
                    progressBar.style.width = '30%';
                    progressBar.setAttribute('aria-valuenow', 30);
                    progressBar.textContent = '30%';
                });
				
				/* text */
                document.querySelectorAll('.counter100').forEach(function(counter) {
                    animateValue(counter, 0, 100, 2000);
                });
                document.querySelectorAll('.counter75').forEach(function(counter) {
                    animateValue(counter, 0, 75, 2000);
                });
                document.querySelectorAll('.counter60').forEach(function(counter) {
                    animateValue(counter, 0, 60, 2000);
                });
                document.querySelectorAll('.counter30').forEach(function(counter) {
                    animateValue(counter, 0, 30, 2000);
                });
            });

        </script>
        <!-- 메인 스킬 end -->

        <!-- 메인 아카이브 start -->
        <div class="main-archiving-box main-sec-box" id="archiving">
			<div class="container-md">
				<div class="main_common_tit">
					<h3 class="txt_wt">Archiving</h3>
				</div>
				<div class="archiving-content row gy-5">
					<!-- 깃허브 박스 start -->
					<div class="archiving-box col-md-6 col-12">
                        <div class="git-box">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/github.png" alt="깃허브 로고">
                            <a href="https://github.com/yesolee97" class="archiving-link" target="_blank">github.com/yesolee97</a>
                            <p><strong>소스 코드 저장소</strong>입니다.</p>
                            <ul>
                                <li>프론트엔드 공부를 시작하며 23년 8월 github 첫 설치 및 사용법을 배웠습니다.</li>
                                <!-- <li>리액트 / 바닐라js 공부내용을 기록하던 중, 포트폴리오 제작 및 기획을 위해 작업이 중단되어있는 상태입니다.</li> -->
                            </ul>
                        </div>
					</div>
					<!-- 깃허브 박스 end -->
					<!-- 벨로그 박스 start -->
					<div class="archiving-box col-md-6 col-12">
                        <div class="notion-box">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/velog_logo.svg" alt="벨로그 로고">
                            <a href="https://velog.io/@dpthf9596" class="archiving-link" target="_blank">velog.io/@dpthf9596</a>
                            <p><strong>개인 공부 및 기록</strong>을 위한 블로그 입니다.</p>
                            <ul>
                                <li>업무에서 사용한 코드의 어려웠던 부분을 해석, 기록해두었습니다.</li>
                                <li>공부한 내용을 기록, 정리해 두었습니다.</li>
                            </ul>
                        </div>
					</div>
					<!-- 벨로그 박스 end -->
					<!-- 포트폴리오 박스 start -->
						<!-- <div class="archiving-box archiving-por-box col-12">
								<div class="portfolio-box">
									<h3 class="archiving-por-title">Portfolio</h3>
									<h6>클릭 시 포트폴리오 pdf 파일로 이동합니다.</h6>
									<p>
										이력서를 보완하기 위해 작성한 포트폴리오입니다.<br>
										업무를 진행하면서 기능을 개선하거나 문제를 해결한 내용을 담았습니다.
									</p>
								</div>
						</div> -->
					<!-- 포트폴리오 박스 end -->
				</div>
			</div>
        </div>
        <!-- 메인 아카이브 end -->

        <!-- 메인 프로젝트 start -->
        <div class="main-project-box main-sec-box" id="project">
			<div class="container-md">
				<div class="main_common_tit">
					<h3 class="txt_wt">Project</h3>
				</div>
				<div class="project-content">
					<div class="project-box">
						<h5 class="project-title">한국철도공사(XROIS)</h5>
						<span class="project-date">2023.04 - 2024.04 (사내 퍼블리셔 2人)</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide1" id="project_slide1">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide1_img01.png" alt="project_slide1_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide1_img02.png" alt="project_slide1_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide1_img03.png" alt="project_slide1_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next1"></div>
								<div class="swiper-button-prev swiper-button-prev1"></div>
								<div class="swiper-pagination swiper-pagination1"></div>
							</div>							
							<script>
								const swiper1 = new Swiper(".project_slide1", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next1",
										prevEl: ".swiper-button-prev1",
									},
									pagination: {
										el: ".swiper-pagination1",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p >
										한국철도공사의 <strong>노후화 된 철도운영정보시스템(XROIS)을 전면 고도화 시키는 작업에 참여</strong>했습니다.
									</p>
									<p>
										이 프로젝트는 <strong>사내 2명의 퍼블리셔와 1명의 외부 퍼블리셔가 약 12개월과 3개월 동안 함께 참여</strong>하였습니다.<br>
										이 기간 동안 프로그래머와 협업하며 <strong>반복 작업을 최소화하고 효율적인 작업 방식을 모색</strong>하게 되었습니다.<br>
										그 결과, 유틸리티 클래스 방식으로 개발을 진행하게 되었고, <strong>코드의 재사용성과 유지보수성을 높이는데 초점</strong>을 맞추었습니다.
									</p>
									<p>
										기존의 사용자 경험이 반영되지 못한 디자인을 개선하여 사용자 친화적인 UI/UX 디자인을 구현하였으며, 샘플 페이지 코딩, 검수, 시스템별 화면 설계, 페이지 개발 등을 추진하였습니다.
									</p>
									<p>
										이 프로젝트를 통해 UI/UX 플랫폼인 <strong>SOFTBOWL - SBUx</strong>와 웹 DataGrid UI 라이브러리인 <strong>RealGrid</strong>를 활용한 실무 경험을 쌓을 수 있었습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">sbux 컴포넌트를 통한 탭 / input 옵션 구현, RealGrid를 통한 데이터 테이블 구축 등</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto">보안상 비공개</div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span><span class="badge text-bg-secondary">SBUx</span><span class="badge text-bg-dark">RealGrid</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="project-box mt-5">
						<h5 class="project-title">2021년 행정안전부 업무보고</h5>
						<span class="project-date">2021.03 ~ 2021.03</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide2" id="project_slide2">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide2_img01.png" alt="project_slide2_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide2_img02.png" alt="project_slide2_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next2"></div>
								<div class="swiper-button-prev swiper-button-prev2"></div>
								<div class="swiper-pagination swiper-pagination2"></div>
							</div>							
							<script>
								const swiper2 = new Swiper(".project_slide2", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next2",
										prevEl: ".swiper-button-prev2",
									},
									pagination: {
										el: ".swiper-pagination2",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p>
										회사에 입사한 뒤 진행한 첫 프로젝트 였으며,<br> Inclunde 시킨 Header, Footer를 제외한 <strong>Main 페이지를 맡아 제작</strong> 진행하였습니다.
									</p>
									<p>
										입사 후 처음 투입된 프로젝트였기 때문에 회사에서 제게 거는 기대는 매우 적었으나,<br> 메인 페이지의 작업의 시작과 끝을 모두 혼자 마무리 짓는 모습, 반응형 작업까지 막힘없이 진행하는 모습을 통해 이후 프로젝트부터 <strong>바로 투입할 수 있는 인재로 인정</strong>받을 수 있었습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">서브 페이지로의 링크 연결</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto">보안상 비공개</div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="project-box mt-5">
						<h5 class="project-title">소비자보호관리포털(한국신용정보원)</h5>
						<span class="project-date">2021.10 ~ 2021.11</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide3" id="project_slide3">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide3_img01.png" alt="project_slide3_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide3_img02.png" alt="project_slide3_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next3"></div>
								<div class="swiper-button-prev swiper-button-prev3"></div>
								<div class="swiper-pagination swiper-pagination3"></div>
							</div>							
							<script>
								const swiper3 = new Swiper(".project_slide3", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next3",
										prevEl: ".swiper-button-prev3",
									},
									pagination: {
										el: ".swiper-pagination3",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p>
										<strong>한국신용정보원의 관리자 페이지</strong>로, 마감 기한이 촉박한 상태에서 약 1000장 가량의 페이지를 작업해야 하는 상황에 투입되었습니다.
									</p>
									<p>
										컨펌 완료된 디자인 시안이 있는 상태였으며,<br>
										컴포넌트화 되어있는 소스들을 부분부분 가져다 붙여넣는 방식으로 개발을 진행해 타이트한 마감 기한 내에 작업을 완료할 수 있었습니다.
									</p>
									<p>
										해당 프로젝트를 진행하며 인원 수에 맞춰 파트를 배분하는 작업을 통해 <strong>업무 효율성을 극대화</strong> 시킬 수 있었고, 시간 내에 맡은 분량을 쳐내야 한다는 <strong>부담감도 있었지만, 그 부담감과 함께 책임감을 배워가며 성장</strong>할 수 있었습니다.
									</p>
									<p>
										각자 맡은 파트의 작업 속도 및 보다 빠르게 작업할 수 있는 <strong>방법들을 공유하며 팀워크를 보다 공고하게 다질 수 있는 계기</strong>가 되었습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">각 화면에 맞는 화면코딩</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto">보안상 비공개</div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="project-box mt-5">
						<h5 class="project-title">대전유성구체육회</h5>
						<span class="project-date">2021.07 ~ 2021.09</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide4" id="project_slide4">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide4_img01.png" alt="project_slide4_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide4_img02.png" alt="project_slide4_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next4"></div>
								<div class="swiper-button-prev swiper-button-prev4"></div>
								<div class="swiper-pagination swiper-pagination4"></div>
							</div>							
							<script>
								const swiper4 = new Swiper(".project_slide4", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next4",
										prevEl: ".swiper-button-prev4",
									},
									pagination: {
										el: ".swiper-pagination4",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p>
										대전광역시 유성구체육회 반응형 홈페이지 리뉴얼 작업을 진행하였습니다.
									</p>
									<p>
										 기존 그누보드로 홈페이지 제작 후 사용했던 자료가 남아있어, <strong>그누보드로 자료 / 호스팅 이전 및 리뉴얼 작업을 진행</strong>했습니다.<br />
										 업체측의 요청을 반영하여 기존 페이지는 관리자 페이지의 내용관리를 통해 작업이 이루어졌습니다.
									</p>
									<p>
										메인페이지에 게시판을 include 하는 방법은 그누보드의 php 문법과 sql 문법에 맞춰 진행되었습니다.<br>
										(체육시설현황의 경우 php 문법을 통해 구즉일경우, 진잠일경우 출력되는 페이지가 다르도록 작업이 진행되었습니다 - 이거 어떻게 작업했었는 지 확인)
									</p>
									<p>
										그누보드의 소스코드를 직접 뜯어보며 php와 게시판 내용을 추출할 떄 사용하는 sql문에 조금 익숙해질 수 있는 유익한 시간이였습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">유성구 체육회 정보안내, 게시판/서브페이지 연결</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto"><a href="http://yssc.or.kr/" target="_blank">홈페이지 바로가기</a></div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span><span class="badge text-bg-info">PHP</span><span class="badge text-bg-danger">SQL</span><span class="badge text-bg-light">그누보드</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="project-box mt-5">
						<h5 class="project-title">대덕구 체육회</h5>
						<span class="project-date">2022.01 ~ 2022.04</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide5" id="project_slide5">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide5_img01.png" alt="project_slide5_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide5_img02.png" alt="project_slide5_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next5"></div>
								<div class="swiper-button-prev swiper-button-prev5"></div>
								<div class="swiper-pagination swiper-pagination5"></div>
							</div>							
							<script>
								const swiper5 = new Swiper(".project_slide5", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next5",
										prevEl: ".swiper-button-prev5",
									},
									pagination: {
										el: ".swiper-pagination5",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p>
										대전광역시 대덕구 체육회의 반응형 홈페이지 제작을 진행했습니다.
									</p>
									<p>
										시안에 맞춰 메인 페이지의 슬라이더, 게시판 및 기타 요소들을 커스텀 진행 했습니다.<br />
										메인 페이지의 주요일정 게시판을 작업할 때 00 / 0000.00과 같은 형태로 날짜 데이터를 뽑아오는 데 꽤나 애를 먹었으나,<br>
										해당 문제를 서치하고 해결해나가는 과정을 통해 이후 같은 형태의 데이터를 뽑아 올 경우 좀 더 작업을 수월하게 진행할 수 있게 되었습니다.
									</p>
									<p>
										프로그램 > 찾아가는 생활체육 서비스는 게시판의 view페이지를 활용해 작업을 진행하는 새로운 형태로 작업이 진행되었으며,<br/>
										이로인해 view 페이지를 다양하게 활용할 수 있는 방법을 배울 수 있었습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">대덕구 체육회 정보안내, 게시판/서브페이지 연결</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto"><a href="http://ddsports.or.kr/skin_mw2/index.php" target="_blank">홈페이지 바로가기</a></div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="project-box mt-5">
						<h5 class="project-title">청주시립요양병원</h5>
						<span class="project-date">2022.04 ~ 2022.06</span>
						<div class="project-col-wr row mt-5">
							<div class="project-col-slide col-xl-6 col-12 swiper project_slide6" id="project_slide6">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide6_img01.png" alt="project_slide6_img"> 
									</div>
									<div class="swiper-slide">
										<img src="<?php echo G5_THEME_IMG_URL ?>/project_slide6_img02.png" alt="project_slide6_img"> 
									</div>
								</div>
								<div class="swiper-button-next swiper-button-next6"></div>
								<div class="swiper-button-prev swiper-button-prev6"></div>
								<div class="swiper-pagination swiper-pagination6"></div>
							</div>							
							<script>
								const swiper6 = new Swiper(".project_slide6", {
									spaceBetween: 50,
									slidesPerView: 1,
									loop: true,
									navigation: {
										nextEl: ".swiper-button-next6",
										prevEl: ".swiper-button-prev6",
									},
									pagination: {
										el: ".swiper-pagination6",
										clickable: true,
									},
									autoplay: {
										delay: 2500,
										disableOnInteraction: false,
									},
								});
							</script>
							<div class="project-col-txt-wrap col-xl-6 col-12">
								<div class="project-col-txt-box mb-3">
									<p>
										청주시에서 운영하는 시립요양병원 홈페이지를 제작했습니다.
									</p>
									<p>
										시안에 맞춰 메인 페이지의 슬라이더, 게시판 및 기타 요소들을 커스텀 진행 했습니다.<br />
										메인 페이지의 주요일정 게시판을 작업할 때 00 / 0000.00과 같은 형태로 날짜 데이터를 뽑아오는 데 꽤나 애를 먹었으나,<br>
										해당 문제를 서치하고 해결해나가는 과정을 통해 이후 같은 형태의 데이터를 뽑아 올 경우 좀 더 작업을 수월하게 진행할 수 있게 되었습니다.
									</p>
									<p>
										프로그램 > 찾아가는 생활체육 서비스는 게시판의 view페이지를 활용해 작업을 진행하는 새로운 형태로 작업이 진행되었으며,<br/>
										이로인해 view 페이지를 다양하게 활용할 수 있는 방법을 배울 수 있었습니다.
									</p>
								</div>
								<div class="">
									<div class="row">
										<div class="col col-md-3">주요 기능</div>
										<div class="col col-md-auto">대덕구 체육회 정보안내, 게시판/서브페이지 연결</div>
									</div>
									<div class="row mt-2 mb-2">
										<div class="col col-md-3">URL</div>
										<div class="col col-md-auto"><a href="http://xn--5y2bi0dtuhi3c8qbmkq3k8rj.kr/skin_mw2/" target="_blank">홈페이지 바로가기</a></div>
									</div>
									<div class="row ">
										<div class="col col-md-3">기술 스택 </div>
										<div class="col col-md-auto project-stack"><span class="badge rounded-pill text-bg-primary">html</span><span class="badge text-bg-success">css</span><span class="badge text-bg-warning">jquery</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- 메인 프로젝트 end -->


        <!-- 메인 커리어 start -->
        <div class="main-career-box main-sec-box" id="career">
			<div class="container-md">
				<div class="main_common_tit">
					<h3>Career</h3>
				</div>
				<div class="career-content">
					<ul class="career-box">
						<li class="career-item row">
							<div class="career-item-lt col-md-3 col-12">
								<img src="http://via.placeholder.com/250" alt="">
							</div>
							<div class="career-item-rt col-md-9 col-12">
								<h6 class="career-item-title">예스웹</h6>
								<span class="career-item-date">2018.12.28 -</span>
								<div class="career-item-txt-box">
									<p>
										저는 예스웹에서 4년간 다양한 홈페이지를 제작하는 업무를 수행했습니다.<br>
										프로젝트를 수행하면서 새로운 기술과 도구를 익히고, 문제 해결능력을 향상시켰습니다.
									</p>
									<p>
										특히, 고객 요구사항을 이해하고 이를 반영하는 웹사이트를 개발하는 능력이 향상되었습니다. <br>
										또한, 팀원들과의 협업을 통해 프로젝트를 효율적으로 관리하고 완성도 높은 결과물을 제공하는 방법을 배웠습니다.
									</p>
									<p>
										이러한 경험을 통해 저는 전문성을 향상시키고 끊임없는 성장을 이루었습니다. <br>
										앞으로도 열정과 노력으로 새로운 기술을 습득하고, 발전하는 인재가 되어 회사의 성과에 기여하고자 합니다.
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- 메인 커리어 end -->

        <!-- 메인 컨텍 start -->
        <div class="main-contact-box main-sec-box" id="contact">
			<div class="container-md">
				<div class="main_common_tit">
					<h3 class="txt_wt">Contact</h3>
				</div>
                <div class="content-body">
                    <form id="contactForm" accept-charset="UTF-8" enctype="multipart/form-data" method="post" action="./save_request.php" >
                        <input type="hidden" name="cotact_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                        <div class="row gy-4">
                            <div class="col-xl-6 col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control shadow-none rounded-0" id="user_name" name="user_name" placeholder="이름" required />
                                    <label class="form-label" for="user_name">이름</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control shadow-none rounded-0" id="user_email" name="user_email" placeholder="이메일" required />
                                    <label class="form-label me-3" for="user_email">이메일</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control shadow-none rounded-0" id="user_content" name="user_content" placeholder="내용" required ></textarea>
                                    <label class="form-label me-3" for="user_content">내용</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-box mt-5 text-center">
                            <button class="btn submit-button" type="submit">보내기</button>
                        </div>
                    </form>
                </div>
			</div>
        </div>
        <!-- 메인 컨텍 end -->

    </div>

<!-- main end -->

<?php
include_once(G5_THEME_PATH.'/tail.php');