<?php  $this->load->view('Admin/header'); ?>
<?php $this->load->view('Admin/aside'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
       Add Product
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profile</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10" style="margin-left: 100px; margin-top: 150px;">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: -15%">
            <div class="box-header with-border">
              <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<? echo base_url();?>admin/profile/edit">
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Product</label>
                  <select class="mdb-select md-form" searchable="Search here..">
                  <option value="" disabled selected>Choose your country</option>
                  <option value="1">car</option>
                  <option value="2">AC</option>
                  <option value="3">Oven</option>
                </select>

                </div>
                  <div class="form-group">
                  <label for="name">Color</label>
                   <select class="mdb-select md-form" searchable="Search here..">
                  <option value="" disabled selected>Choose your country</option>
                  <option value="1">car</option>
                  <option value="2">AC</option>
                  <option value="3">Oven</option>
                </select>
           
                </div>
                  <div class="form-group">
                  <label for="lname">Size</label>
                   <select class="mdb-select md-form" searchable="Search here..">
                  <option value="" disabled selected>Choose your country</option>
                  <option value="1">car</option>
                  <option value="2">AC</option>
                  <option value="3">Oven</option>
                </select>

                  <div class="form-group">
                  <label for="mobile">Price</label>
                  <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="phone" required>
                </div>

                <div class="form-group">
                  <label for="pwd">image</label>
                 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div><!-- /.box -->

          <!-- Form Element sizes -->
         
          <!-- /.box -->

    
 
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  



<?php $this->load->view('Admin/footer'); ?>