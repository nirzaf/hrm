
<!-- jquery-ui --> 
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Bootstrap -->

<!-- lobipanel -->
<script src="<?php echo base_url('assets/js/lobipanel.min.js') ?>" type="text/javascript"></script>
<!-- Pace js -->
<!--<script src="<?php echo base_url('assets/js/pace.min.js') ?>" type="text/javascript"></script>-->
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/js/fastclick.min.js') ?>" type="text/javascript"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/js/select2.min.js') ?>" type="text/javascript"></script>
<!-- bootstrap timepicker -->
<script src="<?php echo base_url('assets/js/jquery-ui-sliderAccess.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery-ui-timepicker-addon.min.js') ?>" type="text/javascript"></script>
<!-- tinymce js -->
<script src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>" type="text/javascript"></script>
<!-- dataTables js -->
<script src="<?php echo base_url('assets/datatables/js/dataTables.min.js') ?>" type="text/javascript"></script>
<!-- Date range js -->
<script src="<?php echo base_url('assets/js/daterangepicker.js') ?>" type="text/javascript"></script>

<!-- AdminBD frame -->
<script src="<?php echo base_url('assets/js/frame.js') ?>" type="text/javascript"></script>
<!-- End Core Plugins -->
 <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Counter js --> 
       <!--  <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script> -->
        <!-- Sparklines js -->
      <!--   <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script> -->
        <!-- End Page Lavel Plugins
        =====================================================================-->

<!-- Dashboard js -->
<script src="<?php echo base_url('assets/js/dashboard.js') ?>" type="text/javascript"></script>
<!-- End Theme label Script-->


<!-- Include module Script -->
<?php
    $path = 'application/modules/';
    $map  = directory_map($path);
    if (is_array($map) && sizeof($map) > 0)
    foreach ($map as $key => $value) {
        $js   = str_replace("\\", '/', $path.$key.'assets/js/script.js'); 
        if (file_exists($js)) {
            echo "<script src=".base_url($js)." type=\"text/javascript\"></script>";
        }   
    }   
?>
