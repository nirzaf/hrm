<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      <?php if($this->permission->method('asset','read')->access()): ?>
                        <a href="<?php echo base_url('asset/equipment_maping/maping_list') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                      <?php endif; ?>
                      <?php if($this->permission->method('asset','create')->access()): ?>
                        <a href="<?php echo base_url('asset/equipment_maping/maping_form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('assign_asset') ?></a> 
                         <?php endif; ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open_multipart('asset/equipment_maping/asset_return_form') ?>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label"><?php echo display('employee') ?>*</label>
                        <div class="col-sm-10">
                           
                             <?php echo form_dropdown('employee_id',$employee,(!empty($empselect->employee_id)?$empselect->employee_id:null),'class="form-control" required') ?>
                        </div>
                        
                    </div> 
                     <div class="form-group row">
                        <div class="col-sm-12">
                              <table class="table table-bordered table-hover"  id="equipment_table">
                               <thead>
                                  <tr>
                                     <th class="text-center"><?php echo display('equipment')?></th> 
                                     <th class="text-center"><?php echo display('date')?></th> 
                                     <th class="text-center"><?php echo display('damarage_descript')?></th> 
                                     <th class="text-center"><?php echo display('action')?></th> 
                                  </tr>
                              </thead>
                                <tbody id="equipmnet_info">
                                    <?php
                                    $sl=1;
                                     foreach($maping_info as $map){?>
                                    <tr class="">
                                      <td>
                                            <select id="equipment_id<?php echo $sl;?>" class="form-control" required="">
                                             
                                           <?php foreach ($equipment as $value) {?>
                                              <option value="<?php echo $value->equipment_id; ?>"<?php if($map->equipment_id==$value->equipment_id){echo 'selected';}?>><?php echo $value->equipment_name; ?></option>
                                           <?php } ?>
                                            </select>
                                        </td>
                                        <td> <input type="text"  class="form-control datepicker" id="date<?php echo $sl;?>" value=""></td>
                                        <td> <textarea  class="form-control" id="desc<?php echo $sl;?>" placeholder="Damarage Descr"></textarea></td>
                                        <td>  <input type="checkbox" name='rtn[]' onclick="checkboxcheck(<?php echo $sl;?>)" id="check_id_<?php echo $sl;?>" value="<?php echo $sl;?>" class="form-control cheklabel" >
                                        </td>
                                    </tr>
                                <?php $sl++;
                              } ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                     
                    <div class="form-group text-right">
                        <button type="submit" id="return" class="btn btn-success w-md m-b-5"><?php echo display('return') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>  
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
 $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd"
    }); 
});
 
     function checkboxcheck(sl){
        var check_id    ='check_id_'+sl;
        var equipment_id  ='equipment_id'+sl;
        var date  ='date'+sl;
        var desc  ='desc'+sl;
            if($('#'+check_id).prop("checked") == true){
                document.getElementById(date).setAttribute("required","required");
                document.getElementById(equipment_id).setAttribute("name","equipment_id[]");
                 document.getElementById(date).setAttribute("name","return_date[]");
                document.getElementById(desc).setAttribute("name","damarage_descript[]");
            }
            else if($('#'+check_id).prop("checked") == false){
                document.getElementById(date).removeAttribute("required");
                document.getElementById(equipment_id).removeAttribute("name");
                document.getElementById(date).removeAttribute("name");
                document.getElementById(desc).removeAttribute("name");
            }
        };


   $('#return').prop("disabled", true);
        $('input:checkbox').click(function() {
     var check=$('[name="rtn[]"]:checked').length;
        if (check > 0) {
            $('#return').prop("disabled", false);
        } else {
        if (check < 1){
            $('#return').attr('disabled',true);}
        }
});

</script>