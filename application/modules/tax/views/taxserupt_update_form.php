 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('tax/Tax/update_taxsetup_form/'. $data->tax_setup_id) ?>
                

                    <input name="tax_setup_id" type="hidden" value="<?php echo $data->tax_setup_id ?>">
                 
                         <div class="form-group row">
                            <label for="start_amount" class="col-sm-3 col-form-label"><?php echo display('start_amount') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="start_amount" class="form-control" id="start_amount" value="<?php echo $data->start_amount?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_amount" class="col-sm-3 col-form-label"><?php echo display('end_amount') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="end_amount" class="form-control" id="end_amount" value="<?php echo $data->end_amount?>">
                            </div>
                        </div> 

                       <div class="form-group row">
                            <label for="rate" class="col-sm-3 col-form-label"><?php echo display('rate') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="rate" class="form-control" id="rate" value="<?php echo $data->rate?>">
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
     