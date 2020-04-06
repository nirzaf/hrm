 
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('attendance/Home/create_atten') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('emp_id') ?> *</label>
                            <div class="col-sm-9">
                            <?php echo form_dropdown('employee_id',$dropdownatn,null,'class="form-control" id="employee_id"') ?>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="date" class="form-control" type="text" placeholder="<?php
                              $timezone = $this->db->select('timezone')->from('setting')->get()->row();
                               date_default_timezone_set($timezone->timezone);
                                 echo display('date') ?>" value="<?php echo date('Y-m-d') ?>" id="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sign_in" class="col-sm-3 col-form-label"><?php echo display('sign_in') ?> *</label>
                            <div class="col-sm-9">
                                <input name="sign_in" class="form-control" type="text" placeholder="<?php   $timezone = $this->db->select('timezone')->from('setting')->get()->row();
                                  date_default_timezone_set($timezone->timezone);
                                 echo display('sign_in') ?>" id="sign_in" value="<?php echo  date("h:i:s a", time());?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sign_out" class="col-sm-3 col-form-label"><?php echo display('sign_out') ?> *</label>
                            <div class="col-sm-9">
                                <input name="sign_out" class="form-control" type="text" placeholder="<?php echo display('sign_out') ?>" id="sign_out" readonly="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staytime" class="col-sm-3 col-form-label"><?php echo display('staytime') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="staytime" class="form-control"  placeholder="<?php echo display('staytime') ?>" id="staytime" readonly="" >
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
     