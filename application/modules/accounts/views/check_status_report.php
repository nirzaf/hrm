<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>

                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <?= form_open_multipart('accounts/accounts/check_status_report_search') ?>
                <div class="row" id="">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="account_name" class="col-sm-4 col-form-label"><?php echo display('account_name') ?></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="cmbGLCode" id="cmbGLCode">
                                    <option></option>
                                    <?php
                                    foreach($get_status as $g_data){
                                    ?>
                                        <option value="<?php echo $g_data->HeadCode;?>"><?php echo $g_data->HeadName;?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('from_date') ?><?php echo display('from_date') ?></label>
                            <div class="col-sm-8">
                                <input type="text" name="dtpFromDate" value="" placeholder="<?php echo display('date') ?>" class="datepicker form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('to_date') ?><?php echo display('to_date') ?></label>
                            <div class="col-sm-8">
                                <input type="text"  name="dtpToDate" value="" placeholder="<?php echo display('date') ?>" class="datepicker form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="chkIsTransction" name="chkIsTransction" size="40"/>&nbsp;&nbsp;&nbsp;<label for="chkIsTransction">With Details</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('find') ?></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
     $(function(){
        $(".datepicker").datepicker({ dateFormat:'yy-mm-dd' });
       
    });
</script>

