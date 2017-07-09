<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Tambah Jalan</title>
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
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/select2/select2.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/icheck/icheck.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asrange/asRange.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asspinner/asSpinner.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/clockpicker/clockpicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/ascolorpicker/asColorPicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/card/card.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jt-timepicker/jquery-timepicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/multi-select/multi-select.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/typeahead.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/forms/advanced.css">
   <!-- Fonts -->
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
   <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
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
      <h1 class="page-title">Tambah Jalan</h1>


    </div>
    <div class="page-content">
      <div class="panel">

          <div class="panel-body">
            <form autocomplete="off"  class="fv-form fv-form-bootstrap">

              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">
                    <h3 class="panel-title">Jalan</h3>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kode Ruas
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control focus" name="kode_ruas" placeholder="Kode Ruas" required=""  >

                  </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">No Ruas
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="no_ruas" placeholder="No Ruas" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Status
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Pilih status" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                        <optgroup >
                          <option value="">Pilih Status Jalan</option>
                          <option value="Jalan Nasional">Jalan Nasional</option>
                          <option value="Jalan Provinsi">Jalan Provinsi</option>
                        </optgroup>

                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Ruas Jalan
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="ruasjalan" placeholder="Ruas Jalan" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Panjang KM
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="Panjang KM" placeholder="panjang KM" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Dari
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-3 col-sm-9">
                      <input type="text" class="form-control" name="status" placeholder="Status" required="" >
                    </div>

                    <label class="col-lg-2 col-sm-3 control-label">Ke
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-4 col-sm-9">
                      <input type="text" class="form-control" name="status" placeholder="Status" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Panjang KM
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="Panjang KM" placeholder="panjang KM" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kabupaten
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">
                      <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Select a State" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ">Arizona</option>
                          <option value="CO">Colorado</option>
                          <option value="ID">Idaho</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NM">New Mexico</option>
                          <option value="ND">North Dakota</option>
                          <option value="UT">Utah</option>
                          <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL">Alabama</option>
                          <option value="AR">Arkansas</option>
                          <option value="IL">Illinois</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="OK">Oklahoma</option>
                          <option value="SD">South Dakota</option>
                          <option value="TX">Texas</option>
                          <option value="TN">Tennessee</option>
                          <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="IN">Indiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="OH">Ohio</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WV">West Virginia</option>
                        </optgroup>
                      </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Pilih Kabupaten</small></div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kecamatan
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">

                        <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Select a State" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Plilh Kecataman</small></div>
                  </div>
                </div>

                <div class="col-lg-6 form-horizontal">
                    <h3 class="panel-title">Kolektor Primer</h3>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Nama
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required="" >

                    </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">No
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="no_ruas" placeholder="No" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Keterangan
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="Ketengan" placeholder="Keterangan" required="" >
                      </div>
                    </div>

                    <h3 class="panel-title">Kondisi Jalan</h3>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Baik
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="baik" placeholder="Baik" required="" >

                    </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Sedang
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="sedang" placeholder="Sedang" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Rusak Ringan
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="rusak_ringan" placeholder="Rusak Ringan" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Rusak Berat
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="rusak_ringan" placeholder="Rusak Ringan" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Belum Tembus
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="rusak_ringan" placeholder="Rusak Ringan" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Upload Dokumen
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <div class="input-group input-group-file">
                          <input type="text" class="form-control" readonly="">
                          <span class="input-group-btn">
                            <span class="btn btn-primary btn-file waves-effect waves-light">
                              <i class="icon md-upload" aria-hidden="true"></i>
                              <input type="file" name="" multiple="">
                            </span>
                          </span>
                        </div>
                      </div>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/select2/select2.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/icheck/icheck.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asspinner/jquery-asSpinner.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ascolor/jquery-asColor.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asgradient/jquery-asGradient.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-knob/jquery.knob.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/card/jquery.card.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datepair-js/datepair.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datepair-js/jquery.datepair.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/multi-select/jquery.multi-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/bloodhound.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/select2.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-tokenfield.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-tagsinput.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/icheck.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asrange.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asspinner.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/clockpicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/ascolorpicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-maxlength.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-knob.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-touchspin.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/card.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-labelauty.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jt-timepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/datepair-js.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-strength.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/multi-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-placeholder.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/forms/advanced.js"></script>
</body>
</html>
