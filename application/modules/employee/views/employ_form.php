<style type="text/css">


.nav.nav-tabs li a {
  background-color: green;
  color:white;
}

.nav.nav-tabs li:not(.active) a {
  pointer-events:none;
  background-color: #2554C7;
  color:white;
}
.nav.nav-tabs li (.active) a{
  background-color: red;
  color:white;
}
ul li a{
  font-size: 12.5px;
}
</style>
<div class="row">
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home"><?php echo display('basic_info')?></a></li>
      <li><a data-toggle="tab" href="#menu1" ><?php echo display('positional_info')?></a></li>
      <li><a data-toggle="tab" href="#menu2" ><?php echo display('benefits')?></a></li>
      <li><a data-toggle="tab" href="#classmenu" ><?php echo display('class')?></a></li>
      <li><a data-toggle="tab" href="#menu3" ><?php echo display('supervisor')?></a></li>
      <li><a data-toggle="tab" href="#menu4" ><?php echo display('biographical_info')?></a></li>
      <li><a data-toggle="tab" href="#menu5" ><?php echo display('additional_address')?></a></li>
      <li><a data-toggle="tab" href="#menu6" ><?php echo display('emerg_contct')?></a></li>
      <li><a data-toggle="tab" href="#menu7" ><?php echo display('custom')?></a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="row">
          <div class="col-sm-12 col-md-11">
            <div class="panel">
              
              <div class="panel-body">

               <?= form_open_multipart('employee/Employees/create_employee','id="emp_form"') ?>
               <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="first_name"><?php echo display('first_name')?><sup class="color-red ">*</sup></label>
                      <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name">
                  </div>
                  
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="l_name"><?php echo display('middle_name')?> </label>
                    <input type="text" class="form-control" id="middle_name"
                    name="middle_name" placeholder="Your Middle Name">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="l_name"><?php echo display('last_name')?></label>
                    
                    <input type="text" class="form-control" id="last_name"
                    name="last_name" placeholder="Your Last Name">
                    
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="l_name"><?php echo display('maiden_name')?> </label>
                    <input type="text" class="form-control" id="maiden_name"
                    name="maiden_name" placeholder="Your Maiden Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="email"><?php echo display('email')?> <sup class="color-red ">*</sup></label>
                      <input type="email" class="form-control"
                      name="email" id="email" placeholder="Your Email">
                      <span id="email_v_message"></span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="phone"><?php echo display('phone')?>  <sup class="color-red ">*</sup></label>
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="phone"><?php echo display('alter_phone')?> <sup class="color-red "></sup></label>
                    <input type="number" class="form-control" name="alter_phone" id="phone" placeholder="Your Phone Number">
                  </div>
                </div>

              </div>

              <div class="row">
               <div class="col-sm-4">
                <div class="form-group">
                  <label for="state"><?php echo display('state')?></label>
                  <?php echo form_dropdown('state', $country_list, (!empty($emp->state)?$emp->state:"York"), ' class="form-control"') ?> 
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="city"><?php echo display('city')?> </label>
                  <input type="text" class="form-control" id="city"
                  name="city" placeholder="City">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="zip_code"><?php echo display('zip_code')?></label>
                  <input type="number" class="form-control" id="zip_code"
                  name="zip_code" placeholder="Your Zip Code">
                </div>
              </div>
            </div>
            <div class="form-group text-right">
             <input type="button" class="btn btn-primary btnNext" onclick="valid_inf()" value="NEXT">
             
           </div>
           

         </div>  
       </div>
     </div>
   </div>
 </div>
 <div id="menu1" class="tab-pane fade">
   <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="dept_id"><?php echo display('division');?> <sup class="color-red ">*</sup></label><br>
               
                 <select name="division" id="division" class="form-control" style="width: 480px">
                  <option value=""> Select Division</option>
                  <?php

                  foreach ($dropdowndept as $division) {
                    if ($division_type == 0) {
                      if ($division_type == 0) {
                        echo '</optgroup>';
                      }
                      echo '<optgroup label="'.$division['department_name'].'">';
                    }
                    $vl = $this->db->select('*')->from('department')->where('parent_id',$division['dept_id'])->get()->result();
                    foreach ($vl as $dv) {
                      echo '<option value="'.$dv->dept_id.'">'.$dv->department_name.'</option>';
                    }
                    $division_type = $division['parent_id'];    
                  }
                  if ($division_type == 0) {
                    echo '</optgroup>';
                  }
                  ?>
                </select>
                <span id="divis"></span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="designation"><?php echo display('designation');?> <sup class="color-red ">*</sup></label>
              
                <select name="pos_id" id="designation" class="form-control" style="width: 480px">
                  <option value="">select Designation</option>
                  <?php foreach ($designation as $desig) {?>
                    <option value="<?php echo $desig->pos_id?>"><?php echo $desig->position_name;?></option>
                  <?php } ?>
                </select>
                <span id="desig"></span>
              
            </div>
          </div>

          
        </div>
        <div class="row">
          
         <div class="col-sm-6">
          <div class="form-group">
            <label for="period"><?php echo display('duty_type')?> </label><br>
            <select name="duty_type"  class="form-control" style="width: 480px">
              <option value="1"> Full Time</option>
              <option value="2"> Part Time</option>
              <option value="3"> Contructual</option>
              <option value="4"> Other</option>
            </select>
          </div>
        </div>


        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('hire_date')?> <sup class="color-red ">*</sup></label>
              <input type="text" class="form-control datepicker" 
              name="hiredate" id="hiredate" style="width: 480px" placeholder="Hire date">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('original_h_date')?> <sup class="color-red ">*</sup></label>
              <input type="text" class="form-control datepicker" 
              name="ohiredate" id="ohiredate" placeholder="Original Hire date">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('termination_date')?> </label>
            <input type="text" class="form-control datepicker" 
            name="terminatedate" id="tdate" placeholder="Termination date">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('termination_reason')?></label>
            <textarea class="form-control" 
            name="termreason" id="treason" placeholder="Termination Reason"></textarea> 
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="period"><?php echo display('voluntary_termination')?></label>
            <select name="volunt_termination"  class="form-control" style="width: 480px">
              <option value=""> Select One</option>
              <option value="1"> Yes</option>
              <option value="2">No</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('re_hire_date')?></label>
            <input type="text" class="form-control datepicker" 
            name="rehiredate" id="rhdate" placeholder="Rehire date">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="period"><?php echo display('rate_type')?> <sup class="color-red ">*</sup></label>
              <select name="rate_type" id="rate_type"  class="form-control" style="width: 480px">
                <option value="">Select One</option>
                <option value="1">Hourly</option>
                <option value="2">Salary</option>
              </select>
              <span id="rat_tp"></span>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('s_rate')?> <sup class="color-red ">*</sup></label>
              <input type="number" class="form-control" 
              name="rate" id="rate" placeholder="Rate">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="period"><?php echo display('pay_frequency')?> <sup class="color-red ">*</sup></label><br>
   
              <select name="pay_frequency" id="pay_frequency"  class="form-control" style="width: 480px">
                <option value="">Select Frequency</option>
                <option value="1">Weekly</option>
                <option value="2">Biweekly</option>
                <option value="3">Annual</option>
              </select>
              <span id="frequ"></span>
    
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('pay_frequency_txt')?></label>
            <input type="text" class="form-control" 
            name="pay_f_text" id="qfre_text" placeholder="<?php echo display('pay_frequency_txt')?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('hourly_rate2')?></label>
            <input type="number" class="form-control" 
            name="h_rate2" id="rate2" placeholder="Hourly Rate2">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('hourly_rate3')?></label>
            <input type="number" class="form-control" 
            name="h_rate3" id="rate3" placeholder="Hourly Rate">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('home_department')?></label>
            <input type="text" class="form-control" 
            name="h_department" id="rate3" placeholder="<?php echo display('home_department')?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="work_hour"><?php echo display('department_text')?></label>
            <input type="text" class="form-control" 
            name="h_dep_text" id="hdptext" placeholder="<?php echo display('department_text')?>">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group text-right">
      <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
      <input type="button" class="btn btn-primary btnNext" onclick="valid_inf2()" value="NEXT">
      
    </div>
  </div>
</div>
</div>
</div>
<div id="menu2" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="dfs"><?php echo display('benifit_class_code')?></label>
                <input type="text" class="form-control" id="bnfid"
                name="benifit_c_code[]"  placeholder="Benifit Class Code">
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="l_name"><?php echo display('benifit_desc')?></label>
                <input type="text" class="form-control" id="benifit_c_code_d"
                name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                <input type="text" class="form-control datepicker" 
                name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
            </div>
            

          </div>
          <div id="addbenifit" class="toggle">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="dfs"><?php echo display('benifit_class_code')?></label>
                  <input type="text" class="form-control" id="bnfid"
                  name="benifit_c_code[]"  placeholder="Benifit Class Code">
                </div>
              </div>
              
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="l_name"><?php echo display('benifit_desc')?></label>
                  <input type="text" class="form-control" id="benifit_c_code_d"
                  name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                  <input type="text" class="form-control datepicker" 
                  name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                  <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
              </div>
              
              
            </div>
            
            <div id="addbenifit" class="toggle">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="dfs"><?php echo display('benifit_class_code')?></label>
                    <input type="text" class="form-control" id="bnfid"
                    name="benifit_c_code[]"  placeholder="Benifit Class Code">
                  </div>
                </div>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="l_name"><?php echo display('benifit_desc')?></label>
                    <input type="text" class="form-control" id="benifit_c_code_d"
                    name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                    <input type="text" class="form-control datepicker" 
                    name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                    <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
                  </div>
                </div>
                
                
              </div>
              <div id="addbenifit" class="toggle">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dfs"><?php echo display('benifit_class_code')?></label>
                      <input type="text" class="form-control" id="bnfid"
                      name="benifit_c_code[]"  placeholder="Benifit Class Code">
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="l_name"><?php echo display('benifit_desc')?></label>
                      <input type="text" class="form-control" id="benifit_c_code_d"
                      name="benifit_c_code_d[]" placeholder="<?php echo display('benifit_desc')?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="l_name"><?php echo display('benifit_acc_date')?> </label>
                      <input type="text" class="form-control datepicker" 
                      name="benifit_acc_date[]" placeholder="Benefit Accrual Date">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="status"><?php echo display('benifit_sta')?> <sup class="color-red "></sup></label>
                      <select name="benifit_sst[]"  class="form-control" style="width: 480px">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                
              </div>
            </div>
          </div>

          <div class="form-group text-right">
           
            <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
            <input type="button" class="btn btn-primary btnNext" onclick="valid_inf3()" value="NEXT">
          </div>
          

        </div>  
      </div>
    </div>
  </div>
</div>
<!-- class -->
<div id="classmenu" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="dfs"><?php echo display('class_code')?></label>
                <input type="text" class="form-control" id="c_code"
                name="c_code"  placeholder="<?php echo display('class_code')?>">
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="l_name"><?php echo display('class_descript')?></label>
                <input type="text" class="form-control" id="c_code_d"
                name="c_code_d" placeholder="<?php echo display('class_descript')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="l_name"><?php echo display('class_acc_date')?> </label>
                <input type="text" class="form-control datepicker" id="class_acc_date"
                name="class_acc_date" placeholder="<?php echo display('class_acc_date')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="status"><?php echo display('class_sta')?> <sup class="color-red "></sup></label>
                <select name="class_sst"  class="form-control" style="width: 480px">
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
            </div>
            

          </div>


          <div class="form-group text-right">
           
            <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
            <input type="button" class="btn btn-primary btnNext" onclick="valid_class()" value="NEXT">
          </div>
          

        </div>  
      </div>
    </div>
  </div>
</div>
<!-- supervisor -->
<div id="menu3" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="s_name"><?php echo display('super_visor_name')?></label>
                <select name="supervisorname"  class="form-control" style="width: 480px">
                  <option value="">Select One</option>
                  <option value="self"> Self </option>
                  <?php foreach ($supervisor as $suplist) {?>
                    <option value="<?php echo $suplist->employee_id?>"><?php echo $suplist->first_name.' '.$suplist->last_name?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="l_name"><?php echo display('is_super_visor')?></label>
                <select name="is_supervisor"  class="form-control" style="width: 480px">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reports"><?php echo display('supervisor_report')?> </label>
                <input type="text" class="form-control" 
                name="reports" placeholder="Reports">
              </div>
            </div>

          </div>

          <div class="form-group text-right">
           
           <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
           <input type="button" class="btn btn-primary btnNext" onclick="valid_inf4()" value="NEXT">
         </div>
         

       </div>  
     </div>
   </div>
 </div>
</div>
<div id="menu4" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="s_name"><?php echo display('dob')?><sup class="color-red ">*</sup></label>
                  <input type="text" class="form-control datepicker" id="dob"
                  name="dob" placeholder="<?php echo display('dob')?>">
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="gender"><?php echo display('gender')?><sup class="color-red ">*</sup></label>
             
                 <select name="gender" id="gender" class="form-control" style="width: 480px">
                  <option value="">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="2">Other</option>
                </select>
                <span id="gend"></span>
             
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="reports"><?php echo display('marital_stats')?> </label>
              <select name="marital_status"  class="form-control" style="width: 480px">
                <option value="1">Single</option>
                <option value="2">Married</option>
                <option value="3">Divorced</option>
                <option value="4">Widowed</option>
                <option value="5">Other</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="s_name"><?php echo display('ethnic_group')?></label>
              <input type="text" class="form-control" id="ethnic"
              name="ethnic" placeholder="<?php echo display('ethnic_group')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="eeo_class"><?php echo display('eeo_class_gp')?></label>
              <input type="text" class="form-control" id="eeo_class"
              name="eeo_class" placeholder="<?php echo display('eeo_class_gp')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="ssn"><?php echo display('ssn')?> <sup class="color-red ">*</sup></label>
                <input type="text" class="form-control" id="ssn"
                name="ssn" placeholder="<?php echo display('ssn')?>">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="w_s"><?php echo display('work_in_state')?></label>
              <select name="w_s"  class="form-control" style="width: 480px">
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="l_in_s"><?php echo display('live_in_state')?></label>
              <select name="l_in_s"  class="form-control" style="width: 480px">
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>


          <div class="col-sm-6">
            <div class="form-group">
              <label for="citizenship"><?php echo display('citizenship')?></label>
              <select name="citizenship"  class="form-control"  style="width: 480px">
                <option value="1"> Citizen</option>
                <option value="0"> Non-citizen</option>
              </select>
            </div>
          </div>


          <div class="col-sm-6">
            <label for="picture"><?php echo display('picture')?></label>
            <input type="file" accept="image/*" name="picture" onchange="loadFile(event)">
            <small id="fileHelp" class="text-muted"><img src="<?php echo base_url();?>event/css/images/user.jpg" id="output" style="height: 150px;width: 200px" class="img-thumbnail"/>
            </small>
          </div>

        </div>

        <div class="form-group text-right">
         
         <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
         <input type="button" class="btn btn-primary btnNext" onclick="valid_inf5()" value="NEXT">
       </div>
       

     </div>  
   </div>
 </div>
</div>
</div>
<div id="menu5" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="s_name"><?php echo display('home_email')?></label>
                <input type="email" class="form-control" id="h_email"
                name="h_email" placeholder="Home Email">
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="b_email"><?php echo display('business_email')?></label>
                <input type="email" class="form-control" id="b_email"
                name="b_email" placeholder="<?php echo display('business_email')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="h_phone"><?php echo display('home_phone')?> <sup class="color-red ">*</sup></label>
                  <input type="text" class="form-control" id="h_phone"
                  name="h_phone" placeholder="<?php echo display('home_phone')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="w_phone"><?php echo display('business_phone')?> </label>
                <input type="text" class="form-control" id="w_phone"
                name="w_phone" placeholder="<?php echo display('business_phone')?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="c_phone"><?php echo display('cell_phone')?> <sup class="color-red ">*</sup></label>
                  <input type="text" class="form-control" id="c_phone"
                  name="c_phone" placeholder="<?php echo display('cell_phone')?>">
              </div>
            </div>
          </div>

          <div class="form-group text-right">
           
           <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
           <input type="button" class="btn btn-primary btnNext" onclick="valid_inf6()" value="NEXT">
         </div>
         

       </div>  
     </div>
   </div>
 </div>
</div>
<div id="menu6" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="s_name"><?php echo display('emerg_contct')?> <sup class="color-red ">*</sup></label>
         
                 <input type="text" class="form-control" id="em_contact"
                 name="em_contact" placeholder="Emergency Contact">
              
             </div>
           </div>
           
           <div class="col-sm-6">
            <div class="form-group">
              <label for="e_h_phone"><?php echo display('emerg_home_phone')?> <sup class="color-red ">*</sup></label>
                <input type="text" class="form-control" id="e_h_phone"
                name="e_h_phone" placeholder="<?php echo display('emerg_home_phone')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="e_w_phone"><?php echo display('emrg_w_phone')?> <sup class="color-red ">*</sup></label>
                <input type="text" class="form-control" id="e_w_phone"
                name="e_w_phone" placeholder="<?php echo display('emrg_w_phone')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="e_c_relation"><?php echo 'Emergency Contact Relation'?> </label>
              <input type="text" class="form-control" id="e_c_relation"
              name="e_c_relation" placeholder="<?php echo display('emer_con_rela')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="alt_em_cont"><?php echo display('alt_em_contct')?></label>
              <input type="text" class="form-control" id="alt_em_cont"
              name="alt_em_cont" placeholder="<?php echo display('alt_em_contct')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="a_e_h_phone"><?php echo display('alt_emg_h_phone')?> </label>
              <input type="text" class="form-control" id="a_e_h_phone"
              name="a_e_h_phone" placeholder="<?php echo display('alt_emg_h_phone')?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="a_e_w_phone"><?php echo display('alt_emg_w_phone')?></label>
              <input type="text" class="form-control" id="a_e_w_phone"
              name="a_e_w_phone" placeholder="<?php echo display('alt_emg_w_phone')?>">
            </div>
          </div>
        </div>

        

        <div class="form-group text-right">
          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
          <input type="button" class="btn btn-primary" value="Next" onclick="valid_inf7()">
        </div>
        
      </div>  
    </div>
  </div>
</div>
</div>
<div id="menu7" class="tab-pane fade">
  <div class="row">
    <div class="col-sm-12 col-md-11">
      <div class="panel">
        
       <div class="panel-body">
        <span>        
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                <input type="text" class="form-control" id="c_f_name"
                name="c_f_name[]" placeholder="Custom Field Name">
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                <select name="c_f_type[]"  class="form-control">
                  <option value="1">Text</option>
                  <option value="2">Date</option>
                  <option value="3">Text Area</option>
                </select>
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group">
                <label for="reports"><?php echo 'Custom Value'?> </label>
                <input type="text" name="customvalue[]" class="form-control" placeholder="custom value">

              </div>
            </div>
            
          </div>

        </span>
        <div id="add" class="toggle">
          <span>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                  <input type="text" class="form-control" id="c_f_name"
                  name="c_f_name[]" placeholder="Custom Field Name">
                </div>
              </div>
              
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                  <select name="c_f_type[]"  class="form-control">
                    <option value="1">Text</option>
                    <option value="2">Date</option>
                    <option value="3">Text Area</option>
                  </select>
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reports"><?php echo 'Custom Value'?> </label>
                  <input type="text" name="customvalue[]" class="form-control" placeholder="custom value">

                </div>
              </div>
              
            </div>
          </span>
          <div id="add" class="toggle">
            <span>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="c_f_name"><?php echo 'Custom Field Name';?></label>
                    <input type="text" class="form-control" id="c_f_name"
                    name="c_f_name[]" placeholder="Custom Field Name">
                  </div>
                </div>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="c_f_type"><?php echo 'Custom Field Type';?></label>
                    <select name="c_f_type[]"  class="form-control">
                      <option value="1">Text</option>
                      <option value="2">Date</option>
                      <option value="3">Text Area</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="reports"><?php echo 'Custom Value'?> </label>
                    <input type="text" name="customvalue[]" class="form-control" placeholder="custom value">

                  </div>
                </div>
                
              </div>
            </span>
          </div>
        </div>

        <div class="form-group text-right">
          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">  
          <input type="submit" class="btn btn-success" onclick="valid_inf8()" value="Save">
        </div>
        
        <?php echo form_close() ?>
      </div>    
    </div>
  </div>
</div>
</div>

</div>
</div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script>

  $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });

  $("#first_name").on('keyup', function() {
    var inpfirstname = document.getElementById('first_name');
    if (inpfirstname.value.length === 0) return;
    document.getElementById("first_name").style.borderColor = "green";
  });
  $("#phone").on('keyup', function() {
    var inputphone = document.getElementById('phone');
    if (inputphone.value.length === 0) return;
   document.getElementById("phone").style.borderColor = "green";
  });
  $("#email").on('keyup', function() {
    var inpemail = document.getElementById('email');
    if (inpemail.value.length === 0) return;
     document.getElementById("email").style.borderColor = "green";
   var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(!(inpemail.value).match(reEmail)) {
    //alert("Invalid email address");
    document.getElementById("email_v_message").innerHTML = "Invalid email address";
    document.getElementById("email").style.borderColor = "red";
    return false;
  }
 document.getElementById("email_v_message").innerHTML = "";
  return true;
  });
//hire date
$("#hiredate").on('change', function() {
  var inputhiredate = document.getElementById('hiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("hiredate").style.borderColor = "green";
});
$("#ohiredate").on('change', function() {
  var inputhiredate = document.getElementById('ohiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("ohiredate").style.borderColor = "green";
});
$("#designation").on('change', function() {
  var inputdesignaiton = document.getElementById('designation');
  if (inputdesignaiton.value.length === 0) return;
 document.getElementById("desig").innerHTML = "";
});
$("#division").on('change', function() {
  var inputdivision = document.getElementById('division');
  if (inputdivision.value.length === 0) return;
 document.getElementById("divis").innerHTML = "";
});
$("#rate_type").on('change', function() {
  var inputrate_type = document.getElementById('rate_type');
  if (inputrate_type.value.length === 0) return;
 document.getElementById("rat_tp").innerHTML = "";
});

$("#rate").on('keyup', function() {
  var inputrate = document.getElementById('rate');
  if (inputrate.value.length === 0) return;
 document.getElementById("rate").style.borderColor = "green";
});
$("#pay_frequency").on('change', function() {

  var inputpay_frequency = document.getElementById('pay_frequency');
  if (inputpay_frequency.value.length === 0) return;
document.getElementById("frequ").innerHTML = "";
});
$("#dob").on('change', function() {
  var inputdob = document.getElementById('dob');
  if (inputdob.value.length === 0) return;
 document.getElementById("dob").style.borderColor = "green";
});
$("#gender").on('change', function() {
  var inputgender = document.getElementById('gender');
  if (inputgender.value.length === 0) return;
document.getElementById("gend").innerHTML = "";
});
$("#ssn").on('keyup', function() {
  var inputssn = document.getElementById('ssn');
  if (inputssn.value.length === 0) return;
  document.getElementById("ssn").style.borderColor = "green";
});
$("#h_phone").on('keyup', function() {
  var inputh_phone = document.getElementById('h_phone');
  if (inputh_phone.value.length === 0) return;
document.getElementById("h_phone").style.borderColor = "green";
});
$("#c_phone").on('keyup', function() {
  var inputc_phone = document.getElementById('c_phone');
  if (inputc_phone.value.length === 0) return;
 document.getElementById("c_phone").style.borderColor = "green";
});
$("#e_h_phone").on('keyup', function() {
  var inpute_h_phone = document.getElementById('e_h_phone');
  if (inpute_h_phone.value.length === 0) return;
document.getElementById("e_h_phone").style.borderColor = "green";
});
$("#e_w_phone").on('keyup', function() {
  var inpute_w_phone = document.getElementById('e_w_phone');
  if (inpute_w_phone.value.length === 0) return;
  document.getElementById("e_w_phone").style.borderColor = "green";
});
$("#em_contact").on('keyup', function() {
  var inputem_contact = document.getElementById('em_contact');
  if (inputem_contact.value.length === 0) return;
  document.getElementById("em_contact").style.borderColor = "green";
});
function valid_inf() {
  var usernameInput = document.getElementById('first_name');
  var phoneInput = document.getElementById('phone');
  var emailInput = document.getElementById('email');
  var firstname = $('#first_name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  if (firstname == "") {
    document.getElementById("first_name").style.borderColor = "red";

  }else{
    $("#first_name").on('keyup', function(){
     document.getElementById("first_name").style.borderColor = "green";
   });

  }
  if (phone == "") {
    document.getElementById("phone").style.borderColor = "red";

  }else{
    $("#phone").on('keyup', function(){
      document.getElementById("phone").style.borderColor = "green";
   });

  }
  if (email == "") {
     document.getElementById("email").style.borderColor = "red";
    return false;
  }else{
    $("#email").on('keyup', function(){
       document.getElementById("email").style.borderColor = "green";
   });
  }
 var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(email !== "" && email.match(reEmail) && phone !== "" && firstname !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
} 

// second tab validation
function valid_inf2() {
  var hiredateInput = document.getElementById('hiredate');
  var ohiredateInput = document.getElementById('ohiredate');
  var divisionInput = document.getElementById('division');
  var designationInput = document.getElementById('designation');
  var rate_typeInput = document.getElementById('rate_type');
  var rateInput = document.getElementById('rate');
  var pay_frequencyInput = document.getElementById('pay_frequency');
  var hiredate = $('#hiredate').val();
  var ohiredate = $('#ohiredate').val();
  var designation = $('#designation').val();
  var division = $('#division').val();
  var rate_type = $('#rate_type').val();
  var rate = $('#rate').val();
  var pay_frequency = $('#pay_frequency').val();
  if (division == ""){
    document.getElementById("divis").style.color = "red";
    document.getElementById("divis").innerHTML ='Division Field is Required';
  }else{
    $("#division").on('keyup', function(){
       document.getElementById("divis").style.color = "green";
   });

  }
  if (designation == "") {
       document.getElementById("desig").style.color = "red";
       document.getElementById("desig").innerHTML ='Designation Field is Required';

  }else{
    $("#designation").on('keyup', function(){
        document.getElementById("designation").style.color = "green";
        document.getElementById("desig").innerHTML ='';
   });

  }

  if (hiredate == "") {
     document.getElementById("hiredate").style.borderColor = "red";
  }else{
    $("#hiredate").on('keyup', function(){
     document.getElementById("hiredate").style.borderColor = "green";
   });
    

  }
  if (ohiredate == "") {
     document.getElementById("ohiredate").style.borderColor = "red";

  }else{
    $("#ohiredate").on('keyup', function(){
   document.getElementById("ohiredate").style.borderColor = "green";
   });
    

  }
  if (rate_type == "") {
     document.getElementById("rat_tp").style.color = "red";
     document.getElementById("rat_tp").innerHTML ='Rate Type Field is Required';
  }else{
    $("#rate_type").on('keyup', function(){
     document.getElementById("rat_tp").innerHTML = "";
   });
    

  }
  if (rate == "") {
   document.getElementById("rate").style.borderColor = "red";

  }else{
    $("#rate").on('keyup', function(){
    document.getElementById("rate").style.borderColor = "green";
   });
    

  }
  if (pay_frequency == "") {
       document.getElementById("frequ").style.color = "red";
       document.getElementById("frequ").innerHTML ='Frequency Field is Required';
  }else{
    $("#pay_frequency").on('keyup', function(){
      document.getElementById("frequ").innerHTML ='';
   });
    

  }
  if(division !== "" && designation !== "" && hiredate !== "" && ohiredate !== "" && rate_type !== "" && rate !== "" && pay_frequency !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
}

// third tab validation
function valid_inf3() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_class() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
// third tab validation
function valid_inf4() {
  
 
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_inf5() {
  var dobInput = document.getElementById('dob');
  var genderInput = document.getElementById('gender');
  var ssnInput = document.getElementById('ssn');
  var dob = $('#dob').val();
  var gender = $('#gender').val();
  var ssn = $('#ssn').val();
  if (dob == "") {
    document.getElementById("dob").style.borderColor = "red";
  }else{
    $("#dob").on('keyup', function(){
     document.getElementById("dob").style.borderColor = "green";
   });
    

  }
  if (gender == "") {
  document.getElementById("gend").style.color = "red";
  document.getElementById("gend").innerHTML ='Gender Field is Required';

  }else{
    $("#gender").on('keyup', function(){
   document.getElementById("gend").innerHTML ='';
   });
    

  }
  if (ssn == "") {
    document.getElementById("ssn").style.borderColor = "red";

  }else{
    $("#ssn").on('keyup', function(){
     document.getElementById("ssn").style.borderColor = "green";
   });
    

  }
  if(dob !== "" && gender !== "" && ssn !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}
function valid_inf6() {
  
  var h_phoneInput = document.getElementById('h_phone');
  var c_phoneInput = document.getElementById('c_phone');
  var h_phone = $('#h_phone').val();
  var c_phone = $('#c_phone').val();
  if (h_phone == "") {
    document.getElementById("h_phone").style.borderColor = "red";
  }else{
    $("#h_phone").on('keyup', function(){
     document.getElementById("h_phone").style.borderColor = "green";
   });

  }
  if (c_phone == "") {
  document.getElementById("c_phone").style.borderColor = "red";
  }else{
    $("#c_phone").on('keyup', function(){
     document.getElementById("c_phone").style.borderColor = "green";
   });

  }
  if(h_phone !== "" && c_phone !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}
function valid_inf7() {
 var em_contactInput = document.getElementById('em_contact');
 var em_contact = $('#em_contact').val();
 var e_h_phoneInput = document.getElementById('e_h_phone');
 var e_h_phone = $('#e_h_phone').val();
 var e_w_phoneInput = document.getElementById('e_w_phone');
 var e_w_phone = $('#e_w_phone').val();
 if (em_contact == "") {
  document.getElementById("em_contact").style.borderColor = "red";
}else{
  $("#em_contact").on('keyup', function(){
    document.getElementById("em_contact").style.borderColor = "green";
 });

}
if (e_h_phone == "") {
  document.getElementById("e_h_phone").style.borderColor = "red";
}else{
  $("#e_h_phone").on('keyup', function(){
    document.getElementById("e_h_phone").style.borderColor = "green";
 });

}
if (e_w_phone == "") {
   document.getElementById("e_w_phone").style.borderColor = "red";
}else{
  $("#e_w_phone").on('keyup', function(){
   document.getElementById("e_w_phone").style.borderColor = "green";
 });

}
if(em_contact !== "" && e_h_phone !== "" && e_w_phone !== ""){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
}

}

function valid_inf8() {
  
 document.getElementById("emp_form").submit();

}

</script>

<script type="text/javascript">
// $(function() {
//     $('input[name="working_period[]"]').daterangepicker();
// });
// </script>


<script type="text/javascript">


  $(document).ready(function() {
   
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='<span class="btn btn-primary" >Add More</span>';
var hideText='<span class="btn btn-danger" >Close</span>';

// initialise the visibility check
var is_visible = false;

// append show/hide links to the element directly preceding the element with a class of "toggle"
$('.toggle').prev().append(' <a href="#" class="toggleLink">'+showText+'</a>');

// hide all of the elements with a class of 'toggle'
$('.toggle').hide();

// capture clicks on the toggle links
$('a.toggleLink').click(function() {
 
// switch visibility
is_visible = !is_visible;

// change the link depending on whether the element is shown or hidden
$(this).html( (!is_visible) ? showText : hideText);

// toggle the display - uncomment the next line for a basic "accordion" style
//$('.toggle').hide();$('a.toggleLink').html(showText);
$(this).parent().next('.toggle').toggle('slow');

// return false so any link destination is not followed
return false;

});
});
</script>

