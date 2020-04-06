<style> 
#myDIV {
    /*width: 300px;
    height: 200px;*/
    background-color: green;
    font-size: 25px;
    color: white;
    font-family:Stencil Std, fantasy;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {color: red;}
    to {color:white;}
}

/* Standard syntax */
@keyframes mymove {
    from {color: red;}
    to {color:white;}
}


</style>
<?php
   
    foreach ($detls as $row){
        
     
        }?>
   
<div class="row">
    <div class="col-sm-12 col-md-12">
 

<div class="card-content">
    <div id="myDIV" class="card-content-member" >
        <p class="m-t-0"><h1><i class='fa fa-bell-o' aria-hidden='true'></i></h1>Notification </p>
       
        
    </div>
    <div class="card-content-languages">
                                       
                                        


 <table class="table table-hover" width="100%">
   <caption style="text-align:right"><a href="<?php echo base_url("noticeboard/Notice_controller/download?file=$row->notice_attachment") ?>" tareget="_blank" class="btn btn-xs btn-primary"><i class="fa fa-download"></i>Download Notice!!</a></caption>

<tr>
        
        <th>Notice Date</th>
        <td><?php echo $row->notice_date ;?></td>
    </tr>
    <tr>
        
        <th>Notice By</th>
        <td><?php echo $row->notice_by ;?></td>
    </tr>
<tr>
        
        <th>Notice</th>
        <td><?php echo strtoupper($row->notice_type)." ";?></td>
    </tr>
    <tr>
        
        <th>Description</th>
        <td><?php echo $row->notice_descriptiion ;?></td>
    </tr>
    
    
    
    

          
</table>

                                        </div>
                                    </div>
                                    

        
    </div>



                              </div>
