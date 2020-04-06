
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">

                    <a href="<?php echo base_url('dashboard/role/assign_role_to_user');?>" class="btn btn-primary my-modal pull-right" onclick="add_access()" >
                      <i class="fa fa-plus"></i><?=display('add_role')?>
                    </a>

                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">

                    <table class="table table-bordered table-hover" id="RoleTbl">

                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('username') ?></th>
                                <th><?php echo display('role_name') ?></th>
                                <th><?php echo display('action') ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($user_access_role)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($user_access_role as $value) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $value->firstname; ?> <?php echo $value->lastname; ?></td>
                                <td><?php echo $value->role_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url("dashboard/role/edit_access_role/$value->role_acc_id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"  ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("dashboard/role/delete_access_role/$value->role_acc_id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table> 


            </div>
        </div>
    </div>
</div>






<?php $this->load->view('dashboard/model_script/role_access_script');?>



 