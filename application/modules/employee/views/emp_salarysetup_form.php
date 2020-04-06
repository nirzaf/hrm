 
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('employee/Employees/create_salary_setup') ?>
                        <div class="form-group row">
                            <label for="emp_sal_name" class="col-sm-3 col-form-label"><?php echo display('emp_sal_name') ?> *</label>
                            <div class="col-sm-9">
                                <input name="emp_sal_name" class="form-control" type="text" placeholder="<?php echo display('emp_sal_name') ?>" id="emp_sal_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_sal_type" class="col-sm-3 col-form-label"><?php echo display('emp_sal_type') ?> *</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" name="emp_sal_type" class="form-control"  placeholder="<?php echo display('emp_sal_type') ?>" id="emp_sal_type" > -->
                                <select name="emp_sal_type" class="form-control"  placeholder="<?php echo display('emp_sal_type') ?>" id="emp_sal_type" >
                           <option value="Add">Add</option>
                           <option value="Deduct">Deduct</option>
                                </select>
                            </div>
                        </div> 

                        
     
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
     