<!-- patients main -->
<? if (strpos($_SERVER['REQUEST_URI'], 'providers/main.php') > 0) {
  if ($PHP_SELF == "/providers/main.php") {
    $title = "Main";
    $cate1 = "Regkirona (regdanvimab) Overview";
    $cate2 = "Therapeutic indications";
    $cate3 = "Additional Information for Healthcare Providers";
    $cate4 = "Important Safety Information";
    $cate5 = "Warnings and precautions for use";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec03"><?= $cate3 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec04"><?= $cate4 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec05"><?= $cate5 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- providers page01 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'providers/page01.php') > 0) {
  if ($PHP_SELF == "/providers/page01.php") {
    $title = "Dose and Administration";
    $cate1 = "Dosage and Administration";
    $cate2 = "Administration Guide";
    $cate3 = "Administration Resources";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec03"><?= $cate3 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- providers page02 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'providers/page02.php') > 0) {
  if ($PHP_SELF == "/providers/page02.php") {
    $title = "Clinical Development Programme";
    $cate1 = "Phase I 1.1 Healthy Volunteer Study";
    $cate2 = "Phase I 1.2 Mild COVID-19 Study";
    $cate3 = "Phase II/III 3.2 Global Pivotal Study (Part1)";
    $cate4 = "Phase II/III 3.2 Global Pivotal Study (Part2)";
    $cate5 = "Neutralizing Capability against Emerging Variants (Summary)";
    $cate6 = "Neutralizing Capability against Emerging Variants (in-vivo)";
    $cate7 = "References";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec03"><?= $cate3 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec04"><?= $cate4 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec05"><?= $cate5 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec06"><?= $cate6 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec07"><?= $cate7 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- providers page03 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'providers/page03.php') > 0) {
  if ($PHP_SELF == "/providers/page03.php") {
    $title = "Supply & Access";
    $cate1 = "Supply in Australia";
    // $cate2 = "Infusion Site Locater";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <!-- <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li> -->
      </ul>
    </div>
  </section>
<? } ?>


<!-- providers page04 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'providers/page04.php') > 0) {
  if ($PHP_SELF == "/providers/page04.php") {
    $title = "Resources";
    $cate1 = "Regdanvimab Resources";
    // $cate2 = "Library";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <!-- <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li> -->
      </ul>
    </div>
  </section>
<? } ?>


<!-- patients main -->
<? if (strpos($_SERVER['REQUEST_URI'], 'patients/main.php') > 0) {
  if ($PHP_SELF == "/patients/main.php") {
    $title = "Main";
    $cate1 = "Important facts about regdanvimab";
    $cate2 = "What is COVID-19?";
    $cate3 = "What are the symptoms of COVID-19?";
    $cate4 = "Why do I need mAb treatment?";
    $cate5 = "What is regdanvimab?";
    $cate6 = "Who is regdanvimab for?";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec03"><?= $cate3 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec04"><?= $cate4 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec05"><?= $cate5 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec06"><?= $cate6 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- patients page01 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'patients/page01.php') > 0) {
  if ($PHP_SELF == "/patients/page01.php") {
    $title = "Start regdanvimab Therapy";
    $cate1 = "How will I receive regdanvimab?";
    $cate2 = "What are the side effects?";
    $cate3
      = "What should I tell my healthcare provider before receiving regdanvimab?";
    $cate4 = "What if I am pregnant or breastfeeding?";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec03"><?= $cate3 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec04"><?= $cate4 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- patients page02 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'patients/page02.php') > 0) {
  if ($PHP_SELF == "/patients/page02.php") {
    $title = "Supply & Access";
    $cate1 = "Supply in Australia";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>

<!-- patients page03 -->
<? if (strpos($_SERVER['REQUEST_URI'], 'patients/page03.php') > 0) {
  if ($PHP_SELF == "/patients/page03.php") {
    $title = "FAQ & Resources";
    $cate1 = "FAQ";
    $cate2 = "Resources";
  }
  ?>
  <section class="left-nav">
    <a href="/" class="logo"><img src="/img/logo.png"></a>
    <div class="nav-wr">
      <h2 class="nav-tit"><?= $title ?></h2>
      <ul class="nav">
        <li><a href="javascript:void(0)" data-id="sec01"><?= $cate1 ?></a></li>
        <li><a href="javascript:void(0)" data-id="sec02"><?= $cate2 ?></a></li>
      </ul>
    </div>
  </section>
<? } ?>
