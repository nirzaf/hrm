 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open_multipart('circularprocess/Candidate_select/update_selection_form/'. $data->can_sel_id) ?>
                

                    <input name="can_sel_id" type="hidden" value="<?php echo $data->can_sel_id ?>">
                 
                        <div class="form-group row">
                            <label for="can_id" class="col-sm-3 col-form-label"><?php echo display('can_id') ?> *</label>
                            <div class="col-sm-9">
                                <input name="can_id" class="form-control" type="text" value="<?php echo $data->can_id ; ?>" id="can_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="employee_id" class="form-control" id="employee_id" value="<?php echo $data->employee_id?>">
                            </div>
                        </div> 

                       <div class="form-group row">
                            <label for="pos_id" class="col-sm-3 col-form-label"><?php echo display('pos_id') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="pos_id" class="form-control" id="pos_id" value="<?php echo $data->pos_id?>">
                            </div>
                        </div> 
                       <div class="form-group row">
                            <label for="selection_terms" class="col-sm-3 col-form-label"><?php echo display('selection_terms') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="selection_terms" class="form-control" id="selection_terms" value="<?php echo $data->selection_terms?>">
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
     