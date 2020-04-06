<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                    <a href="<?php echo base_url()?>dashboard/Permission_setup/menu_item_list" class="btn btn-sm btn-info pull-right "><?php echo display('menu_item_list')?></a>
                    <h4><?php echo display('ins_menu_for_application')?></h4>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open_multipart("dashboard/permission_setup/update",array('id'=>'myform')) ?>

                    <div class="form-group row">
                        <label for="menu_title" class="col-sm-3 col-form-label"><?php echo display('menu_title')?></label>
                        <div class="col-sm-9">
                            <input name="menu_title" value="<?php echo @$menu_item->menu_title;?>" class="form-control" type="text">
                        </div>
                    </div>
                    
                    <input type="hidden" name="menu_id" value="<?php echo @$menu_item->menu_id;?>">

                    <div class="form-group row">
                        <label for="page_url" class="col-sm-3 col-form-label"><?php echo display('page_url')?></label>
                        <div class="col-sm-9">
                            <input name="page_url" value="<?php echo @$menu_item->page_url;?>" class="form-control" type="text">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="module" class="col-sm-3 col-form-label"><?php echo display('module')?></label>
                        <div class="col-sm-9">
                            <input name="module" value="<?php echo @$menu_item->module;?>" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="parent_menu" class="col-sm-3 col-form-label"><?php echo display('parent_menu')?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="parent_menu" id="parent_menu">
                                <option value="">--Select--</option>
                                <?php 
                                   foreach($p_menu as $val){
                                    echo '<option value="'.$val->menu_id.'">'.$val->menu_title.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status *</label>
                        <div class="col-sm-9">
                            
                            <label class="radio-inline">
                                <input type="checkbox" <?php echo ($menu_item->is_report==1?'checked':'')?> name="is_report"> Is Report
                            </label> 
                        </div>
                    </div> -->


                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.forms['myform'].elements['parent_menu'].value="<?php echo $menu_item->parent_menu;?>";
</script>
 

 