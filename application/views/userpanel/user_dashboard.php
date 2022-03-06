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

<div class="container my-3">
    <!-- <h5>Welcome! <?= $user_data['name']; ?></h5><label id="Name" for="Name"></label>-->


    <!-- <div style="width:100%;padding:10px;margin:auto;text-align:center">
        <a class="btn btn-primary" href="<?= base_url(); ?>Home" style="background-color:mediumpurple; width:600px;color:white"><b>Click here for new Offer!</b></a>
    </div>-->


    <div class="card">
        <div class="card-header">

            <?php if (strtoupper($request_data['status']) == 'ISSUED') { ?>
                <h3>CONTRACT ISSUED</h3>
            <?php } else { ?>
                <h3>OFFER</h3>
            <?php } ?>


            <h5>Offer Number: <?= $request_data['request_no']; ?><br>
                Calculated by: <?= date('M d,Y', strtotime($request_data['date_request'])); ?>
                <?php if (strtoupper($request_data['status']) == 'ISSUED') { ?>
                    <br>Starting Date: <?= date('M d,Y', strtotime($request_data['starting_date'])); ?>
                    <br>Expiry Date: <?= date('M d,Y', strtotime($request_data['expiry_date'])); ?>
                <?php } ?>
            </h5>
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
                                <a style="float:left">License Plate:</a>
                                <label style="float:right" for=""><?= $request_data['Plate_no']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Car Model/Brand:</a>
                                <label style="float:right" for=""><?= $request_data['car_brand'] . ' ' . $request_data['car_model']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Starting Date:</a>
                                <label style="float:right" for=""><?= date('M d,Y', strtotime($request_data['starting_date'])); ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Customer Name:</a>
                                <label style="float:right" for=""><?= $user_data['name'] . ' ' . $user_data['surname']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">In partership with:</a>
                                <label style="float:right" for=""><?= $request_data['Insurance_company_choosed']; ?></label>
                            </div>

                            <div class="card-body card-body-text" style="margin-top:0px">
                                <a href="<?= base_url(); ?>user_details">Click here to see all the details you filled in request form</a>
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
                                <a style="float:left">Responsabilità civile</a>
                                <label style="float:right" for=""><?= '€' . $request_data['price']; ?></label>
                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Assistenza Stradale</a>

                                <label style="float:right" for=""> <?= '€' . $request_data['road_assistance']; ?></label>

                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Altre garanzie</a>

                                <label style="float:right" for=""><?= '€' . $request_data['other_gurantee']; ?></label>

                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left">Commissioni</a>

                                <label style="float:right" for=""><?= '€' . $request_data['commission']; ?></label>

                            </div>

                            <div class="card-body card-body-text">
                                <a style="float:left"><b>TOTALE</b></a>

                                <label style="float:right" for=""><?= '€' . $request_data['total']; ?></label>

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
                                    <a style="float:left">Status:</a>
                                    <label style="float:right" for=""><?= $request_data['status']; ?></label>
                                </div>




                                <?php if (strtoupper($request_data['status']) == 'ISSUED') { ?>

                                    <div class="card-body card-body-text" style="height:45px">
                                        <button type="submit" class="btn btn-primary" style="background-color:#885ead; width:200px" onClick="window.location.href='<?php echo base_url(); ?>uploads/admin_files/<?= $request_data['contract_issued']; ?>';return false;" id="btnDownload"><b>DOWNLOAD</b></button>
                                    </div>

                                    <div class="card-body card-body-text" style="height:45px">
                                        <button type="submit" class="btn btn-primary" style="background-color:#885ead; width:200px" onClick="window.location.href = '<?php echo base_url(); ?>User_Login/suspend_contract/<?= $request_data['request_no']; ?>';return false;" id="btnSuspend"><b>SOSPENDI</b></button>
                                    </div>

                                    <div class="card-body card-body-text" style="height:45px">
                                        <button type="submit" class="btn btn-primary" style="background-color:#885ead; width:200px" onClick="window.location.href = '<?php echo base_url(); ?>User_Login/close_contract/<?= $request_data['request_no']; ?>';return false;" id="btnClose"><b>INTERROMPI</b></button>
                                    </div>

                                    <div class="card-body card-body-text" style="height:45px">
                                        <button type="submit" class="btn btn-primary" style="background-color:#885ead; width:200px" onClick="window.location.href = '<?php echo base_url(); ?>User_Login/replace_contract/<?= $request_data['request_no']; ?>';return false;" id="btnReplace"><b>SOSTITUISCI</b></button>
                                    </div>

                                <?php } else { ?>

                                    <?php if (strtoupper($request_data['status']) != 'QOUTE MANAGED') {
                                        $buyStatus = 'disabled';
                                    } else {
                                        $buyStatus = 'enabled';
                                    }
                                    ?>

                                    <div class="card-body card-body-text" style="height:45px">
                                        <button type="submit" class="btn btn-primary" style="background-color:#885ead; width:200px" onClick="window.location.href = '<?php echo base_url(); ?>User_Login/purchased/<?= $request_data['request_no']; ?>';return false;" <?php echo $buyStatus ?> id="btnBuy"><b>Buy Now!</b></button>
                                    </div>

                                <?php } ?>

                                <div class="card-body card-body-text">
                                    <h5><label for=""><?= '€' . $request_data['total']; ?></label></h5>
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
<script>
    let btnDownload = document.getElementById('btnDownload');
    let btnSuspend = document.getElementById('btnSuspend');
    let btnClose = document.getElementById('btnClose');
    let btnReplace = document.getElementById('btnReplace');
    let btnBuy = document.getElementById('btnBuy');

    btnDownload.addEventListener("mouseover", function() {
        btnDownload.style.backgroundColor = `rgb(120, 79, 143)`;
    });
    btnDownload.addEventListener("mouseleave", function() {
        btnDownload.style.backgroundColor = `rgb(136, 94, 173)`;
    });
    btnSuspend.addEventListener("mouseover", function() {
        btnSuspend.style.backgroundColor = `rgb(120, 79, 143)`;
    });
    btnSuspend.addEventListener("mouseleave", function() {
        btnSuspend.style.backgroundColor = `rgb(136, 94, 173)`;
    });
    btnClose.addEventListener("mouseover", function() {
        btnClose.style.backgroundColor = `rgb(120, 79, 143)`;
    });
    btnClose.addEventListener("mouseleave", function() {
        btnClose.style.backgroundColor = `rgb(136, 94, 173)`;
    });
    btnReplace.addEventListener("mouseover", function() {
        btnReplace.style.backgroundColor = `rgb(120, 79, 143)`;
    });
    btnReplace.addEventListener("mouseleave", function() {
        btnReplace.style.backgroundColor = `rgb(136, 94, 173)`;
    });
    btnBuy.addEventListener("mouseover", function() {
        btnBuy.style.backgroundColor = `rgb(120, 79, 143)`;
    });
    btnBuy.addEventListener("mouseleave", function() {
        btnBuy.style.backgroundColor = `rgb(136, 94, 173)`;
    });
</script>