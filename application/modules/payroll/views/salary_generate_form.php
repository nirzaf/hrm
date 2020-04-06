
     <div class="form-group text-right">
<?php if($this->permission->method('payroll','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('generate_now')?></button> 
<?php endif; ?>
<?php if($this->permission->method('payroll','read')->access()): ?>
<a href="<?php echo base_url();?>/payroll/Payroll/salary_generate_view" class="btn btn-primary"><?php echo display('manage_salary_generate')?></a>
<?php endif; ?>
</div>

     <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong> Salary Generate</strong>
            </div>
            <div class="modal-body">
           

     
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                
                <div class="panel-body">

                    <?= form_open('payroll/Payroll/create_salary_generate') ?>
                    
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="<?php echo display('name') ?>" id="name">
                         
                        
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="start_date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?></label>
                            <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="start_date" placeholder="<?php echo display('s_date') ?>" id="start_date">
                         
                        
                            </div>
                            </div>

                            <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> </label>
                            <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="end_date" placeholder="<?php echo display('e_date') ?>" id="end_date">
                         
                        
                            </div>
                            </div>

                          
                            
                            
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('generate') ?></button>
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
                                <th><?php echo display('cid') ?></th><th>Employee Name</th>
                                <th><?php echo display('employee_id') ?></th>
                                <th><?php echo display('name') ?></th>
                                <th><?php echo display('gdate') ?></th>
                                <th><?php echo display('start_dates') ?></th>
                                <th>End Date</th>
                                <th><?php echo display('generate_by') ?></th>
                                
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($salgen)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($salgen as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td> 
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->name; ?></td>
                                    <td><?php echo $que->gdate; ?></td>
                                    <td><?php echo $que->start_date; ?></td>
                                    <td><?php echo $que->end_date; ?></td>
                                    <td><?php echo $que->generate_by; ?></td>
                                                                
                                   
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
  <script language="javascript"> 
    $(function(){
        $("#start_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });
</script>
 