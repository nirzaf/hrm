<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('asset/equipment_controller/equipment_form') ?>
                    <?php echo form_hidden('equipment_id', (!empty($equipmentinfo->equipment_id)?$equipmentinfo->equipment_id:null)) ?>
                    <div class="form-group row">
                        <label for="equipment_name" class="col-sm-3 col-form-label"><?php echo display('equipment_name') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="equipment_name" class="form-control" type="text" placeholder="<?php echo display('equipment_name') ?>" id="equipment_name" value="<?php echo (!empty($equipmentinfo->equipment_name)?$equipmentinfo->equipment_name:null) ?>" required >
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><?php echo display('type_name') ?>*</label>
                        <div class="col-sm-9">
                             <?php echo form_dropdown('type_id',$type,(!empty($equipmentinfo->type_id)?$equipmentinfo->type_id:null),'class="form-control" required') ?>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="model" class="col-sm-3 col-form-label"><?php echo display('model') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="model" class="form-control" type="text" placeholder="<?php echo display('model') ?>" id="model" value="<?php echo (!empty($equipmentinfo->model)?$equipmentinfo->model:null) ?>" required >
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="serial_no" class="col-sm-3 col-form-label"><?php echo display('serial_no') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="serial_no" class="form-control" type="text" placeholder="<?php echo display('serial_no') ?>" id="serial_no" value="<?php echo (!empty($equipmentinfo->serial_no)?$equipmentinfo->serial_no:null) ?>" required >
                        </div>
                    </div> 
                     
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>
