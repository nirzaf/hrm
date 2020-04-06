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
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('loan_id') ?></th>
                            <th><?php echo display('installment_amount') ?></th>
                            <th><?php echo display('payment') ?></th>
                            <th><?php echo display('date') ?></th>
                            <th><?php echo display('received_by') ?></th>
                            <th><?php echo display('installment_no') ?></th>
                            <th><?php echo display('notes') ?></th>
                             </th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($loanss)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($loanss as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->loan_id; ?></td>
                                    <td><?php echo $que->installment_amount; ?>$</td>
                                    <td><?php echo $que->payment; ?>$</td>
                                    <td><?php echo $que->date; ?></td>
                                    <td><?php echo $que->receiver; ?></td>
                                    <td><?php echo $que->installment_no; ?></td>
                                    <td><?php echo $que->notes; ?></td>
                                    

                                   
                                <td class="center">
                                <?php if($this->permission->method('loan','update')->access()): ?> 
                                        <a href="<?php echo base_url("loan/Loan/update_install_form/$que->loan_inst_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                         <?php endif; ?>
                                    
                                    <?php if($this->permission->method('loan','delete')->access()): ?> 
                                        <a href="<?php echo base_url("loan/Loan/delete_install/$que->loan_inst_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 