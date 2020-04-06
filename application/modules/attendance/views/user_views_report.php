

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('date') ?></th>
                             <th><?php echo display('sign_in') ?></th>
                            <th><?php echo display('sign_out') ?></th>
                             <th><?php echo display('staytime') ?></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($query)) 

                        { ?>

                            <?php $sl = 1; ?>
                            <?php foreach ($query as $que) { 
                         ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->date; ?></td>
                                    <td><?php echo $que->sign_in; ?></td>
                                    <td><?php echo $que->sign_out; ?></td>
                                    <td><?php echo $que->staytime; ?></td>
                                    
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

