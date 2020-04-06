<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('holiday_name') ?></th>
                            <th><?php echo display('start_date') ?></th>
                            <th><?php echo display('end_date') ?></th>
                            <th><?php echo display('no_of_days') ?></th>
                          
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($holiday)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($holiday as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->holiday_name; ?></td>
                                    <td><?php echo $que->start_date; ?></td>
                                    <td><?php echo $que->end_date; ?></td>
                                    <td><?php echo $que->no_of_days; ?></td>
                                    
                                   
                                    <td class="center">
                                    <?php if($this->permission->method('leave','update')->access()): ?>
                                        <a href="<?php echo base_url("leave/Leave/update_holiday_form/$que->payrl_holi_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('leave','delete')->access()): ?>  
                                        <a href="<?php echo base_url("leave/Leave/delete_holiday/$que->payrl_holi_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
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