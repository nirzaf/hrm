
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">

                    <a href="<?php echo base_url('dashboard/role/user_access_role')?>" type="button" class="btn btn-primary my-modal pull-right" >
                      <i class="fa fa-plus"></i><?=display('ad')?>
                    </a>

                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                    <!-- <form method="POST" id="dataform">  -->
                    <?php echo form_open("dashboard/role/update_access_role", array('name'=>'role_acc')); ?>

                            <div class="form-group row">
                                <label for="user_id" class="col-sm-3 col-form-label"><?php echo display('user') ?> *</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="user_id" id="user_id" required="">
                                        <option value="">--Select--</option>
                                        <?php 
                                           foreach($user as $val){
                                            echo '<option value="'.$val->id.'">'.$val->firstname.' '.$val->lastname.'.</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-sm-3 col-form-label"><?php echo display('role') ?> *</label>
                                <div class="col-sm-9">
                                <?php foreach($role as $val){ 
                                    $ck = $this->db->where('fk_user_id',$info->fk_user_id)->where('fk_role_id',$val->role_id)->get('sec_user_access_tbl')->num_rows();
                                ?>
                                    <label class="radio-inline">
                                        <input type="checkbox" name="role[]" <?php echo ($ck?'checked':'')?> value="<?php echo $val->role_id;?>"> <?php echo $val->role_name;?>
                                    </label> 
                                <?php } ?>
                                </div>
                            </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary save_btn save"><?=display('update')?></button>
                </div>


                <!-- </form>  -->
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    document.forms['role_acc'].elements['user_id'].value="<?php echo $info->fk_user_id;?>";
    document.forms['role_acc'].elements['role_id'].value="<?php echo $info->fk_role_id?>";
</script>
 


 