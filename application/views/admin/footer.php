<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://www.plandstudios.com/">Plan D Studios</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<?php if ($this->session->flashdata('success')): ?>
<script src="<?php echo base_url(); ?>assets/plugins/swal/swal.all.min.js"></script>
  <script>
	Swal.fire(
	  '<?php echo $this->session->flashdata('success'); ?>',
	  '',
	  'success'
	);
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('failure')): ?>
<script src="<?php echo base_url(); ?>assets/plugins/swal/swal.all.min.js"></script>
  <script>
	Swal.fire(
	  '<?php echo $this->session->flashdata('failure'); ?>',
	  '',
	  'error'
	);
  </script>




  
<?php endif; ?>
</body>
</html>
