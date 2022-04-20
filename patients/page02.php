<?php
include_once('.././common.php');
include_once(G5_PATH.'/head2.php');
?>

<div id="patients" class="sub02">
	<section class="sub-visual visual02 el">
		<div class="visual-txt">
			<h2><?=$title?></h2>
		</div>
	</section>
	<!--sub-visual-->
	<section id="sec01" class="cont-a el">
		<div class="inner">
			<h2 class="cont-tit">Infusion Site Locater</h3>
			<div class="explan">
				<p>
					Some states are partnering with the National Infusion Center Association (NICA) and the Department of Health & Human Services (HHS) to make it easier to identify product and infusion locations by state.<br> 
					Click "Go" to be redirected to the COVID infusion therapy search tool, hosted by NICA and HHS.<br> 
					* Please note that not all states are included and a site’s inclusion in this tool does not imply current availability of doses.
				</p>
			</div>
			<div class="des-txt">Find an infusion center near me</div>
			<div class="list-2">
				<div class="des-txt"><a href="#" class="sub-pop"><span class="ud-line">Go to NICA</span></a></div>
				<div class="des-txt"><a href="#" class="sub-pop2"><span class="ud-line">Go to HHS</span></a></div>
			</div>
			<div class="explan">
				<p style="color:#767676;">
					*IMPORTANT INFORMATION: Infusion sites displayed in this tool have been authorized to administer antibody treatments for COVID-positive providers under Emergency Use Authorization. These antibody therapies are restricted to certain high-risk providers and require a drug order (similar to a prescription) from a Health Care Provider (HCP) for eligible providers. HCPs must verify eligibility of their providers and verify the availability of doses at an authorized infusion site before they refer an eligible patient to schedule an appointment to receive treatment at an authorized infusion site.
				</p>
			</div>
		</div>
	</section>
</div> 
<div id="link-pop1" class="dim-layer md-pop">
	<div class="dimBg"></div>
	<div class="pop-layer">
		<div class="pop-cont">
			<h2>You are now leaving the regdanvimab website. </h2>
			<p>
				Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
			</p>
			<a class="btn02 btn-Close" href="#">GO BACK</a>
			<a href="https://covid.infusioncenter.org/" target="_blank">LEAVE SITE</a>
		</div>
	</div>
</div>
<!--md-pop-->
<div id="link-pop2"  class="dim-layer md-pop">
	<div class="dimBg"></div>
	<div class="pop-layer">
		<div class="pop-cont">
			<h2>You are now leaving the regdanvimab website. </h2>
			<p>
				Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
			</p>
			<a class="btn02 btn-Close" href="#">GO BACK</a>
			<a href="https://protect-public.hhs.gov/pages/therapeutics-distribution" target="_blank">LEAVE SITE</a>
		</div>
	</div>
</div>
<!--md-pop-->
<script>
//md-pop
	$('.sub-pop').click(function(){
		$('#link-pop1').fadeIn();
		return false;
	});
	$('.btn-Close, .dimBg').click(function(){
		$('.dim-layer').fadeOut();
		return false;
	});
	$('.sub-pop2').click(function(){
		$('#link-pop2').fadeIn();
		return false;
	});
	$('.btn-Close, .dimBg').click(function(){
		$('.dim-layer').fadeOut();
		return false;
	});
</script>
