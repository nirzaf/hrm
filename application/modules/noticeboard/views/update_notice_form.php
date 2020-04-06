 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open_multipart('noticeboard/Notice_controller/update_notice_form/'. $data->notice_id) ?>
                

                    <input name="notice_id" type="hidden" value="<?php echo $data->notice_id ?>">
                  <div class="form-group row">
                           
                            <label for="notice_type" class="col-sm-3 col-form-label">
                            <?php echo display('notice_type') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_type" class=" form-control" value="<?php echo $data->notice_type ?>">
                               
                            </div>
                           
                        </div>
                          <div class="form-group row">
                           
                            <label for="notice_descriptiion" class="col-sm-3 col-form-label">
                            <?php echo display('notice_descriptiion') ?></label>
                            <div class="col-sm-9">
                           <textarea  name="notice_descriptiion" class=" form-control"><?php echo $data->notice_descriptiion ?></textarea>
                               
                            </div>
                           
                        </div>
                         <div class="form-group row">
                           
                            <label for="notice_date" class="col-sm-3 col-form-label">
                            <?php echo display('notice_date') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_date" class="datepicker form-control" id="notice_date" value="<?php echo $data->notice_date ?>">
                               
                            </div>
                           
                        </div>
                     
                         <div class="form-group row">
                            <label for="notice_attachment" class="col-sm-3 col-form-label">
                            <?php echo display('notice_attachment') ?></label>
                            <div class="col-sm-9">
                           <input type="file" name="notice_attachment" class="form-control">
                               
                            </div>
                            </div>
                            <input type="hidden" name="notice_attachment"value="<?php echo $data->notice_attachment ?>">
                         <div class="form-group row">
                           
                            <label for="notice_by" class="col-sm-3 col-form-label">
                            <?php echo display('notice_by') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_by" class=" form-control" value="<?php echo $data->notice_by ?>">
                               
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