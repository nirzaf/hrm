<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                           <th><?php echo display('cid') ?></th>
                            <th><?php echo display('award_name') ?></th>
                            <th><?php echo display('aw_description') ?></th>
                            <th><?php echo display('awr_gift_item') ?></th>
                            <th><?php echo display('date') ?></th>
                            <th>Employee Name</th>
                            <th><?php echo display('awarded_by') ?></th>
                           <th><?php echo display('action') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                               <td><?php echo $row->award_name; ?></td>
                                <td><?php   $text=$row->aw_description;



              


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
                                <td><?php echo $row->awr_gift_item; ?></td>
                                
                                <td><?php echo $row->date; ?></td>
                                <td><?php echo $row->first_name.' '.$row->last_name; ?></td>
                                <td><?php echo $row->awarded_by; ?></td>
                                                           
                                   <td class="center">
                                  
                                    <?php if($this->permission->method('award','update')->access()): ?>
                                        <a href="<?php echo base_url("award/Award_controller/update_award_form/$row->award_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('award','delete')->access()): ?>  
                                        <a href="<?php echo base_url("award/Award_controller/delete_award/$row->award_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
                                         <?php endif; ?> 
                                    </td>
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
 