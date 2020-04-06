<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> 
                       
                    </h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('voucher_no') ?></th>
                                <th><?php echo display('remark') ?></th>
                                <th><?php echo display('debit') ?></th>
                                <th><?php echo display('credit') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($aprrove)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($aprrove as $approve) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $approve->VNo; ?></td>
                                <td><?php echo $approve->Narration; ?></td>
                                <td><?php echo $approve->Debit; ?></td>
                                <td><?php echo $approve->Credit; ?></td>
                                <td>

                                <a href="<?php echo base_url("accounts/accounts/isactive/$approve->VNo/active") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="Inactive"><?php echo display('approved')?></a>
                                <a href="<?php echo base_url("accounts/accounts/voucher_update/$approve->VNo") ?>" class="btn btn-info btn-sm" title="Update"><i class="fa fa-edit"></i></a>
                                
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <?= $links ?>
                </div>
            </div> 
        </div>
    </div>
</div>

 