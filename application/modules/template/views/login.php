<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo (!empty($setting->title)?$setting->title:null) ?> :: <?php echo (!empty($title)?$title:null) ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url((!empty($setting->favicon)?$setting->favicon:'assets/img/icons/favicon.png')) ?>" type="image/x-icon">
        
        <!-- Start Global Mandatory Style -->
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!-- <link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css') ?>" rel="stylesheet" type="text/css"/> -->
        <!-- Pe-icon -->
        <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" type="text/css"/>
        
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!-- <link href="<?php echo base_url('assets/css/custom-rtl.min.css') ?>" rel="stylesheet" type="text/css"/> -->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper"> 
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3><?php echo (!empty($setting->title)?$setting->title:null) ?></h3>
                                <small><strong><?php echo display('login') ?></strong></small>
                            </div>
                        </div>
                        <div class="">
                            <!-- alert message -->
                            <?php if ($this->session->flashdata('message') != null) {  ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div> 
                            <?php } ?>
                            
                            <?php if ($this->session->flashdata('exception') != null) {  ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('exception'); ?>
                            </div>
                            <?php } ?>
                            
                            <?php if (validation_errors()) {  ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo validation_errors(); ?>
                            </div>
                            <?php } ?> 
                        </div>
                    </div>


                    <div class="panel-body">
                        <?php echo form_open('login','id="loginForm" novalidate'); ?>
                            <div class="form-group">
                                <label class="control-label" for="email"><?php echo display('email') ?></label>
                                <input type="text" placeholder="<?php echo display('email') ?>" name="email" id="email" class="form-control"> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password"><?php echo display('password') ?></label>
                                <input type="password"  placeholder="<?php echo display('password') ?>" name="password" id="password" class="form-control"> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="captcha"><?php echo $captcha_image ?></label>
                                
                                <input type="captcha"  placeholder="<?php echo display('captcha') ?>" name="captcha" id="captcha" class="form-control"> 
                            </div> 
                            <div> 
                                <button  type="reset" class="btn btn-info"><?php echo display('reset') ?></button> 
                                <button  type="submit" class="btn btn-success"><?php echo display('login') ?></button> 
                            </div>
                        </form>
                    </div>

                

                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->



        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js') ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>


        <script type="text/javascript">
        $(document).ready(function() {
            var info = $('table tbody tr');
            info.click(function() {
                var email    = $(this).children().first().text(); 
                var password = $(this).children().first().next().text();
                $("input[name=email]").val(email);
                $("input[name=password]").val(password);
            });
        });
        </script>



    </body>
</html>