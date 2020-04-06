<div class="form-group text-right">
<?php if($this->permission->method('leave','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_application');?></button> 
<?php endif; ?>
<?php if($this->permission->method('leave','read')->access()): ?>
<a href="<?php echo base_url();?>/leave/Leave/application_view" class="btn btn-primary"><?php echo display('manage_application');?></a>
<?php endif; ?>
</div>
<!--  -->

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th><?php echo display('cid') ?></th>
                        <th><?php echo display('name') ?></th>
                        <th><?php echo display('employee_id') ?></th>
                        <th><?php echo display('apply_strt_date') ?></th>
                        <th><?php echo display('apply_end_date') ?></th>
                        <th><?php echo display('leave_aprv_strt_date') ?></th>
                        <th><?php echo display('leave_aprv_end_date') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php   echo $row->first_name.' '.$row->last_name?></td>
                                <td><?php   echo $row->employee_id?></td>
                                <td><?php echo $row->apply_strt_date; ?></td>
                                <td><?php echo $row->apply_end_date; ?></td>
                                <td><?php echo $row->leave_aprv_strt_date; ?></td>
                                <td><?php echo $row->leave_aprv_end_date; ?></td> 
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
 
 
 <div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Application Form</strong></center>
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

                    <?= form_open_multipart('leave/Leave/application') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-2 col-form-label">Select <?php echo display('employee_name') ?></label>
                            <div class="col-sm-4">
                          <!--  <input type="text" name="employee_id" class="form-control"> -->
                            <?php echo form_dropdown('employee_id',$dropdown,null,'class="form-control" style="width:100%"') ?>
                               
                            </div>
                            <label for="apply_date" class="col-sm-2 col-form-label">
                            <?php echo display('app_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_date" class="datepicker form-control" id="f">   
                            </div>   
                        </div>
                          <div class="form-group row">
                            <label for="apply_strt_date" class="col-sm-2 col-form-label">
                            <?php echo display('apply_strt_date') ?> </label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_strt_date" class="datepicker form-control" id="e">
                               
                            </div>
                            <label for="apply_end_date" class="col-sm-2 col-form-label">
                            <?php echo display('apply_end_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_end_date" class="datepicker form-control" id="a">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="leave_aprv_strt_date" class="col-sm-2 col-form-label">
                            <?php echo display('leave_aprv_strt_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_aprv_strt_date" class="datepicker form-control leave_aprv_strt_date" id="b">
                               
                            </div>
                            <label for="leave_aprv_end_date" class="col-sm-2 col-form-label">
                            <?php echo display('leave_aprv_end_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_aprv_end_date" class="datepicker form-control leave_aprv_end_date" id="c">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="num_aprv_day" class="col-sm-2 col-form-label">
                            <?php echo display('num_aprv_day') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="num_aprv_day" class="form-control num_aprv_day">
                               
                            </div>
                            <label for="reason" class="col-sm-2 col-form-label"><?php echo display('reason') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="reason" class="form-control">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apply_hard_copy" class="col-sm-2 col-form-label">
                            <?php echo display('apply_hard_copy') ?></label>
                            <div class="col-sm-4">
                           <input type="file" name="apply_hard_copy" class="form-control">
                               
                            </div>
                            <label for="approve_date" class="col-sm-2 col-form-label">
                            <?php echo display('approve_date') ?></label>
                            <div class="col-sm-4">
                             <input type="text" name="approve_date" class="form-control"  id="d" >
                               
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="approved_by" class="col-sm-2 col-form-label">
                            <?php echo display('approved_by') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="approved_by" class="form-control">
                               
                            </div>
                            <label for="leave_type" class="col-sm-2 col-form-label">
                            <?php echo display('leave_type') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_type" class="form-control">
                               
                            </div>
                        </div>
                          
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
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

</div>

<script language="javascript"> 

 $(function(){
        $("#f").datepicker({ dateFormat:'yy-mm-dd' });
        $("#e").datepicker({ dateFormat:'yy-mm-dd' });
        $("#a").datepicker({ dateFormat:'yy-mm-dd' });
        $("#c").datepicker({ dateFormat:'yy-mm-dd' });
        $("#d").datepicker({ dateFormat:'yy-mm-dd' });
        $("#b").datepicker({ dateFormat:'yy-mm-dd' });
    });
    </script>
 <script language="javascript"> 
$(document).ready(function(e) {
    function calculation(){
    
   var date1 =new Date($('.leave_aprv_strt_date').val());
   

var date2 =new Date($('.leave_aprv_end_date').val());
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
//alert(diffDays);
//alert(diffDays);

         
        
        $('.num_aprv_day').val(diffDays);
        
        

        }
        $('.leave_aprv_strt_date,.leave_aprv_end_date,.num_aprv_day').keyup(calculation)


});
 

</script>