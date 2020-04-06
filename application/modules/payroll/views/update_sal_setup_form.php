       <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="panel">

              <div class="panel-body">

                <?= form_open('payroll/Payroll/updates_salstup_form/'. $data->employee_id) ?>
                <div class="form-group row">
                  <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                  <div class="col-sm-9">
                   <?php echo form_dropdown('employee_id',$employee,(!empty($data->employee_id)?$data->employee_id:null),'class="form-control" id="employee_id" style="width:615px" onchange="employechange(this.value)"') ?>
                 </div>
               </div>

               <div class="form-group row">
                <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                <div class="col-sm-9">
                 <input type="text" class="form-control" name="sal_type_name" id="sal_type_name" value="<?php if($EmpRate->rate_type==1){
                    echo 'Hourly';
                 }else{
                    echo 'Salary';
                 }?>">
                 <input type="hidden" class="form-control" name="sal_type" id="sal_type" value="<?php echo $EmpRate->rate_type; ?>">
               </div>
             </div>
             <table  border="1" width="100%">
              <div class="row">

                <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;padding-top:20px">Addition</h4><br>
                 <table id="add">   <?php foreach($amo as $basic){}?>   
                  <tr><th  style="padding:10px">Basic</th><td><input type="text" id="basic" name="basic" class="form-control" disabled="" value="<?php echo $EmpRate->rate; ?>"></td></tr>    
                                   <?php
                 $x=0;
                foreach($amo as $value){?>
                             <tr>
                             <th style="padding:10px"><?php echo $value->sal_name ;?> (%)</th>
                                <td>
                                <input type="text" name="amount[<?php echo $value->salary_type_id; ?>]" class="form-control addamount" onkeyup="summary()" value="<?php echo $value->amount; ?>" id="add_<?php echo $x;?>">
                             </td>
                             </tr>
                             <?php $x++;} ?>
              </table>
            </td> 
            <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;">Deduction</h4><br>
              <table id="dduct">
                <?php
                $y=0;
                foreach ($samlft as $row){

                  ?>
                  <tr><th style="padding:10px"><?php echo $row->sal_name ;?> (%)</th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" onkeyup="summary()" class="form-control deducamount" value="<?php echo $row->amount ?>" id="dd_<?php echo $y;?>"></td></tr><?php
               $y++; }
                ?>
                <tr><th style="padding:10px">Tax (%)</th><td><input type="text" name="amount[]"  onkeyup="summary()"  class="form-control deducamount" id="taxinput" <?php if($EmpRate->rate_type==1){
                    echo 'readonly';
                } ?>></td><td style="padding:10px"><input type="checkbox" name="tax_manager" id="taxmanager" onchange='handletax(this);' value="1" <?php if($EmpRate->rate_type==1){
                    echo 'checked'.'  '.'disabled';
                } ?>>Tax Manager</td></tr>

              </table>

            </td> 

          </div>

        </table>
      </div>
<div class="form-group row">
   <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;">Gross Salary</label>
        <div class="col-sm-9">
<input type="text" class="form-control" name="gross_salary" value="<?php echo $basic->gross_salary; ?>" id="grsalary" readonly="">
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

var dt = $('#dduct tr').length;
alert(dt);
for (i = 0; i < dt; i++) { 
   document.getElementById('dd_'+i).value='';
}
  },
   error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
});
}
</script>