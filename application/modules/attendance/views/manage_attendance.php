
               <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
               
  <table width="100%" class="datatable table table-striped table-bordered table-hover example">
        <caption><?php echo display('attendance_list')?></caption>
        <thead>
            <tr>
               <th><?php echo display('Sl') ?></th>
                <th><?php echo display('name')?></th>
                <th><?php echo display('date')?></th>
                <th><?php echo display('checkin')?></th>
                <th><?php echo display('checkout')?></th>
                <th><?php echo display('stay')?></th>
                 <th><?php echo display('action')?></th>
            </tr>
        </thead>
    <tbody>
        <?php if ($addressbook == FALSE): ?>

            <tr><td colspan="4">There are currently No Addresses</td></tr>
        <?php else: ?>
             <?php $sl = 1; ?> 
            <?php foreach ($addressbook as $row): ?>
                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                <td><?php echo $sl; ?></td>
                    <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['sign_in']; ?></td>
                    <td><?php echo $row['sign_out']; ?></td>
                    <td><?php echo $row['staytime']; ?></td>
                    <td class="center">

                        <?php if($this->permission->method('attendance','update')->access()): ?> 

                            <a href="<?php echo base_url("attendance/Home/edit_atn_form/".$row['att_id']) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i><?php echo display('update') ?></a> 
                      
                        <?php endif; ?>
                        
                        <?php if($this->permission->method('attendance','delete')->access()): ?> 
                            <a href="<?php echo base_url("attendance/Home/delete_atn/".$row['att_id']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
    </a> 
                        <?php endif; ?>
                        </td>
                </tr>
                  <?php $sl++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
            </table>


                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>