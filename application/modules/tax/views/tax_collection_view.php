
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
                            <th><?php echo display('date_start') ?></th>
                             <th><?php echo display('amount_tax') ?></th>
                              <th><?php echo display('collection_by') ?></th>
                               <th><?php echo display('date_end') ?></th>
                            <th>Net Income</th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($collect)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($collect as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->date_start; ?></td>
                                    <td><?php echo $que->amount_tax; ?></td>
                                    <td><?php echo $que->collection_by; ?></td>
                                    <td><?php echo $que->date_end; ?></td>
                                    <td><?php echo $que->income_net_period; ?></td>
                                    
                                    <td class="center">
                                 
                                    
                                    <?php if($this->permission->method('tax','delete')->access()): ?> 
                                        <a href="<?php echo base_url("tax/Tax/delete_taxcollection/$que->tax_coll_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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

