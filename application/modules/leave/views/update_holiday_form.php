 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('leave/Leave/update_holiday_form/'. $data->payrl_holi_id) ?>
                

                    <input name="payrl_holi_id" type="hidden" value="<?php echo $data->payrl_holi_id ?>">
                 
                         <div class="form-group row">
                            <label for="holiday_name" class="col-sm-3 col-form-label"><?php echo display('holiday_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="holiday_name" class="form-control" id="holiday_name" value="<?php echo $data->holiday_name?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="start_date" class="datepicker form-control" id="start_date" value="<?php echo $data->start_date?>">
                            </div>
                        </div> 

                       <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="end_date" class="datepicker form-control" id="end_date" value="<?php echo $data->end_date?>">
                            </div>
                        </div> 
                         <div class="form-group row">
                            <label for="no_of_days" class="col-sm-3 col-form-label"><?php echo display('no_of_days') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_of_days" class="form-control" id="no_of_days" value="<?php echo $data->no_of_days?>">
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
      <script type="text/javascript">
$(function() {
    $('input[name="working_period"]').daterangepicker();
});
</script>

<script language="javascript"> 

 $(function(){
        $("#start_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });
$(document).ready(function(e) {
      function calculation(){
    
   var date1 =new Date($('#start_date').val());
   

var date2 =new Date($('#end_date').val());
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        $('#no_of_days').val(diffDays+1);
        
        }
        $('#end_date').change(calculation)


});
 
    

</script>