 
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open_multipart('circularprocess/Candidate/create_workexperience') ?>
                        <div class="form-group row">
                            <label for="pos_id" class="col-sm-3 col-form-label"><?php echo display('pos_id') ?> *</label>
                            <div class="col-sm-9">


<?php
echo form_dropdown('can_id', $dropdown_edu, null, 'class="form-control"');
?> 

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-sm-3 col-form-label"><?php echo display('company_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="company_name" class="form-control"  placeholder="<?php echo display('company_name') ?>" id="company_name"  >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="working_period" class="col-sm-3 col-form-label"><?php echo display('working_period') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_period" class="form-control"  placeholder="<?php echo display('working_period') ?>" id="working_period">
                            </div>
                        </div> 
                          <div class="form-group row">
                            <label for="duties" class="col-sm-3 col-form-label"><?php echo display('duties') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="duties" class="form-control"  placeholder="<?php echo display('duties') ?>" id="duties" >
                            </div>
                        </div> 

                          <div class="form-group row">
                            <label for="supervisor" class="col-sm-3 col-form-label"><?php echo display('supervisor') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text"  name="supervisor" class="form-control"  placeholder="<?php echo display('supervisor') ?>" id="supervisor" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="signature" class="col-sm-3 col-form-label"><?php echo display('signature') ?> *</label>
                            <div class="col-sm-9">
                                <input type="file" name=" signature" class="form-control"  placeholder="<?php echo display('signature') ?>" id="signature">
                            </div>
                        </div> 
                      

                        
     
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('send') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
     