<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                       <!--  <a href="<?php echo base_url('department/division_controller/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($customers->customer_id): ?>
                        <a href="<?php echo base_url('department/division_controller/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?> -->
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?= form_open('asset/type_controller/type_form') ?>
                    <?php echo form_hidden('type_id', (!empty($typeinfo->type_id)?$typeinfo->type_id:null)) ?>

                    <div class="form-group row">
                        <label for="type_name" class="col-sm-3 col-form-label"><?php echo display('type_name') ?> *</label>
                        <div class="col-sm-9">
                                    <input name="type_name" class="form-control" type="text" placeholder="<?php echo display('type_name') ?>" id="type_name" value="<?php echo (!empty($typeinfo->type_name)?$typeinfo->type_name:null) ?>" required >
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
