<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="panel-title">
                    <a href="<?php echo base_url()?>dashboard/Permission_setup" class="btn btn-sm btn-info pull-right "> Add Menu Item</a>
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class=" table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('menu_title')?></th>
                                <th><?php echo display('page_url')?></th>
                                <th><?php echo display('module')?></th>
                                <th><?php echo display('parent_menu')?></th>
                                <th><?php echo display('status') ?></th>
                                <th width="100"><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($menu_item_list)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($menu_item_list as $value) { 
                                $parent = $this->db->select('menu_title')->where('menu_id',$value->parent_menu)->get('sec_menu_item')->row();
                            ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                               <td><?php echo $value->menu_title; ?></td>
                                <td><?php echo $value->page_url; ?></td>
                                <td><?php echo $value->module; ?></td>
                                <td><?php echo @$parent->menu_title; ?></td>
                                <td><?php echo (($value->is_report==1)?'Is Report':'Not Report'); ?></td>
                                <td>
                                    <a href="<?php echo base_url("dashboard/Permission_setup/edit/$value->menu_id") ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("dashboard/Permission_setup/delete/$value->menu_id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <?php echo @$links;?>
                </div>
            </div> 
        </div>
    </div>
</div>

 