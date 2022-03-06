<?php $this->load->view('front_app/common/header'); ?>

<style>
  .red-border {
    border: 1px solid red !important;
  }
</style>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
  <div class="jumper">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class="welcome-area" id="welcome">
  <!-- ***** Header Text Start ***** -->
  <div class="header-text">
    <div class="container">
      <div class="row">
        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
          <h1>Check out how to <strong>save money</strong> for your car insurnace</h1>
          <div class="col-lg-12 col-md-6 col-sm-12">
            <div class="contact-form">
              <form role="form" method="post" id="insurance_form" enctype="multipart/form-data" style="margin-top:50px;" action="<?= base_url(); ?>Home/additional_info">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <select class="form-control" name="car_type" id="car_type" data-placeholder="Choose Vehicle type" style="width: 100%;font-family: 'FontAwesome',Raleway;">
                        <option value="">Choose Vehicle type </option>
                        <option value="bus"><span>&#xf207;</span> &nbsp&nbsp Bus</option>
                        <option value="car"> <span>&#xf1b9;</span> &nbsp&nbsp Car</option>
                        <option value="bike"><span>&#xf21c;</span> &nbsp Bike</option>
                      </select>
                    </fieldset>
                  </div>
                  <!-- <ul>
                    <i class="icon a-icon-car icon-car" style="font-size:100px"></i>
                  </ul> -->

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input type="text" class="form-control" id="plate_no" maxlength="8" placeholder="Enter Plate No" name="plate_no" style="font-family:Raleway;">
                    </fieldset>
                  </div>

                  <p style="color:white;display:none" id="plate_error">* Invalid Plate No</p>
                  <p style="color:white;display:none" id="empty_error">* Fill in the required fields</p>
                  <p style="color:white;display:none" id="plate_no_exist_error">* This plate number already exists.</p>
                </div>

                <a type="button" id="submitbutton" class="main-button-slider" style="color:white">Get Offer</a>
                <!-- <button type="button" id="submitbutton" class="main-button-slider">Get Offer</button> -->
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <!-- ***** Features Small Item Start ***** -->
          <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
            <div class="features-small-item">
              <div class="icon">
                <i><img src="assets/images/featured-item-01.png" alt=""></i>
              </div>
              <h5 class="features-title">Modern Strategy</h5>
              <p>Customize anything in this template to fit your website needs</p>
            </div>
          </div>
          <!-- ***** Features Small Item End ***** -->

          <!-- ***** Features Small Item Start ***** -->
          <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
            <div class="features-small-item">
              <div class="icon">
                <i><img src="assets/images/featured-item-01.png" alt=""></i>
              </div>
              <h5 class="features-title">Best Relationship</h5>
              <p>Contact us immediately if you have a question in mind</p>
            </div>
          </div>
          <!-- ***** Features Small Item End ***** -->

          <!-- ***** Features Small Item Start ***** -->
          <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
            <div class="features-small-item">
              <div class="icon">
                <i><img src="assets/images/featured-item-01.png" alt=""></i>
              </div>
              <h5 class="features-title">Ultimate Marketing</h5>
              <p>You just need to tell your friends about our free templates</p>
            </div>
          </div>
          <!-- ***** Features Small Item End ***** -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process" style="background-image: url(<?php echo base_url(); ?>assets/images/work-process-bg.png);opacity:.75">
  <div class="mini-content">
    <div class="container">
      <div class="row">
        <div class="offset-lg-3 col-lg-6">
          <div class="info">
            <h1>Work Process</h1>
            <p>Aenean nec tempor metus. Maecenas ligula dolor, commodo in imperdiet interdum, vehicula ut ex. Donec ante diam.</p>
          </div>
        </div>
      </div>

      <!-- ***** Mini Box Start ***** -->
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Get Ideas</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Sketch Up</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Discuss</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Revise</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Approve</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
          <a href="#" class="mini-box">
            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
            <strong>Launch</strong>
            <span>Godard pabst prism fam cliche.</span>
          </a>
        </div>
      </div>
      <!-- ***** Mini Box End ***** -->
    </div>
  </div>
</section>
<!-- ***** Home Parallax End ***** -->

<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
  <div class="container">
    <!-- ***** Section Title Start ***** -->
    <div class="row">
      <div class="col-lg-12">
        <div class="center-heading">
          <h2 class="section-title">Talk To Us</h2>
        </div>
      </div>
      <div class="offset-lg-3 col-lg-6">
        <div class="center-text">
          <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.</p>
        </div>
      </div>
    </div>
    <!-- ***** Section Title End ***** -->

    <div class="row">
      <!-- ***** Contact Text Start ***** -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h5 class="margin-bottom-30">Keep in touch</h5>
        <div class="contact-text">
          <p>You are requested to contact us any time for any kind of query. Thank you.</p>
        </div>
      </div>
      <!-- ***** Contact Text End ***** -->

      <!-- ***** Contact Form Start ***** -->
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="contact-form">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- ***** Contact Form End ***** -->
    </div>
  </div>
</section>
<!-- ***** Contact Us End ***** -->



<?php $this->load->view('front_app/common/footer'); ?>

<script>
  $('#submitbutton').on('click', function() {
    //alert('button pressed');
    $('#submitbutton').attr('disabled', true);
    var validate = 0;
    var car_type = $('#car_type').val();
    var plate_no = $('#plate_no').val();

    if (car_type == '') {
      validate = 1;
      $('#car_type').addClass('red-border');
      $('#empty_error').show();
    }
    if (plate_no == '') {
      validate = 1;
      $('#plate_no').addClass('red-border');
      $('#empty_error').show();
    }
    if (!/[A-Za-z0-9]+$/.test(plate_no) && plate_no != '') {
      validate = 1;
      $('#plate_no').addClass('red-border');
      $('#plate_error').show();
    }
    if ((plate_no.length < 6 || plate_no.length > 7) && plate_no != '') {
      validate = 1;
      $('#plate_no').addClass('red-border');
      $('#plate_error').show();
    }

    if (validate == 0) {
      $('#insurance_form')[0].submit();
    } else {
      $('#submitbutton').removeAttr('disabled');
    }

  });

  if (validate == 0) {
    $('#plate_no').on('blur', function() {
      //alert('df');
      var plate_no = $('#plate_no').val();
      //alert(plate_no);
      $.ajax({
        url: '<?= base_url(); ?>Home/plate_no_exists',
        method: 'POST',
        data: {
          'plate_no': plate_no
        },
        success: function(data) {
          //alert(data);
          if (data == 1) {
            $('#plate_no_exist_error').show();
            $('#submitbutton').attr('disabled', true);
          } else {
            $('#plate_no_exist_error').hide();
            $('#submitbutton').removeAttr('disabled');
          }
        },
        error: function(data) {
          alert('failure');
        }
      });


    });
  }

  $("#preloader").delay(2000).hide(400);
</script>