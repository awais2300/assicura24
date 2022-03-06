<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<div class="container my-3">
  <div style="height:100px">
    <h1>Assicura 24</h1>
    <hr style="border-top: 1px solid black">
  </div>
  <?php if (strtoupper($request_data['status']) == 'ISSUED') { ?>
    <h5 style="margin-left:160px;"> CONTRACT ISSUED </h5>
  <?php } else { ?>
    <h5 style="margin-left:160px;"> CONTRACT OFFER </h5>
  <?php } ?>
  <br>
  <h5>Dear <?= $user_data['name'] . ' ' . $user_data['surname']; ?></h5>
  <p><br>Following are the details of the contract:</p>
  <div>
    <br>
    <div style="float:left;">
      Liscence Plate:
    </div>
    <div style="float:right;">
      <?= $request_data['Plate_no']; ?>
    </div>
  </div>
  <div class="clearfix"></div>

  <div>
    <div style="float:left;">
      Car Model/Brand:
    </div>
    <div style="float:right;">
    <?= $request_data['car_brand'].' '.$request_data['car_model']; ?>
    </div>
  </div>
  <div class="clearfix"></div>

  <?php if (strtoupper($request_data['status']) == "ISSUED") { ?>
    <div>
      <div style="float:left;">
        Starting Date:
      </div>
      <div style="float:right;">
        <?= $request_data['starting_date']; ?>
      </div>
    </div>
    <div class="clearfix"></div>

    <div>
      <div style="float:left;">
        Expiry Date:
      </div>
      <div style="float:right;">
        <?= $request_data['expiry_date']; ?>
      </div>
    </div>
    <div class="clearfix"></div>

  <?php } else { ?>
    <div>
      <div style="float:left;">
        Offer Request Date:
      </div>
      <div style="float:right;">
        <?= $request_data['date_request']; ?>
      </div>
    </div>
    <div class="clearfix"></div>


  <?php } ?>


  <div>
    <div style="float:left;">
      Responsabilità civile:
    </div>
    <div style="float:right;">
      <?= '€' . $request_data['price'] ?>
    </div>
  </div>
  <div class="clearfix"></div>

  <div>
    <div style="float:left;">
      Assistenza Stradale:
    </div>
    <div style="float:right;">
      <?= '€' . $request_data['commission'];  ?>
    </div>
  </div>
  <div class="clearfix"></div>

  <div>
    <div style="float:left;">
      Altre granzie:
    </div>
    <div style="float:right;">
      <?= '€' . $request_data['total'];  ?>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="clearfix"></div>
  <div class="fixed-bottom" style="float:left;">
    This document is auto genarated, it do not require signature.
  </div>

  </html>