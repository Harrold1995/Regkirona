<?php
if (!defined('_GNUBOARD_')) {
  exit;
} // 개별 페이지 접근 불가
include_once(G5_PATH . '/head.sub.php');
/*if ($member['mb_level'] < 2) {
  if ($member['mb_id'])
    alert('You do not have permission.', G5_URL);
  else
    alert('You do not have permission.\\n\\nIf you are a member, please log in and try.', G5_BBS_URL.'/login.php?url='.urlencode($_SERVER['PHP_SELF']));
}*/
?>


<!-- 상단 시작 { -->

<!-- sec-wrap -->
<section class="sec-wrap">
    <!-- s:left-nav -->
    <?php include_once(G5_PATH . '/title.php'); ?>
    <!-- e:left-nav-->
    <!-- s:sec-header -->
    <section class="sec-header">
        <a href="/" class="logo"><img src="/img/logo_w.png" class="logo-w"><img src="/img/logo.png" class="logo-c"></a>
        <div id="header" class="nav-pc nav-m">
            <div class="top-bar">
                <ul>
                    <li><a href="javascript:void(0);" class="page01"><i class="fas fa-external-link-alt"></i>Visit
                            Celltrion Healthcare
                            Site</a></li>
                    <!-- <li><a href="/patients/main.php"><i class="fas fa-external-link-alt"></i>Visit Patient Site</a></li> -->
                </ul>
            </div>
            <div class="wr">
                <span class="nav-open"><i class="fas fa-bars"></i></span>
                <ul class="gnb clear">
                    <span class="nav-close"><i class="far fa-times-circle"></i></span>
                    <li>
                        <a href="/providers/main.php">Main</a>
                        <ul class="depth2">
                            <li><a href="/providers/main.php#sec01">Regkirona (regdanvimab)
                                    Overview</a></li>
                            <li><a href="/providers/main.php#sec02">Therapeutic indications</a></li>
                            <li><a href="/providers/main.php#sec03">Additional Information for
                                    Healthcare Providers</a></li>
                            <li><a href="/providers/main.php#sec04">Important Safety
                                    Information</a></li>
                            <li><a href="/providers/main.php#sec05">Warnings and precautions for use</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/providers/page01.php">Dose and Administration</a>
                        <ul class="depth2">
                            <li><a href="/providers/page01.php#sec01">Dosage and
                                    Administration</a></li>
                            <li><a href="/providers/page01.php#sec02">Administration Guide</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/providers/page02.php">Clinical Development Programme</a>
                        <ul class="depth2">
                            <li><a href="/providers/page02.php#sec01">Phase I 1.1 Healthy
                                    Volunteer Study</a></li>
                            <li><a href="/providers/page02.php#sec02">Phase I 1.2 Mild
                                    COVID-19 Study</a></li>
                            <li><a href="/providers/page02.php#sec03">Phase II/III 3.2 Global
                                    Pivotal Study (Part1)</a></li>
                            <li><a href="/providers/page02.php#sec04">Phase II/III 3.2 Global
                                    Pivotal Study (Part2)</a></li>
                            <li><a href="/providers/page02.php#sec05">Neutralizing Capability
                                    against Emerging Variants (Summary)</a></li>
                            <li><a href="/providers/page02.php#sec06">Neutralizing Capability
                                    against Emerging Variants (in-vivo)</a></li>
                            <li><a href="/providers/page02.php#sec07">References</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/providers/page03.php">Supply & Access</a>
                        <ul class="depth2">
                            <li><a href="/providers/page03.php#sec01">Supply in Australia</a>
                            </li>
                            <!-- <li><a href="/providers/page03.php#sec02">Infusion Site Locater</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="/providers/page04.php">Resources</a>
                        <!-- <ul class="depth2">
              <li><a href="/providers/page04.php#sec01">FAQ</a></li>
              <li><a href="/providers/page04.php#sec02">Library</a></li>
            </ul> -->
                    </li>
                </ul>
            </div>
            <div class="gnb-bg"></div>
        </div>

    </section>
    <div class="main_pop" id="mpop01">
        <div>
            <img src="/img/logo.png">
            <h3 class="p-bk">You are now leaving the regdanvimab website. </h3>
            <p>
                Although we have verified the accuracy of this link from our website to
                this third party, the ownership of the domain names and content of the
                web pages may change without notice and is the responsibility of the
                third party. We are not responsible for the content, views, or privacy
                policies of the third-party site. The privacy policy of the third-party
                site may differ from that of Celltrion Healthcare. Click OK to proceed
                to the third-party website. If you wish to remain on the regdanvimab
                website, Click Cancel & Return. Thank you
            </p>
            <a href="#" class="btn-close">Cancel & Return</a>
            <a class="btn02" href="https://www.celltrionhealthcare.com/en-us/home/main" target="_blank">OK</a>
        </div>
    </div>
    <script>
    //md-pop
    $('.page01').click(function() {
        $('#mpop01').fadeIn();
        return false;
    });
    $('.btn-close').click(function() {
        $('.main_pop').fadeOut();
        return false;
    });
    </script>
    <!-- fixed top menu -->
    <!-- sec-header -->
    <!-- sec-content -->
    <section class="sec-content">
