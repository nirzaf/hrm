<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
               <?= form_open('payroll/Payroll/update_salsetup_form/'. $data->salary_type_id) ?>

               <input name="salary_type_id" type="hidden" value="<?php echo $data->salary_type_id ?>">
               
               <div class="form-group row">
                <label for="salary_type" class="col-sm-3 col-form-label"><?php echo display('salary_type') ?> *</label>
                <div class="col-sm-9">
                    <input name="sal_name" class="form-control" type="text" id="emp_sal_name" value="<?php echo $data->sal_name?>">
                </div>
            </div> 

            <div class="form-group row">
                <label for="salary_benefits_type" class="col-sm-3 col-form-label"><?php echo display('salary_benefits_type') ?> </label>
                <div class="col-sm-9">
                   <select name="emp_sal_type" class="form-control"  placeholder="<?php echo display('salary_benefits_type') ?>" id="emp_sal_type">
                           <option value="1" <?php if($data->emp_sal_type==1){echo 'selected';}?>><?php echo display('ad')?></option>
                           <option value="0" <?php if($data->emp_sal_type==0){echo 'selected';}?>>Deduct</option>
                                </select>
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
