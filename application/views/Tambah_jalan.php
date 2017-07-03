<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Jalan</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="site-navbar-small ">


<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Administrator</h1>
      <ol class="breadcrumb">
        <li><a href="../index.html">Home</a></li>
        <li><a href="javascript:void(0)">Tables</a></li>
        <li class="active">DataTables</li>
      </ol>

    </div>
    <div class="page-content">
      <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Full Example
              <span class="panel-desc">Basic validation will display a label with the error after the form
                control. </span>
            </h3>
          </div>
          <div class="panel-body">
            <form id="exampleFullForm" autocomplete="off" novalidate="novalidate" class="fv-form fv-form-bootstrap"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Username
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-12 col-sm-9">
                      <input type="text" class="form-control" name="username" placeholder="John Fish" required="" data-fv-field="username">
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="username" data-fv-result="INVALID" style="">The username is required</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="username" data-fv-result="VALID" style="display: none;">Please enter a value with valid length</small><small class="help-block" data-fv-validator="regexp" data-fv-for="username" data-fv-result="VALID" style="display: none;">Please enter a value matching the pattern</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Email
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon md-email" aria-hidden="true"></i>
                        </span>
                        <input type="email" class="form-control" name="email" placeholder="email@email.com" required="" data-fv-field="email">
                      </div>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="INVALID" style="">The username is required</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="VALID" style="display: none;">The email address is not valid</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Password
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon md-lock" aria-hidden="true"></i>
                        </span>
                        <input type="password" class="form-control" name="password" placeholder="Min length 8" required="" data-fv-field="password">
                      </div>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="password" data-fv-result="INVALID" style="">The password is required</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="password" data-fv-result="VALID" style="display: none;">Please enter a value with valid length</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Birthday
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <input type="text" class="form-control" name="birthday" placeholder="YYYY/MM/DD" required="" data-fv-field="birthday">
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="birthday" data-fv-result="INVALID" style="">The birthday is required</small><small class="help-block" data-fv-validator="date" data-fv-for="birthday" data-fv-result="VALID" style="display: none;">Please enter a valid date</small></div>
                  </div>
                  <div class="form-group form-material has-success">
                    <label class="col-lg-12 col-sm-3 control-label">GitHub</label>
                    <div class="col-lg-12 col-sm-9">
                      <input type="url" class="form-control" name="github" placeholder="https://github.com/amazingSurge" data-fv-field="github">
                    <small class="help-block" data-fv-validator="uri" data-fv-for="github" data-fv-result="VALID" style="display: none;">Please enter a valid URI</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Company</label>
                    <div class="col-lg-12 col-sm-9">
                      <select class="form-control" id="company" name="company" required="" data-fv-field="company">
                        <option value="">Choose a Company</option>
                        <option value="apple">Apple</option>
                        <option value="google">Google</option>
                        <option value="microsoft">Microsoft</option>
                        <option value="yahoo">Yahoo</option>
                      </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Please company</small></div>
                  </div>
                </div>
                <div class="col-lg-6 form-horizontal">
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Remark Admin is
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <div class="input-group">
                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputAwesome" name="porto_is" value="awesome" required="" data-fv-field="porto_is">
                            <label for="inputAwesome">Awesome</label>
                          </div>
                        </div>
                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputVeryAwesome" name="porto_is" value="very-awesome" data-fv-field="porto_is">
                            <label for="inputVeryAwesome">Very Awesome</label>
                          </div>
                        </div>
                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputUltraAwesome" name="porto_is" value="ultra-awesome" data-fv-field="porto_is">
                            <label for="inputUltraAwesome">Ultra Awesome</label>
                          </div>
                        </div>
                      </div>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="porto_is" data-fv-result="INVALID" style="">Please specify at least one</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">I will use it for
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <div class="input-group">
                        <div>
                          <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="inputForProject" name="for[]" value="project" required="" data-fv-field="for[]">
                            <label for="inputForProject">My Project</label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="inputForWebsite" name="for[]" value="website" data-fv-field="for[]">
                            <label for="inputForWebsite">My Website</label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="inputForAll" name="for[]" value="all" data-fv-field="for[]">
                            <label for="inputForAll">All things I do</label>
                          </div>
                        </div>
                      </div>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="for[]" data-fv-result="INVALID" style="">Please specify at least one</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Skills
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-12 col-sm-9">
                      <textarea class="form-control" name="skills" rows="3" placeholder="Describe your skills" required="" data-fv-field="skills"></textarea>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="skills" data-fv-result="INVALID" style="">The skills is required</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="skills" data-fv-result="VALID" style="display: none;">Please enter a value with valid length</small></div>
                  </div>
                  <div class="form-group form-material has-error">
                    <label class="col-lg-12 col-sm-3 control-label">Browsers</label>
                    <div class="col-lg-12 col-sm-9">
                      <select class="form-control" id="browsers" name="browsers" title="Please select at least one browser" size="5" multiple="multiple" required="" data-fv-field="browsers">
                        <option value="chrome">Chrome / Safari</option>
                        <option value="ff">Firefox</option>
                        <option value="ie">Internet Explorer</option>
                        <option value="opera">Opera</option>
                      </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="browsers" data-fv-result="INVALID" style="">Please specify at least one browser you use daily for development</small></div>
                  </div>
                </div>
                <div class="form-group form-material col-lg-12 text-right padding-top-m">
                  <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php echo $this->load->view('common/footer', '', TRUE);?>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/js/core.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/site.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menu.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menubar.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/sidebar.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/configs/config-colors.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/configs/config-tour.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asscrollable.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/slidepanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/datatable.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/uikit/icon.js"></script>
</body>
</html>
