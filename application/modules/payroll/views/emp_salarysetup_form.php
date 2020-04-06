 
  <div class="form-group text-right">
<?php if($this->permission->method('payroll','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_salary_type') ?></button> 
  <?php endif; ?>
  <?php if($this->permission->method('payroll','read')->access()): ?>
<a href="<?php echo base_url();?>/payroll/Payroll/emp_salary_setup_view" class="btn btn-primary"><?php echo display('manage_salary_type')?></a>
  <?php endif; ?>
</div>

     <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('salary_type') ?></strong>
            </div>
            <div class="modal-body">
           

        <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                
                <div class="panel-body">

                    <?= form_open('payroll/Payroll/create_salary_setup') ?>
                        <div class="form-group row">
                            <label for="salary_type" class="col-sm-3 col-form-label"><?php echo display('salary_type') ?> *</label>
                            <div class="col-sm-9">
                                <input name="sal_name" class="form-control" type="text" placeholder="<?php echo display('salary_type') ?>" id="sal_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_sal_type" class="col-sm-3 col-form-label"><?php echo display('salary_benefits_type') ?> *</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" name="emp_sal_type" class="form-control"  placeholder="<?php echo display('emp_sal_type') ?>" id="emp_sal_type" > -->
                                <select name="emp_sal_type" class="form-control"  placeholder="<?php echo display('salary_benefits_type') ?>" id="emp_sal_type" style="width:395px">
                           <option value="1">Add</option>
                           <option value="0">Deduct</option>
                                </select>
                            </div>
                        </div> 

                        
                     <!--   <div class="form-group row">
                            <label for="default_amount" class="col-sm-3 col-form-label"><?php echo display('default_amount') ?> *</label>
                            <div class="col-sm-9">
                                <input name="default_amount" class="form-control" type="text" placeholder="<?php echo display('default_amount') ?>" id="default_amount" value="1000">
                            </div>
                        </div> -->
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('set') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
             
    
   
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>
    <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('salary_type') ?></th>
                            <th><?php echo display('benefit_type') ?></th>
                             
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_sl)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_sl as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->sal_name; ?></td>
                                    <td><?php  $type=$que->emp_sal_type;
                                    if($type==1){
                                        echo 'Add';
                                    }else{
                                        echo "Deduct";
                                    }
                                    ?></td>                    
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 