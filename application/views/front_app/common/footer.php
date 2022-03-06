<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; 2020 Artabz Technologies Pvt. Ltd.</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets2/js/vendor/jquery-3.2.1.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets2/js/vendor/modernizr-3.5.0.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script> -->

<!-- All js plugins included in this file. -->
<!-- <script src="<?php echo base_url(); ?>assets2/js/plugins.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets2/js/slick.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets2/js/owl.carousel.min.js"></script> -->
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url(); ?>assets/js/scrollreveal.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>


<script src="https://kit.fontawesome.com/96ad30d9a9.js" crossorigin="anonymous"></script>
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


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
    <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
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