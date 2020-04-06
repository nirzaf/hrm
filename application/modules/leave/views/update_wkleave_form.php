
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                   
                    <?= form_open('leave/Leave/update_weekleave_form/'. $data->wk_id) ?>
                    <input type="hidden" name="wk_id" value="<?php echo $data->wk_id ?>">
                         <div class="form-group row">
                            <label for="dayname" class="col-sm-3 col-form-label"><?php echo display('dayname') ?> *</label>

                            
                            <div class="col-sm-9">
                               

                   <input type="checkbox" name="dayname[]"  value="Friday" <?php
                   
$text_line =$data->dayname;
$text_line = explode(",",$text_line);

                   
                   
                   if($text_line[0] == "Friday" OR $text_line[1] == "Friday"){echo 'checked';} ?> />Friday
                    <input type="checkbox" name="dayname[]" value="Satarday" <?php
                    $text_line =$data->dayname;
$text_line = explode(",",$text_line);
                    
                    if($text_line[0] == "Satarday" OR $text_line[1] == "Satarday"){echo 'checked';}?>  />Satarday
                    <input type="checkbox" name="dayname[]"  value="Sunday" <?php
                    
                    $text_line =$data->dayname;
$text_line = explode(",",$text_line);
                    
                    if($text_line[0] == "Sunday" OR $text_line[1] == "Sunday" OR $text_line[2] == "Sunday"){echo 'checked';}?>  />Sunday
                    <br>




                            </div>
                        </div>
                        

                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>