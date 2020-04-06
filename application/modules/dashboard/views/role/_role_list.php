
 <div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                    <a type="button" class="btn btn-primary my-modal pull-right" style="color:#fff;" href="<?php echo base_url()?>dashboard/role/create_system_role" >
                      <?=display('add_role')?>
                    </a>

                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                    <table class="table table-bordered table-hover" id="RoleTbl">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('role_name') ?></th>
                                <th><?php echo display('description') ?></th>
                                <th><?php echo display('action') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($role_list)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($role_list as $value) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $value->role_name; ?></td>
                                <td><?php echo $value->role_description; ?></td>
                                <td>
                                    <a href="<?php echo base_url("dashboard/role/edit_role/$value->role_id") ?>"  data-toggle="tooltip" data-placement="left" title="Update" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("dashboard/role/delete_role/$value->role_id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>


            </div>
        </div>
    </div>
</div>





 