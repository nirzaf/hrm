<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div id="message" class="alert hide"></div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo display('internet_connection') ?></label>
                    <div class="col-sm-9">  
                        <?php echo (($internet)? "<i class='fa fa-check text-success'></i> ".display('ok') : "<i class='fa fa-times text-danger'></i> ".display('not_available') ) ?>
                    </div> 
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo display('outgoing_file') ?></label>
                    <div class="col-sm-9">  
                        <?php echo (($outgoing)? "<i class='fa fa-check text-success'></i> ".display('available') : "<i class='fa fa-times text-danger'></i> ".display('not_available')) ?>
                    </div> 
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo display('incoming_file') ?></label>
                    <div class="col-sm-9">  
                        <?php echo (($incoming)? "<i class='fa fa-check text-success'></i> ".display('available') : "<i class='fa fa-times text-danger'></i> ".display('not_available')) ?>
                    </div> 
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">  
                        <?php 
                            $localhost=false;
                            if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', 'localhost'))) {
                                $localhost=true;
                            } 
                        ?> 

                        <?php if (!$incoming && $localhost) { ?>
                            <button type="submit" id="download" class="btn btn-primary w-md m-b-5 btn-block"><i class="fa fa-download"></i> <?php echo display('download_data_from_server') ?> </button>
                        <?php } else if($incoming) { ?>
                            <button type="submit" id="import" class="btn btn-info w-md m-b-5 btn-block"><i class="fa fa-database"></i> <?php echo display('data_import_to_database') ?></button>
                        <?php } ?>

                        <?php if ($outgoing && $localhost) { ?>
                            <button type="submit" id="upload" class="btn btn-success w-md m-b-5 btn-block"><i class="fa fa-upload"></i> <?php echo display('data_upload_to_server') ?></button>
                        <?php } ?>
                    </div>  
                </div>  

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var upload   = $("#upload");
    var download = $("#download");
    var dbImport = $("#import");
    var downloadUrl = '<?php echo base_url("dashboard/data_synchronizer/ftp_download") ?>';
    var dbImportUrl = '<?php echo base_url("dashboard/data_synchronizer/import") ?>';
    var uploadUrl = '<?php echo base_url("dashboard/data_synchronizer/ftp_upload") ?>';
    var token = '<?php echo $this->security->get_csrf_token_name(); ?>:<?php echo $this->security->get_csrf_hash(); ?>';
    var message  = $("#message");

    //download process
    download.on('click', function() {
        ajaxLoad(downloadUrl, token);
    });
    //import process
    dbImport.on('click', function() {
        ajaxLoad(dbImportUrl, token);
    });
    //upload process
    upload.on('click', function() {
        ajaxLoad(uploadUrl, token);
    });

    function ajaxLoad(URL, token)
    {
        $.ajax({
            url: URL,
            method: 'get',
            dataType: 'json', 
            data : token,
            beforeSend:function()
            {
                message.html('<i class="ti-settings fa fa-spin"></i> <?php echo display("please_wait") ?>').removeClass('hide').addClass('alert-info');  
            }, 
            success:function(data) 
            {
                if (data.success) {
                    message.html('<i class="fa fa-check"></i> '+data.success).removeClass('alert-info').removeClass('alert-danger').addClass('alert-success'); 
                } else {
                   message.html('<i class="fa fa-times"></i> '+data.error).removeClass('alert-success').removeClass('alert-info').addClass('alert-danger');  
                } 
                setTimeout(function(){
                    location.reload();
                }, 3000);
            }, 
            error: function()
            {
                message.html('<i class="fa fa-times"></i> <?php echo display("ooops_something_went_wrong") ?>').removeClass('alert-success').removeClass('alert-info').addClass('alert-danger');
                setTimeout(function(){
                    location.reload();
                }, 3000);
            }
        });   
    }
});
</script>


