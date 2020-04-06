<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo (!empty($setting->title)?$setting->title:null) ?> :: <?php echo (!empty($title)?$title:null) ?></title>

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url((!empty($setting->favicon)?$setting->favicon:'assets/img/icons/favicon.png')) ?>" type="image/x-icon">


<!-- Start Global Mandatory Style -->
<!-- jquery-ui css -->
<link href="<?php echo base_url('assets/css/jquery-ui.min.css') ?>" rel="stylesheet" type="text/css"/>

<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>

<!-- Bootstrap rtl -->
<?php if (($setting->site_align=='RTL')) { ?>
<link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css') ?>" rel="stylesheet" type="text/css"/> 
<?php } ?>

<!-- Lobipanel css -->
<link href="<?php echo base_url('assets/css/lobipanel.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Pace css -->
<link href="<?php echo base_url('assets/css/flash.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Font Awesome -->
<link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Pe-icon -->
<link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Themify icons -->
<link href="<?php echo base_url('assets/css/themify-icons.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Material Icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- select2.min -->
<link href="<?php echo base_url('assets/css/select2.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- timepicker -->
<link href="<?php echo base_url('assets/css/jquery-ui-timepicker-addon.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- datatable -->
<link href="<?php echo base_url('assets/datatables/css/dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- End Global Mandatory Style-->

<!-- Theme style --> 
<link href="<?php echo base_url('assets/css/daterangepicker.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Date range style --> 
<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url('assets/css/bootstrap-timepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/dist/css/styleBD.css') ?>" rel="stylesheet" type="text/css"/>


<!-- Theme style rtl -->
<?php if (($setting->site_align=='RTL')) { ?>
	<link href="<?php echo base_url('assets/css/custom-rtl.min.css') ?>" rel="stylesheet" type="text/css"/>
<?php } ?>

<!-- Include module style -->
<?php
    $path = 'application/modules/';
    $map  = directory_map($path);
    if (is_array($map) && sizeof($map) > 0)
    foreach ($map as $key => $value) {
        $css  = str_replace("\\", '/', $path.$key.'assets/css/style.css');  
        if (file_exists($css)) {
            echo "<link href=".base_url($css)." rel=\"stylesheet\">";
        }   
    }   
?>


<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap-timepicker.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>

 

