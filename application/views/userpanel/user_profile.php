<?php $this->load->view('userpanel/common/UserHeader'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
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
</style>

<div class="container my-4">
  <div class="card">
    <div class="card-header">
      <h4>User Profile</h4>
    </div>
    <div class="card-body" style="height:560px;margin-bottom:150px">
      <form action="<?= base_url(); ?>User_Login/profile_edit_process/<?= $user_data['user_id']; ?>" method="POST" id="insurance_form">
        <div class="card-body" style="width: 100%; margin: auto; padding: 20px; display: flex;">
          <div style="float:left; width:100%">
            <div class="form-group row">
              <a for="name" class="col-sm-4 col-form-label">Name:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" value="<?= $user_data['name']; ?>" id="name" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="surname" class="col-sm-4 col-form-label">Surname:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="surname" value="<?= $user_data['surname']; ?>" id="surname" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="d_o_b" class="col-sm-4 col-form-label">Date of Birth:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="d_o_b" value="<?= $user_data['d_o_b']; ?>" id="d_o_b" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="address" class="col-sm-4 col-form-label">Address:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="address" value="<?= $user_data['address']; ?>" id="autocomplete" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="city" class="col-sm-4 col-form-label">City:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="city" value="<?= $user_data['city']; ?>" id="city" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="zip" class="col-sm-4 col-form-label">Zip Code:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="zipcode" value="<?= $user_data['zipcode']; ?>" id="zipcode" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="email" class="col-sm-4 col-form-label">Email:</a>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="<?= $user_data['email']; ?>" id="email" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="mobile" class="col-sm-4 col-form-label">Mobile Number:</a>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="phone" maxlength="10" value="<?= $user_data['phone']; ?>" id="phone" readonly>
              </div>
            </div>
            <div class="form-group row">
              <a for="maritalStatus" class="col-sm-4 col-form-label">Marital Status:</a>
              <div class="col-sm-8">
                 <input type="text" class="form-control" value="<?php echo $user_data['martial_status'] ?>" name="martial_status" readonly>

              </div>
            </div>
            <span style="color:red;font-size:15px;display:none;margin-left:32px;font-weight:600;font-family:Arial, Helvetica, sans-serif" id="email_error">* Incorrect email format</span>
            <br>
            <span style="color:red;font-size:14px;display:none;margin-left:32px;font-weight:600;font-family:Arial, Helvetica, sans-serif" id="empty_error">* Fill in the required fields</span>
            <div class="form-group row">

             <!-- <div class="col-sm-12" style="margin-top:15px">
                <button type="button" style="background-color:#885ead;" id="submitbutton" class="form-control btn btn-primary" name="martial_status" id="martial_status">Edit Profile</button>
              </div>-->
            </div>
          </div>
          <div style="float:left; width:100%">
            <div class="card my-2 mx-2" style="width: 18rem; float:right">
              <div class="card-body">
                <h5 class="card-title">Total OFFERS requested</h5>
                <a class="card-text">Click here to see all requests.</a>
                <hr>
                <a href="<?= base_url(); ?>User_Login" style="background-color:#885ead;border-radius:15px" class="btn btn-primary" id="showReq">Show all Request</a>
              </div>
            </div>
            <div class="card my-2 mx-2" style="width: 18rem; float:right">
              <div class="card-body">
                <h5 class="card-title">Total CONTRACTS Issued</h5>
                <a class="card-text">Click here to see all the issued contracts you have.</a>
                <hr>
                <a href="<?= base_url(); ?>User_Login/contracts/view" style="background-color:#885ead;border-radius:15px" class="btn btn-primary" class="btn btn-primary" id="showContract">Show all Contracts</a>
              </div>
            </div>
            <div class="card my-2 mx-2" style="width: 18rem;float:right">
              <div class="card-body">
                <h5 class="card-title">Documents</h5>
                <a class="card-text">Click here to see all the documents uploaded.</a>
                <hr>
                <a href="#" class="btn btn-primary" style="background-color:#885ead;border-radius:15px" class="btn btn-primary" id="showDoc">Show all Documents</a>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<?php $this->load->view('userpanel/common/footer'); ?>
<script>
  let btnDoc = document.getElementById('showDoc');
  btnDoc.addEventListener("mouseover", function() {
    btnDoc.style.backgroundColor = `rgb(120, 79, 143)`;
  });
  btnDoc.addEventListener("mouseleave", function() {
    btnDoc.style.backgroundColor = `rgb(136, 94, 173)`;
  });
  let showReq = document.getElementById('showReq');
  showReq.addEventListener("mouseover", function() {
    showReq.style.backgroundColor = `rgb(120, 79, 143)`;
  });
  showReq.addEventListener("mouseleave", function() {
    showReq.style.backgroundColor = `rgb(136, 94, 173)`;
  });
  let showContract = document.getElementById('showContract');
  showContract.addEventListener("mouseover", function() {
    showContract.style.backgroundColor = `rgb(120, 79, 143)`;
  });
  showContract.addEventListener("mouseleave", function() {
    showContract.style.backgroundColor = `rgb(136, 94, 173)`;
  });
  let editProfile = document.getElementById('submitbutton');
  editProfile.addEventListener("mouseover", function() {
    editProfile.style.backgroundColor = `rgb(120, 79, 143)`;
  });
  editProfile.addEventListener("mouseleave", function() {
    editProfile.style.backgroundColor = `rgb(136, 94, 173)`;
  });


  $('#submitbutton').on('click', function() {
    //alert('button pressed');
    $('#submitbutton').attr('disabled', true);
    var validate = 0;
    //var occupation = $('#occupation').val();
    // var type_of_customer = $('#type_of_customer').val();
    var name = $('#name').val();
    var surname = $('#surname').val();
    var d_o_b = $('#d_o_b').val();
    var martial_status = $('#martial_status').val();
    // var business_name = $('#business_name').val();
    var address = $('#autocomplete').val();
    var city = $('#locality').val();
    var zipcode = $('#postal_code').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    //  var liscence_year = $('#liscence_year').val();

    /*if(occupation == ''){
    validate = 1;
    $('#occupation').addClass('red-border');
	$('#empty_error').show();
  }
    if(type_of_customer == ''){
    validate = 1;
    $('#type_of_customer').addClass('red-border');
	$('#empty_error').show();
  }*/
    /*var value = $('#type_of_customer').val();
    if (value == 'private customer'){*/
    if (name == '') {
      validate = 1;
      $('#name').addClass('red-border');
      $('#empty_error').show();
    } else {
      $('#empty_error').hide();
    }
    if (surname == '') {
      validate = 1;
      $('#surname').addClass('red-border');
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

    if (address == '') {
      validate = 1;
      $('#autocomplete').addClass('red-border');
      $('#empty_error').show();
    } else {
      $('#empty_error').hide();
    }
    if (city == '') {
      validate = 1;
      $('#locality').addClass('red-border');
      $('#empty_error').show();
    } else {
      $('#empty_error').hide();
    }
    if (zipcode == '') {
      validate = 1;
      $('#postal_code').addClass('red-border');
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
    } else {
      $('#email_error').hide();
    }
    /* if(liscence_year == ''){
    validate = 1;
    $('#liscence_year').addClass('red-border');
	$('#empty_error').show();
  }*/

    if (validate == 0) {
      $('#insurance_form')[0].submit();
    } else {
      $('#submitbutton').removeAttr('disabled');
    }

  });
</script>
<script>
  $(document).ready(function($) {
    // alert('in script');
    $("#phone").mask("(999) 9999999");
  });
</script>
<script>
  var placeSearch, autocomplete;

  var componentForm = {

    locality: 'long_name',
    //administrative_area_level_1: 'short_name',
    //country: 'long_name',
    postal_code: 'short_name'

  };


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

  function fillInAddress() {
    //alert('fillin');
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    for (var component in componentForm) {
      document.getElementById(component).value = '';
      document.getElementById(component).disabled = false;
    }

    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        document.getElementById(addressType).value = val;
      }
    }
  }

  // Bias the autocomplete object to the user's geographical location,
  // as supplied by the browser's 'navigator.geolocation' object.
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkrmNt7yLpSO4JA9k7JdzVmX3KQrvvyzg&libraries=places&callback=initAutocomplete" async defer></script>
</script>
<script>
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
    window.onunload = function() {
      dubugger;
    }
  });

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
</script>