

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('first_name') ?></th>
                             <th><?php echo display('email') ?></th>
                            <th><?php echo display('phone') ?></th>
                             <th><?php echo display('degree_name') ?></th>
                            <th><?php echo display('university_name') ?></th>
                           <th><?php echo display('cgp') ?></th>
                            <th><?php echo display('action') ?></th>
                            
                           
                        </tr>
                        
                    </thead>
                
                    <tbody>

                        <?php if (!empty($all_data)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($all_data as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->first_name; ?></td>
                                    <td><?php echo $que->email; ?></td>
                                    <td><?php echo $que->phone; ?></td>
                                    <td><?php echo $que->degree_name; ?></td>
                                    <td><?php echo $que->university_name; ?></td>
                                    <td><?php echo $que->cgp; ?></td>
                                      <td>
                                      <a href="<?php echo base_url("circularprocess/Candidate/cv/$que->can_id");?>" class="btn btn-primary"> Profile</a>
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



        

<script>
$(document).ready(function(){
    
    $(document).on('click', '#getUser', function(e){
        
        e.preventDefault();
        var base_url="<?php echo base_url()?>";
        
        var id = $(this).data('id');   // it will get id of clicked row
        
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
        
        $.ajax({
            url: base_url+'circularprocess/Candidate/view_details',
            type: 'POST',
            data: 'id='+id,
            dataType: 'html'
        })
        .done(function(data){
            console.log(data);  
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
        
    });
    
});

</script>