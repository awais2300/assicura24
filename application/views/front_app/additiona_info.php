<?php $this->load->view('front_app/common/header'); ?>

<style>
  .red-border {
    border: 1px solid red !important;
  }
</style>

<!-- <div class="welcome-area" id="welcome"> -->
<section class="section colored" id="contact-us">
  <div class="row">
    <div class="col-lg-12">
      <div class="center-heading">
        <h2 class="section-title">Additional Information</h2>
      </div>
    </div>

  </div>
  <!-- ***** Header Text Start ***** -->
  <div class="header-text">
    <div class="container">
      <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="contact-form">
          <form role="form" method="post" id="insurance_form" enctype="multipart/form-data" style="margin-top:30px" action="<?= base_url(); ?>Home/additional_info_process">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <select class="form-control select2 " name="occupation" id="occupation" data-placeholder="Choose Vehicle type" style="width: 100%;">
                    <option value="">Choose Occupation </option>
                    <option value="business owner"> Business Owner </option>
                    <option value="employee"> Employee </option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <select class="form-control select2 " name="type_of_customer" onchange="show_div()" id="type_of_customer" data-placeholder="Choose Vehicle type" style="width: 100%;">\
                    <option value="">Choose Customer Type </option>
                    <option value="private customer"> Private Customer </option>
                    <option value="business customer"> Business Customer </option>
                  </select>
                </fieldset>
              </div>
            </div>
            <!-- For private customer -->
            <div id="private_customer" style="display:none">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                  </fieldset>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <select class="form-control select2 " name="martial_status" id="martial_status" data-placeholder="Choose Vehicle type" style="width: 100%;">
                      <option value="">Choose Martial status </option>
                      <option value="married"> Married </option>
                      <option value="unmarried"> Unmarried </option>
                      <option value="divorced"> Divorced </option>
                      <option value="single"> Single </option>
                      <option value="undeclared"> undeclared </option>

                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                    <input type="date" class="form-control y_o_b" id="d_o_b" placeholder="Enter Birth Date" name="d_o_b">
                  </fieldset>
                </div>
              </div>
            </div>
            <!-- For Business Customer -->
            <div id="business_customer" style="display:none">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input type="text" class="form-control" id="business_name" placeholder="Enter Business name" name="business_name">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input type="date" class="form-control y_o_b" id="d_o_bb" placeholder="Enter Birth Date" name="d_o_bb">
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="text" class="form-control" id="autocomplete" placeholder="Enter Address" name="address">
                </fieldset>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="text" class="form-control" id="locality" placeholder="Enter City" name="city">
                </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="text" class="form-control" id="postal_code" placeholder="Enter Zipcode" name="zipcode">
                </fieldset>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <select class="form-control select2 " name="liscence_year" id="liscence_year" data-placeholder="Choose Vehicle type" style="width: 100%;">
                    <option>Choose liscence year</option>
                  </select>
                </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                  <span style="color:red;display:none;float:left" id="emailexist_error">* This email already exists. Use another one.</span>
                  <span style="color:red;display:none;float:left" id="email_error">* Incorrect email format</span>
                  <br>
                  <span style="color:red;display:none;float:left" id="empty_error">* Fill in the required fields</span>
                </fieldset>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <fieldset>
                  <input type="number" rel="txtTooltip" title="Phone no must be 10 digits" data-toggle="tooltip" data-placement="top" class="form-control" id="phone" placeholder="Enter Phone" maxlength="10" name="phone">
                  <span style="color:red;display:none;float:left" id="phone_error">* This phone no already exists. Use another one.</span>
                  <span style="color:red;display:none;float:left" id="phone_lenght_error">* Phone no is not valid</span>
                </fieldset>

              </div>


            </div>

            <input type="hidden" name="last_id" value="<?= $last_id ?>">
            <div class="center-heading">
              <a type="button" id="submitbutton" class="main-button-slider" style="color:white">Click to continue</a>
            </div>
            <!-- <a type="button" id="submitbutton" class="main-button-slider" style="color:white">Click to continue</a> -->
            <!-- <button type="button" id="submitbutton" class="main-button-slider">Click to continue</button> -->

          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php $this->load->view('front_app/common/footer'); ?>
<script>
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

  function show_div() {
    //alert('ddd');
    var value = $('#type_of_customer').val();
    //alert(value);
    if (value == 'private customer') {

      $('#private_customer').slideDown();;
      $('#business_customer').slideUp();
    } else {

      $('#business_customer').slideDown();;
      $('#private_customer').slideUp();
    }
  }

  var validateGlobal = 0;
  $('#submitbutton').on('click', function() {
    //alert('button pressed');
    $('#submitbutton').attr('disabled', true);
    var validate = 0;
    var occupation = $('#occupation').val();
    var type_of_customer = $('#type_of_customer').val();
    var name = $('#name').val();
    var surname = $('#surname').val();
    var d_o_b = $('#d_o_b').val();
    var martial_status = $('#martial_status').val();
    var business_name = $('#business_name').val();
    var address = $('#autocomplete').val();
    var city = $('#locality').val();
    var zipcode = $('#postal_code').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var liscence_year = $('#liscence_year').val();

    if (occupation == '') {
      validate = 1;
      $('#occupation').addClass('red-border');
      $('#empty_error').show();
    }
    if (type_of_customer == '') {
      validate = 1;
      $('#type_of_customer').addClass('red-border');
      $('#empty_error').show();
    }
    var value = $('#type_of_customer').val();
    if (value == 'private customer') {
      if (name == '') {
        validate = 1;
        $('#name').addClass('red-border');
        $('#empty_error').show();
      }
      if (surname == '') {
        validate = 1;
        $('#surname').addClass('red-border');
        $('#empty_error').show();
      }

      if (d_o_b == '') {
        validate = 1;
        $('#d_o_b').addClass('red-border');
        $('#empty_error').show();
      }
      if (martial_status == '') {
        validate = 1;
        $('#martial_status').addClass('red-border');
        $('#empty_error').show();
      }
    } else {
      if (business_name == '') {
        validate = 1;
        $('#business_name').addClass('red-border');
        $('#empty_error').show();
      }
    }
    if (address == '') {
      validate = 1;
      $('#autocomplete').addClass('red-border');
      $('#empty_error').show();
    }
    if (city == '') {
      validate = 1;
      $('#locality').addClass('red-border');
      $('#empty_error').show();
    }
    if (zipcode == '') {
      validate = 1;
      $('#postal_code').addClass('red-border');
      $('#empty_error').show();
    }
    if (phone == '') {
      validate = 1;
      $('#phone').addClass('red-border');
      $('#empty_error').show();
    }

    if (email == '') {
      validate = 1;
      $('#email').addClass('red-border');
      $('#empty_error').show();
    }
    if (!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email) && email != '') {
      $('#email').addClass('red-border');
      $('#email_error').show();
    }
    if (liscence_year == '') {
      validate = 1;
      $('#liscence_year').addClass('red-border');
      $('#empty_error').show();
    }
    if (!$('#phone_error').is(":hidden")) {
      validate = 1;
      $('#phone').addClass('red-border');
    }
    if (!$('#emailexist_error').is(":hidden")) {
      validate = 1;
      $('#email').addClass('red-border');
    }
    if (validate == 0) {
      $('#insurance_form')[0].submit();
    } else {
      $('#submitbutton').removeAttr('disabled');
    }
    
    validateGlobal = validate;

  });
</script>

<script>
  /* $(function() {
  //var $j = jQuery.noConflict();
    $(".y_o_b").datepicker();
         
    }); */
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
    e.preventDefault();
    window.onunload = function() {
      dubugger;
    }
  });

  $('#d_o_bb').on('blur', function() {
    //alert('df');
    var d_o_b = $('#d_o_bb').val();
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

  if (validateGlobal == 0) {
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
  }

  if (validateGlobal == 0) {
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
  }

  if (validateGlobal == 0) {
    $('#phone').on('blur', function() {
      var phone = $('#phone').val();
      if (phone.length < 10) {
        validate = 1;
        $('#phone').addClass('red-border');
        $('#phone_lenght_error').show();
      }
      else {
        $('#phone').removeClass('red-border');
        $('#phone_lenght_error').hide();
      }


    });
  }


  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->