<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/tail.sub.php')) {
    require_once(G5_THEME_PATH.'/tail.sub.php');
    return;
}
?>

<?php if ($is_admin == 'super') {  ?><?php }  ?>
<?php run_event('tail_sub'); ?> 
	
	<!--md-pop-->
	<div class="intro-footer intro-footer-2">
		<div class="foot-link foot-link">
			<div class="inner">
				<p>Important Safety Information</p>
				<a href="javascript:void(0);" class="ft-link">View All<i><img src="/img/view_arr.png"></i></a>
			</div>
		</div>
	</div>
	<footer class="intro-footer">
		<div class="foot-link">
			<div class="inner">
				<p>Important Safety Information</p>
				<a href="javascript:void(0);" class="ft-link">View All<i><img src="/img/view_arr.png"></i></a>
			</div>
		</div>
		<div class="use-cont">
			<div class="inner">
				<h2 class="cont-tit">Important Safety Information</h2>
				<div class="cont-sec">
					<div class="cont-box">
						<b class="p-bk ">Authorized Use</b>
						<p>
							The U.S. Food and Drug Administration (FDA) has issued an Emergency Use Authorization (EUA) to permit the emergency use of the unapproved product regdanvimab for the treatment of mild-to-moderate coronavirus disease 2019 (COVID-19) in adults and pediatric patients (12 years of age and older weighing at least 40 kg) with positive results of direct SARS-CoV-2 viral testing. 
						</p>
						<!--210910 추가-->
						<b class="p-bk">Limitations of Authorized Use</b>
						<ul class="cont-list">
							<li>
								Regdanvimab is not authorized for use in patients: 
								<ul class="s-cont-list">
									<li>who are hospitalized due to COVID-19, OR</li>
									<li>who require oxygen therapy due to COVID-19, OR</li>
									<li>who require an increase in baseline oxygen flow rate due to COVID-19 in those on chronic oxygen therapy due to underlying non-COVID-19 related comorbidity. </li>
								</ul>
							</li>
							<li>
								Benefit of treatment with regdanvimab has not been studied in patients hospitalized due to COVID-19.<br class="pc-b">
								SARS-CoV-2 monoclonal antibodies may be associated with worse clinical outcomes when administered to hospitalized patients with COVID-19 requiring high flow oxygen or mechanical ventilation
							</li>
						</ul>
					</div>
				</div>
				<!---->

				<div class="cont-sec">
					<h3 class="sub-tit">Warnings</h3>
					<div class="cont-indt">
						<b class="p-bk mg10">Possible side effects of regdanvimab are : </b>
						<ul class="cont-list">
							<li>
								Allergic reactions. Allergic reactions can happen during and after infusion with regdanvimab. Tell your healthcare provider right away if you get any of the following signs and symptoms of allergic reactions: fever, difficulty breathing, low oxygen level in your blood, chills, nausea, headache, shortness of breath, low or high blood pressure, irregular, rapid or slow heart rate, chest discomfort or pain, weakness, confusion, feeling tired, wheezing, swelling of your lips, face, or throat, rash including hives, itching, muscle aches, feeling faint, dizziness and sweating. 
							</li>
							<li>
								Worsening symptoms after treatment: You may experience new or worsening symptoms after infusion, including fever, difficulty breathing, rapid or slow heart rate, tiredness, weakness or confusion. If these occur, contact your healthcare provider or seek immediate medical attention as some of these events have required hospitalization. It is unknown if these events are related to treatment or are due to the progression of COVID-19.
							</li>
						</ul>
						<div class="s-cont-sec">
							<div class="cont-box">
								<p>
									The side effects of getting any medicine by vein may include brief pain, bleeding, bruising of the skin, soreness, swelling, and possible infection at the infusion site. 
								</p>
								<p>
									These are not all the possible side effects of regdanvimab. A limited number of people have been given regdanvimab and clinical studies in humans are ongoing. Serious and unexpected side effects may happen. Regdanvimab is still being studied so it is possible that all of the risks are not known at this time.
								</p>
								<p>
									It is possible that regdanvimab could interfere with your body's own ability to fight off a future infection of SARS-CoV-2. Similarly, regdanvimab may reduce your body’s immune response to a vaccine for SARS-CoV-2. Specific studies have not been conducted to address these possible risks. Talk to your healthcare provider if you have any questions. 
								</p>
							</div>
						</div>
						<!--1-->

					</div>
				</div>
				<!---->
				<div class="cont-sec">
					<h3 class="sub-tit">Specific populations</h3>
					<div class="cont-indt">
						<div class="s-cont-sec">
							<b class="p-gr mg06">1) Pregnancy</b>
							<ul class="cont-list cont-indt">
								<li>
									There are insufficient data to evaluate a drug-associated risk of major birth defects, miscarriage, or adverse maternal or fetal outcomes. 
									Regdanvimab should only be used during pregnancy if the potential benefit outweighs the potential risk for the mother and the fetus.
								</li>
							</ul>
						</div>
						<!--1-->
						<div class="s-cont-sec">
							<b class="p-gr mg06">2) Breastfeeding</b>
							<ul class="cont-list cont-indt">
								<li>
									There are no available data on the presence of regdanvimab in human or animal milk, the effects on the breastfed infant, or the effects on milk production. Maternal IgG is known to be present in human milk. The developmental and health benefits of breastfeeding should be considered along with the mother’s clinical need for regdanvimab and any potential adverse effects on the breastfed child from regdanvimab or from the underlying maternal condition. Breastfeeding individuals with COVID-19 should follow practices according to clinical guidelines to avoid exposing the infant to COVID-19.

								</li>
							</ul>
						</div>
						<!--2-->
						<div class="explan">
							<p class="p-bk">
								Please see the <b class="p-gr ud-line">Fact Sheet for Patients, Parents and Caregivers (English)</b> or <b class="p-gr ud-line">Fact Sheet for Patients, Parents and Caregivers (Spanish)</b> for more information about regdanvimab.
							</p>
						</div>
					</div>
				</div>
				<!---->
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		$('.ft-link').each(function(index,el){
			$('.ft-link').eq(index).on('click',function(){
				$('.intro-footer').toggleClass('open');
			})
		});	
		
		//$('.intro-footer').toggle

		//$(window).scroll(function(){
		//	var height = $(document).scrollTop();
	//		if( $(window).scrollTop() == $(document).height() - $(window).height() ) {
	//		  $('.intro-footer').addClass('none-fix');
	//		}else if(height == 0){
	//		  $('.intro-footer').removeClass('none-fix');
//			}

	</script>
</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>