<div class="form-group text-right">
  <?php if($this->permission->method('tax','create')->access()): ?> 
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
<?php echo display('setup_tax') ?></button> 
<?php endif; ?>
 <?php if($this->permission->method('tax','read')->access()): ?> 
<a href="<?php echo base_url();?>/tax/Tax/tax_setup_view" class="btn btn-primary"><?php echo display('manage_tax_setup') ?></a>
<?php endif; ?>
</div>

 
    


<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('setup_tax') ?></strong>
            </div>
            <div class="modal-body">
           

   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('setup_tax') ?></h4>
                    </div>
                </div>
                    <div class="panel-body">

                    <?= form_open('tax/Tax/create_tax_setup') ?>
                    <table id="POITable" border="0">
        <tr style="text-align: center;">
            <td><?php echo display('no') ?></td>
            <td><?php echo display('start_amount') ?></td>
            <td><?php echo display('end_amount') ?></td>
            <td><?php echo display('tax_rate') ?></td>
            <td style="padding:5px"><?php echo display('delete') ?>?</td>
            <td><?php echo display('add_more') ?>?</td>
        </tr>
        <tr>
            <td>1</td>
            <td style="padding:5px"><input  type="text" class="form-control" id="start_amount" name="start_amount[]" /></td>
            <td style="padding:5px"><input  type="text" class="form-control" id="end_amount" name="end_amount[]" /></td>
            <td style="padding:5px"><input  type="text" class="form-control" id="rate" name="rate[]" /></td>
            <td style="padding:5px"><button type="button" id="delPOIbutton" class="btn btn-danger" value="Delete" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
            <td style="padding:5px"><button type="button" id="addmorePOIbutton" class="btn btn-success" value="Add More POIs" onclick="insRow()"><i class="fa fa-plus-circle"></button></td>
        </tr>
        </table>
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('setup') ?></button>
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

        <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('start_amount') ?></th>
                            <th><?php echo display('end_amount') ?></th>
                             <th><?php echo display('rate') ?></th>
                            
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($taxs)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($taxs as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->start_amount; ?></td>
                                    <td><?php echo $que->end_amount; ?></td>
                                    <td><?php echo $que->rate; ?></td>
                                    
                                    
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
    
    function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}


function insRow()
{
    console.log( 'hi');
    var x=document.getElementById('POITable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    new_row.cells[0].innerHTML = len;
    
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id += len;
    inp1.value = '';
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id += len;
    inp2.value = '';
    x.appendChild( new_row );
}
</script>