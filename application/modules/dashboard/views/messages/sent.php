<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                <table width="100%" class="datatable2 table table-striped table-bordered table-hover">
                    <thead>
                        <tr>  
                            <th><?php echo display('sl_no') ?></th> 
                            <th><?php echo display('receiver_name') ?></th> 
                            <th><?php echo display('subject') ?></th> 
                            <th><?php echo display('message') ?></th> 
                            <th><?php echo display('date') ?></th> 
                            <th><?php echo display('status') ?></th> 
                            <th><?php echo display('action') ?></th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($messages)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($messages as $message) { ?>
                                <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $message->receiver_name; ?></td>
                                    <td><?php echo $message->subject; ?></td>
                                    <td><?php echo character_limiter(strip_tags($message->message),50); ?></td>
                                    <td><?php echo date('d M Y h:i:s a', strtotime($message->datetime)); ?></td> 
                                    <td><?php echo (($message->receiver_status == 0) ? "<i class='label label-warning'>not seen</label>" : "<i class='label label-success'>seen</label>"); ?></td> 
                                    <td class="center" width="80">
                                        <a href="<?php echo base_url("dashboard/message/sent_information/$message->id") ?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>  
                                        <a href="<?php echo base_url("dashboard/message/delete/$message->id/$message->sender_id/$message->receiver_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display("are_you_sure") ?>') "><i class="fa fa-trash"></i></a> 
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
            </div> 
        </div>
    </div>
</div>










 
 