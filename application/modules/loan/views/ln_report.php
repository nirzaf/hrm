   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                
                <div class="panel-body">

                    <?= form_open('loan/Loan/lnreport_view') ?>
                     <div class="form-group row">
                            <label for="employee_id" class="col-sm-2 col-form-label"><?php echo display('employee_name') ?> *</label>
                            <div class="col-sm-3">
                                <?php echo form_dropdown('employee_id',$gndloan,(!empty($example->employee_id)?$example->employee_id:null), 'class="form-control"') ?> 
                            </div>
                            <div class="col-sm-3">
                                <input name="start_date" class="form-control datepicker" type="text" placeholder="<?php echo display('start_date') ?>" value="<?php echo date('Y-m-d') ?>" id="start_date">
                            </div>
                            <div class="col-sm-3">
                                <input name="end_date" class="form-control datepicker" type="text" placeholder="<?php echo display('end_date') ?>" value="<?php echo date('Y-m-d') ?>" id="end_date">
                            </div>
                         
                            
                            <button type="submit" class="btn btn-primary col-sm-1"><i class="fa fa-search-plus" aria-hidden="true"></i>
<?php echo display('filter')?></button>
                        
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
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
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('total_loan') ?></th>
                            <th><?php echo display('total_amount') ?></th>
                            <th><?php echo display('repayment_amount') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($loan)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($loan as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><a href="<?php echo base_url("loan/Loan/view_details/$que->employee_id") ?>"><?php echo $que->first_name.' '.$que->last_name; ?></a></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                    <td><?php echo $que->l_id; ?></td>
                                    <td><?php echo $que->amount; ?></td>
                                    <td><?php echo $que->repayment_amount; ?></td>
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
 
 <script type="text/javascript">
      $(function(){
        $(".datepicker").datepicker({ dateFormat:'yy-mm-dd' });
      
    });
 </script>