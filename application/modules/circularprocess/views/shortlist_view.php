<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('job_adv_id') ?></th>
                            <th><?php echo display('date_of_shortlist') ?></th>
                             <th><?php echo display('interview_date') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($shortlist)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($shortlist as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->position_name; ?></td>
                                    <td><?php echo $que->date_of_shortlist; ?></td>
                                     <td><?php echo $que->interview_date; ?></td>

                                    
                                    <td class="center">
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/update_shortlist_form//$que->can_short_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("circularprocess/Candidate_select/delete_shortlist/$que->can_short_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 