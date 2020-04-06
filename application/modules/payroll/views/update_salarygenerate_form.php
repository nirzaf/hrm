 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('payroll/Payroll/update_salgen_form/'. $data->ssg_id) ?>

                    <input name="ssg_id" type="hidden" value="<?php echo $data->ssg_id ?>">
                 
                      

                       <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="<?php echo display('name') ?>" id="name" value="<?php echo  $data->name?>">
                         
                        
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="start_date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?></label>
                            <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="start_date" placeholder="<?php echo display('start_date') ?>" id="start_date"  value="<?php echo  $data->start_date?>">
                         
                        
                            </div>
                            </div>

                            <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> </label>
                            <div class="col-sm-9">
                            <input type="text" class="datepicker form-control" name="end_date" placeholder="<?php echo display('end_date') ?>" id="end_date" value="<?php echo  $data->end_date?>">
                         
                        
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
    