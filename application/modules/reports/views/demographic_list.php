<script type="text/javascript">
function printDiv() {
    var divName = "printArea";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    // document.body.style.marginTop="-45px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8"> <?php echo form_open('reports/Employee_controller/demographic_list',array('class' => 'form-inline', 'id' => 'validate'));?>
                            <label class="select"><?php echo display('search') ?>:</label>
                             <?php echo form_dropdown('employee_id', $dropdownemp, (!empty($id)?$id:" "), ' class="form-control"') ?> 
                            <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
                        <?php echo form_close()?></div>
                            <div class="col-sm-2"><input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/></div>
                        </div>
                       

                    </div>
                </div>

            </div>
        </div>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
            <div class="panel-body table-responsive" id="printArea">
                <table width="100%" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                           <th><?php echo display('image') ?></th>
                           <th><?php echo display('first_name')?></th>
                           <th><?php echo display('last_name')?></th>
                           <th><?php echo display('maiden_name')?></th>
                           <th><?php echo display('phone')?></th>
                           <th><?php echo display('email')?></th>
                           <th><?php echo display('state')?></th>
                           <th><?php echo display('city')?></th>
                           <th><?php echo display('zip_code')?></th>
                           <th><?php echo display('dob')?></th>
                           <th><?php echo display('gender')?></th>
                           <th><?php echo display('marital_stats')?></th>
                           <th><?php echo display('ethnic_group')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_demogr)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_demogr as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                     <td><img src="<?php echo base_url(!empty($row->picture)?$row->picture:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64" ></td>
                                <td>
 <a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" ><?php echo $row->first_name; ?></a>
                                   </td>
                                <td><a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" ><?php echo $row->last_name; ?></a></td>
                                 <td><?php echo $row->maiden_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->state; ?></td>
                                <td><?php echo $row->city; ?></td>
                                <td><?php echo $row->zip; ?></td>              
                                 <td><?php echo $row->dob; ?></td>
                                <td><?php echo $row->gender_name; ?></td>
                                <td><?php echo $row->marital_sta; ?></td>
                                <td><?php echo $row->ethnic_group; ?></td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                 <?= $links ?>
            </div>
        </div>
    </div>
</div>
