<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Help</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/assets/css/site.min.css">
<!-- Plugins -->
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/animsition/animsition.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/switchery/switchery.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/waves/waves.css">
<!-- Fonts -->
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/fonts/material-design/material-design.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<!--[if lt IE 9]>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
<!--[if lt IE 10]>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/media-match/media.match.min.js"></script>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/respond/respond.min.js"></script>
  <![endif]-->
<!-- Scripts -->
<script src="<?php echo site_url(); ?>/assets/global/vendor/modernizr/modernizr.js"></script>
<script src="<?php echo site_url(); ?>/assets/global/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
</head>
<body class="site-navbar-small page-faq">

  <?php echo $this->load->view('common/menu', '', TRUE);?>

  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Help</h1>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-3 col-sm-4">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body">
              <div class="list-group" data-plugin="nav-tabs" role="tablist">
                <a class="list-group-item active" data-toggle="tab" href="#category-1" aria-controls="category-1"
                role="tab">Umum</a>
                <a class="list-group-item" data-toggle="tab" href="#category-2" aria-controls="category-2"
                role="tab">Pengaduan</a>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
        <div class="col-lg-9 col-sm-8">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body">
              <div class="tab-content">
                <!-- Categroy 1 -->
                <div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
                  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
                  aria-multiselectable="true" role="tablist">
                    <!-- Question 1 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-1" role="tab">
                        <a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
                        href="#answer-1" data-parent="#accordion2">
                        What is Lorem ipsum?
                      </a>
                      </div>
                      <div class="panel-collapse collapse in" id="answer-1" aria-labelledby="question-1"
                      role="tabpanel">
                        <div class="panel-body">
                          Lorem ipsum Voluptate ad et culpa ad eu ex nulla voluptate nostrud consectetur
                          nisi nisi incididunt voluptate enim labore occaecat qui
                          laboris id sunt aute mollit reprehenderit aute non dolor
                          labore tempor Duis ex deserunt proident elit enim culpa
                          labore fugiat labore velit ut ea aute Ut laboris culpa
                          consectetur ex tempor cillum consectetur enim do aute
                          ut commodo mollit aute esse enim fugiat quis Excepteur
                          enim in qui nostrud et ad nulla tempor cupidatat fugiat
                          proident ut proident elit cupidatat laborum in fugiat
                          amet elit mollit sit commodo reprehenderit enim minim
                          sit Duis laboris dolor velit sed dolore consequat ea
                          magna ut laborum incididunt nostrud do non nisi minim
                          anim dolor anim ex adipisicing ut ex Ut cupidatat consectetur
                          ut magna est minim proident occaecat aliquip consectetur
                          adipisicing dolor ea nulla dolore commodo reprehenderit
                          velit nulla eu dolor proident aliqua elit est aliqua
                          labore eiusmod.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 1 -->
                    <!-- Question 2 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-2" role="tab">
                        <a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
                        href="#answer-2" data-parent="#accordion2">
                        How much does it cost to use Lorem ipsum?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
                      role="tabpanel">
                        <div class="panel-body">
                          Laborum commodo cupidatat adipisicing aliqua qui in dolore occaecat labore nisi
                          occaecat enim dolor sit exercitation sit Duis minim tempor
                          est aliquip sit nostrud ea ea sit nostrud dolore cillum
                          exercitation officia sunt pariatur consequat velit id
                          nulla id Duis minim sunt sint culpa amet veniam commodo
                          nisi reprehenderit tempor irure sunt enim in eu reprehenderit
                          anim nulla tempor pariatur nisi fugiat consectetur sint
                          deserunt elit voluptate in in labore eiusmod nostrud
                          eiusmod est ullamco sit qui ut ut velit in veniam in
                          Ut nulla pariatur reprehenderit deserunt laboris sed
                          cupidatat est dolore adipisicing Duis in ut dolore dolor
                          sunt aute ut Excepteur sint consectetur.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 2 -->
                    <!-- Question 3 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-3" role="tab">
                        <a class="panel-title" aria-controls="answer-3" aria-expanded="false" data-toggle="collapse"
                        href="#answer-3" data-parent="#accordion2">
                        What is the lorem ipsum pariatur?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3"
                      role="tabpanel">
                        <div class="panel-body">
                          Lorem ipsum Esse pariatur sit reprehenderit non culpa sint ullamco qui in aliquip
                          enim exercitation laborum ut eu voluptate exercitation
                          Duis dolore amet pariatur id occaecat incididunt deserunt
                          nulla esse proident.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 3 -->
                    <!-- Question 4 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-4" role="tab">
                        <a class="panel-title" aria-controls="answer-4" aria-expanded="false" data-toggle="collapse"
                        href="#answer-4" data-parent="#accordion2">
                       Lorem ipsum commodo adipisicing sunt ad aliqua velit nulla?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-4" aria-labelledby="question-4"
                      role="tabpanel">
                        <div class="panel-body">
                          Lorem ipsum Do cupidatat in culpa magna voluptate ullamco et anim nulla cupidatat
                          dolor culpa consequat quis dolor eu aliqua Ut eiusmod
                          ullamco sint reprehenderit commodo veniam ea irure sit
                          reprehenderit sunt sed sed proident ea incididunt esse
                          cillum cupidatat officia Duis.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 4 -->
                  </div>
                </div>
                <!-- End Categroy 1 -->
                <!-- Categroy 2 -->
                <div class="tab-pane animation-fade" id="category-2" role="tabpanel">
                  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion"
                  aria-multiselectable="true" role="tablist">
                    <!-- Question 5 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-5" role="tab">
                        <a class="panel-title" aria-controls="answer-5" aria-expanded="true" data-toggle="collapse"
                        href="#answer-5" data-parent="#accordion">
                        Can I exercitation occaecat voluptate duis ut dolore?
                      </a>
                      </div>
                      <div class="panel-collapse collapse in" id="answer-5" aria-labelledby="question-5"
                      role="tabpanel">
                        <div class="panel-body">
                          Consecutus sicine hominum, artem conclusionemque patientia, omni fuerit intemperantiam
                          efficeretur phaedrum minime obiecta constituam, motus
                          mandamus perfunctio contra, imagines exquisitis reiciat.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 5 -->
                    <!-- Question 6 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-6" role="tab">
                        <a class="panel-title" aria-controls="answer-6" aria-expanded="false" data-toggle="collapse"
                        href="#answer-6" data-parent="#accordion">
                        How do lorem ipsum quis magna magna?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6"
                      role="tabpanel">
                        <div class="panel-body">
                          Pluribus horum laetamur forensibus investigandi gravissimis quaeque possumus copulationesque.
                          Sapientium interdictum, secutus servata expressas reici.
                          Dixerit dixerit tantis conscientiam arbitramur reprehensa
                          traditur propositum locos remotis, metus continent maledici
                          attico sermo iucundius gerendarum. Bonarum incommoda
                          afferrent iisque graeca perdiscere munere recordatione
                          nos sapiens, perspexit, oderit nominata.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 6 -->
                    <!-- Question 7 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-7" role="tab">
                        <a class="panel-title" aria-controls="answer-7" aria-expanded="false" data-toggle="collapse"
                        href="#answer-7" data-parent="#accordion">
                        How do I set up lorem ipsum?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-7" aria-labelledby="question-7"
                      role="tabpanel">
                        <div class="panel-body">
                          Acute ennius fuisset facile plena quem possim tribus antipatrum moveat, praestabiliorem
                          geometria inportuno privamur, remissius habemus desperantes,
                          nullas quas terrore modum uberius homine adiuvet, dissentio
                          iudicabit ac, nullus molita foedus num. Circumcisaque
                          nulla aut etenim doceat pecunias afferrent infinitis,
                          propterea repellat epularum inveneris dissentiet meminerunt
                          malivoli gloriosis, faciunt petat conscientia, nesciunt
                          logikh fortunae, primos expedire aliquo putet aptissimum
                          officiis naturalem.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 7 -->
                  </div>
                </div>
                <!-- End Categroy 2 -->
                <!-- Categroy 3 -->
              
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
    </div>
  </div>
    <?php echo $this->load->view('common/footer', '', TRUE);?>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>/assets/global/vendor/jquery/jquery.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/bootstrap/bootstrap.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/animsition/animsition.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/asscroll/jquery-asScroll.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/waves/waves.js"></script>
   <!-- Plugins -->
   <script src="<?php echo site_url(); ?>/assets/global/vendor/switchery/switchery.min.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/intro-js/intro.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/screenfull/screenfull.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
   <!-- Scripts -->
   <script src="<?php echo site_url(); ?>/assets/global/js/core.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/site.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/menu.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/menubar.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/sidebar.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/configs/config-colors.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/configs/config-tour.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/asscrollable.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/animsition.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/slidepanel.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/switchery.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/tabs.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/examples/js/pages/faq.js"></script>
</body>
</html>
