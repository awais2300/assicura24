<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
</head>
<body>
<div style="width:600px; background:#333; margin:0 auto;">
    <h1 style="color:white;text-align:center;padding:15px">Assicura24</h1>
   


    <div style="background-color:#fff">
        <p style="padding:25px 25px 5px; margin:0; text-align:left; line-height:30px; font-size:16px; font-family: 'Open Sans', sans-serif; font-weight:600; text-decoration:none ">Dear Admin, </p>



        <pre style="padding:0 25px 5px; margin:0; text-align:left; line-height:20px; font-size:12px; font-family: 'Open Sans', sans-serif; text-decoration:none;    color: #333;"> A new request to close offer has been recieved by
<?= $user_data['name'] ?> of his/her <?= $request_data['car_type']?> with plate no <?= $request_data['Plate_no'] ?>.
</pre>

        <div class="button" style="margin-bottom: 30px; margin-top: 20px; padding: 0px 25px 0px; text-align:center"> <a href="<?php echo base_url().'Admin/close_contract/'.$request_data['request_no']?>" style="padding:7px 30px;color: #fff;text-decoration: none; background-color:#e72d2e; border-radius:50px; font-family: 'Open Sans', sans-serif; font-size:12px"> Close Request </a> </div>

<div >
 <pre style="padding:25px 25px 5px; margin:0; text-align:left; line-height:20px; font-size:13px; font-family: 'Open Sans', sans-serif; font-weight:600; text-decoration:none ">
Thanks,
Team Assicura24 </pre>
</div>
<br>

       <div style="background:#333; padding:12px 0">
           

			<!--<div style="text-align:center">
                <a href="https://www.facebook.com/" style="text-decoration:none; margin-left:5px" ><img src="https://img.icons8.com/color/48/000000/facebook-circled.png" style="width:25px"/></a>
                <a href="https://twitter.com/explore" style="text-decoration:none; margin-left:5px" > <img src="https://img.icons8.com/color/48/000000/twitter.png" style="width:25px;"></a>
                <a href="https://pk.linkedin.com/" style="text-decoration:none; margin-left:5px" > <img src="https://img.icons8.com/color/48/000000/linkedin-circled.png" style="width:25px;"></a>

            </div>-->




           <!-- <div style="text-align:center; margin-top:13px; border-top:1px solid #fff; border-bottom:1px solid #fff; padding:4px 0px;    margin-left: 60px;margin-right: 60px;">

                <a href="#" style="color:#fff; text-decoration:none; font-size:10px; padding:0 6px;  font-family: 'Open Sans', sans-serif"> Help </a>
                <a href="#" style="color:#fff; text-decoration:none; font-size:10px; padding:0 6px;  font-family: 'Open Sans', sans-serif"> Glossary </a>
                <a href="#" style="color:#fff; text-decoration:none; font-size:10px; padding:0 6px;  font-family: 'Open Sans', sans-serif"> Language </a>
                <a href="#" style="color:#fff; text-decoration:none; font-size:10px; padding:0 6px;  font-family: 'Open Sans', sans-serif"> Adverising </a>
                <a href="#" style="color:#fff; text-decoration:none; font-size:10px; padding:0 6px;  font-family: 'Open Sans', sans-serif"> Contact Privacy </a>




            </div>-->

            <div class="footer-copyright" style="color:#FFF;margin-top: 10px;margin-bottom: -30px; text-align:center; height:50px;   font-family: 'Open Sans', sans-serif; font-size:10px;">
                <i class="fa fa-copyright" aria-hidden="true"></i>Copyrights © 2020 Artabz Technologies Pvt. Ltd. All Rights Reserved.
            </div>

        </div>
    </div>
</div>





</body>
</html>