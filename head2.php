<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
include_once(G5_PATH.'/head.sub.php');   
	/*if ($member['mb_level'] < 2) {
		if ($member['mb_id'])
			alert('권한이 없습니다.', G5_URL);
		else
			alert('권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.', G5_BBS_URL.'/login.php?url='.urlencode($_SERVER['PHP_SELF']));
	}*/
?>
 

<!-- 상단 시작 { -->

<!-- sec-wrap -->
<section class="sec-wrap">
	<!-- s:left-nav -->
	<?php include_once(G5_PATH.'/title.php'); ?> 
	<!-- e:left-nav-->
	<!-- s:sec-header -->
	<section class="sec-header"> 
		<a href="/" class="logo"><img src="/img/logo_w.png" class="logo-w"><img src="/img/logo.png" class="logo-c"></a>
		<div id="header" class="nav-pc nav-m">
			<div class="top-bar">
				<p>
					The contents provided by this page is intended only for U.S. residents.<br>
					Please leave this site if you are not a U.S. resident. 
				</p>
				<ul>
					<li><a href="javascript:void(0);" class="page01" target="_blank"><i class="fas fa-external-link-alt"></i>Visit Celltrion Healthcare Site</a></li>            
					<li><a href="/providers/main.php"><i class="fas fa-external-link-alt"></i>Visit Healthcare Providers Site</a></li>
				</ul>
			</div>
			<div class="wr">  
				<span class="nav-open"><i class="fas fa-bars"></i></span>
				<ul class="gnb clear">
					<span class="nav-close"><i class="far fa-times-circle"></i></span>
				   <li>
						<a href="/patients/main.php">Main</a>
						<ul class="depth2">
							<li><a href="/patients/main.php#sec01">Important facts about regdanvimab</a></li>
							<li><a href="/patients/main.php#sec02">What is COVID-19?</a></li>
							<li><a href="/patients/main.php#sec03">What are the symptoms of COVID-19?</a></li>
							<li><a href="/patients/main.php#sec04">Why do I need mAb treatment?</a></li>
							<li><a href="/patients/main.php#sec05">What is regdanvimab?</a></li>
							<li><a href="/patients/main.php#sec06">Who is regdanvimab for?</a></li>
						</ul> 
				   </li>
				   <li>
						<a href="/patients/page01.php">Start regdanvimab Therapy</a>
						<ul class="depth2">
							<li><a href="/patients/page01.php#sec01">How will I receive regdanvimab?</a></li>
							<li><a href="/patients/page01.php#sec02">What are the side effects?</a></li>
							<li><a href="/patients/page01.php#sec03">What should I tell my healthcare provider before receiving regdanvimab?</a></li>
							<li><a href="/patients/page01.php#sec04">What if I am pregnant or breastfeeding?</a></li>
						</ul> 
				   </li>
				   <li>
						<a href="/patients/page02.php">Access</a>
						<ul class="depth2">
							<li><a href="/patients/page02.php#sec01">Infusion Site Locater</a></li>
						</ul>
				   </li>
				   <li>
						<a href="/patients/page03.php">FAQ & Resources</a>
						<ul class="depth2">
							<li><a href="/patients/page03.php#sec01">FAQ</a></li>
							<li><a href="/patients/page03.php#sec02">Resources</a></li>
						</ul> 
					</li>
				</ul>
			</div>
			<div class="gnb-bg"></div>
		</div> 
	</section>   
	<?php include_once(G5_PATH.'/title.php'); ?> 
<!--상단 메뉴 고정 끝-->
	<div class="main_pop" id="mpop01">
		<div>
			<img src="/img/logo.png">
			<h3 class="p-bk">You are now leaving the regdanvimab website. </h3>
			<p>
				Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click OK to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click Cancel & Return. Thank you
			</p>
			<a href="#" class="btn-close">Cancel & Return</a>
			<a class="btn02" href="https://www.celltrionhealthcare.com/en-us/home/main" target="_blank">OK</a>
		</div>
	</div>
<script>
	//md-pop
	$('.page01').click(function(){
		$('#mpop01').fadeIn();
		return false;
	});
	$('.btn-close').click(function(){
		$('.main_pop').fadeOut();
		return false;
	});
</script>
	<!-- sec-header -->
	<!-- sec-content -->
	<section class="sec-content">