
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('employee/Employees/create_payment') ?>
                         <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label>

                            
                            <div class="col-sm-9">
                               <select name="employee_id" id="employee_id" class="form-control">
                                    <option value="">--select id--</option>
                                <?php 
                                    foreach($dropdownselection as $values){
                                ?>
                                        <option value="<?php echo $values; ?>"><?php echo $values; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="total_salary"  class="col-sm-3 col-form-label"><?php echo display('total_salary') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_salary" class="form-control"  placeholder="<?php echo display('total_salary') ?>" id="total_salary" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="total_working_minutes" class="col-sm-3 col-form-label"><?php echo display('total_working_minutes') ?> *</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="total_working_minutes" placeholder="<?php echo display('total_working_minutes') ?>" >
                         
                            </div>
                        </div> 
                          <div class="form-group row">
                            <label for="working_period" class="col-sm-3 col-form-label"><?php echo display('working_period') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_period" class="form-control"  placeholder="<?php echo display('working_period') ?>" id="working_period" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="payment_due" class="col-sm-3 col-form-label"><?php echo display('payment_due') ?> *</label>
                            <div class="col-sm-9">
                            <select name="payment_due" class="form-control" id="payment_due" >
                               <option>Select payment Type</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>
                                <!-- <input type="text" name="payment_due" class="form-control"  placeholder="<?php echo display('payment_due') ?>" id="payment_due" > -->
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="payment_date" class="col-sm-3 col-form-label"><?php echo display('payment_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="payment_date" class="datepicker form-control"  placeholder="<?php echo display('payment_date') ?>" id="payment_date" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="paid_by" class="col-sm-3 col-form-label"><?php echo display('paid_by') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="paid_by" class="form-control"  placeholder="<?php echo display('paid_by') ?>" id="paid_by" >
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
     
 <script type="text/javascript">
$(function() {
    $('input[name="working_period"]').daterangepicker();
});
</script>
