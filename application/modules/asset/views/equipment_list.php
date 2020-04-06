<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                            <th><?php echo display('equipment_name') ?></th>
                            <th><?php echo display('type') ?></th>
                            <th><?php echo display('model') ?></th>
                            <th><?php echo display('serial_no') ?></th>
                           <th><?php echo display('action') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($equipment)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($equipment as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                   <td><?php echo $row->equipment_name; ?></td>
                                   <td><?php echo $row->type_name; ?></td> 
                                    <td><?php echo $row->model; ?></td>
                                   <td><?php echo $row->serial_no; ?></td>                   
                                   <td class="center">
                                    <?php if($this->permission->method('asset','update')->access()): ?>
                                        <a href="<?php echo base_url("asset/Equipment_controller/equipment_form/$row->equipment_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('asset','delete')->access()): ?>  
                                        <a href="<?php echo base_url("asset/Equipment_controller/delete_equipment/$row->equipment_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
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
 