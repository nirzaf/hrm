<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('includes/head') ?>
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header"> 
                <?php $this->load->view('includes/header') ?>
            </header>

 
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <?php $this->load->view('includes/sidebar') ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon"><i class="pe-7s-home"></i></div>
                    <div class="header-title">
                        <h1><?php echo (!empty($this->uri->segment(1))?ucfirst($this->uri->segment(1)):null) ?> / <?php echo (!empty($this->uri->segment(2))?ucwords(str_replace("_", " ", $this->uri->segment(2))):null) ?></h1>
                        <small><?php echo (!empty($title)?$title:null) ?></small>
                    </div>
                </section>


                <!-- Main content -->
                <div class="content">
                    <!-- load messages -->
                    <?php $this->load->view('includes/messages') ?>
                    <!-- load custom page -->
                    <?php echo $this->load->view($module.'/'.$page) ?>
                </div> <!-- /.content -->


            </div> <!-- /.content-wrapper -->


            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <?php echo (!empty($setting->address)?$setting->address:null) ?> 
                </div>

                <strong>
                    <?php echo (!empty($setting->footer_text)?$setting->footer_text:null) ?>
                </strong>
                    <a href="<?php echo current_url() ?>">
                    <?php echo (!empty($setting->title)?$setting->title:null) ?></a>
            </footer>

            
        </div> <!-- ./wrapper -->
 
        <!-- Start Core Plugins-->
        <?php $this->load->view('includes/js') ?>
        
    </body>
</html>
