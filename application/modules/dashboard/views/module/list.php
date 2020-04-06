<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 

                <table class="datatable table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('sl_no') ?></th>
                            <th><?php echo display('image') ?></th>
                            <th><?php echo display('module_name') ?></th>
                            <th><?php echo display('description') ?></th>
                            <th><?php echo display('directory') ?></th>
                            <th><?php echo display('status') ?></th>
                            <th><?php echo display('action') ?></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($moduleData)) ?>
                        <?php $sl = 1; ?>
                        <?php foreach ($moduleData as $value) { ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><img src="<?php echo base_url(!empty($value->image)?$value->image:'assets/img/icons/default.jpg'); ?>" alt="Image" height="50" ></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->description; ?></td>
                            <td><?php echo $value->directory; ?></td>
                            <td>
                                <?php echo (($value->status==1)?display('active'):display('inactive')); ?>
                            </td>
                            <td> 
                                <?php if($value->status == 1) { ?>
                                <a href="<?php echo base_url("dashboard/module/status/$value->id/inactive") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="Inactive"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <?php } else { ?>
                                <a href="<?php echo base_url("dashboard/module/status/$value->id/active") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="right" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>

 