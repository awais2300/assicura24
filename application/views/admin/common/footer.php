<footer id="htc__footer">

    <!-- Start Copyright Area -->
    <div class="fixed-bottom htc__copyright bg__cat--5" style="text-align:center;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner col-xs-12" style="margin-left:0px">
                        <p class="col-xs-12" style="font-family: Arial;">Copyright© <a style="color:white;font-weight:1000;font-family: Arial;" href="">Artabz technologies Pvt. Ltd.</a> 2020. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!-- End Footer Style -->
</div>

<!--<script src="<?php echo base_url(); ?>assets2/js/vendor/jquery-3.2.1.min.js"></script>-->

<!-- All js plugins included in this file. -->
<script src="<?php echo base_url(); ?>assets2/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<!-- <script src="<?php echo base_url(); ?>assets2/js/waypoints.min.js"></script>-->
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="<?php echo base_url(); ?>assets2/js/main.js"></script>

<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/swal/swal.all.min.js"></script>
<?php if ($this->session->flashdata('success')) : ?>

    <script>
        Swal.fire(
            '<?php echo $this->session->flashdata('success'); ?>',
            '',
            'success'
        );
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('failure')) : ?>
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

<!--<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>-->

<!-- AdminLTE App -->



</html>