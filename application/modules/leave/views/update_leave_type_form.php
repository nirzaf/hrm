 
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('leave/Leave/update_leave_type/'. $data->leave_type_id) ?>
                
                        <input name="leave_type_id" type="hidden" value="<?php echo $data->leave_type_id ?>">
                          <div class="form-group row">
                            <label for="leave_type" class="col-sm-3 col-form-label"><?php echo display('leave_type') ?> *</label>
                            <div class="col-sm-9">
                                <input name="leave_type" class="form-control" type="text" value="<?php echo $data->leave_type ?>" id="leave_type"  required >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="leave_type" class="col-sm-3 col-form-label"><?php echo display('number_of_leave_days') ?> *</label>
                            <div class="col-sm-9">
                                <input name="leave_days" class="form-control" type="number" value="<?php echo $data->leave_days ?>" id="leave_days"  required >
                            </div>
                        </div> 
                     
                        <div class="form-group text-right">
                            
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>

                    <?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>
 
<script language="javascript"> 


</script>