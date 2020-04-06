<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('name') ?>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('job_adv_id') ?></th>
                            <th><?php echo display('interview_date') ?></th>
                            <th><?php echo display('interviewer_id') ?></th>
                            <th><?php echo display('interview_marks') ?></th>
                            <th><?php echo display('written_total_marks') ?></th>
                            <th><?php echo display('mcq_total_marks') ?></th>
                             <th><?php echo display('total_marks') ?></th>
                            <th><?php echo display('recommandation') ?></th>
                            <th><?php echo display('selection') ?></th>
                            <th><?php echo display('details') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($interview)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($interview as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->position_name; ?></td>
                                    <td><?php echo $que->interview_date; ?></td>
                                    <td><?php echo $que->interviewer_id; ?></td>
                                    <td><?php echo $que->interview_marks; ?></td>
                                    <td><?php echo $que->written_total_marks; ?></td>
                                    <td><?php echo $que->mcq_total_marks; ?></td>
                                     <td><?php echo $que->total_marks; ?></td>
                                    <td><?php echo $que->recommandation; ?></td>
                                    <td><?php echo $que->selection; ?></td>
                                     <td><?php echo $que->details; ?></td>
                                    
                                    <td class="center">
                                     <?php if($this->permission->method('circularprocess','update')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/interview_update_form/$que->can_int_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('circularprocess','delete')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/delete_interview/$que->can_int_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 