<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('fname'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          
          </ul>
        </li>

        <li class="treeview">
          <a href="<?php echo base_url();?>admin/product">
            <i class="fa fa-files-o"></i>
            <span>Products</span>
          </a>
        </li>


        <li class="treeview">
          <a href="<?php echo base_url();?>admin/ProdCategory">
            <i class="fa fa-files-o"></i>
            <span>Product Categories</span>
          </a>
        
        </li>
        <li>
          <a href="<?php echo base_url();?>admin/ProdColor">
            <i class="fa fa-th"></i> <span>Product color</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>admin/ProdSize">
            <i class="fa fa-pie-chart"></i>
            <span>Product sizes</span>
        
          </a>
          
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>admin/orders">
            <i class="fa fa-pie-chart"></i>
            <span>Orders</span>
        
          </a>
          
        </li>
         <li class="treeview">
          <a href="<?php echo base_url();?>admin/customers">
            <i class="fa fa-pie-chart"></i>
            <span>Customers</span>
        
          </a>
          
        </li>
      <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Product sizes</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>-->
        
        
        
    
       
        
      
    
    </section>
    <!-- /.sidebar -->
  </aside>