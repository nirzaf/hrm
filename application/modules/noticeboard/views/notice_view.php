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
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>
                        <td><?php echo $row->notice_type; ?></td>
                        <td><?php   $text=$row->notice_descriptiion;
$pieces = substr($text, 0, 20);
$ps = substr($pieces, 0, 16)."...";
$cn=strlen($text);
if ($cn>20) {
  echo $ps;
}else
{
echo $text;
}
;?></td>
                        <td><?php echo $row->notice_date; ?></td>    
                        <td><?php echo $row->notice_by; ?></td>
                        <td class="center">
                                    <?php if($this->permission->method('noticeboard','update')->access()): ?>
                                        <a href="<?php echo base_url("noticeboard/Notice_controller/update_notice_form/$row->notice_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
                                    <?php if($this->permission->method('noticeboard','delete')->access()): ?>  
                                        <a href="<?php echo base_url("noticeboard/Notice_controller/delete_notice/$row->notice_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
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
 