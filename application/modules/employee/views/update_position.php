
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('employee/Employees/update_form/'. $data->pos_id) ?>
                

                    <input name="pos_id" type="hidden" value="<?php echo $data->pos_id ?>">
                 
                        <div class="form-group row">
                            <label for="position_name" class="col-sm-3 col-form-label"><?php echo display('position_name') ?> *</label>
                            <div class="col-sm-9">
                                <input name="position_name" class="form-control" type="text" value="<?php echo $data->position_name ; ?>" id="position_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position_details" class="col-sm-3 col-form-label"><?php echo display('position_details') ?></label>
                            <div class="col-sm-9">
                                <textarea name="position_details" class="form-control" id="position_details"><?php echo $data->position_details?></textarea>
                                
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
     