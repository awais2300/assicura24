<?php $this->load->view('userpanel/common/UserHeader'); ?>

<style>
    card-items {
        margin: 2px auto;
        display: inline-block;
        width: 100%;

    }

    .card-list {
        float: left;
        width: 340px;
        padding: 2px;
        /* border: 1px solid rgba(0, 0, 0, .125); */
    }

    .card-detail {
        width: 100%;
        float: left;
    }

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
	
	
</style>

<div class="container my-3" >
   <!-- <h5>Welcome! <?= $user_data['name']; ?></h5><label id="Name" for="Name"></label>-->

    <div class="card">
        <div class="card-header">
            <h6><b>Offer Number: <?= $request_data['request_no']; ?><br>
                    Calculated by:<?= date('M d,Y',strtotime($request_data['date_request'])); ?></b></h6>
        </div>
        <div class="card-body">
            <div class="card-body card-items">
                <div class="card-items card-list">
                    <div class="card-header card-detail">
                        <h6>Data Summary</h6>
                    </div>

                    <div class="card-body card-detail">
                        <div class="card-body card-fluid">
                            <!-- <div class="card-body-main"> -->
                            <div class="card-body card-body-text">
                                <p style="float:left">License Plate:</p>
                                <label style="float:right" for=""><?= $request_data['Plate_no']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Car Model/Brand:</p>
                                <label style="float:right" for="">Model</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Starting Date:</p>
                                <label style="float:right" for=""><?= date('M d,Y',strtotime($request_data['date_request'])); ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Name:</p>
                                <label style="float:right" for=""><?= $user_data['name'].'  '.$user_data['surname']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">In partership with:</p>
                                <label style="float:right" for="">Partner</label>
                            </div>

                            <div class="card-body card-body-text" style="margin-top:0px">
                                <p><a href="<?=base_url();?>user_details">Click here to see are the details you filled in request form</a></p>
                            </div>
                            <!-- </div> -->
                        </div>

                    </div>
                </div>

                <div class="card-items card-list">
                    <div class="card-header card-detail">
                        <h6>GARANZIE</h6>
                    </div>
                    <div class="card-body card-detail">
                        <div class="card-body card-fluid">

                            <div class="card-body card-body-text">
                                <p style="float:left">Responsabilità</p>
                                <label style="float:right" for="">Responsabilità</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Assistenza Stradale</p>
								
                                <label style="float:right" for=""> <?= '$'.$request_data['price']; ?></label>
							
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left"><b>Altre garanzie</b></p>
							
                                <label style="float:right" for=""><?= '$'.$request_data['total']; ?></label>
								
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card-items card-list">
                    <div class="card-header card-detail">
                        <h6>Select the Offer</h6>
                    </div>
                    <div class="card-body card-detail">
                        <div class="card-body card-fluid">
                            <div class="card-body" style="text-align:center">

                                <div class="card-body card-body-text">
                                    <p style="float:left">Status:</p>
                                    <label style="float:right" for=""><?= $request_data['status']; ?></label>
                                </div>

                                <div class="card-body card-body-text">
                                    <a href="<?=base_url();?>download/<?= $request_data['request_no']; ?>" class="btn btn-primary" style="background-color:mediumpurple; width:200px;margin-bottom:-60px" <?php echo ($request_data['status'] =='Ready to buy')?'':'disabled'?>><b>DOWNLOAD</b></a>
                                </div>
								  <div class="card-body card-body-text">
                                    <a href="<?=base_url();?>contract" class="btn btn-primary" style="background-color:mediumpurple; width:200px;margin-bottom:-50px" <?php echo ($request_data['status'] =='Ready to buy')?'':'disabled'?>><b>SUSPENDI</b></a>
                                </div>
								  <div class="card-body card-body-text">
                                    <a href="<?=base_url();?>contract" class="btn btn-primary" style="background-color:mediumpurple; width:200px;margin-bottom:-30px" <?php echo ($request_data['status'] =='Ready to buy')?'':'disabled'?>><b>INTERROMPI</b></a>
                                </div>
								  <div class="card-body card-body-text">
                                    <a href="<?=base_url();?>contract" class="btn btn-primary" style="background-color:mediumpurple; width:200px" <?php echo ($request_data['status'] =='Ready to buy')?'':'disabled'?>><b>SOSTISUISCI</b></a>
                                </div>

                                <div class="card-body card-body-text">
                                    <h5><label for=""><?= '$'.$request_data['total']; ?></label></h5>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<?php $this->load->view('userpanel/common/footer'); ?>