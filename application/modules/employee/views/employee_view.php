<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('employee/Employees/employee_search',array('class' => 'form-inline', 'id' => 'validate'));?>
                            <label class="select"><?php echo display('search') ?>:</label>
                            <input type="text" name="what_you_search" class="form-control" placeholder='<?php echo display('what_you_search') ?>' id="what_you_search" required>
                            <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body table-responsive">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                           <th><?php echo display('picture')?></th>
                           <th><?php echo display('first_name')?></th>
                           <th><?php echo display('last_name')?></th>
                           <th><?php echo display('maiden_name')?></th>
                           <th><?php echo display('phone')?></th>
                           <th><?php echo display('email')?></th>
                           <th><?php echo display('state')?></th>
                           <th><?php echo display('city')?></th>
                           <th><?php echo display('zip_code')?></th>
                           <th><?php echo display('division')?></th>
                           <th><?php echo display('Designation')?></th>
                           <th><?php echo display('duty_type')?></th>
                           <th><?php echo display('hire_date')?></th>
                           <th><?php echo display('original_h_date')?></th>
                           <th><?php echo display('termination_date')?></th>
                           <th><?php echo display('termination_reason')?></th>
                           <th><?php echo display('voluntary_termination')?></th>
                           <th><?php echo display('re_hire_date')?></th>
                           <th><?php echo display('rate_type')?></th>
                           <th><?php echo display('s_rate')?></th>
                           <th><?php echo display('pay_frequency')?></th>
                           <th><?php echo display('pay_frequency_txt')?></th>
                           <th><?php echo display('hourly_rate2')?></th>
                           <th><?php echo display('hourly_rate3')?></th>
                           <th><?php echo display('home_department')?></th>
                           <th><?php echo display('department_text')?></th>
                           <th><?php echo display('super_visor_name')?></th>
                           <th><?php echo display('is_super_visor')?></th>
                           <th><?php echo display('supervisor_report')?></th>
                           <th><?php echo display('dob')?></th>
                           <th><?php echo display('gender')?></th>
                           <th><?php echo display('marital_stats')?></th>
                           <th><?php echo display('ethnic_group')?></th>
                           <th><?php echo display('eeo_class_gp')?></th>
                           <th><?php echo display('ssn')?></th>
                           <th><?php echo display('work_in_state')?></th>
                           <th><?php echo display('live_in_state')?></th>
                           <th><?php echo display('home_email')?></th>
                           <th><?php echo display('business_email')?></th>
                           <th><?php echo display('home_phone')?></th>
                           <th><?php echo display('business_phone')?></th>
                           <th><?php echo display('cell_phone')?></th>
                           <th><?php echo display('emerg_contct')?></th>
                           <th><?php echo display('emerg_home_phone')?></th>
                           <th><?php echo display('emrg_w_phone')?></th>
                           <th><?php echo display('emer_con_rela')?></th>
                           <th><?php echo display('alt_em_contct')?></th>
                           <th><?php echo display('alt_emg_h_phone')?></th>
                           <th><?php echo display('alt_emg_w_phone')?></th>
                           <th><?php echo display('action')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_history)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_history as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                <td><img src="<?php echo base_url(!empty($row->picture)?$row->picture:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64" ></td>
                                <td><?php echo $row->first_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                 <td><?php echo $row->maiden_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->state; ?></td>
                                <td><?php echo $row->city; ?></td>
                                <td><?php echo $row->zip; ?></td>
                                <td><?php echo $row->department_name; ?></td>
                                <td><?php echo $row->position_name; ?></td>  
                                <td><?php echo $row->type_name; ?></td> 
                                <td><?php echo $row->hire_date; ?></td> 
                                <td><?php echo $row->original_hire_date; ?></td>
                                <td><?php echo $row->termination_date; ?></td>
                                <td><?php echo $row->termination_reason; ?></td>
                                <td><?php echo $row->voluntary_termination; ?></td>
                                <td><?php echo $row->rehire_date; ?></td>
                                <td><?php if($row->rate_type == 1){ echo 'Hourly';}else{ echo 'Salary';}?></td> 
                                <td><?php echo $row->rate; ?></td>
                                <td><?php echo $row->frequency_name; ?></td>  
                                <td><?php echo $row->pay_frequency_txt; ?></td>  
                                <td><?php echo $row->hourly_rate2; ?></td>  
                                <td><?php echo $row->hourly_rate3; ?></td>  
                                <td><?php echo $row->home_department; ?></td>  
                                <td><?php echo $row->department_text; ?></td>
                                <td><?php
 $supervisor = $this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$row->super_visor_id)->get()->row();
                          echo (!empty($supervisor)?$supervisor->first_name.' '.$supervisor->last_name:'Self');
                                  ?></td> 
                                <td><?php if($row->is_super_visor==1){echo 'Yes';}else{
                                  echo 'No';
                                } ?></td> 
                                <td><?php echo $row->supervisor_report; ?></td>                
                                 <td><?php echo $row->dob; ?></td>
                                <td><?php echo $row->gender_name; ?></td>
                                <td><?php echo $row->marital_sta; ?></td>
                                <td><?php echo $row->ethnic_group; ?></td>
                                <td><?php echo $row->eeo_class_gp; ?></td>
                                <td><?php echo $row->ssn; ?></td>
                                <td><?php echo $row->work_in_state; ?></td>
                                <td><?php echo $row->live_in_state; ?></td>
                                <td><?php echo $row->home_email; ?></td>
                                <td><?php echo $row->business_email; ?></td>
                                <td><?php echo $row->home_phone; ?></td>
                                <td><?php echo $row->business_phone; ?></td>
                                <td><?php echo $row->cell_phone; ?></td>
                                <td><?php echo $row->emerg_contct; ?></td>
                                <td><?php echo $row->emrg_h_phone; ?></td>
                                <td><?php echo $row->emrg_w_phone; ?></td>
                                <td><?php echo $row->emgr_contct_relation; ?></td>
                                <td><?php echo $row->alt_em_contct; ?></td>
                                <td><?php echo $row->alt_emg_h_phone; ?></td>
                                <td><?php echo $row->alt_emg_w_phone; ?></td>


                                    <td class="center">
                                      <a href="<?php echo base_url("employee/Employees/update_employee_form/$row->employee_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("employee/Employees/delete_employhistory/$row->employee_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
                                        <a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" class="btn btn-default"><i class="fa fa-user"></i></a>
                                       
                                    </td>
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
