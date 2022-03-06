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
    <!--<div style="text-align:center; padding:20px 0"><a href="#" ><img style="width:50%" src="<?=base_url().'assets2/images/prime_insurance.png'?>" height="150px"> </a></div>-->



    <div style="background-color:#fff">
        <p style="padding:25px 25px 5px; margin:0; text-align:left; line-height:30px; font-size:16px; font-family: 'Open Sans', sans-serif; font-weight:600; text-decoration:none ">Dear <?= ucwords($user_data['name']) ?>, </p>



        <pre style="padding:0 25px 5px; margin:0; text-align:left; line-height:20px; font-size:12px; font-family: 'Open Sans', sans-serif; text-decoration:none;    color: #333;">Thank you for reaching out to us. 
We will get back to you about your offer soon. 
</pre>
<table style="margin-left:155px;font-size:13px; text-align:left; line-height:20px; font-size:12px; font-family: 'Open Sans', sans-serif; text-decoration:none;    color: #333;">
<tr>
<td><b>Name:</b></td>
<td><?= $user_data['name']; ?></td>
</tr>
<tr>
<td><b>Number Plate:</b></td>
<td><?= $request_data['Plate_no']; ?></td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><?= $user_data['email']; ?></td>
</tr>
<tr>
<td><b>Phone:</b></td>
<td><?= $user_data['phone']; ?></td>
</tr>
<tr>
<td><b>Liscence Year:</b></td>
<td><?= $user_data['liscence_year']; ?></td>
</tr>
<tr>
<td><b>DOB:</b></td>
<td><?= $user_data['d_o_b']; ?></td>
</tr>
<tr>
<td><b>Liscence Year:</b></td>
<td><?= $user_data['liscence_year']; ?></td>
</tr>
<tr>
<td><b>Address :</b></td>
<td><?= $user_data['address']; ?></td>
</tr>
<tr>
<td><b>City :</b></td>
<td><?= $user_data['city']; ?></td>
</tr>
</table>
<div >
 <pre style="padding:25px 25px 5px; margin:0; text-align:left; line-height:20px; font-size:13px; font-family: 'Open Sans', sans-serif; font-weight:600; text-decoration:none ">
Thanks,
Team Assicura </pre>
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