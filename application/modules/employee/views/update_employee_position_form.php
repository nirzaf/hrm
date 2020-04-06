 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open('employee/Employees/update_emp_pos_form/'. $data->emp_pos_id) ?>
                

                    <input name="emp_pos_id" type="hidden" value="<?php echo $data->emp_pos_id ?>">
                 
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
                            <label for="position_details" class="col-sm-3 col-form-label"><?php echo display('position_details') ?> *</label>
                            <div class="col-sm-9">
                                <textarea name="position_details" class="form-control" id="position_details"><?php echo $data->position_details?></textarea>
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

function SelectToLoad(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('employee/Employees/select_to_load/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              $('[name="pos_id"]').val(data.pos_id);
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
</script>