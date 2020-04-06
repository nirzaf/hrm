<style> 
#myDIV {
    /*width: 300px;
    height: 200px;*/
    background-color:yellow;
    color: #AF110D;
    font-family:Allan;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 3s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {color: #AF110D;}
    to {color:#FFB1AD;}
}

/* Standard syntax */
@keyframes mymove {
    from {color: #AF110D;}
    to {color:#FFB1AD;}
}
</style>
<div class="form-group text-right">
 <?php if($this->permission->method('noticeboard','create')->access()): ?>
<button type="button" class="btn btn-primary btn-md" data-target="#add" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('add_new_notice');?></button> 
<?php endif; ?>
 <?php if($this->permission->method('noticeboard','read')->access()): ?>
<a href="<?php echo base_url();?>/noticeboard/Notice_controller/notice_view" class="btn btn-primary"><?php echo display('manage_notice');?></a>
<?php endif; ?>
</div>
<!--  -->

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                             <th><?php echo display('cid') ?></th>
                             <th><?php echo display('notice_type') ?></th>
                             <th><?php echo display('notice_descriptiion') ?></th>
                             <th><?php echo display('notice_date') ?></th>
                             <th><?php echo display('notice_by') ?></th>
                             <th><?php echo display('action') ?></th>
                           
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                            <?php 
                           

$cd=$row->notice_date;


                     $bc=date('Y-m-d');

$date1 = new DateTime("$bc");
$date2 = new DateTime("$cd");
$days = $date1->diff($date2);
// this will output 4 days                           
$d=$days->days;

if ($bc>$ab) {
    $tr ="#ffc8c8";

}else {
    $tr ="#ffffff";
}


?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row->notice_type; ?></td>
                                <td><?php   $text=$row->notice_descriptiion;



              


$pieces = substr($text, 0, 20);
$ps = substr($pieces, 0, 16)."...";
//echo $ps ;

$cn=strlen($text);
//echo $cn;

if ($cn>20) {
  echo $ps;
}else
{
echo $text;
}


                                ?></td>
                                <td><?php echo $row->notice_date; ?></td>
                                
                                <td><?php echo $row->notice_by; ?></td>
                                <td class="center">
                                    <?php if(!empty($row->notice_attachment)){?>
                                   <a href="<?php echo base_url("noticeboard/Notice_controller/download?file=$row->notice_attachment") ?>" tareget="_blank" class="btn btn-xs btn-info"><i class="fa fa-download"></i></a> 
                               <?php }  ?>

 <a href="<?php echo base_url("noticeboard/Notice_controller/view_details/$row->notice_id") ?>" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                   <span id="myDIV" style="color:<?php echo $tms ;?>"><?php  $dy=$d;
   if($dy<5){
    echo "New Notice";
   }else{
    echo "";
   }
                                   ?></span></td>
                                                           
                                   
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
 
 
 <div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><?php echo display('notice_form') ?></strong></center>
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

                    <?= form_open_multipart('noticeboard/Notice_controller/create_notice') ?>
                   
                       <div class="form-group row">
                           
                            <label for="notice_type" class="col-sm-3 col-form-label">
                            <?php echo display('notice_type') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_type" placeholder=" <?php echo display('notice_type') ?>" class=" form-control">
                               
                            </div>
                           
                        </div>
                        <div class="form-group row">
                           
                            <label for="notice_descriptiion" class="col-sm-3 col-form-label">
                            <?php echo display('notice_descriptiion') ?></label>
                            <div class="col-sm-9">
                           <textarea  name="notice_descriptiion" placeholder="<?php echo display('notice_descriptiion') ?>" class=" form-control"></textarea>
                               
                            </div>
                           
                        </div>
                         <div class="form-group row">
                           
                            <label for="notice_date" class="col-sm-3 col-form-label">
                            <?php echo display('notice_date') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_date" class="datepicker form-control" id="notice_date" placeholder="<?php echo display('notice_date') ?>">
                               
                            </div>
                           
                        </div>
                     
                         <div class="form-group row">
                            <label for="notice_attachment" class="col-sm-3 col-form-label">
                            <?php echo display('notice_attachment') ?></label>
                            <div class="col-sm-9">
                           <input type="file" name="notice_attachment" class="form-control">
                               
                            </div>
                            </div>
                         <div class="form-group row">
                           
                            <label for="notice_by" class="col-sm-3 col-form-label">
                            <?php echo display('notice_by') ?></label>
                            <div class="col-sm-9">
                           <input type="text" name="notice_by" class=" form-control">
                               
                            </div>
                           
                        </div>
                    
     
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
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
        $("#notice_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#end_date").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#end_date").datepicker( "option", "minDate", minValue );
        })
    });
    </script>