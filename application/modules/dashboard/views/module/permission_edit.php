<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">

                <?php 
                //extract current user
                if (!empty($permission))
                foreach ($permission as $extract) {
                    $fk_user_id = $extract->fk_user_id;
                    break;
                }
                //form start 
                echo form_open("dashboard/module_permission/edit/".(!empty($fk_user_id)?$fk_user_id:null)) ?>

                    <div class="form-group row">
                        <label for="blood" class="col-sm-3 col-form-label"><?php echo display('username') ?> *</label>
                        <div class="col-sm-9">
                            <?php echo form_dropdown('fk_user_id', $user_list, (!empty($fk_user_id)?$fk_user_id:null), ' class="form-control"') ?> 
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('module_name') ?></th>
                                <th><?php echo display('create') ?></th>
                                <th><?php echo display('read') ?></th>
                                <th><?php echo display('update') ?></th>
                                <th><?php echo display('delete') ?></th> 
                            </tr>
                        </thead>
                        <?php $sl = 0 ?>
                        <?php if (!empty($permission)) ?>
                        <?php foreach ($permission as $value) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo ($sl+1) ?></td>
                                <td>
                                    <?php echo $value->name ?>
                                    <input type="hidden" name="fk_module_id[<?php echo $sl ?>][]" value="<?php echo $value->fk_module_id ?>">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[<?php echo $sl ?>][]" value="1" <?php echo (($value->create==1)?"checked":null) ?> id="create<?php echo $sl ?>">
                                        <label for="create<?php echo $sl ?>"></label>
                                    </div>
                                </td> 
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[<?php echo $sl ?>][]" value="1" <?php echo (($value->read==1)?"checked":null) ?> id="read<?php echo $sl ?>">
                                        <label for="read<?php echo $sl ?>"></label>
                                    </div>
                                </td> 
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[<?php echo $sl ?>][]" value="1" <?php echo (($value->update==1)?"checked":null) ?> id="update<?php echo $sl ?>">
                                        <label for="update<?php echo $sl ?>"></label>
                                    </div>
                                </td>  
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[<?php echo $sl ?>][]" value="1" <?php echo (($value->delete==1)?"checked":null) ?> id="delete<?php echo $sl ?>">
                                        <label for="delete<?php echo $sl ?>"></label>
                                    </div>
                                </td>   
                            </tr>
                        </tbody>
                        <?php $sl++ ?> 
                        <?php } ?> 
                    </table>
  
         
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>

 