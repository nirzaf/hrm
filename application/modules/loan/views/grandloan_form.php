 <div class="form-group text-right">
  <?php if($this->permission->method('loan','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_loan')?></button> 
<?php endif; ?>
  <?php if($this->permission->method('loan','read')->access()): ?>
<a href="<?php echo base_url();?>loan/Loan/loan_view" class="btn btn-primary"><?php echo display('manage_granted_loan')?></a>
<?php endif; ?>
</div>
  
  

 
 <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('grant_loan')?></strong>
            </div>
            <div class="modal-body">
           

     <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                   
                </div>
                <div class="panel-body">

                    <?= form_open('loan/Loan/create_grandloan') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                            <div class="col-sm-9">
                            <?php echo form_dropdown('employee_id',$gndloan,null,'class="form-control" id="employee_id" style="width:617px"') ?>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="permission_by" class="col-sm-3 col-form-label"><?php echo display('permission_by') ?> *</label>
                            <div class="col-sm-9">
                                   <?php echo form_dropdown('permission_by',$gndloan,null,'class="form-control" id="permission_by" style="width:617px"') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loan_details" class="col-sm-3 col-form-label"><?php echo display('loan_details') ?></label>
                            <div class="col-sm-9">
                                <textarea name="loan_details" class="form-control" placeholder="<?php 
                                 echo display('loan_details') ?>" id="loan_details"></textarea> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_approve" class=" col-sm-3 col-form-label"><?php echo display('date_of_approve') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="date_of_approve" class=" form-control"  placeholder="<?php echo display('date_of_approve') ?>" id="date_of_approve" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="repayment_start_date" class=" col-sm-3 col-form-label"><?php echo display('repayment_start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="repayment_start_date" class="   form-control"  placeholder="<?php echo display('repayment_start_date') ?>" id="repayment_start_date" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 col-form-label"><?php echo display('amount') ?> *</label>
                            <div class="col-sm-9">
                                <input name="amount" class="form-control" type="text" placeholder="<?php echo display('amount') ?>" id="amount">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interest_rate" class="col-sm-3 col-form-label"><?php echo display('interest_rate') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="interest_rate" class="form-control"  placeholder="<?php echo display('interest_rate') ?>" id="interest_rate" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="installment_period" class="col-sm-3 col-form-label"><?php echo display('installment_period') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="installment_period" class="form-control"  placeholder="<?php echo display('installment_period_m') ?>" id="installment_period" >
                            </div>
                        </div>   
                         <div class="form-group row">
                            <label for="repayment_amount" class="col-sm-3 col-form-label"><?php echo display('repayment_amount') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="repayment_amount" class="form-control"  placeholder="<?php echo display('repayment_amount') ?>" id="repayment_amount" readonly>
                            </div>
                        </div>

                        
                          <div class="form-group row">
                            <label for="installment" class="col-sm-3 col-form-label"><?php echo display('installment') ?></label>
                            <div class="col-sm-9">
                                <input type="text" name="installment" class="form-control"  placeholder="<?php echo display('installment') ?>" id="installment" readonly>
                            </div>
                        </div> 
                          
                        
                        <div class="form-group row">
                            <label for="loan_status" class="col-sm-3 col-form-label"><?php echo display('loan_status') ?> *</label>
                            <div class="col-sm-9">
                           <select name="loan_status" class="form-control"  placeholder="<?php echo display('loan_status') ?>" id="loan_status" style="width:617px">
                           <option value="1">Granted</option>
                          <option value="0">Deny</option>
                           </select>
                                
                            </div>
                        </div> 

             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('grant') ?></button>
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
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('permission_by') ?></th>
                            <th><?php echo display('loan_no') ?></th>                       
                            <th><?php echo display('amount') ?></th>
                            <th><?php echo display('interest_rate') ?></th>
                            <th><?php echo display('installment_period') ?></th>
                            <th><?php echo display('repayment_amount') ?></th>
                            <th><?php echo display('date_of_approve') ?></th>
                            <th><?php echo display('repayment_start_date') ?></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($loan)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($loan as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->Pname; ?></td>
                                     <td><?php echo $que->loan_id; ?></td>
                                    <td><?php echo $que->amount; ?>$</td>
                                    <td><?php echo $que->interest_rate; ?>%</td>
                                    <td><?php echo $que->installment_period; ?>Month</td>
                                    <td><?php echo $que->repayment_amount; ?>$</td>
                                    <td><?php echo $que->date_of_approve; ?></td>
                                    <td><?php echo $que->repayment_start_date; ?></td>

                                   
                                   
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
 
 
<!-- 
      <script type="text/javascript">
$(function() {
    $('input[name="installment_period"]').daterangepicker();
});
</script>
 -->


<script language="javascript"> 

 $(function(){
        $("#repayment_start_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#date_of_approve").datepicker({ dateFormat:'yy-mm-dd' });
    });
$(document).ready(function(e) {
    function calculation(){
    var loan=Number($('#amount').val());
    var payl=Number($('#interest_rate').val());
    var inssdsd=Number($('#installment_period').val());
   // var ab=new Date($('#repayment_start_date').val());

   // var month=ab.getMonth();

   var date1 =new Date($('#repayment_start_date').val());
   

var date2 =new Date($('#date_of_approve').val());
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil((timeDiff / (1000 * 3600 * 24))/30); 
//alert(diffDays);
//alert(diffDays);

         var totalp=Math.round((loan+(loan*payl/100)).toFixed(2));

         var ab=Math.round((totalp)/inssdsd.toFixed(2));
        
        $('#repayment_amount').val(totalp);
         $('#installment').val(ab);
        

        }
        $('#amount,#interest_rate,#repayment_amount,#installment,#installment_period,#repayment_start_date,date_of_approve').keyup(calculation)


});
 
    

</script>