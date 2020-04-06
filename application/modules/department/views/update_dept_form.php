 <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?=form_open('department/Department_controller/update_dept_form/'. $data->dept_id) ?>
                

                    <input name="dept_id" type="hidden" value="<?php echo $data->dept_id ?>">
                  <div class="form-group row">
                           
                            <label for="department_name" class="col-sm-3 col-form-label">
                            <?php echo display('department_name') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="department_name" class=" form-control" value="<?php echo $data->department_name ?>">
                               
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