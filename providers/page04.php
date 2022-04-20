<?php
include_once('.././common.php');
include_once(G5_PATH . '/head.php');

$faqList = array();
$sql
  = "SELECT f.* FROM g5_faq f LEFT JOIN g5_faq_master fm ON f.fm_id = fm.fm_id WHERE f.fm_id = '3'";
$result = sql_query($sql);
for ($i = 0; $row = sql_fetch_array($result); $i++) {
  $faqList[$i] = $row;
}
?>

<div id="providers" class="faq">
  <section class="sub-visual visual04 el">
    <div class="visual-txt">
      <h2><?= $title ?></h2>
    </div>
  </section>
  <!--sub-visual-->
  <section id="sec01" class="cont-a el">
    <div class="inner">
      <h2 class="cont-tit">Resources</h2>
      <div class="cont-sec">
        <div class="faq-wrap">
          <?php
          if (count($faqList) > 0) {
            foreach ($faqList as $key => $faq) {
              ?>
              <div class="accodian">
                <div class="tit"><?= $faq['fa_subject'] ?><i
                    class="fas fa-chevron-down"></i></div>
                <div class="cont">
                  <?= $faq['fa_content'] ?>
                </div>
              </div>
              <?php
            }
          }
          ?>
          <!--
        <div class="accodian">
          <div class="tit">What is the mechanism of action of regdanvimab for the treatment of COVID-19?<i class="fas fa-chevron-down"></i></div>
          <div class="cont">
            <ul class="cont-list">
            <li>Regdanvimab is a recombinant human IgG1lambda antibody directed against SARS-CoV-2 spike protein receptor binding domain (RBD). </li>
            <li>The main mechanism of action of CT-P59 is to block SARS-CoV-2 infection by binding to SARS-CoV-2 spike protein RBD and inhibiting the interaction between SARS-CoV-2 RBD and cellular receptor protein angiotensin-converting enzyme 2 (ACE2).</li>
          </ul>
          <b class="p-bk" style="display:block; margin-top:2em;">Reference</b>
          <ul class="cont-list">
            <li>Celltrion Inc., data on file </li>
            <li>Regdanvimab United States prescribing information (USPI)</li>
          </ul>
          </div>
        </div>
        <div class="accodian">
          <div class="tit">How are neutralizing antibodies differenct from vaccines?<i class="fas fa-chevron-down"></i></div>
          <div class="cont">
            <ul class="cont-list">
              <li>
                Neutralizing antibodies (nAbs) help provide passive immunity by giving the body antibodies before or after infection to prevent or treat disease.1,2<span>¹</span> Vaccines provide active immunity by helping the body make its own antibodies to protect itself.
              </li>
              <li>Neutralizing monoclonal antibody drugs work faster than vaccines because vaccines take time to activate immune response from the body. The protection provided by vaccines will generally last longer.3,4<span>¹</span></li>
            </ul>
            <b class="p-bk"  style="display:block; margin-top:2em;">Reference</b>
            <ul class="cont-list">
              <li>Celltrion Inc., data on file.;</li>
              <li>Jiang et al., Nat Biomed Eng. 2020Dec;4(12):1134-1139. doi: 10.1038/s41551-020-00660-2.;</li>
              <li>https://www.coronaviruspreventionnetwork.org/coronavirus-vaccine-and-antibody-science/. Accessed 6 Jan 2021.; </li>
              <li>https://www.health.mil/Military-Health-Topics/Health-Readiness/Immunization-Healthcare/Clinical-Consultation-Services/Immunology-Basics. Accessed 6 Jan 2021.</li>
            </ul>
          </div>
        </div>
        <div class="accodian">
          <div class="tit">How does Celltrion assure the quality of its manufactured products?<i class="fas fa-chevron-down"></i></div>
          <div class="cont">
            <ul class="cont-list">
            <li>
              Celltrion has established and maintains pharmaceutical quality systems based on global GMP regulations and standards, including:<br>
              - ICH Q7 ‘Good Manufacturing Practice Guidance for Active Pharmaceutical Ingredients<br>
              - CFR21 Part 211 ‘Current Good Manufacturing Practice for Finished Pharmaceuticals<br>
              - EudraLex Volume 4 ‘Good Manufacturing Practice Guidelines’ for medicinal products for human and veterinary use
              - Current GMPs
            </li>
            <li>
              Celltrion applies quality systems throughout the product life cycle, from the development stage through to manufacture,<br>
              ensuring the safety and efficacy of the products and to ultimately benefit human health
            </li>
            <li>
              Celltrion is pursuing continual quality improvement via strategic planning and execution of quality plans, continuous monitoring and evaluation of the effectiveness of the systems
            </li>
          </ul>
          </div>
        </div>
        <div class="accodian">
          <div class="tit">Who should not get regdanvimab treatment? <i class="fas fa-chevron-down"></i></div>
          <div class="cont">
            <ul class="cont-list">
              <li>Regdanvimab is not authorized for use in patients: </li>
              <li class="blt-none">- who are hospitalized due to COVID-19, OR</li>
              <li class="blt-none">- who require oxygen therapy due to COVID-19, OR</li>
              <li class="blt-none">- who require an increase in baseline oxygen flow rate due to COVID-19 in those on chronic oxygen therapy due to underlying non-COVID-19 related comorbidity.</li>
              <li>Benefit of treatment with regdanvimab has not been studied in patients hospitalized due to COVID-19.</li>
            </ul>
            <b class="p-bk" style="display:block; margin-top:2em;">Reference</b>
            <ul class="cont-list">
              <li>Celltrion Inc., data on file </li>
              <li>Regdanvimab United States prescribing information (USPI)</li>
            </ul>
          </div>
        </div>
         -->
        </div>
      </div>
      <!--MOA-->
    </div>
  </section>
  <!--cont-a-->
  <section id="sec02" class="cont-b el">
    <div class="inner">
      <h2 class="cont-tit">Regdanvimab Resources</h2>
      <p>
        <b class="p-bk">
          Useful information for Australian healthcare professionals</b>
      </p>
      <p>&nbsp</p>
      <div>
        <div class="btn-row">
          <div class="des-txt"><a href="https://www.tga.gov.au/apm-summary/regkirona" class="sub-pop" target="_blank">Download TGA
              provisional approval info</a></div>
        </div>

        <div class="btn-row">
          <div class="des-txt"><a href="https://www.ebs.tga.gov.au/ebs/picmi/picmirepository.nsf/pdf?OpenAgent&id=CP-2021-PI-02444-1&d=20220109172310101" class="sub-pop" target="_blank">Download Regdanvimab
              Product Information </a></div>
        </div>

        <div class="btn-row">
          <div class="des-txt"><a href="https://www.ebs.tga.gov.au/ebs/picmi/picmirepository.nsf/pdf?OpenAgent&id=CP-2021-CMI-02445-1&d=20220110172310101" class="sub-pop" target="_blank">Download Regdanvimab
              Consumer Medicines Information </a></div>
        </div>

        <div class="btn-row">
          <div class="des-txt"><a href="#" class="sub-pop" target="_blank">Regdanvimab Mechanism
              of Action Video</a></div>
        </div>

      </div>
      <!--
      <ul class="library-wr">
        <li>
          <p>FDA Letter of Authorization</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>FDA Fact Sheet for Healthcare Providers</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>FDA Fact Sheet for Patients, Parents and Caregivers (English)</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>FDA Fact Sheet for Patients, Parents and Caregivers (Spanish)</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>What you need to know about regdanvimab (HCP Use)</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>What you need to know about regdanvimab (Patient Use)</p>
          <a href="#" class="file-btn" download><img
              src="/img/down_btn.png"></a>
        </li>
        <li>
          <p>Regdanvimab Mechanism of Action Video</p>
          <a href="https://www.youtube.com/watch?v=HLOUUbupcFQ"
             class="file-btn" target="_blank"><img
              src="/img/down_btn.png"></a>
        </li>
      </ul> -->
    </div>
  </section>
</div>
<?php
include_once(G5_PATH . '/footer.php');
?>

<script>
  var acodian = {
    click: function (target) {
      var $target = $(target);
      $target.on('click', function () {

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
</script>
