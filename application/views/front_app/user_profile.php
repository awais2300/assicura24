<?php $this->load->view('front_app/common/UserHeader'); ?>


<div class="container my-4">
    <div class="card">
        <div class="card-header">
            <h4>User Profile</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="card-body" style="width: 100%; margin: auto; padding: 30px; display: flex;">
                    <div style="float:left; width:100%">
                        <div class="form-group row">
                            <p for="name" class="col-sm-4 col-form-label">Name:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="surname" class="col-sm-4 col-form-label">Surname:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="surname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="d_o_b" class="col-sm-4 col-form-label">Date of Birth:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="d_o_b">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="address" class="col-sm-4 col-form-label">Address:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="city" class="col-sm-4 col-form-label">City:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="city">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="zip" class="col-sm-4 col-form-label">Zip Code:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="zip">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="email" class="col-sm-4 col-form-label">Email:</p>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="mobile" class="col-sm-4 col-form-label">Mobile Number:</p>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="mobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p for="maritalStatus" class="col-sm-4 col-form-label">Marital Status:</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="maritalStatus">
                            </div>
                        </div>
                    </div>
                    <div style="float:left; width:100%">
                        <div class="card my-2 mx-2" style="width: 18rem; float:right">
                            <div class="card-body">
                                <h5 class="card-title">Total OFFERS requested</h5>
                                <p class="card-text">Click here to see all requests.</p>
                                <a href="#" class="btn btn-primary">Show all Request</a>
                            </div>
                        </div>
                        <div class="card my-2 mx-2" style="width: 18rem; float:right">
                            <div class="card-body">
                                <h5 class="card-title">Total CONTRACTS Issued</h5>
                                <p class="card-text">Click here to see all the issued contracts you have.</p>
                                <a href="#" class="btn btn-primary">Show all Contracts</a>
                            </div>
                        </div>
                        <div class="card my-2 mx-2" style="width: 18rem;float:right">
                            <div class="card-body">
                                <h5 class="card-title">Documents</h5>
                                <p class="card-text">Click here to see all the documents uploaded.</p>
                                <a href="#" class="btn btn-primary">Show all Documents</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>




    </div>
</div>
<?php $this->load->view('front_app/common/footer'); ?>