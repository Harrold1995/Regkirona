<?php
include_once('./_common.php');
include_once(G5_PATH . '/head.sub.php');
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
        <strong>Healthcare Professionals Login</strong>
        <br><br>
        This website is for Australia Health Care Professionals only.
        <br><br>
        To access this website please enter your AHPRA number.
        <br><br>
        <input type="text" id="AHPRAnumber" name="AHPRAnumber">
      </p>
      <br>
      <a class="btn02" href="providers/main.php">Enter</a>
      <a href="#" class="btn-close">Leave</a>
    </div>
  </div>
  <div id="intro">
    <div class="hd-wr">
      <div class="inner">
        <a href="/intro.php" class="logo"><img src="/img/logo_w.png"></a>
        <ul class="hd-nav">
          <!--<li><a href="/patients/main.php">For Patients</a></li>-->
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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod.
          <br class="pc-b">
          tempor incididunt ut labore et dolore magna aliqua
          <br class="pc-b">
          Ut enim ad minim veniam, quis nostrud exercitation
          <br class="pc-b">
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
    <div class="home-footer">
      <?php
      include_once(G5_PATH . '/footer.php');
      ?>
    </div>
    <!--visual-->
  </div>
</section>
<script>
  //md-pop
  $('.page01').click(function () {
    $('#mpop01').fadeIn();
    return false;
  });
  $('.btn-close').click(function () {
    $('.main_pop').fadeOut();
    return false;
  });
  $('.page02').click(function () {
    $('#mpop02').fadeIn();
    return false;
  });
  $('.btn-close').click(function () {
    $('.main_pop2').fadeOut();
    return false;
  });
</script>

<script>
	$(document).ready(function(){ 
		if (sessionStorage["mpop01"] == undefined) {
            $("#mpop01").css("display", "block"); 
        }
        else {
            $("#mpop01").css("display", "none"); 
        } 
		$(".enter").click(function(){
			$("#mpop01").css("display", "none"); 
		});
		$(".enter").click(function(){
			sessionStorage["mpop01"] = 1;
			$("#mpop01").css("display", "none"); 
		});
	});
</script>
