<?php $this->load->view('front_app/common/UserHeader'); ?>

<style>
    card-body-text {
        float: left;
        padding: 2px;
        margin: auto;
        width: 100%
    }

    .card-fluid {
        width: 300px;
        padding: 0px;
        margin: auto;
    }

    .ml-60 {
        float: right;
        margin-right: 70px
    }
    .h35{
        height:35px;
    }
</style>

<div class="container my-4">
    <div class="card">
        <div class="card-header" style="height:50px">
            <p> <b style="font-size:20px"> Request No: </b>
                <label id='reqNo' for="reqNo">Request Number</label>
                <p>
        </div>
        <div class="card-body">

            <div class="box-body">

                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Occupation: <label  id='occupation' class="ml-60">Occupation</label></p>
                    </div>
                    <div class="form-group col-md-6">
                        <p>Type of customer: <label id='custType' class="ml-60">Type of customer</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Name: <label id='Name' class="ml-60"  >Name</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Date of Birth:<label id='d_o_b' class="ml-60"  >Date of Birth</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Address:<label id='address' class="ml-60"  >Address</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Martial Status:<label id='martialStatus' class="ml-60"  >Martial Status</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Driving License Year:<label id='drivingLicenseYear' class="ml-60">Driving License Year</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Email:<label id='email' class="ml-60">Email</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Mobile Number:<label id='mobNumber' class="ml-60"  >Mobile Number</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Registration Certificate: <a id="regCertificate" class="ml-60" href="#">Open Certificate</a></p>

                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Fiscal Code:<a id="fiscalCode" class="ml-60" href="#">Fiscal Code</a></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>ID:<label id='id' class="ml-60"  >ID</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Post Contract: <label id='postContract' class="ml-60"  >Post Contract</label>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Car Brand:<label id='carBrand' class="ml-60"  >Car Brand</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Car Model:<label id='carModel' class="ml-60"  >Car Model</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>IP:<label id='ip' class="ml-60"  >IP</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Price:<label id='price' class="ml-60"  >Price</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Comission:<label id='comission' class="ml-60"  >Comission</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Total:<label id='totalPrice' class="ml-60"  >Total</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Insurance Company:<label id='insuranceComp' class="ml-60"  >Insurance Company Choosed</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>PDF of Company Offer: <a id="compOfferPDF" class="ml-60" href="#">Upload PDF of Company Offer</a></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Landing Page Link: <a id="landingPageLink" class="ml-60" href="#">Link</a> </p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Operator:<label id='Operator' class="ml-60"  >Operator</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Signed Contract: <a id="signedContract" class="ml-60" href="#">Signed Contract Link</a> </p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Contract No:<label id='contactNumber' class="ml-60"  >Contact Number</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Strating Date:<label id='startingDate' class="ml-60"  >Starting Date</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Expiration Date:<label id='ExpiryDate' class="ml-60" class="ml-60"  >Expiration Date</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Payment Split:<label id='paymentSplit' class="ml-60"  >Payment Split</label></p>
                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-6">
                        <p>Interim Payment:<label id='interimPayment' class="ml-60"  >Interim Payment</label></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Type of Contract:<label id='contractType' class="ml-60"  >Type of Contract</label></p>

                    </div>
                </div>
                <div class="col-md-12 h35">
                    <div class="form-group col-md-12">
                        <p>Comments:<label id='comments' class="ml-60"  >Comments</label></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <?php $this->load->view('front_app/common/footer'); ?>