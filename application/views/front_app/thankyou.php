<?php $this->load->view('front_app/common/header'); ?>
<style>
  select {
    font-family: 'FontAwesome', 'Second Font name'
  }

  .red-border {
    border: 1px solid red !important;
  }
</style>
<!-- <div class="welcome-area" id="welcome"> -->
<section class="section colored" id="contact-us">
  <div class="header-text">
    <div class="container">
      <div class="row" style="height:300px">

        <?php if ($option == 'no') { ?>
          <h1 style="text-align:justify">THANKYOU FOR YOUR REQUEST TO QUOTE OFFER, VERIFICATION EMAIL HAS BEEN
            SENT TO YOU, WE WILL GET BACK TO YOU SOON WITH AN AMAZING OFFER.</h1>
          
          <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
            <div class="linktohome" style="text-align:center">
              <a class="main-button-slider" href="<?php echo base_url(); ?>Home"> Back to Main Page </a>
            </div>
          </div>
        <?php } else { ?>
          <h1>YOUR REQUEST HAS BEEN SUCCESSFULLY SENT TO ADMINISTRATOR, WE WILL GET BACK TO YOU SOON.</h1>
          
          <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
            <div class="linktohome" style="text-align:center">
              <a class="main-button-slider" href="<?php echo base_url(); ?>User_Login"> Back to Main Page </a>
            </div>
          </div>
        <?php } ?>
        <!-- </div> -->
      </div>
    </div>
  </div>

</section>
<!-- </div> -->

<?php $this->load->view('front_app/common/footer'); ?>