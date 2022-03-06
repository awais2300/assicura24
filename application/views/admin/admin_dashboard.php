<?php $this->load->view('admin/common/header'); ?>

<style>
    .button-style {
        border-radius: 200px;
        background-color: #885ead;
        width: 150px;
        height: 40px;
        font-weight: 700;
        color:white;
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

<div class="container my-4">

    <label style="color:#885ead;font-size:30px" for="operatorNmae">Hi, <?= $admin_data['fname'].' '.$admin_data['lname'] ?></label>
    
    <div>
        <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
            <div class="card-header">Back Office Management</div>
            <div class="card-body text-dark">
                <i class="fas fa-mail-bulk icon-style"></i>
                <button type="submit" id="manage" class="button-style" onClick="window.location.href = '<?php echo base_url();?>request_listing';return false;"> Manage</button>
            </div>
        </div>
        <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
            <div class="card-header">Database Search</div>
            <div class="card-body text-dark">
                <i class="fas fa-users icon-style"></i>
                <button id="manage" class="button-style" onClick="window.location.href = '<?php echo base_url();?>Admin/request_listing_search';return false;"> Open</button>
            </div>
        </div>
        <div class="card border-dark mb-3 float-left my-4 mx-4 card-style">
            <div class="card-header">Total Contract Issued</div>
            <div class="card-body text-dark">
                <i class="fas fa-chart-pie icon-style"></i>
                <button id="manage" class="button-style" onClick="window.location.href = '<?php echo base_url();?>Admin/Issued_Contracts_report';return false;"> View Stats</button>
            </div>
        </div>
    </div>


</div>
<?php $this->load->view('admin/common/footer'); ?>