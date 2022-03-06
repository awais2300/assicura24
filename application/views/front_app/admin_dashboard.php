<?php $this->load->view('front_app/common/UserHeader'); ?>

<style>
    .button-style {
        border-radius: 200px;
        background-color: #c881ce;
        width: 150px;
        height: 40px;
        font-weight: 700;
    }

    .card-style {
        max-width: 18rem;
        border-radius: 20px;
        cursor: pointer;
        box-shadow: 5px 10px #888888;
        text-align: center;
        font-weight: 700;
    }

    .icon-style {
        font-size: 100px;
        padding: 50px;
    }
</style>

<div class="container my-5">

    <h4>Hi, <label for="operatorNmae">Name of Operator</label></h4>
    <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
        <div class="card-header">Back Office Management</div>
        <div class="card-body text-dark">
            <i class="fas fa-mail-bulk icon-style"></i>
            <button id="manage" class="button-style"> Manage</button>
        </div>
    </div>
    <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
        <div class="card-header">Database Search</div>
        <div class="card-body text-dark">
            <i class="fas fa-users icon-style"></i>
            <button id="manage" class="button-style"> Open</button>
        </div>
    </div>
    <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
        <div class="card-header">Total Contract Issued</div>
        <div class="card-body text-dark">
            <i class="fas fa-chart-pie icon-style"></i>
            <button id="manage" class="button-style"> View Stats</button>
        </div>
    </div>


</div>
<?php $this->load->view('front_app/common/footer'); ?>