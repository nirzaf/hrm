<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div> 
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">  
                                <div class="card-header-menu">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <img src="<?php echo base_url((!empty($user->image)?$user->image:'assets/img/icons/default.jpg')) ?>" alt="User Image" heigt="200" >
                            </div> 

                            
                            <div class="card-content">
                                <div class="card-content-member">
                                    <h4 class="m-t-0"><?php echo $user->fullname ?> (<?php echo $user->user_level ?>)</h4> 
                                </div> 
                            </div>
                            <div class="card-content"> 
                                <div class="card-content-summary">
                                    <p><?php echo $user->about ?></p>
                                </div>
                            </div> 
                            <div class="card-content"> 
                                <dl class="dl-horizontal">
                                    <dt>Email </dt> <dd><?php echo $user->email ?></dd>
                                    <dt>IP Address </dt> <dd><?php echo $user->ip_address ?></dd>
                                    <dt>Last Login </dt> <dd><?php echo $user->last_login ?></dd>
                                    <dt>Last Logout </dt> <dd><?php echo $user->last_logout ?></dd>
                                </dl> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

 