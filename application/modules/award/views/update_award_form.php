      <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                       <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('award/Award_controller/update_award_form/'. $data->award_id) ?>
                

                    <input name="award_id" type="hidden" value="<?php echo $data->award_id ?>">
                  <div class="form-group row">
                           
                            <label for="award_name" class="col-sm-3 col-form-label">
                            <?php echo display('award_name') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="award_name" class=" form-control" value="<?php echo $data->award_name ?>">
                               
                            </div>
                           
                        </div>
                        <div class="form-group row">
                           
                            <label for="aw_description" class="col-sm-3 col-form-label">
                            <?php echo display('aw_description') ?></label>
                            <div class="col-sm-9">
                           <textarea  name="aw_description" class=" form-control"><?php echo $data->aw_description ?></textarea>
                               
                            </div>
                           
                        </div>
                         <div class="form-group row">
                           
                            <label for="awr_gift_item" class="col-sm-3 col-form-label">
                            <?php echo display('awr_gift_item') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="awr_gift_item" class=" form-control" id="awr_gift_item" value="<?php echo $data->awr_gift_item ?>">
                               
                            </div>
                           
                        </div>
                     
                         <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">
                            <?php echo display('date') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="date" id="date" class="datepicker form-control" value="<?php echo $data->date ?>">
                               
                            </div>
                            </div>
                         <div class="form-group row">
                           
                            <label for="employee_id" class="col-sm-3 col-form-label">
                            <?php echo display('employee_name') ?></label>
                            <div class="col-sm-9">
                            <?php
                        $value= $bb['employee_id'];
echo form_dropdown('employee_id', $dropdown, $value, 'class="form-control"');
?>
                               
                            </div>
                           
                        </div>
                        <div class="form-group row">
                           
                            <label for="awarded_by" class="col-sm-3 col-form-label">
                            <?php echo display('awarded_by') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="awarded_by" class=" form-control" value="<?php echo $data->awarded_by ?>">
                               
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
        $("#notice_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });


    </script>