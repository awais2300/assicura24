<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Panel Assicura | Log in</title>
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets2/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets2/apple-touch-icon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php //echo base_url(); 
                                ?>assets/css/templatemo-softy-pinko.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iCheck/square/blue.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<style>
  select {
    font-family: 'FontAwesome', 'Second Font name'
  }

  .red-border {
    border: 1px solid red !important;
  }
</style>
<div class="welcome-area" id="welcome">

  <!-- ***** Header Text Start ***** -->
  <div class="header-text">
    <div class="container">
      <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="contact-form">
          <div class="login-box" style="">
            <div class="login-logo">
              <a style="color:white" href=""><b>User Panel </b>Assicura24</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body" style="height:320px">
              <p class="login-box-msg" style=" color: black">Sign in to start your session</p>
              <p class="login-box-msg1" style="display:none">Provide Email to Reset your password</p>

              <form id="login-form" action="<?php echo base_url(); ?>User_Login/login_process" method="post">
                <div class="form-group has-feedback">
                  <input style="border:1px solid gray;" type="email" name="email" id="email" class="form-control" placeholder="Email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" id="phone">
                  <input style="border:1px solid gray;" type="phone" name="phone" id="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Phone number" maxlength="10">
                  <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-8">
                    <!-- <div class="checkbox icheck">-->
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-12" style="margin-top:10px" id="signIn">
                  <button type="submit" style="background-color:#885ead;margin-bottom:10px;border-radius:40px;" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <div class="col-xs-12" style="margin-top:10px; display:none;" id="Reset">
                  <button type="button" id="reset_button" style="background-color:#885ead;" class="btn btn-primary btn-block btn-flat">Reset Password</button>
                </div>
                <a href="#" id="forgot" style=" padding:5px; font-size:16px; font-weight:700;">Forgot Password? Click Here!</a><br>
                <a href="#" id="back" style=" padding:5px; font-size:16px; font-weight:700; display:none"> <?= ' <<  Back'; ?></a><br>
            </div>

            </form>


            <!-- /.social-auth-links-->



          </div>
          <!-- /.login-box-body -->
        </div>

      </div>
    </div>
  </div>


  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->

<script src="<?php echo base_url(); ?>assets/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/iCheck/icheck.min.js"></script>

<script>
  $(function() {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<?php if ($this->session->flashdata('success')) : ?>
  <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
  <script>
    Swal.fire(
      '<?php echo $this->session->flashdata('success'); ?>',
      '',
      'success'
    );
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('failure')) : ?>
  <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
  <script>
    Swal.fire(
      '<?php echo $this->session->flashdata('failure'); ?>',
      '',
      'error'
    );
  </script>
<?php endif; ?>
</body>

</html>
<script>
  $('#forgot').on('click', function() {
    $('#phone').hide();
    $('#signIn').hide();
    $('#Reset').show();
    $('#forgot').hide();
    $('#back').show();
    $('.login-box-msg').hide();
    $('.login-box-msg1').show();
  });
  $('#back').on('click', function() {
    $('#phone').show();
    $('#signIn').show();
    $('#Reset').hide();
    $('#forgot').show();
    $('#back').hide();
    $('.login-box-msg').show();
    $('.login-box-msg1').hide();
  });


  $('#reset_button').on('click', function() {
    $('#reset_button').attr('disabled', true);
    var validate = 0;
    var email = $('#email').val();
    var dataString = '&email=' + email;

    if (email == '') {
      validate = 1;
      $('#email').addClass('red-border');
    }

    if (validate != 1) {
      $.ajax({
        url: '<?= base_url() ?>User_Login/forgotpassword',
        type: 'post',
        data: dataString,
        success: function(data) {

          if (data == 1) {
            Swal.fire(
              'Check your email to reset your password',
              '',
              'success');
          } else {
            $('#reset_button').removeAttr('disabled');
            Swal.fire(
              'Email doesnot exist!',
              '',
              'error');
          }
        }
      });
    }

  });
</script>
<script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>