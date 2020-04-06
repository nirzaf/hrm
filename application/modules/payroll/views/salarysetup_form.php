 <div class="form-group text-right">
  <?php if($this->permission->method('payroll','create')->access()): ?>
  <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
   <?php echo display('add_salary_setup') ?></button> 
 <?php endif; ?>
 <?php if($this->permission->method('payroll','read')->access()): ?>
 <a href="<?php echo base_url();?>/payroll/Payroll/salary_setup_view" class="btn btn-primary"><?php echo display('manage_salary_setup') ?></a>
<?php endif; ?>
</div>


<div id="add0" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <strong><?php echo display('salary_setup')?></strong>
      </div>
      <div class="modal-body">


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="panel">

              <div class="panel-body">

                <?= form_open('payroll/Payroll/create_s_setup') ?>
                <div class="form-group row">
                  <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                  <div class="col-sm-9">
                   <?php echo form_dropdown('employee_id',$employee,null,'class="form-control" id="employee_id" style="width:615px" onchange="employechange(this.value)"') ?>
                 </div>
               </div>

               <div class="form-group row">
                <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                <div class="col-sm-9">
                 <input type="text" class="form-control" name="sal_type_name" id="sal_type_name" readonly="">
                 <input type="hidden" class="form-control" name="sal_type" id="sal_type">
               </div>
             </div>
             <table  border="1" width="100%">
              <div class="row">

                <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;padding-top:20px"><?php echo display('addition')?></h4><br>
                 <table id="add">     
                  <tr><th  style="padding:10px"><?php echo display('basic')?></th><td><input type="text" id="basic" name="basic" class="form-control" disabled=""></td></tr>    
                                   <?php
                 $x=0;
                 foreach ($slname as $ab){
        //echo ++$x;
                  ?>
                  <tr><th style="padding:10px"><?php echo $ab->sal_name ;?>(%)</th><td><input type="text" name="amount[<?php echo $ab->salary_type_id; ?>]" class="form-control addamount" onkeyup="summary()" id="add_<?php echo $x;?>"></td></tr>
                  <?php
                $x++;}
                ?>
              </table>
            </td> 
            <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;"><?php echo display('deduction')?></h4><br>
              <table id="dduct">
                <?php
                $y=0;
                foreach ($sldname as $row){
                  ?>
                  <tr><th style="padding:10px"><?php echo $row->sal_name ;?> (%)</th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" onkeyup="summary()" class="form-control deducamount" id="dd_<?php echo $y;?>"></td></tr><?php
               $y++; }
                ?>
                <tr><th style="padding:10px"><?php echo display('tax')?> (%)</th><td><input type="text" name="amount[]"  onkeyup="summary()"  class="form-control deducamount" id="taxinput"></td><td style="padding:10px"><input type="checkbox" name="tax_manager" id="taxmanager" onchange='handletax(this);' value="1">Tax Manager</td></tr>

              </table>

            </td> 

          </div>

        </table>
      </div>
<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;"><?php echo display('gross_salary')?></label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="gross_salary" id="grsalary" readonly="">
       </div>
</div>

   <div class="form-group text-right">
    <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('set') ?></button>
  </div>
  <?php echo form_close() ?>

</div>  
</div>
</div>
</div>
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
              <th><?php echo display('cid') ?></th>
              <th>Employee Name</th>
              <th><?php echo display('employee_id') ?></th>
              <th><?php echo display('sal_type') ?></th>
              <th>Date</th>

            </tr>
          </thead>
          <tbody>
            <?php if (!empty($emp_sl_setup)) { ?>
              <?php $sl = 1; ?>
              <?php foreach ($emp_sl_setup as $que) { ?>
                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                  <td><?php echo $sl; ?></td>
                  <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                  <td><?php echo $que->employee_id; ?></td>
                  <td><?php echo $que->sal_type; ?></td>
                  <td><?php echo $que->create_date; ?></td>
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

<script type="text/javascript">
  function summary(){
var addper = 0;
 $(".addamount").each(function() {
        isNaN(this.value) || 0 == this.value.length || (addper += parseFloat(this.value))
    });
 if(addper >100){
  alert('You Can Not input more than 100%');
 }
var b = parseInt($('#basic').val());
var add = 0;
var deduct = 0;
 $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
document.getElementById('grsalary').value=add+b-(deduct);
}

 function handletax(checkbox){
  var deduct = 0;
  var add = 0;
  var b = parseInt($('#basic').val());
   $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
    $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 
  var amount = b-deduct;
  var  tax    = parseInt($('#taxinput').val());
  var netamount = amount+tax;
    if(checkbox.checked == true){
       $.ajax({
        url : '<?php echo site_url('payroll/Payroll/salarywithtax/')?>',
            method: 'post',
            dataType: 'json',
            data: 
            {
                'amount': amount,
                'tax'   : tax,
            },
        success: function(data)
        {            
              document.getElementById('grsalary').value=add+b-data-deduct;
              document.getElementById('taxinput').value='';
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }else{
var b = parseInt($('#basic').val());
var add = 0;
var deduct = 0;
 $(".addamount").each(function() {
  var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (add += parseFloat(value*basic/100))
    });
 $(".deducamount").each(function() {
   var value = this.value;
  var basic = parseInt($('#basic').val());
        isNaN(value*basic/100) || 0 == (value*basic/100).length || (deduct += parseFloat(value*basic/100))
    });
document.getElementById('grsalary').value=add+b-(deduct);
   }
}
//onchange empoyee id information
function employechange(id){
//alert(id);
$.ajax({
  url:"<?php echo base_url('payroll/Payroll/employeebasic/')?>",
  method:'post',
  dataType:'json',
  data:{
'employee_id': id,
  },
  success:function(data){
document.getElementById('basic').value=data.rate;
document.getElementById('sal_type').value=data.rate_type;
document.getElementById('sal_type_name').value=data.stype;
document.getElementById('grsalary').value='';
if(data.rate_type==1){
  document.getElementById("taxinput").disabled = true;
   document.getElementById("taxmanager").checked = true;
   document.getElementById("taxmanager").setAttribute('disabled','disabled');  
}else{
  document.getElementById("taxinput").disabled = false;
   document.getElementById("taxmanager").checked = false;
  document.getElementById("taxmanager").removeAttribute('disabled');  
}
var i;
var count = $('#add tr').length;
for (i = 0; i < count; i++) { 
   document.getElementById('add_'+i).value='';
    //document.getElementById('dd_'+i).value='';
}

// var dt = $('#dduct tr').length;
// alert(dt);
// for (i = 0; i < dt; i++) { 
//    document.getElementById('dd_'+i).value='';
// }
  },
   error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
});
}
</script>
