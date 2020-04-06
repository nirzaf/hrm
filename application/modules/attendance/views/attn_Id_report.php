 <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('attendance/Home/AtnReport_view','name="myForm"') ?>
                        
                         <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label>
                            <div class="col-sm-9">
                                <input name="employee_id" class="form-control" type="text" placeholder="<?php
        
                                 echo display('employee_id_se') ?>"  id="employee_id" onblur="check_if_exists();">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="s_date" class="datepicker form-control" type="text" placeholder="<?php
        
                                 echo display('start_date') ?>"  id="start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="e_date" class="datepicker form-control" type="text" placeholder="<?php  
                                 echo display('end_date') ?>" id="end_date" >
                            </div>
                        </div>
                       

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('send') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
<script language="javascript"> 
      $("#start_date").datepicker({ dateFormat:'Y-m-d' });
       $("#end_date").datepicker({ dateFormat:'yy-mm-dd' });
    
</script>