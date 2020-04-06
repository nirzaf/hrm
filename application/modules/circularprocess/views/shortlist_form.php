<div class="form-group text-right">
 <?php if($this->permission->method('circularprocess','create')->access()): ?> 
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_shortlist')?></button> 
<?php endif; ?>
 <?php if($this->permission->method('circularprocess','read')->access()): ?> 
<a href="<?php echo base_url();?>/circularprocess/Candidate_select/candidate_shortlist_view" class="btn btn-primary"><?php echo display('manage_shortlist')?></a>
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
                            <th><?php echo display('cid') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('job_adv_id') ?></th>
                            <th><?php echo display('date_of_shortlist') ?></th>
                             <th><?php echo display('interview_date') ?></th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($shortlist)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($shortlist as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->position_name; ?></td>
                                    <td><?php echo $que->date_of_shortlist; ?></td>
                                     <td><?php echo $que->interview_date; ?></td>

                                    
                                    
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
                <strong> <?php echo display('add_shortlist')?></strong>
            </div>
            <div class="modal-body">
           

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('circularprocess/Candidate_select/create_shortlist') ?>
                         <div class="form-group row">
                            <label for="can_id" class="col-sm-3 col-form-label"><?php echo display('candidate_name') ?> *</label>
                           
                                <div class="col-sm-9">
                              <?php
echo form_dropdown('can_id',$dropdowncanid, null, 'class="form-control" selected="selected" style="width:300px"');
?> 
                        </div> 
                        </div>
                        <div class="form-group row">
                            <label for="job_adv_id" class="col-sm-3 col-form-label"><?php echo display('job_adv_id') ?> *</label>
                            <div class="col-sm-9">
                              <?php
echo form_dropdown('job_adv_id',$dropdown, null, 'class="form-control" selected="selected" style="width:300px"');
?> 
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="date_of_shortlist" class="col-sm-3 col-form-label"><?php echo display('date_of_shortlist') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="date_of_shortlist" class="form-control"  placeholder="<?php echo display('date_of_shortlist') ?>" id="date_of_shortlist" style="width:300px"
                                value="<?php echo date('Y-m-d') ?>">
                            </div>
                        </div> 
                          <div class="form-group row">
                            <label for="interview_date" class="col-sm-3 col-form-label"><?php echo display('interview_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="interview_date" class="datepicker form-control"  placeholder="<?php echo display('interview_date') ?>" id="interview_date" style="width:300px" >
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
    <script language="javascript"> 
    $(function(){
        $("#interview_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });
</script>