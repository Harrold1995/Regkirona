<?php
    include_once('.././common.php');
    include_once(G5_PATH.'/head2.php');

    $faqList = array();
    $sql = "SELECT f.* FROM g5_faq f LEFT JOIN g5_faq_master fm ON f.fm_id = fm.fm_id WHERE f.fm_id = '2'";
    $result = sql_query($sql);
    for ($i = 0; $row = sql_fetch_array($result); $i ++) {
        $faqList[$i] = $row;
    }
?>

<div id="patients" class="faq">
	<section class="sub-visual visual03 el">
		<div class="visual-txt">
			<h2><?=$title?></h2>
		</div>
	</section>
	<!--sub-visual-->
	<section id="sec01" class="cont-a el">
		<div class="inner">
			<h2 class="cont-tit">Frequently Asked Questions</h3>
			<div class="cont-sec">
				<div class="faq-wrap">
				<?php
				if (count($faqList) > 0) {
				    foreach ($faqList as $key => $faq) {
				?>
					<div class="accodian">
						<div class="tit"><?=$faq['fa_subject']?><i class="fas fa-chevron-down"></i></div>
						<div class="cont">
							<?=$faq['fa_content']?>
						</div>
					</div>
				<?php 
                    }
                }
				?>
				<!-- 
							<ul class="cont-list">
								<li>Regdanvimab is a drug for people with COVID-19 who:</li>
								<li class="blt-none">
									<p>- Are adults with positive results of direct SARS-CoV-2 viral testing and within 10 days of symptom onset</p>
									<p>- Are at high risk to get sick from COVID-19 and/or hospitalization.  </p>
								</li>
							</ul>
							 -->
				</div>
			</div>
		</div>
	</section>
	<!--cont-a-->
	<section id="sec02" class="cont-b el">
		<div class="inner">
			<h2 class="cont-tit">Resources for Patients</h3>
			<b class="p-bk">Get helpful information of regdanvimab.</b>
			<ul class="library-wr">
				<li>
					<div class="wr">
						<p>Fact Sheet for Patients, Parents and Caregivers (English)</p>
						<a href="#" class="file-btn" download><img src="/img/down_btn.png"></a>
					</div>
				</li>
				<li>
					<div class="wr">
						<p>Fact Sheet for Patients, Parents and Caregivers (Spanish)</p>
						<a href="#" class="file-btn" download><img src="/img/down_btn.png"></a>
					</div>
				</li>
				<li>
					<div class="wr">
						<p>Fact Sheet for Healthcare Providers</p>
						<a href="#" class="file-btn" download><img src="/img/down_btn.png"></a>
					</div>
				</li>
				<li>
					<div class="wr">
						<p>FDA Letter of Authorization</p>
						<a href="#" class="file-btn" download><img src="/img/down_btn.png"></a>
					</div>
				</li>
				<li>
					<div class="wr">
						<p>What you need to know about regdanvimab<br class="pc-b">(Patient Use)</p>
						<a href="#" class="file-btn" download><img src="/img/down_btn.png"></a>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!--cont-b-->
	<section class="cont-c ">
		<div class="inner">
			<h2 class="cont-tit">External Resources</h3>
			<b class="p-bk mg20">Get useful information about COVID-19.</b>
			<div class="cont-box">
				<ul class="cont-list">
					<li>World Health Organization (WHO) <i class="sub-pop1 fas fa-external-link-alt"></i></li>
					<li>Centers for Disease Control and Prevention (CDC)<i class="sub-pop2 fas fa-external-link-alt"></i></li>
					<li>National Institutes of Health (NIH)<i class="sub-pop3 fas fa-external-link-alt"></i></li>
					<li>U.S. Food and Drug Administraion (FDA)<i class="sub-pop4 fas fa-external-link-alt"></i></li>
					<li>National Infusion Center Association (NICA)<i class="sub-pop5 fas fa-external-link-alt"></i></li>
				</ul>
			</div>
		</div>
	</section>
	<div id="link-pop1" class="dim-layer md-pop">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="pop-cont">
				<h2>You are now leaving the regdanvimab website. </h2>
				<p>
					Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
				</p>
				<a class="btn02 btn-Close" href="#">GO BACK</a>
				<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019?gclid=CjwKCAjw2dD7BRASEiwAWCtCb4fdT7dtVi6kD_S7E3XTx4LtheZKrDUm_Jlp6iBBrptuX4a95HBD5hoCnO0QAvD_BwE" target="_blank">LEAVE SITE</a>
			</div>
		</div>
	</div>
	<!--md-pop-->
	<div id="link-pop2" class="dim-layer md-pop">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="pop-cont">
				<h2>You are now leaving the regdanvimab website. </h2>
				<p>
					Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
				</p>
				<a class="btn02 btn-Close" href="#">GO BACK</a>
				<a href="https://www.cdc.gov/coronavirus/2019-ncov/index.html" target="_blank">LEAVE SITE</a>
			</div>
		</div>
	</div>
	<!--md-pop-->
	<div id="link-pop3" class="dim-layer md-pop">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="pop-cont">
				<h2>You are now leaving the regdanvimab website. </h2>
				<p>
					Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
				</p>
				<a class="btn02 btn-Close" href="#">GO BACK</a>
				<a href="https://covid19.nih.gov/" target="_blank">LEAVE SITE</a>
			</div>
		</div>
	</div>
	<!--md-pop-->
	<div id="link-pop4" class="dim-layer md-pop">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="pop-cont">
				<h2>You are now leaving the regdanvimab website. </h2>
				<p>
					Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
				</p>
				<a class="btn02 btn-Close" href="#">GO BACK</a>
				<a href="https://www.fda.gov/home" target="_blank">LEAVE SITE</a>
			</div>
		</div>
	</div>
	<!--md-pop-->
	<div id="link-pop5" class="dim-layer md-pop">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="pop-cont">
				<h2>You are now leaving the regdanvimab website. </h2>
				<p>
					Although we have verified the accuracy of this link from our website to this third party, the ownership of the domain names and content of the web pages may change without notice and is the responsibility of the third party. We are not responsible for the content, views, or privacy policies of the third-party site. The privacy policy of the third-party site may differ from that of Celltrion Healthcare. Click LEAVE to proceed to the third-party website. If you wish to remain on the regdanvimab website, Click GO BACK. Thank you.
				</p>
				<a class="btn02 btn-Close" href="#">GO BACK</a>
				<a href="https://infusioncenter.org/" target="_blank">LEAVE SITE</a>
			</div>
		</div>
	</div>
	<!--md-pop-->
</div> 
<script>
	//faq
		var acodian = {
	  click: function(target) {
		var $target = $(target);
		$target.on('click', function() {

		  if ($(this).hasClass('on')) {
			slideUp($target);
		  } else {
			slideUp($target);
			$(this).addClass('on').next().slideDown();
		  }

		  function slideUp($target) {
			$target.removeClass('on').next().slideUp();
		  }

		});
	  }
	};
	acodian.click('.accodian > .tit');
	//md-pop
	$('.sub-pop1').click(function(){
		$('#link-pop1').fadeIn();
		return false;
	});
	$('.sub-pop2').click(function(){
		$('#link-pop2').fadeIn();
		return false;
	});
	$('.sub-pop3').click(function(){
		$('#link-pop3').fadeIn();
		return false;
	});
	$('.sub-pop4').click(function(){
		$('#link-pop4').fadeIn();
		return false;
	});
	$('.sub-pop5').click(function(){
		$('#link-pop5').fadeIn();
		return false;
	});
	$('.btn-Close, .dimBg').click(function(){
		$('.dim-layer').fadeOut();
		return false;
	});
</script>

