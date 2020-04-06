
<div class="form-group text-right">
 <?php if($this->permission->method('circularprocess','create')->access()): ?> 
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_selection') ?></button> 
<?php endif; ?>
 <?php if($this->permission->method('circularprocess','read')->access()): ?> 
<a href="<?php echo base_url();?>/circularprocess/Candidate_select/candidate_selection_view" class="btn btn-primary"><?php echo display('manage_selection') ?></a>
<?php endif; ?>
</div>




    <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('pos_id') ?></th>
                            <th><?php echo display('selection_terms') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($selection)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($selection as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                      <td><?php echo $sl; ?></td>
                                      <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                       <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->pos_id; ?></td>
                                    <td><?php echo $que->selection_terms; ?></td>
                                                                
                                    
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

 
    <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>CREATE CANDIDATE SELECTION</strong></center>
            </div>
            <div class="modal-body">
           

   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('circularprocess/Candidate_select/create_selection') ?>
                         <div class="form-group row">
                            <label for="can_id" class="col-sm-3 col-form-label"><?php echo display('can_name') ?> *</label>

                            
                            <div class="col-sm-9">
                                  <?php echo form_dropdown('can_id', $dropdownselection, null, ' class="form-control" onchange="SelectToLoad(this.value)" id="c_id"') ?>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="employee_id"  class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label> -->
                            <!-- <div class="col-sm-9">
                                <input type="text" name="employee_id" class="form-control" title="Id should be start 001 and must be intiger" style="width:300px"  placeholder="<?php echo display('employee_id') ?>" id="employee_id" >
                            </div> -->
                        <!-- </div>  -->
                        <div class="form-group row">
                            <label for="pos_id" class="col-sm-3 col-form-label"><?php echo display('pos_id') ?> *</label>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="pos_name" value="" >
                            <input type="hidden" class="form-control" name="pos_id" value="">
                         
                            </div>
                        </div> 
                          <div class="form-group row">
                            <label for="selection_terms" class="col-sm-3 col-form-label"><?php echo display('selection_terms') ?> *</label>
                            <div class="col-sm-9">
                                <textarea name="selection_terms" class="form-control"  placeholder="<?php echo display('selection_terms') ?>" id="selection_terms" ></textarea>
                            </div>
                        </div> 

          
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('Ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
             
    
   
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>

     

<script type="text/javascript">

function SelectToLoad(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('circularprocess/Candidate_select/select_interviewlist/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              $('[name="pos_id"]').val(data.job_adv_id);
              $('[name="pos_name"]').val(data.position_name);
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
</script>
