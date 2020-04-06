<a href="<?php echo base_url('dashboard/home') ?>" class="logo"> 
    <span class="logo-lg">
        <img src="<?php echo base_url((!empty($setting->logo)?$setting->logo:'assets/img/icons/mini-logo.png')) ?>" alt="">
    </span>
</a>
<div class="se-pre-con"></div>
<!-- Header Navbar -->
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="pe-7s-keypad"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages -->
            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="pe-7s-mail"></i>
                    <span class="label label-success"><?php echo (!empty($notifications->total)?$notifications->total:0) ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <ul class="menu">
                            <?php if(!empty($quick_messages)) ?>
                            <?php foreach($quick_messages as $message) { ?>
                            <li><!-- start message -->
                                <a href="<?php echo base_url("dashboard/message/inbox_information/$message->id") ?>">
                                    <div class="pull-left"><img src="<?php echo base_url('assets/img/icons/default.jpg') ?>" class="img-circle" alt="User Image"></div>
                                    <h4><?php echo (!empty($message->sender_name)?$message->sender_name:null) ?><small><i class="fa fa-clock-o"></i> <?php echo (!empty($message->datetime)?$message->datetime:null) ?></small></h4>
                                    <p><?php echo character_limiter((!empty($message->message)?strip_tags($message->message):null), 30) ?></p>
                                </a>
                            </li>
                            <?php } ?> 
                        </ul>
                    </li>
                    <li class="footer"><a href="<?php echo base_url('dashboard/message/index') ?>"><?php echo display('see_all_message') ?></a></li>
                </ul>
            </li> 
            <!-- settings -->
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('dashboard/home/profile') ?>"><i class="pe-7s-users"></i> <?php echo display('profile') ?></a></li>
                    <li><a href="<?php echo base_url('dashboard/home/setting') ?>"><i class="pe-7s-settings"></i> <?php echo display('setting') ?></a></li>
                    <li><a href="<?php echo base_url('logout') ?>"><i class="pe-7s-key"></i>  <?php echo display('logout') ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>