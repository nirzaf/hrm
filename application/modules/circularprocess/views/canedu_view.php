<style>
    img{
        height: 80px;
        width: 100px;
    }
</style>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('degree_name') ?></th>
                             <th><?php echo display('university_name') ?></th>
                            <th><?php echo display('cgp') ?></th>
                             <th><?php echo display('comments') ?></th>
                            <th><?php echo display('signature') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($edu)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($edu as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->degree_name; ?></td>
                                    <td><?php echo $que->university_name; ?></td>
                                    <td><?php echo $que->cgp; ?></td>
                                    <td><?php echo $que->comments; ?></td>
                                    <td><?php echo img($que->signature); ?></td>
                                    <td class="center">
                                        <a href="<?php echo base_url("circularprocess/Candidate/update_can_eduifo_form/$que->can_edu_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("circularprocess/Candidate/delete_can_edu_Info/$que->can_edu_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 