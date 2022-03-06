<?php $this->load->view('userpanel/common/UserHeader');?>
<style>
select {
  font-family: 'FontAwesome', 'Second Font name';
  font-family: Arial, Helvetica, sans-serif;
}

.red-border{
	border:1px solid red !important;
}
input[type="file"] {
    padding: 3px;
    display: block;
    border: 1px solid #ccc;
    width: 457px;
	border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
</style>
<div style="height:580px;padding:55px;" class="container">
<label style="color:#885ead;font-size:20px">OPEN YOUR EYES AND CHECKOUT HOW TO SAVE MONEY 
FOR YOUR INSURANCE CAR</label>
        <form role="form" method="post" id= "insurance_form" enctype="multipart/form-data" style="margin-top:10px;" action="<?=base_url();?>Home/additional_info_reg">
              <div class="box-body">
 <div class="form-group col-md-6">
                <label style="font-size:15px">Select car type<span style="color: #FF0000;">*</span></label>
                <select class="form-control select2 " name="car_type" id="car_type"   data-placeholder="Choose Vehicle type"  style="width: 100%;font-family: 'FontAwesome', 'Arial'">\
				 <option value="" style=" font-family: Arial, Helvetica, sans-serif;">Choose Car type </option>
                 <option value="truck" style="font-family: 'FontAwesome', 'Arial'">&#xf0d1; &nbsp Truck </option>
				 <option value="bus" style="font-family: 'FontAwesome', 'Arial'" >&#xf207; &nbsp&nbsp Bus </option>
				 <option value="car" style="font-family: 'FontAwesome', 'Arial'"> &#xf1b9; &nbsp&nbsp Car </option>
				 <option value="bike" style="font-family: 'FontAwesome', 'Arial'">&#xf21c; &nbsp Bike </option>
              
                </select>
            </div>
  <div class="clearfix"></div>
                <div class="form-group col-md-6">
                  <label style="font-size:15px" for="name">Number Plate<span style="color: #FF0000;">*</span></label>
                  <input type="text" class="form-control" id="plate_no" maxlength="8" placeholder="Enter Plate No" name="plate_no" >
				   <span style="color:red;font-size:14px;display:none;margin-left:0px;font-weight:600" id ="plateno_error">* This car is already registerd.</span>
               </div>
			    <div class="clearfix"></div>
			    <div class="form-group col-md-6">
                <label style="font-size:15px">Registeration Certificate<span style="color: #FF0000;">*</span></label>
               <input type="file" name="reg_cert[]" id="reg_cert" multiple="multiple">
			   <label class="reg_cert" style="color:gray;font-size:14px">* Upload maximum 3 files</label>
            </div>
			 <div class="clearfix"></div>
			 <div class="form-group col-md-6">
                <label style="font-size:15px">Post Contract<span style="color: #FF0000;">*</span></label>
                <select class="form-control select2 " name="post_contract" id="post_contract"   data-placeholder="Choose Vehicle type"  style="width: 100%;">\
				 <option value="">Choose type </option>
                 <option value="email"> Email </option>
				 <option value="printed" >Printed </option>
			
              
                </select>
            </div>
			    
<div class="clearfix"></div>
<p style="color:red;font-size:14px;display:none;margin-left:25px;font-weight:600" id ="plate_error">* Invalid Plate No</p>
	
<p style="color:red;font-size:14px;display:none;margin-left:25px;font-weight:600" id ="empty_error">* Fill in the required fields</p>

              <div class="box-footer col-md-6 " style="padding-top:10px">
                <button style="background-color:#885ead;" type="button" id="submitbutton" class="btn btn-primary col-md-12">CHECK THE OFFER</button>
              </div>
</div>

            </form>
</div>
<?php $this->load->view('front_app/common/footer');?>
<script>
$('#submitbutton').on('click',function(){
  //alert('button pressed');
  $('#submitbutton').attr('disabled',true);
  var validate = 0;
  var car_type = $('#car_type').val();
  var plate_no = $('#plate_no').val();
  var post_contract=$('#post_contract').val();
  
 if( document.getElementById("reg_cert").files.length == 0 ){
	  validate=1;
	  //alert('2');
	
	   $('#reg_cert').addClass('red-border');
	}	else if(document.getElementById("reg_cert").files.length > 3){
		//alert('3');
	  validate=1;
	   $('#reg_cert').addClass('red-border');
	   $('.reg_cert').css('color','red');
	}	
  if(car_type == ''){
    validate = 1;
    $('#car_type').addClass('red-border');
	$('#empty_error').show();
  }
    if(plate_no == ''){
    validate = 1;
    $('#plate_no').addClass('red-border');
	$('#empty_error').show();
  }
  if(!/[A-Za-z0-9]+$/.test(plate_no) && plate_no !=''){
	    validate = 1;
    $('#plate_no').addClass('red-border');
	$('#plate_error').show();
  }
  if(post_contract == ''){
	   // alert('8');
    validate = 1;
    $('#postal_contract').addClass('red-border');
	$('#empty_error').show();
  }
 
  if(validate == 0){
	  $('#insurance_form')[0].submit();
  }else{
    $('#submitbutton').removeAttr('disabled');
  }
  
});
$('#plate_no').on('blur',function(){
	//alert('df');
	var Plate_no = $('#plate_no').val();
	//alert(username);
	$.ajax({
	url:'<?= base_url(); ?>Home/plate_exists',
	method:'POST',
	data: {'Plate_no':Plate_no},
		success:function(data)
		{
	   //alert(data);
	   if(data == 1){
	   $('#plateno_error').show();
	   $('#submitbutton').attr('disabled',true);
	   }else{
		      $('#plateno_error').hide();
			 $('#submitbutton').removeAttr('disabled');
	   }
	  },
	  error:function(data)
	  {
	  alert('failure');
	  }
	  });
	
});
</script>
