<?php $this->load->view('admin/common/header'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Insurance</title>


</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


<body>
    <style>
        select {
            font-family: 'FontAwesome', 'Second Font name';
            font-family: Arial, Helvetica, sans-serif;
        }

        .red-border {
            border: 1px solid red !important;
        }

        label {
            font-size: 15px;

        }

        input[type="file"] {
            padding: 3px;
            display: block;
            border: 1px solid #ccc;
            /* width: 457px; */
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
    </style>
    <div style="padding:30px 100px 100px 100px;height:auto" class="container">
        <label style="color:#885ead;font-size:20px">BACK OFFICE MANAGEMENT</label>
        <hr>
        <form role="form" method="post" id="insurance_form" action="<?= base_url() ?>admin/update_request_process/<?= $request_data['request_no'] ?>" enctype="multipart/form-data" style="margin-top:30px" action="">


            <div class="box-body">
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Request Number:</label>
                        <input type="number" class="form-control" value="<?= $request_data['request_no'] ?>" id="request_no" name="request_no" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">License Plate:</label>
                        <input type="text" class="form-control" value="<?= $request_data['Plate_no'] ?>" id="Plate_no" name="Plate_no" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Occupation:</label>
                        <input type="text" class="form-control" value="<?= $request_data['occupation'] ?>" id="occupation" name="occupation" >
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Type of customer:</label>
                        <!--<input type="text" class="form-control" id="type_of_customer" value="<?= $request_data['type_of_customer'] ?>" name="type_of_customer" >-->
						  <select class="form-control select2 " name="type_of_customer"  id="type_of_customer" data-placeholder="Choose Vehicle type" style="width: 100%;">\
							<option value="">Choose Customer Type </option>
							<option value="private customer" <?= (strtoupper($request_data['type_of_customer']) == 'PRIVATE CUSTOMER') ? 'selected' : '' ?>> Private Customer </option>
							<option value="business customer" <?= (strtoupper($request_data['type_of_customer']) == 'BUSINESS CUSTOMER') ? 'selected' : '' ?>> Business Customer </option>

          </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Name:</label>
                        <input type="text" class="form-control" value="<?= $request_data['name'].' '.$request_data['surname'] ?>" id="name" name="name" >
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Date of Birth:</label>
                        <input type="text" class="form-control" value="<?= $request_data['d_o_b'] ?>" id="d_o_b" name="d_o_b" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Address:</label>
                        <input type="text" class="form-control" value="<?= $request_data['address'] ?>" id="autocomplete" name="address" >
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Martial Status:</label>
                         <select class="form-control select2 " name="martial_status" id="martial_status" data-placeholder="Choose Martial Status" style="width: 100%;">\
						  <option value="">Choose Martial status </option>
						  <option value="married" <?= (strtoupper($request_data['martial_status']) == 'MARRIED') ? 'selected' : '' ?>> Married </option>
						  <option value="unmarried" <?= (strtoupper($request_data['martial_status']) == 'UNMARRIED') ? 'selected' : '' ?>> Unmarried </option>
						  <option value="divorced" <?= (strtoupper($request_data['martial_status']) == 'DIVORCED') ? 'selected' : '' ?>> Divorced </option>
						  <option value="single" <?= (strtoupper($request_data['martial_status']) == 'SINGLE') ? 'selected' : '' ?>> Single </option>
						  <option value="undeclared" <?= (strtoupper($request_data['martial_status']) == 'UNDECLARED') ? 'selected' : '' ?>> undeclared </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Driving Lisence Year:</label>
                        <!--<input type="text" class="form-control" id="liscence_year" value="<?= $request_data['liscence_year'] ?>" name="liscence_year" >-->
						 <select class="form-control select2 " name="liscence_year" id="liscence_year" data-placeholder="Choose Vehicle type" style="width: 100%;">
                         <option value="<?= $request_data['liscence_year'] ?>"><?= $request_data['liscence_year'] ?></option>
			
                         </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Email:</label>
                        <input type="email" class="form-control" id="email" value="<?= $request_data['email'] ?>" name="email" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Mobile Number:</label>
                        <input type="text" class="form-control" id="phone" value="<?= $request_data['phone'] ?>" name="phone" >
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Registration Certificate:</label>
                        <input type="file" class="form-control" id="reg_cert" name="reg_cert[]" >
                        <a style="color:red" href="<?= base_url() ?>uploads/user_files/<?= $request_data["reg_cert"]?>" target="_blank">
						<?= $request_data['reg_cert'] ?></a>
                        <input type="hidden" value="<?= $request_data['reg_cert'] ?>" name="reg">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Fiscale Code:</label>
                        <input type="file" class="form-control" value="" id="fiscal_code" name="fiscal_code[]" >
                        <a style="color:red" href="<?= base_url() ?>uploads/user_files/<?= $request_data["fiscal_code"]?>" target="_blank" ><?= $request_data['fiscal_code'] ?></a>
                        <input type="hidden" value="<?= $request_data['fiscal_code'] ?> " name="fiscal" />
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">ID:</label>
                        <input type="file" class="form-control" value="" id="identification" name="identification[]" >
                        <a style="color:red" href="<?= base_url() ?>uploads/user_files/<?= $request_data["identification"]?>" target="_blank">
						<?= $request_data['identification'] ?></a>
                        <input type="hidden" value="<?= $request_data['identification'] ?> " name="idi" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">

                        <label style="font-size:14px">Post Contract:</label>
                        <!--<input type="text" class="form-control" value="<?= ucwords($request_data['post_contract']) ?>" id="post_contract" name="post_contract" >-->
						  <select class="form-control" name="post_contract" id="post_contract" data-placeholder="Choose Contract type">
						  <option value="">Choose type </option>
						  <option value="email" <?= (strtoupper($request_data['post_contract']) == 'EMAIL') ? 'selected' : '' ?>> Email (recommended) </option>
						  <option value="printed" <?= (strtoupper($request_data['post_contract']) == 'PRINTED') ? 'selected' : '' ?>>Printed </option>
                          </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Car Brand:</label>
                        <?php if ($request_data['car_brand'] != '') { ?>
                            <input type="text" class="form-control" value=<?= $request_data['car_brand'];  ?> id="car_brand" name="car_brand">

                        <?php } else { ?>
                            <input type="text" class="form-control" id="car_brand" name="car_brand">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Car Model:</label>
                        <?php if ($request_data['car_model'] != '') { ?>
                            <input type="text" class="form-control" value=<?= $request_data['car_model'];  ?> id="car_model" name="car_model">

                        <?php } else { ?>
                            <input type="text" class="form-control" id="car_model" name="car_model">
                        <?php } ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Select Status:</label>
                        <select class="form-control select2 " name="status" id="status" data-placeholder="Select Status" style="width: 100%;">\
                            <option value="">Choose status </option>
                            <option value="To be managed" <?= (strtoupper($request_data['status']) == 'TO BE MANAGED') ? 'selected' : '' ?>> To be managed </option>
                            <option value="Qoute Managed" <?= (strtoupper($request_data['status']) == 'QOUTE MANAGED') ? 'selected' : '' ?>> Qoute Managed </option>
                            <option value="Waiting Payment" <?= (strtoupper($request_data['status']) == 'WAITING PAYMENT') ? 'selected' : '' ?>> Waiting Payment </option>
                            <option value="Issued" <?= (strtoupper($request_data['status']) == 'ISSUED') ? 'selected' : '' ?>> Issued </option>
                            <option value="Inactive" <?= (strtoupper($request_data['status']) == 'INACTIVE') ? 'selected' : '' ?>> Inactive </option>
                            <option value="Contract Closed" <?= (strtoupper($request_data['status']) == 'CONTRACT CLOSED') ? 'selected' : '' ?>> Contract closed </option>
                            <option value="Contract Replacement" <?= (strtoupper($request_data['status']) == 'CONTRACT REPLACEMENT') ? 'selected' : '' ?>> Contract replacement</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Responsibilita Civile:</label> <!-- Total -->
                        <input type="number" class="form-control" value="<?= $request_data['price'] ?>" id="price" name="price">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Comission:</label>
                        <input type="number" class="form-control" id="comission" value="<?= $request_data['commission'] ?>" name="comission">
                    </div>
                </div>
				        <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Assistenza Stradale:</label>
                        <input type="number" class="form-control" value="<?= $request_data['road_assistance'] ?>" id="road_assistance" name="road_assistance">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Altre granize:</label>
                        <input type="number" class="form-control" id="other_gurantee" value="<?= $request_data['other_gurantee'] ?>" name="other_gurantee">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Total:</label>
                        <input type="number" class="form-control" id="total" value="<?= $request_data['total'] ?>" name="total">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Insurance Company Choosed:</label>
                        <select class="form-control select2 " name="Insurance_company_choosed" id="Insurance_company_choosed" data-placeholder="Select Insurrance Company" style="width: 100%;">\
                            <option value="">Choose Insurance Company </option>
                            <option value="METLIFE INS" <?= (strtoupper($request_data['Insurance_company_choosed']) == 'METLIFE INS') ? 'selected' : '' ?>> METLIFE INS </option>
                            <option value="GENERTEL" <?= (strtoupper($request_data['Insurance_company_choosed']) == 'GENERTEL') ? 'selected' : '' ?>> GENERTEL </option>
                            <option value="GREAT LAKES" <?= (strtoupper($request_data['Insurance_company_choosed']) == 'GREAT LAKES') ? 'selected' : '' ?>> GREAT LAKES </option>
                            <option value="LA PARISIENNE" <?= (strtoupper($request_data['Insurance_company_choosed']) == 'LA PARISIENNE') ? 'selected' : '' ?>> LA PARISIENNE </option>
                            <option value="ADMIRAL" <?= (strtoupper($request_data['Insurance_company_choosed']) == 'ADMIRAL') ? 'selected' : '' ?>> ADMIRAL </option>

                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Upload PDF of Company Offer:</label>
                        <input type="file" class="form-control" id="Upload_company_offer_PDF" name="Upload_company_offer_PDF">
                        <?php if ($request_data['Upload_company_offer_PDF'] != '') { ?>
						  
                            <a style="color:red" href="<?= base_url() ?>uploads/admin_files/<?= $request_data["Upload_company_offer_PDF"]?>" target="_blank"><?= $request_data['Upload_company_offer_PDF'] ?></a>
                            <input type="hidden" class="form-control" id="Upload_company_offer_PDF" value="<?= $request_data['Upload_company_offer_PDF'] ?>" name="company_offer">
                        <?php } ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Landing Page Link</label>
                        <?php if ($request_data['landing_page_link'] != '') { ?>
                            <input type="text" class="form-control" id="landing_page_link" value="<?= $request_data['landing_page_link'] ?>" name="landing_page_link">
                        <?php } else { ?>
                            <input type="text" class="form-control" id="landing_page_link" name="landing_page_link">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Operator:</label>

                        <input type="text" class="form-control" id="operator" value="<?= $admin_data['fname'].' '.$admin_data['lname'] ?>" name="operator" readonly>

                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Upload the contract signed:</label>
                        <input type="file" class="form-control" id="Upload_signed_contract_PDF" value ="<?= $request_data['Upload_signed_contract_PDF'] ?>" name="Upload_signed_contract_PDF">
                        <?php if ($request_data['Upload_signed_contract_PDF'] != '') { ?>
                            <a style="color:red" href="<?= base_url() ?>uploads/admin_files/<?= $request_data["Upload_signed_contract_PDF"]?>" target="_blank"><?= $request_data['Upload_signed_contract_PDF'] ?></a>
                            <input type="hidden" class="form-control" id="Upload_signed_contract_PDF" value="<?= $request_data['Upload_signed_contract_PDF'] ?>" name="signed_contract">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Contact Number:</label>
                        <input type="text" class="form-control" id="Contract_Number" value="<?= $request_data['Contract_Number']?>" name="Contract_Number">
                        
                    </div>
                  <div class="form-group col-md-6">
                        <label style="font-size:14px">Upload the contract issued:</label>
                        <input type="file" class="form-control" id="contract_issued" name="contract_issued">
                        <?php if ($request_data['contract_issued'] != '') { ?>
                            <a style="color:red"  href="<?= base_url() ?>uploads/admin_files/<?= $request_data["contract_issued"]?>" target="_blank" ><?= $request_data['contract_issued'] ?></a>
                            <input type="hidden" class="form-control" id="contract_issued" value="<?= $request_data['contract_issued'] ?>" name="issued">
                        <?php } ?>
                    </div>
                   
                </div>
				       <div class="col-md-12">
					    <div class="form-group col-md-6">
                        <label style="font-size:14px">Starting Date:</label>
                        <?php
                        if (is_null($request_data['starting_date'])) {
                            $newStartDate = date("Y-m-d");
                        } else {
                            $newStartDate = date("Y-m-d", strtotime($request_data['starting_date']));
                        }
                        ?>
                        <input type="date" class="form-control" value="<?php echo $newStartDate; ?>"id="starting_date" name="starting_date">
                    </div>
					
					 <div class="form-group col-md-6">
                        <label style="font-size:14px">Expiration Date:</label>
                        <?php
                        if (is_null($request_data['expiry_date'])) {
                            $newExpDate = date("Y-m-d");
                        } else {
                            $newExpDate = date("Y-m-d", strtotime($request_data['expiry_date']));
                        }
                        ?>
                        <input type="date" class="form-control" value="<?php echo $newExpDate; ?>" id="expiry_date" name="expiry_date">
                    </div>
					  
					   </div>
                <div class="col-md-12">
                   

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Payment Split:</label>
                        <select class="form-control" id="payment_of_split" name="payment_of_split">
                            <option value="">Choose Payment of split </option>
                            <option value="annual" <?php echo ($request_data['payment_of_split'] == 'annual') ? 'selected' : '' ?>>Annual </option>
                            <option value="monthly" <?php echo ($request_data['payment_of_split'] == 'monthly') ? 'selected' : '' ?>>Monthly </option>
                            <option value="weekly" <?php echo ($request_data['payment_of_split'] == 'weekly') ? 'selected' : '' ?>>Weekly </option>

                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Interim Payment:</label>
                        <select class="form-control" id="interim_payment" name="interim_payment" data-placeholder="Select">
                            <option value="">Select Interim Payment </option>
                            <option value="Yes" <?= (strtoupper($request_data['interim_payment']) == 'YES') ? 'selected' : '' ?>>Yes </option>
                            <option value="No" <?= (strtoupper($request_data['interim_payment']) == 'NO') ? 'selected' : '' ?>>No </option>


                        </select>
                    </div>
                </div>
                
                <div class="col-md-12">
                    
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Type of Contract:</label>
                        <select class="form-control select2 " name="type_of_contract" id="type_of_contract" data-placeholder="Select type" style="width: 100%;">\
                            <option value="">Choose status </option>
                            <option value="car insurance" <?= (strtoupper($request_data['type_of_contract']) == 'CAR INSURANCE') ? 'selected' : '' ?>> Car Insurance </option>
                            <option value="bike insurance" <?= (strtoupper($request_data['type_of_contract']) == 'BIKE INSURANCE') ? 'selected' : '' ?>> Bike Insurance </option>
                            <option value="bus insurance" <?= (strtoupper($request_data['type_of_contract']) == 'BUS INSURANCE') ? 'selected' : '' ?>> Bus Insurance </option>
                            <option value="truck insurance" <?= (strtoupper($request_data['type_of_contract']) == 'TRUCK INSURANCE') ? 'selected' : '' ?>> Truck Insurance </option>

                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <label style="font-size:14px">Comments:</label>
                        <?php if ($request_data['Comments'] != '') { ?>
                            <textarea id="Comments" class="form-control" placeholder="Add Comments here..." name="Comments"> <?= $request_data['Comments'] ?></textarea>
                        <?php } else { ?>
                            <textarea id="Comments" placeholder="Add Comments here..." class="form-control" name="Comments" rows="3"> </textarea>
                        <?php } ?>
                    </div>
                </div>
				<input type="hidden" name="user_id" value="<?= $request_data['user_id'] ?>" >
                <div class="clearfix"></div>
                <label style="color:red;font-size:14px;display:none;margin-left:32px;font-weight:600;float:left" id="empty_error">* Fill in the required fields</label>
                <div class="clearfix"></div>
                <div class="box-footer col-md-6 " style="margin-left:250px;margin-top:0px">
                    <button style="background-color:#885ead;margin-top:0px" type="button" id="submitbutton" class="btn btn-primary col-md-12">Manage Request</button>
                </div>



        </form>
    </div>

</body>

</html>
<?php $this->load->view('admin/common/footer'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkrmNt7yLpSO4JA9k7JdzVmX3KQrvvyzg&libraries=places&callback=initAutocomplete" async defer></script>
<script>
    $('#submitbutton').on('click', function() {
        //alert('button pressed');
        $('#submitbutton').attr('disabled', true);
        var validate = 0;
        var occupation = $('#occupation').val();
        var Insurance_company_choosed = $('#Insurance_company_choosed').val();
        var type_of_customer = $('#type_of_customer').val();
        var name = $('#name').val();
        var surname = $('#surname').val();
        var d_o_b = $('#d_o_b').val();
        var martial_status = $('#martial_status').val();
        //var business_name = $('#business_name').val();
        var address = $('#autocomplete').val();
        var car_model = $('#car_model').val();
        var car_brand = $('#car_brand').val();
        var road_assistance = $('#road_assistance').val();
        var other_gurantee = $('#other_gurantee').val();
        var payment_of_split = $('#payment_of_split').val();
        var interim_payment = $('#interim_payment').val();
        var starting_date = $('#starting_date').val();
        var expiry_date = $('#expiry_date').val();
        var operator = $('#operator').val();
        var landing_page_link = $('#landing_page_link').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var status = $('#status').val();
        var price = $('#price').val();
        var total = $('#total').val();
        var comission = $('#comission').val();
        var contract_number = $('#Contract_Number').val();

        if (occupation == '') {
            validate = 1;
            $('#occupation').addClass('red-border');
            $('#empty_error').show();
        } else {

            $('#empty_error').hide();
        }
        if (contract_number == '') {
            validate = 1;
            $('#Contract_Number').addClass('red-border');
            $('#empty_error').show();
        } else {

            $('#empty_error').hide();
        }
		if (road_assistance == '') {
            validate = 1;
            $('#road_assistance').addClass('red-border');
            $('#empty_error').show();
        } else {

            $('#empty_error').hide();
        }
		
		  if (other_gurantee == '') {
            validate = 1;
            $('#other_gurantee').addClass('red-border');
            $('#empty_error').show();
        } else {

            $('#empty_error').hide();
        }
		
        if (comission == '') {
            validate = 1;
            $('#comission').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (total == '') {
            validate = 1;
            $('#total').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (price == '') {
            validate = 1;
            $('#price').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (type_of_customer == '') {
            validate = 1;
            $('#type_of_customer').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        var value = $('#type_of_customer').val();

        if (name == '') {
            validate = 1;
            $('#name').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (d_o_b == '') {
            validate = 1;
            $('#d_o_b').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (martial_status == '') {
            validate = 1;
            $('#martial_status').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (Insurance_company_choosed == '') {
            validate = 1;
            $('#Insurance_company_choosed').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (address == '') {
            validate = 1;
            $('#autocomplete').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (car_model == '') {
            validate = 1;
            $('#car_model').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (car_brand == '') {
            validate = 1;
            $('#car_brand').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (phone == '') {
            validate = 1;
            $('#phone').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
        if (email == '') {
            validate = 1;
            $('#email').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email) && email != '') {
            $('#email').addClass('red-border');
            $('#email_error').show();
        }
        if (liscence_year == '') {
            validate = 1;
            $('#liscence_year').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (starting_date == '') {
            validate = 1;
            $('#starting_date').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (expiry_date == '') {
            validate = 1;
            $('#expiry_date').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (landing_page_link == '') {
            validate = 1;
            $('#landing_page_link').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }


        if (status == '') {
            validate = 1;
            $('#status').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }


        if (payment_of_split == '') {
            validate = 1;
            $('#payment_of_split').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }

        if (interim_payment == '') {
            validate = 1;
            $('#interim_payment').addClass('red-border');
            $('#empty_error').show();
        } else {
            $('#empty_error').hide();
        }
		/*
        if( document.getElementById("reg_cert").files.length == 0 ){
        	  validate=1;
        	  //alert('2');
        	
        	   $('#reg_cert').addClass('red-border');
        	}
        	/* fiscal code 
        	if( document.getElementById("fiscal_code").files.length == 0 ){
        		//alert('4');
        	
        	  validate=1;
        	   $('#fiscal_code').addClass('red-border');
        	}	
			
        	if( document.getElementById("Identification").files.length == 0 ){
        	  validate=1;
        	  //alert('6');
        	   $('#Identification').addClass('red-border');
        	}
	*/
			
        <?php if (!isset($request_data['Upload_company_offer_PDF'])) { ?>
            if (document.getElementById("Upload_company_offer_PDF").files.length == 0) {
                //alert('4');

                validate = 1;
                $('#Upload_company_offer_PDF').addClass('red-border');
            }
        <?php } ?>
        <?php if (!isset($request_data['Upload_signed_contract_PDF'])) { ?>
            if (document.getElementById("Upload_signed_contract_PDF").files.length == 0) {
                //alert('ff');
                validate = 1;
                //alert('6');
                $('#Upload_signed_contract_PDF').addClass('red-border');
            }
        <?php } ?>
        
		 <?php if (!isset($request_data['contract_issued'])) { ?>
            if (document.getElementById("contract_issued").files.length == 0) {
                validate = 1;
                //alert('6');
                $('#contract_issued').addClass('red-border');
            }
        <?php } ?>
        //alert(validate);
        if (validate == 0) {
            $('#insurance_form')[0].submit();
        } else {
            $('#submitbutton').removeAttr('disabled');
        }

    });

    $('#comission').on('blur', function() {
        //alert('df');
        var commision = $('#comission').val();
        //alert(commision);
        var price = $('#price').val();
		var other_gurantee=$('#other_gurantee').val();
		var road_assistance=$('#road_assistance').val();

        document.getElementById('total').value = parseInt(commision) + parseInt(price) + parseInt(other_gurantee) + parseInt(road_assistance) ;
    });

    $('#price').on('blur', function() {
        //alert('df');
        var commision = $('#comission').val();
        //alert(commision);
        var price = $('#price').val();
		var other_gurantee=$('#other_gurantee').val();
		var road_assistance=$('#road_assistance').val();

         document.getElementById('total').value = parseInt(commision) + parseInt(price) + parseInt(other_gurantee) + parseInt(road_assistance) ;

        //alert(d_o_b);

    });
	
    $('#other_gurantee').on('blur', function() {
        //alert('df');
        var commision = $('#comission').val();
        //alert(commision);
        var price = $('#price').val();
		var other_gurantee=$('#other_gurantee').val();
		var road_assistance=$('#road_assistance').val();

         document.getElementById('total').value = parseInt(commision) + parseInt(price) + parseInt(other_gurantee) + parseInt(road_assistance) ;

        //alert(d_o_b);

    });
	
    $('#road_assistance').on('blur', function() {
        //alert('df');
        var commision = $('#comission').val();
        //alert(commision);
        var price = $('#price').val();
		var other_gurantee=$('#other_gurantee').val();
		var road_assistance=$('#road_assistance').val();

         document.getElementById('total').value = parseInt(commision) + parseInt(price) + parseInt(other_gurantee) + parseInt(road_assistance) ;

        //alert(d_o_b);

    });
	  function enforce_maxlength(event) {
    var t = event.target;
    if (t.hasAttribute('maxlength')) {
      t.value = t.value.slice(0, t.getAttribute('maxlength'));
    }
  }
  function enforce_minlength(event) {
    var t = event.target;
    if (t.hasAttribute('minlength')) {
      t.value = t.value.slice(0, t.getAttribute('minlength'));
    }
  }

  let phone = document.getElementById('phone');
  phone.addEventListener('input', enforce_maxlength);
  phone.addEventListener('input', enforce_minlength);
</script>
<script>
    $(document).ready(function($) {
        // alert('in script');
        $("#phone").mask("(999) 9999999");
    });
	
	function initAutocomplete() {
    // Create the autocomplete object, restricting the search predictions to
    // geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {
        types: ['geocode']
      });

    // Avoid paying for data that you don't need by restricting the set of
    // place fields that are returned to just the address components.
    autocomplete.setFields(['address_component']);

    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
    //alert('init');
  }
    function geolocate() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var geolocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        var circle = new google.maps.Circle({
          center: geolocation,
          radius: position.coords.accuracy
        });
        autocomplete.setBounds(circle.getBounds());
      });
    }
  }
  
  
  /********* Ajax calls ******/
  
  /********* Ajax calls ******/
  
  /********* Ajax calls ******/
  
  $('#email').on('blur', function() {
    //alert('df');
    var email = $('#email').val();
    //alert(email);
    $.ajax({
      url: '<?= base_url(); ?>Home/email_exists',
      method: 'POST',
      data: {
        'email': email
      },
      success: function(data) {
        //alert(data);
        if (data == 1) {
          $('#emailexist_error').show();
          $('#submitbutton').attr('disabled', true);
        } else {
          $('#emailexist_error').hide();
          $('#submitbutton').removeAttr('disabled');
        }
      },
      error: function(data) {
        alert('failure');
      }
    });

  });
  $('#phone').on('blur', function() {
    //alert('df');
    var phone = $('#phone').val();
    //alert(username);
    $.ajax({
      url: '<?= base_url(); ?>Home/phone_exists',
      method: 'POST',
      data: {
        'phone': phone
      },
      success: function(data) {
        //alert(data);
        if (data == 1) {
          $('#phone_error').show();
          $('#submitbutton').attr('disabled', true);
        } else {
          $('#phone_error').hide();
          $('#submitbutton').removeAttr('disabled');
        }
      },
      error: function(data) {
        alert('failure');
      }
    });

  });
  
   $('#d_o_b').on('blur', function() {
    //alert('df');
    var d_o_b = $('#d_o_b').val();
    //alert(d_o_b);

    $.ajax({
      url: '<?= base_url(); ?>Home/get_year',
      method: 'POST',
      data: {
        'd_o_b': d_o_b
      },
      success: function(data) {
        var result = jQuery.parseJSON(data);
        //alert(result);
        $('#liscence_year').html(result.year);
      },
      error: function(data) {
        //alert(data);
        alert('failure');
      }
    });
    e.preventDefault();
    window.onunload = function() {
      dubugger;
    }
  });

   
  /********* Ajax calls ******/
  
  /********* Ajax calls ******/
  
  /********* Ajax calls ******/
  
</script>