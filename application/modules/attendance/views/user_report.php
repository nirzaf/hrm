




<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('attendance/Home/report_view') ?>
                        
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="start_date" class="datepicker form-control" type="text" placeholder="<?php
        
                                 echo display('start_date') ?>"  id="start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="end_date" class="datepicker form-control" type="text" placeholder="<?php  
                                 echo display('end_date') ?>" id="end_date" >
                            </div>
                        </div>
                       

    
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('request') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
    <script language="javascript"> 
      $("#start_date").datepicker({ dateFormat:'Y-m-d' });
       $("#end_date").datepicker({ dateFormat:'yy-mm-dd' });
    
</script>