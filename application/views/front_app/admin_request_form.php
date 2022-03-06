<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Insurance</title>
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets2/css/core.css">
    <link rel="stylesheet" href="assets2/css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="stylesheet" href="assets2/css/responsive.css">
    <link rel="stylesheet" href="assets2/css/custom.css">
    <link rel="stylesheet" href="assets2/css/bootstrap-datepicker.css">

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="assets2/js/bootstrap-datepicker.js"></script>

<body>
    <style>
        select {
            font-family: 'FontAwesome', 'Second Font name'
        }

        .red-border {
            border: 1px solid red !important;
        }

        label {
            font-size: 15px;
        }
    </style>
    <div style="padding:80px 100px 50px 100px;height:auto" class="container">
        <label style="color:#885ead;font-size:20px">BACK OFFICE MANAGEMENT</label>
        <hr>
        <form role="form" method="post" id="insurance_form" enctype="multipart/form-data"
            style="margin-top:30px" action="">


            <div class="box-body">
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Request Number:</label>
                        <input type="number" class="form-control" id="reqNumber" name="reqNumber">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">License Plate:</label>
                        <input type="text" class="form-control" id="licensePlate" name="licensePlate">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Occupation:</label>
                        <input type="text" class="form-control" id="Occupation" name="Occupation">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Type of customer:</label>
                        <input type="text" class="form-control" id="customerType" name="CustomerType">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Date of Birth:</label>
                        <input type="text" class="form-control" id="dbo" name="dob">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Martial Status:</label>
                        <input type="text" class="form-control" id="martialStatus" name="martialStatus">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Driving Lisence Year:</label>
                        <input type="text" class="form-control" id="driverLicenseYear" name="driverLicenseYear">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Mobile Number:</label>
                        <input type="text" class="form-control" id="mobNumber" name="mobNumber">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Registration Certificate:</label>
                        <input type="text" class="form-control" id="regCertificate" name="regCertificate">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Fiscale Code:</label>
                        <input type="text" class="form-control" id="faceCode" name="faceCode">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">ID:</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Post Contract:</label>
                        <input type="text" class="form-control" id="postContract" name="postContract">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Car Brand:</label>
                        <input type="text" class="form-control" id="carBrand" name="carBrand">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Car Model:</label>
                        <input type="text" class="form-control" id="carModel" name="carModel">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">IP:</label>
                        <input type="text" class="form-control" id="ip" name="ip">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Price:</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Comission:</label>
                        <input type="text" class="form-control" id="comission" name="comission">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Total:</label>
                        <input type="number" class="form-control" id="totalPrice" name="totalPrice">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Insurance Company Choosed:</label>
                        <input type="text" class="form-control" id="insCompChoosed" name="insComanyChoosed">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Upload PDF of Company Offer:</label>
                        <input type="text" class="form-control" id="companyPDF" name="companyPDF">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Landing Page Link</label>
                        <input type="text" class="form-control" id="landPageLink" name="LandPageLink">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Operator:</label>
                        <input type="text" class="form-control" id="operator" name="operator">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Upload the contract signed:</label>
                        <input type="text" class="form-control" id="signContractUpload" name="signContractUpload">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Contact Number:</label>
                        <input type="number" class="form-control" id="contractNumber" name="contractNumber">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Starting Date:</label>
                        <input type="date" class="form-control" id="startingDate" name="startingDate">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Expiration Date:</label>
                        <input type="date" class="form-control" id="expiryDate" name="expiryDate">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Payment Split:</label>
                        <input type="text" class="form-control" id="paymentSplit" name="paymentSplit">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Interim Payment:</label>
                        <input type="number" class="form-control" id="interimPayment" name="interimPayment">
                    </div>

                    <div class="form-group col-md-6">
                        <label style="font-size:14px">Type of Contract:</label>
                        <input type="text" class="form-control" id="ContractType" name="ContractType">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <label style="font-size:14px">Comments:</label>
                        <input type="number" class="form-control" id="comments" name="comments">
                    </div>
                </div>

                <div class="box-footer col-md-6 " style="margin-left:250px;margin-top:20px">
                    <button style="background-color:#885ead;" type="button" id="submitbutton"
                        class="btn btn-primary col-md-12">Click to continue</button>
                </div>

            </div>

        </form>
    </div>

</body>

</html>