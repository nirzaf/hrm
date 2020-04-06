 <div class="row">
          <div class="col-sm-12 col-md-11">
            <div class="panel">
              
              <div class="panel-body">

                <?= form_open_multipart('circularprocess/Candidate_select/update_shortlist_form/'. $data->can_short_id) ?>
                

                    <input name="can_short_id" type="hidden" value="<?php echo $data->can_short_id ?>">
                 
                        <div class="form-group row">
                            <label for="can_id" class="col-sm-3 col-form-label"><?php echo display('candidate_name') ?> *</label>
                            <div class="col-sm-9">
                               
                                <?php echo form_dropdown('can_id', $canlist, (!empty($data->can_id)?$data->can_id:null), ' class="form-control"') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job_adv_id" class="col-sm-3 col-form-label"><?php echo display('job_adv_id') ?> *</label>
                            <div class="col-sm-9">
                                <?php echo form_dropdown('job_adv_id', $dropdown, (!empty($data->job_adv_id)?$data->job_adv_id:null), ' class="form-control"') ?>
                            </div>
                        </div> 

                       <div class="form-group row">
                            <label for="date_of_shortlist" class="col-sm-3 col-form-label"><?php echo display('date_of_shortlist') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="date_of_shortlist" class="datepicker form-control" id="date_of_shortlist" value="<?php echo $data->date_of_shortlist?>">
                            </div>
                        </div> 
                       <div class="form-group row">
                            <label for="interview_date" class="col-sm-3 col-form-label"><?php echo display('interview_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="interview_date" class="datepicker form-control" id="interview_date" value="<?php echo $data->interview_date?>">
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
      <script language="javascript"> 
    $(function(){
        $(".datepicker").datepicker({ dateFormat:'yy-mm-dd' });
    });
</script>