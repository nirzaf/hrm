<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<script>
function hide(){
    document.getElementById('pr').style.display="none";
    
}
</script>
<div id="pr">

    <a href="Javascript:void(0)" class="btn btn-info" onclick="hide();window.print">Print</a>
    
    <a href="<?php echo base_url().'employee/Employees/DOWNLOAD_pdf'?>">Pdf</a>
</div>
<?php
    $total=0;
//print_r($query);
// print_r($query);
    foreach ($cv as $row){
        
     
        }?>
   

<table class="table table-hover" width="100%">
<h2 style="text-align: center;color:black">Resume of <?php echo $row->first_name." " .$row->last_name;?></h2>

<tr class="row"><td class="col-sm-6"><h3>Position:<?php echo $row->pos_id ;?><br>
Employee ID:<?php echo $row->employee_id ;?>
</h3></td>
<td class="col-sm-6 text-right"><?php echo img($row->picture, 'height="150px"','width="100px"') ;?></td></tr>
<tr class="row">
    <td class="col-sm-12">
         <h4  style="text-align: center; font-size: 20px">Personal Information</h4>
    </td>
</tr>

    <tr>
   
        <th>Name</th>
        <td><?php echo $row->first_name." " .$row->last_name;?></td>
    </tr>
    <tr>
        
    <th>Phone</th>
        <td><?php echo $row->phone ;?></td>
      
        </tr>
           <tr>
           <th>Email</th>
        <td><?php echo $row->email  ;?></td>
        </tr>
    <tr>
        
        <th> Present Address</th>
        <td><?php echo $row->present_address ;?></td>
    </tr>
    <tr>
        
        <th> Parmanent Address</th>
        <td><?php echo $row->parmanent_address ;?></td>
    </tr>
   
   
   
     
     
</table>
<table width="100%" class="table table-hover">
<caption  style="text-align: center; font-size: 20px">Educational Information</caption>
                    <thead>
                        <tr>
                           
                            <th>Degree Name</th>
                            <th>Institute Name</th>
                             <th>Result</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($cv)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($cv as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                   
                                    <td><?php echo $que->degree_name; ?></td>
                                    <td><?php echo $que->university_name; ?></td>
                                    <td><?php echo $que->cgp; ?></td>
                                    
                                </tr>
                                
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>

                <table width="100%" class="table table-striped table-hover">
<caption  style="text-align: center; font-size: 20px">Working Experience Information</caption>
                    <thead>
                        <tr>
                            
                            <th>Company Name</th>
                            <th>Working Period</th>
                             <th>Position</th>
                             <th>Supervisor</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($cv)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($cv as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    
                                    <td><?php echo $que->company_name; ?></td>
                                    <td><?php echo $que->working_period; ?></td>
                                    <td><?php echo $que->duties; ?></td>
                                    <td><?php echo $que->supervisor; ?></td>
                                    
                                </tr>
                                
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>
</body>
</html>
