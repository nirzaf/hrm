   
<script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  nav.nav-tabs li:not(.active) a {
  pointer-events:none;
  background-color: #2554C7;
  color:white;
}
.nav.nav-tabs li (.active) a{
  background-color: red;
  color:white;
}
  </style>
 
<div id="tabs">
  <ul>
  <li><img src="<?php echo base_url('assets/img/user/us.png') ?>" height="150px" width="100%" ></li>
    <li><a href="#tabs-1"><?php echo display('personal_information')?></a></li>
    <li><a href="#tabs-2"><?php echo display('educational_information')?></a></li>
    <li><a href="#tabs-3"><?php echo display('past_experience')?></a></li>
  </ul>
  <div id="tabs-1">
     <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open_multipart('circularprocess/Candidate/caninfo_create') ?>
                     
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-2 col-form-label"><?php echo display('first_name') ?> *</label>
                            <div class="col-sm-4">
                                <input name="first_name" class="form-control" type="text" placeholder="<?php echo display('first_name') ?>" id="first_name">
                            </div>
                             <label for="last_name" class="col-sm-2 col-form-label"><?php echo display('last_name') ?> *</label>
                            <div class="col-sm-4">
                                <input name="last_name" class="form-control" type="text" placeholder="<?php echo display('last_name') ?>" id="last_name">
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label"><?php echo display('email') ?> *</label>
                            <div class="col-sm-4">
                                <input name="email" class="form-control" type="email" placeholder="<?php echo display('email') ?>" id="email">
                            </div>
                            <label for="picture" class="col-sm-2 col-form-label"><?php echo display('picture') ?> *</label>
                            <div class="col-sm-4">
                                <input type="file" name=" picture" class="form-control"  placeholder="<?php echo display('picture') ?>" id="picture">
                            </div>
                        </div>
                      
                        
              <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('submit') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>


  </div>
 