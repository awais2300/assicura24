<?php $this->load->view('front_app/common/header'); ?>

<!-- ***** Home Parallax Start ***** -->
<div class="welcome-area" id="welcome">
    <div class="header-text">
        <div class="container">
            <div class="row">
                <section class="mini" id="work-process" style="background-image:none">
                    <div class="mini-content">
                        <!-- <div class="container" > -->
                        <div class="row">
                            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                                <div class="center-heading">
                                    <h1>Hi, <?= $user_data['name'] . ' ' . $user_data['surname'] ?> </h1>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Mini Box Start ***** -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href="<?= base_url(); ?>User_Login/offers" class="mini-box">
                                    <div class="list-item" id="icon_contract">
                                        <i class="far fa-file-alt list-item list-icon"></i>
                                        <strong>OFFERS</strong>
                                        <span>Click here to see your offers details.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4  col-sm-6 col-6">
                                <a href="<?= base_url(); ?>User_Login/contracts" class="mini-box">
                                    <i class="fas fa-car list-item list-icon "></i>
                                    <strong>CONTRACT ISSUED</strong>
                                    <span>Click here to see your contracts.</span>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href="<?= base_url(); ?>User_Login/download_List" class="mini-box">
                                    <i class="fas fa-download list-item list-icon"></i>
                                    <strong>DOWNLOAD</strong>
                                    <span>Click here to download your contracts.</span>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href=" <?= base_url(); ?>User_Login/profile" class="mini-box">
                                    <i class="far fa-address-card list-item list-icon"></i>
                                    <strong>PROFILE</strong>
                                    <span>Click here to see your profile details.</span>
                                </a>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


<!-- ***** Mini Box End ***** -->
<section class="section colored" id="contact-us">

</section>
<?php $this->load->view('userpanel/common/footer'); ?>