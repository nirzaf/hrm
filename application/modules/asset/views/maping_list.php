<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
    <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                     
                         <a href="<?php echo base_url('asset/equipment_maping/maping_form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('assign_asset') ?></a>
                       
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                           <th><?php echo display('employee_name') ?></th>
                            <th><?php echo display('equipment_name') ?></th>
                           <th><?php echo display('action') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($equipment)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($equipment as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php 
                                      $employee =$this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$row->employee_id)->get()->row();
                                      echo $employee->first_name.' '.$employee->last_name;
                                     ?></td> 
                                   <td><?php echo $row->equipment_name; ?></td>              
                                   <td class="center">
                                    <?php if($this->permission->method('asset','update')->access()): ?>
                                        <a href="<?php echo base_url("asset/Equipment_maping/maping_update/$row->employee_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('asset','delete')->access()): ?>  
                                        <a href="<?php echo base_url("asset/Equipment_maping/delete_maping/$row->employee_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
                                         <?php endif; ?> 
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
 