<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.sub.php');
?>
<style>
	.intro-footer {
		padding-left: 0;
		position: fixed;
		width: 100%;
		bottom: 0;
		height: 47px;
	}

</style>

<section class="sec-wrap">
	<div class="main_pop" id="mpop02">
		<div>
			<img src="/img/logo.png">
			<p>
				This site is intended only for the Healthcare Providers  in U.S<br class="pc-b">
				By clicking “Enter” you confirm that you are indeed a Healthcare Providers  in U.S<br class="pc-b">
				Click “Leave” if you are not a Healthcare Providers nor a resident of U.S. 
			</p>
			<a class="btn02" href="/providers/main.php">Enter</a>
			<a href="#" class="btn-close">Leave</a>
		</div>
	</div>
	<div id="intro">
		<div class="hd-wr">
			<div class="inner">
				<a href="/intro.php" class="logo"><img src="/img/logo_w.png"></a>
				<ul class="hd-nav">
					<li><a href="/patients/main.php">For Patients</a></li>
					<li class="page02">For Healthcare Providers</li>
				</ul>
			</div>
		</div>
		<!--hd-wr-->
		<div class="visual">
			<div class="visual-txt">
				<h2>Regdanvimab</h2>
				<h3>IV injection 960mg/16mL</h3>
				<p>
					Regdanvimab is authorized for use under an EUA for the treatment of mild to<br class="pc-b">
					moderate COVID-19 in adults with positive results of direct SARS-CoV-2 viral testing,<br class="pc-b">
					and who are at high risk for progressing to severe COVID-19 and/or hospitalization
				</p>
			</div>
		</div>
		<!--visual-->
	</div>
</section>
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
	$('.page02').click(function(){
		$('#mpop02').fadeIn();
		return false;
	});
	$('.btn-close').click(function(){
		$('.main_pop2').fadeOut();
		return false;
	});
</script>
