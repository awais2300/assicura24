
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Panel Assicura24 | Log in</title>
     <!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets2/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets2/apple-touch-icon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

</head>
<style>
select {
  font-family: 'FontAwesome', 'Second Font name'
}

.red-border{
	border:1px solid red !important;
}
</style>
<body class="hold-transition login-page">

  
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Reset </b>Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   
    <form id="login-form" action="<?php echo base_url();?>User_Login/updatepassword" method="post">
     
      <div class="form-group has-feedback" id="">
        <input type="phone" name="phone" id= "phone" minlength="10"   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Phone number" maxlength="10">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback" id="">
        <input type="phone" name="phonenew" id= "phonenew" minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Confirm Phone No" maxlength="10">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
	   <input type="hidden" class="form-control"  name="id" value="<?php echo $id; ?>"/>
            
      <div class="row">
        <div class="clearfix">
         <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>-->
        </div>
       <p style="color:red;font-size:14px;margin-left:15px;display:none;font-weight:600" id ="phone_error">* Phone no doesnot match</p>
       <p style="color:red;font-size:14px;margin-left:15px;display:none;font-weight:600" id ="phone_length_error">* Phone no is not valid</p>
	     <div class="col-xs-12" style="margin-top:10px;" id="Reset">
      <button type="button" id="reset_button" style="background-color:#885ead;margin-bottom:10px" class="btn btn-primary btn-block btn-flat">Reset</button>
      </div>
    </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<script>

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
<script>
$('#forgot').on('click',function(){
	$('#phone').hide();
	$('#signIn').hide();
	$('#Reset').show();
});

$('#reset_button').on('click',function()
{	
    $('#reset_button').attr('disabled',true);
    var validate=0;
    var phone = $('#phone').val();    
    var phonenew = 	$('#phonenew').val();

    if(phone != phonenew){
		validate = 1;
		$('#phone').addClass('red-border');
		$('#phonenew').addClass('red-border');
		$('#phone_error').show();
	} else if (phone.toString().length < 10){
		validate = 1;
		$('#phone').addClass('red-border');
		$('#phonenew').addClass('red-border');
		$('#phone_length_error').show();
	}
 
	if(validate == 0){
		$('#login-form')[0].submit();
	}else{
		$('#reset_button').removeAttr('disabled');
	}
});

</script>