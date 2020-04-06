
        <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('start_amount') ?></th>
                            <th><?php echo display('end_amount') ?></th>
                             <th><?php echo display('rate') ?></th>
                            
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($taxs)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($taxs as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->start_amount; ?></td>
                                    <td><?php echo $que->end_amount; ?></td>
                                    <td><?php echo $que->rate; ?></td>
                                    
                                    <td class="center">
                                    <?php if($this->permission->method('tax','update')->access()): ?> 
                                        <a href="<?php echo base_url("tax/Tax/update_taxsetup_form/$que->tax_setup_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('tax','delete')->access()): ?> 
                                        <a href="<?php echo base_url("tax/Tax/delete_taxsetup/$que->tax_setup_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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

