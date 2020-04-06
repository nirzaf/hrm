 <?php
    foreach ($query1 as $row){
      
        }?>

   

<table class="table table-striped" width="100%">

    <tr>
        <th><?php echo display('employee') ?></th>
        <td><?php echo $row->employee_id ;?></td>
    </tr>
    <tr>
        <th><?php echo display('date') ?></th>
        <td><?php echo $row->date ;?></td>
    <th><?php echo display('checkin') ?></th>
        <td><?php echo $row->sign_in ;?></td></tr>
    
    
</table>
