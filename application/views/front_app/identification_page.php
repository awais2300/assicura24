<?php $this->load->view('front_app/common/header'); ?>

<style>
  .red-border {
    border: 1px solid red !important;
  }

  #flip {
    margin-top: 15px;
  }

  #panel,
  #flip {
    padding: 10px 15px 10px 5px;
    text-align: left;
    background-color: #e9e7e7;
    border: solid 1px #c3c3c3;
    border-radius: 40px;
  }

  #panel {
    padding: 35px;
    display: none;
    font-size: 16px;
    color: black
  }

  input[type="file"] {
    padding: 2px 3px;
    height: 10px;
    cursor: pointer;
    /* display: block; */
    /* border: 1px solid #ccc; */
    /* width: 457px; */
    /* border-radius: 4px; */
    /* box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); */
    /* transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; */
  }

  input[type="checkbox"] {
    zoom: 1.5;
    padding: 5px;
    /* box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); */
    /* transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; */
  }
</style>

<!-- <div class="welcome-area" id="welcome"> -->
<section class="section colored" id="contact-us">
  <div class="row">
    <div class="col-lg-12">
      <div class="center-heading">
        <h2 class="section-title">Identification Information</h2>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="header-text">
    <div class="container">
      <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="contact-form">
          <form role="form" method="post" id="insurance_form" enctype="multipart/form-data" action="<?= base_url(); ?>Home/identification_process">
            <div class="row">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align:left">Registration Certificate:</p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="file" name="reg_cert[]" id="reg_cert" multiple="multiple" style="background-color:white">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <p class="reg_cert" style="text-align:left;font-size:12px">Upload maximum 3 files</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align:left">Fisical Code:</p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="file" name="fiscal_code[]" id="fiscal_code" multiple="multiple" style="background-color:white">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <p class="fiscal_code" style="text-align:left;font-size:12px">Upload maximum 2 files</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align:left">Identification Card:</p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="file" class="file" name="identification[]" id="Identification" multiple="multiple" style="background-color:white">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <p class="fiscal_code" style="text-align:left; font-size:12px">Upload maximum 2 files</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align:left">Contract Type:</p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <select class="form-control" name="post_contract" id="post_contract" data-placeholder="Contract Type">
                    <option value="">Contract Type </option>
                    <option value="email"> Email</option>
                    <option value="printed">Printed </option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <p class="fiscal_code" style="text-align:left;font-size:12px">Email (Recommended)</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="text-align:left"></p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <div id="flip" style="background-color:white; color:black; border: 1px solid white">
                    PRIVACY INFORMATION<i class="fa fa-plus" style="float:right;margin-top:2px;"></i>
                  </div>
                  <div id="panel">
                    <input type="checkbox" name="privacy_checkbox" id="privacy_checkbox">
                    <span style="margin-top:12px; text-align:justify">A privacy policy is a statement or a legal document that discloses some or all of the ways a party gathers, uses, discloses, and manages a customer or client's data.</span>
                  </div>
              </div>
              </fieldset>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <p class="fiscal_code" style="color:white;text-align:left"></p>
              </div>
              <p style="color:red;display:none;float:left" id="plate_error">* Invalid Plate No</p>
              <p style="color:red;display:none;float:left" id="privacy_error">* Please check privacy policy</p>
              <p style="color:red;display:none;float:left" id="empty_error">* Fill in the required fields</p>

            </div>
            <input type="hidden" name="last_user_id" value="<?= $last_user_id ?>">
            <div class="center-heading">
              <a type="button" id="submitbutton" class="main-button-slider id_btn" style="color:white">Proceed to Offer</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('front_app/common/footer'); ?>
<script>
  $('#submitbutton').on('click', function(evemt) {
    //alert('button pressed');
    $('#submitbutton').attr('disabled', true);
    var validate = 0;
    var postal_contract = $('#postal_contract').val();

    if ($("input[type=checkbox]").is(
        ":checked")) {
      $('#privacy_error').hide();
    } else {
      validate = 1;
      $('#privacy_error').show();
    }

    if (document.getElementById("reg_cert").files.length == 0) {
      validate = 1;
      //alert('2');

      $('#reg_cert').addClass('red-border');
    } else if (document.getElementById("reg_cert").files.length > 3) {
      //alert('3');
      validate = 1;
      $('#reg_cert').addClass('red-border');
      $('.reg_cert').css('color', 'red');
    }

    /* fiscal code */
    if (document.getElementById("fiscal_code").files.length == 0) {
      validate = 1;
      $('#fiscal_code').addClass('red-border');
    } else if (document.getElementById("fiscal_code").files.length > 2) {
      validate = 1;
      $('#fiscal_code').addClass('red-border');
    }

    /* ID */
    if (document.getElementById("Identification").files.length == 0) {
      validate = 1;
      $('#Identification').addClass('red-border');
    } else if (document.getElementById("Identification").files.length > 2) {
      validate = 1;
      $('#Identification').addClass('red-border');
      $('.').css('color', 'red');

    }

    if ($(":selected").val() === "") {
      validate = 1;
      $('.form-control').addClass('red-border');
      $('#empty_error').show();
    }

    if (validate == 0) {
      $('#insurance_form')[0].submit();

    } else {
      $('#submitbutton').removeAttr('disabled');
    }
    evemt.preventDefault();
  });
</script>

<script>
  $(document).ready(function() {
    $("#flip").click(function() {
      $("#panel").slideToggle();
    });
  });
</script>

<!-- <script src="jquery-1.10.2.min.js"></script> -->