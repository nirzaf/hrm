
<div class="row">
    <div class="col-sm-12 col-md-4">

        <div class="card-header">

            <div> <?php echo "<img src='" . base_url().$row->picture."' width=100px; height=100px; class=img-circle>";?></div>
        </div>
        <div class="card-content">
            <div class="card-content-member">
                <h4 class="m-t-0"><?php echo $row->first_name."  " .$row->last_name;?><span style="color:#F39C12"> <span class="<?php if ($perform > 0 && $perform < 1) {
                        echo 'fa fa-star-half';
                    }else if($perform >=1) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 1 && $perform < 2) {
                        echo 'fa fa-star-half';
                    }else if($perform >=2) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 2 && $perform < 3) {
                        echo 'fa fa-star-half';
                    }else if($perform >=3) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o';} ?>"></span>
                    <span class="<?php if ($perform > 3 && $perform < 4) {
                        echo 'fa fa-star-half';
                    }else if($perform >=4) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>" ></span>
                    <span class="<?php if ($perform > 4 && $perform < 5) {
                        echo 'fa fa-star-half';
                    }else if ($perform ==5) {
                        echo 'fa fa-star';
                    }else{ echo 'fa fa-star-o'; } ?>"></span>

                </span></h4>
                <h5>Department: <?php echo $row->department_name;?></h5>
                <p class="m-0"><i class="fa fa-mobile" aria-hidden="true"></i>
                   <?php echo $row->phone ;?></p>
               </div>
               <div class="card-content-languages">
        <div class="card-content-languages-group"></div>
                <div class="card-content-languages-group">
                   <table class="table table-hover" width="100%">
            <caption  style="text-align: center; font-size: 25px"><?php echo display('personal_information')?></caption>
                    <tr>
                        <th><?php echo display('name')?></th>
                        <td><?php echo $row->first_name." " .$row->last_name.'('.$row->maiden_name.')';?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('phone')?></th>
                        <td><?php echo $row->phone ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('email')?></th>
                        <td><?php echo $row->email  ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('state')?></th>
                        <td><?php echo $row->state ;?></td>
                    </tr>
                     <tr>
                        <th><?php echo display('city')?></th>
                        <td><?php echo $row->city ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('zip')?></th>
                        <td><?php echo $row->zip ;?></td>
                </tr>
            </table>

        </div>
        <div class="card-content-languages-group">
           <table class="table table-hover" width="100%">
            <caption  style="text-align: center; font-size: 25px"><?php echo display('biographicalinfo')?></caption>
            <tr>
                <th><?php echo display('dob')?></th>
                <td><?php echo $row->dob;?></td>
            </tr>
            <tr>
                <th><?php echo display('gender')?></th>
                <td><?php if($row->gender ==1){
                    echo 'Male';
                }else if($row->gender == 2){
                    echo 'Female';
                }else{
                    echo 'Other';
                }
                ?></td>
            </tr>
            <tr>
             <th><?php echo display('marital_status')?></th>
             <td><?php 
             if($row->marital_status ==1){
               echo 'Single';
           }else if($row->marital_status ==2){
            echo 'Married';
        }else if($row->marital_status ==3){
           echo 'Divorced';
       }else if($row->marital_status ==4){
         echo 'Widowed';
     }else{
        echo 'Other';
    } ;?></td>
</tr>
<tr>

    <th><?php echo display('ethnic_group')?> </th>
    <td><?php echo $row->ethnic_group ;?></td>
</tr>
<tr>

    <th><?php echo display('eeo_class_gp')?></th>
    <td><?php echo $row->eeo_class_gp ;?></td>
</tr>
<tr>

    <th><?php echo display('ssn')?></th>
    <td><?php echo $row->ssn ;?></td>
</tr>
<tr>

    <th><?php echo display('work_in_state')?></th>
    <td><?php if($row->work_in_state ==1){
        echo 'Yes';
    }else{
        echo 'No';
    } ?></td>
</tr>
<tr>

    <th><?php echo display('live_in_state')?></th>
    <td><?php if($row->live_in_state ==1){
        echo 'Yes';
    }else{
        echo 'No';
    }?></td>
</tr>
</table>

</div>
</div>
<div class="card-footer">
    <div class="card-footer-stats">
        <div>
            <p></p><span class="stats-small"></span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-8">
    <div class="row">
        <div class="col-sm-12 col-md-12 rating-block" >

          <table class="table table-hover" width="100%">


            <caption  style="text-align: center; font-size: 25px"><?php echo display('positional_information')?></caption>
            <tr>
                <th><?php echo display('division')?></th>
                <td><?php echo $row->department_name;?></td>
            </tr>
            <tr>
                <th><?php echo display('designation')?></th>
                <td><?php echo $row->position_name;?></td>
            </tr>
            <tr>
                <th><?php echo display('duty_type')?></th>
                <td><?php
                if($row->duty_type == 1){
                    echo 'Full Time';
                }else if($row->duty_type == 2){
                   echo 'Part Time';
               }else if($row->duty_type == 3){
                  echo 'Contructual';
              }else{
                echo 'Other';
            }?></td>
        </tr>

        <tr>
            <th><?php echo display('hire_date')?></th>
            <td><?php echo $row->hire_date;?></td>
        </tr>
        <tr>
            <th><?php echo display('original_hire_date')?></th>
            <td><?php echo $row->original_hire_date;?></td>
        </tr>
        <tr>
            <th><?php echo display('rate_type')?></th>
            <td><?php if($row->rate_type == 1){
              echo 'Hourly';
          }else{
            echo 'Salary';
        }?></td>
    </tr>
    <tr>
        <th><?php echo display('s_rate')?></th>
        <td><?php echo $row->rate;?></td>
    </tr>
    <tr>
        <th><?php echo display('pay_frequency')?></th>
        <td><?php 
        if($row->pay_frequency == 1){
          echo 'Weekly';
      }else if($row->pay_frequency == 2){
        echo 'Biweekly';
    }else{
        echo 'Annual';
    }?></td>
</tr>
<tr>
    <th><?php echo display('home_department')?></th>
    <td><?php echo $row->home_department;?></td>
</tr>


        <tr>
            <th><?php echo display('super_visor_name')?></th>
            <td><?php
$supervisor = $this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$row->super_visor_id)->get()->row();
                          echo (!empty($supervisor)?$supervisor->first_name.' '.$supervisor->last_name:'Self');
             ?></td>
        </tr>
         <tr>
            <th><?php echo display('is_super_visor')?></th>
            <td><?php
 if($row->is_super_visor==1){echo 'Yes';}else{
                                  echo 'No';
                                } 
             ?></td>
        </tr>
</table>      

</div>  

<div class="col-sm-12 col-md-12 rating-block" >

  <table class="table table-hover" width="100%">


    <caption  style="text-align: center; font-size: 25px"><?php echo display('benifits')?></caption>
    <?php  foreach($benifit as $benif){?>
        <tr>
            <th><?php echo display('benifit_class_code')?></th>
            <td><?php echo $benif->bnf_cl_code;?></td>
        </tr>
        <tr>
            <th><?php echo display('benifit_desc')?></th>
            <td><?php echo $benif->bnf_cl_code_des;?></td>
        </tr>

        <tr>
            <th><?php echo display('benifit_acc_date')?></th>
            <td><?php echo $benif->bnff_acural_date;?></td>
        </tr>
    <?php } ?>
    
</table>      

</div> 
<div class="col-sm-12 col-md-12 rating-block" >

    <table class="table table-hover" width="100%">


        <caption  style="text-align: center; font-size: 25px">Emergency Contact</caption>
        <tr>
            <th><?php echo display('emerg_contct')?></th>
            <td><?php echo $row->emerg_contct;?></td>
        </tr>
        <tr>
            <th><?php echo display('emerg_home_phone')?></th>
            <td><?php echo $row->emrg_h_phone;?></td>
        </tr>

        <tr>
            <th><?php echo display('emrg_w_phone')?></th>
            <td><?php echo $row->emrg_w_phone;?></td>
        </tr>
    </table>      

</div>                 

</div> 


</div>
<?php if(!empty($award)){?>
<div class="row">
<div class="col-sm-12 rating-block">
        <table class="table table-border table-responsive">
            <caption>Award</caption>
            <thead>
                <tr>
                    <th><?php echo display('award_name')?></th>
                    <th><?php echo display('aw_description')?></th>
                    <th><?php echo display('awr_gift_item')?></th>
                    <th><?php echo display('date')?></th>
                    <th><?php echo display('awarded_by')?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($award as  $awrd) {?>
                <tr>
                    <td><?php echo $awrd->award_name;?></td>
                    <td><?php echo $awrd->aw_description;?></td>
                    <td><?php echo $awrd->awr_gift_item;?></td>
                    <td><?php echo $awrd->date;?></td>
                    <td><?php echo $awrd->awarded_by;?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>

</div>
</div>
<?php }?>

</div> 


