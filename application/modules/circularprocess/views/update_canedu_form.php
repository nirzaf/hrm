 
  
  
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('circularprocess/Candidate/update_can_eduifo_form/'. $data->can_id) ?>

                  
                           
                           
                             <input type="hidden" name="can_id" class="form-control"  placeholder="<?php echo display('can_id') ?>" id="can_id" value="<?php echo $data->can_id ?>">
                      
<?php if (!empty($edu)) { ?>
<?php 
foreach ($edu as $upedu) {?>
                        <div class="form-group row">
                            <label for="degree_name" class="col-sm-3 col-form-label"><?php echo display('degree_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="degree_name[]" class="form-control"  placeholder="<?php echo display('degree_name') ?>" id="degree_name" value="<?php echo $upedu->degree_name ?>"  >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="university_name" class="col-sm-3 col-form-label"><?php echo display('university_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="university_name[]" class="form-control"  placeholder="<?php echo display('university_name') ?>" id="university_name"  value="<?php echo $upedu->university_name ?>">
                            </div>
                        </div> 
                          <div class="form-group row">
                            <label for="cgp" class="col-sm-3 col-form-label"><?php echo display('cgp') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="cgp[]" class="form-control"  placeholder="<?php echo display('cgp') ?>" id="cgp"  value="<?php echo $upedu->cgp ?>" >
                            </div>
                        </div> 

                         
                       <?php      
                  }?>
                  <?php      
                  }?>
                  
                   <div class="form-group row">
                            <label for="comments" class="col-sm-3 col-form-label"><?php echo display('comments') ?> *</label>
                            <div class="col-sm-9">
                                <textarea  name="comments" class="form-control"  placeholder="<?php echo display('comments') ?>" id="comments" ><?php echo $upedu->comments ?></textarea>
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
    