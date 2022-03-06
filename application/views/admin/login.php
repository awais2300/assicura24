
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php //echo base_url(); ?>assets/css/templatemo-softy-pinko.css">
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

</head>
<body class="hold-transition login-page">

<div class="welcome-area" id="welcome">

<!-- ***** Header Text Start ***** -->
<div class="header-text">
  <div class="container">
    <div class="col-lg-12 col-md-6 col-sm-12">
      <div class="contact-form">
      <div class="login-box" >
  <div class="login-logo">
    <a style="color:black" href=""><b>Admin Panel </b>Assicura24</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" style="color:black;">Sign in to start your session</p>

    <form action="<?php echo base_url();?>Admin/login_process" method="post">
      <div class="form-group has-feedback">
        <input style="border:1px solid gray;" type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input style="border:1px solid gray;border-radius:40px" type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
      
        <!-- /.col -->
        <div class="col-xs-12">
      <button type="submit" style="background-color:#885ead;border-radius:40px"  class="btn btn-primary btn-block btn-flat">Sign In</button>
              <!---- <button type="button" class="btn btn-danger btn-block  btn-flat" 
               onclick="window.location = '<?php echo $loginUrl?>' ;">Login with Facebook</button>--->
       
      </div>
    </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
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
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<?php if ($this->session->flashdata('success')): ?>
<script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
  <script>
	Swal.fire(
	  '<?php echo $this->session->flashdata('success'); ?>',
	  '',
	  'success'
	);
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('failure')): ?>
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