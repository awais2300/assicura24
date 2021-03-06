<?php $this->load->view('front_app/common/UserHeader'); ?>

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
    <h5>Welcome! Dear</h5><label id="Name" for="Name"></label>


    <div style="width:100%;padding:10px;margin:auto;text-align:center">
        <button type="button" class="btn btn-primary" style="background-color:mediumpurple; width:600px"><b>Click here for new Offer!</b></button>
    </div>


    <div class="card">
        <div class="card-header">
            <h6><b>Offers Number:<br>
                    Calculated by:</b></h6>
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
                                <label style="float:right" for="">Plate No.</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Car Model/Brand:</p>
                                <label style="float:right" for="">Model</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Starting Date:</p>
                                <label style="float:right" for="">Date</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Name:</p>
                                <label style="float:right" for="">Name</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">In partership with:</p>
                                <label style="float:right" for="">Partner</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p><a href="#">Click here to see are the details you filled in request form</a></p>
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
                                <p style="float:left">Responsabilit??</p>
                                <label style="float:right" for="">Responsabilit??</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left">Assistenza Stradale</p>
                                <label style="float:right" for=""> Amount</label>
                            </div>

                            <div class="card-body card-body-text">
                                <p style="float:left"><b>Altre garanzie</b></p>
                                <label style="float:right" for="">Total Amount</label>
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
                                    <label style="float:right" for="">Status</label>
                                </div>

                                <div class="card-body card-body-text">
                                    <button type="button" class="btn btn-primary" style="background-color:mediumpurple; width:200px"><b>Buy Now!</b></button>
                                </div>

                                <div class="card-body card-body-text">
                                    <h5><label for="">$756.34</label></h5>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<?php $this->load->view('front_app/common/footer'); ?>