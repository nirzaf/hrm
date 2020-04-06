<style type="text/css">
    img{
        height: 150px;
        width: 150px;

    }
</style>
<?php
    $total=0;
//print_r(query);
 //print_r($query);

   ?>

<table  class="table table-striped" width="100%">

 <div class="form-group text-center" style="color:#3D9970; font-size: 50px; font-weight: bold; font-family: Stencil Std, fantasy; font-variant: small-caps">
     <?php echo display('loan_report')?> 
        
    </div>
    <div class="row">
  <span class="form-group text-center col-sm-5">
            <?php
        echo img($emp->picture );?>
        </span>
        <div  class="col-sm-7">
    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:cursive">
       
        <?php echo display('name');?>:<?php
        echo $emp->first_name." ".$emp->last_name ;?>
    </div>
   
    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      ID NO: <?php
    
echo $emp->employee_id ;
         
        ?>
    </div>
<div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      <?php echo display('designation');?>: <?php
         echo $emp->position_name ;
         
        ?>
        </div>
    </div>
    </div>
    
    </table>
    <table class="table table-striped" width="100%">
    <tr>
        <th><?php echo display('sl');?></th>
        <th><?php echo display('loan_issue_id');?></th>
        <th><?php echo display('date');?></th>
        <th><?php echo display('amount');?></th>
        <th><?php echo display('repayment');?></th>
        <th><?php echo display('installment');?></th>
    </tr>
    <?php
    $x=1;
    foreach($ab as $qr){?>
    <tr>
          <td><?php echo $x++;?></td>
           <td><a href="<?php echo base_url("loan/Loan/details_view/$qr->loan_id");?>" ><?php echo $qr->loan_id?></a></td>
          <td><?php echo $qr->date_of_approve?></td>
          <td><?php echo $qr->amount?>$</td>
          <td><?php echo $qr->repayment_amount ?>$</td>
          <td><?php echo $qr->installment ?>$</td>
    </tr>
    <?php }?>
    
</table>
<script type="text/javascript">
$(document).ready(function() {
    
// Support for AJAX loaded modal window.
// Focuses on first input textbox after it loads the window.
$('[data-toggle="modal"]').click(function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    if (url.indexOf('#') == 0) {
        $(url).modal('open');
    } else {
        $.get(url, function(data) {
            $('<div class="modal hide fade">' + data + '</div>').modal();
        }).success(function() { $('input:text:visible:first').focus(); });
    }
});
    
});
</script>