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
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('pos_id') ?></th>
                            <th><?php echo display('selection_terms') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($selection)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($selection as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                     <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->pos_id; ?></td>
                                    <td><?php echo $que->selection_terms; ?></td>
                                    <td class="center">
                                    <?php if($this->permission->method('circularprocess','update')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/update_selection_form/$que->can_sel_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('circularprocess','delete')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/delete_selection/$que->can_sel_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 