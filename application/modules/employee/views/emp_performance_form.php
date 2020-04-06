<div class="form-group text-right">

<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
Add Performance</button> 
<a href="<?php echo base_url();?>/employee/Employees/emp_performance_view" class="btn btn-primary">Manage Performance</a>

</div>

 <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                                    <th><?php echo display('Sl') ?></th>
                                    <th>Employee Name</th>
                                    <th><?php echo display('employee_id') ?></th>
                                    <th><?php echo display('note') ?></th>
                                    <th><?php echo display('date') ?></th>
                                    <th><?php echo display('note_by') ?></th>
                                    <th><?php echo display('number_of_star') ?></th>
                                    <th><?php echo display('status') ?></th>
                                    <th><?php echo display('updated_by') ?></th>
                                  
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_perform)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_perform as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                        <td><?php echo $sl; ?></td>
                                        <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                        <td><?php echo $que->employee_id; ?></td>
                                        <td><?php echo $que->note; ?></td>
                                        <td><?php echo $que->date; ?></td>
                                        <td><?php echo $que->note_by; ?></td>
                                        <td><?php
                                              for($i=1;$i <=$que->number_of_star;$i++){
                                               echo "<span class='fa fa-star' style='color:#F39C12'></span>";
                                              }
                                        
                                              ?>
                                             
                                         </td>
                                        <td><?php echo $que->status; ?></td>
                                        <td><?php echo $que->updated_by; ?></td>
                                       
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('employee_performance')?></strong>
            </div>
            <div class="modal-body">
           

   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open_multipart('employee/Employees/create_emp_performance') ?>
                     
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                            <div class="col-sm-9">
                               <?php echo form_dropdown('employee_id',$employee,null,'class="form-control" id="employee_id" style="width:400px"') ?>
                            </div>
                            </div>

                            <div class="form-group row">
                             <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> </label>
                            <div class="col-sm-9">
                                <input name="date" class="datepicker form-control" type="text" placeholder="<?php echo display('date') ?>" id="date">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="note" class="col-sm-3 col-form-label"><?php echo display('note') ?> </label>
                            <div class="col-sm-9">
                                <textarea name="note" class="form-control"  placeholder="<?php echo display('note') ?>" id="note"></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="number_of_star" class="col-sm-3 col-form-label"><?php echo display('number_of_star') ?> </label>
                            <div class="col-sm-9">
                                <input name="number_of_star" class="form-control" type="text" placeholder="<?php echo display('number_of_star') ?>" id="number_of_star" onkeyup="starcheck()">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label"><?php echo display('status') ?> </label>
                            <div class="col-sm-9">
                                <input type="text"name="status" class="form-control"  placeholder="<?php echo display('status') ?>" id="status" >
                            </div>
                        </div>
                        <div class="form-group row">
                            
                        </div> 
                    
              <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5" ><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5" id="sbmt" data-toggle="modal" data-target="#myModal"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>   
    
   
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>
    <script language="javascript"> 
    $(function(){
        $("#date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });


    function starcheck(){
 var star = $('#number_of_star').val();
if(star > 5){
    alert('You Can not input More Than five Star');
    document.getElementById('number_of_star').value = '';
    }
}
</script>