   <style>
    .tabls {
    margin-bottom: 30px;
    border: 2px;
    font-size: 16px;
    }
   
.ckb {
    position: relative;
    width: 16px;
    height: 16px;
    margin: 0;
    display: inline-block;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
}

.ckb:after {
    content: '';
    position: absolute;
    display: block;
    z-index: 1;
    width: 16px;
    height: 16px;
    border: 1px solid #dedede;
    border-radius: 2px;
}

.ckb[type=checkbox]:before {
    background: green url(<?php echo base_url("assets/img/dR1TM0y.png") ?>);
    background-size: 10px 8px;
    background-repeat: no-repeat;
    background-position: 3px 4px;
    position: absolute;
    left: 2px;
    z-index: 2;
    opacity: 0;
    width: 100%;
    height: 100%;
    color: #f6ac4f;
}

.ckb[type=checkbox]:checked:before {
    content: '';
    position: absolute;
    top: 0px;
    opacity: 1;
    left: 0px;
    border: 1px solid #f6ac4f;
    border-radius: 2px;
}
.tb{
    color:green;
    font-size: 16px;
    font-weight: bold;
}
.altt{
    color:red;
    font-size: 28px;
}

.nav.nav-tabs li a {
background-color: green;
color:white;
}

.nav.nav-tabs li:not(.active) a {
  pointer-events:none;
  background-color: #2554C7;
  color:white;
}
.nav.nav-tabs li (.active) a{
  background-color: red;
  color:white;
}
.selectbox{
  width: 200px;
}
    </style>




<div class="row">
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tables</a></li>
    <li><a data-toggle="tab" href="#menu1" >Fields</a></li>
    <li><a data-toggle="tab" href="#menu2" >Summary</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
                    <div class="row">
 <label><input type="checkbox" name="tables[]" class="ckb" value="department" id="" > Department</label><br>                  
<label><input type="checkbox" name="tables[]" class="ckb" value="employee_history" id="" > Employee History</label><br>
<label><input type="checkbox" name="tables[]" class="ckb" value="employee_equipment" id="" > Assets</label><br>
<label><input type="checkbox" name="tables[]" class="ckb" value="equipment" id="" > Equipment</label><br>
<label><input type="checkbox" name="tables[]" class="ckb" value="custom_table" id="" > Custom Table</label><br>
</div>
                        <div class="form-group text-right">
                           
             <input type="button" class="btn btn-primary btnNext" onclick="checktable()" value="NEXT">
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    <div id="menu1" class="tab-pane fade in">
    <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
                      <div id="fields"></div>
              
                        <div class="form-group text-right">
                           
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <input type="button" class="btn btn-primary btnNext" onclick="checkedfield()" value="NEXT">   
             </div>     
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
   <div id="menu2" class="tab-pane fade in">
    <div class="row">
        <div class="col-sm-12 col-md-11">
            <div class="panel">
                
                <div class="panel-body">
               
                        <table class="table table-bordered table-hover"  id="equipment_table">
                              <thead>
                                  <tr>
                                     <th>Field</th> 
                                     <th>Operator</th> 
                                     <th>Value</th> 
                                     <th>Action</th> 
                                  </tr>
                              </thead>
                                <tbody id="equipmnet_info">
                                    <tr>
                                       
                                        <td>
                                           <div class="col-sm-4">
                                             <select name="selectfield[]" id="ssf1"  class="form-control selectbox">
                                             </select>
                                           </div>
                                        </td>
                                        <td> <div class="col-sm-4">
                           <select class="form-control selectbox" name="operator[]" id="operator1">
                               <option value="">Select Oprator</option>
                               <option value="=">=</option>
                               <option value=">">></option>
                               <option value="<"><</option>
                               <option value="<="><=</option>
                               <option value=">=">>=</option>
                               <option value="!=">!=</option>
                           </select>
                        </div></td>
                            <td> <div class="col-sm-4">
                            <input name="value[]" class="form-control selectbox" type="text" placeholder="Value" id="q1" value="">
                        </div></td>
                                        <td> <input type="button"name="sdfsd" id="add_invoice_item" class="btn btn-info"  onclick="addasset('equipmnet_info');" value="add"  />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

              <div class="form-group text-right">
                           
                          <input type="button" class="btn btn-primary btnPrevious"  value="Previous">
             <button type="button" class="btn btn-primary btnNext" onclick="results()" ><i class='fa fa-search' aria-hidden='true'></i> <?php echo display('search')?></button>        
                    </div>
                    <div class="table-responsive">
                      <div id="result"></div>
                  </div>
                    </div>
                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
                </div>
                </div>
<script type="text/javascript">
   $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
    function checktable() {
    var table = $('input[name="tables[]"]:checked').map(function(){
        return this.value;
    }).get();

    //alert(table);
    $.ajax({
        type: "post",
        url: "<?php echo site_url('reports/Adhoc_controller/findtablefield')?>",
        data: {
            tables: table,
        },
        success: function(data)
        {
            //alert(data);
            if(table !=''){
             $('.nav-tabs > .active').next('li').find('a').trigger('click');
              document.getElementById("fields").innerHTML=data;
              }else{
              alert('Please Check Your Tables');
            }
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

 function checkedfield(){

  var fields = $('input[name="fields[]"]:checked').map(function(){
        return this.value;
    }).get();
    $.ajax({
        type: "post",
        url: "<?php echo site_url('reports/Adhoc_controller/selectedfield')?>",
        data: {
            fields: fields,
        },
        success: function(data)
        {
          if(fields !=''){
             $('.nav-tabs > .active').next('li').find('a').trigger('click');
              document.getElementById("ssf1").innerHTML=data;
            }else{
              alert('Please Check Your Fields');
            }
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

// query result
function results(){
  //practicing 
 
 var fields = $('input[name="fields[]"]:checked').map(function(){
        return this.value;
    }).get();
  var table = $('input[name="tables[]"]:checked').map(function(){
        return this.value;
    }).get();
 //alert(fields);
 //var x = document.getElementsByTagName("selectfield").value;
  var value = $('input[name="value[]"]').map(function(){
        return this.value;
    }).get();
var op = $('select[name="operator[]"]').filter(function() {
  return $.trim(this.value).length;  
}).map(function() {
  return this.value;
}).get();

   var selfield = $('select[name="selectfield[]"]').filter(function() {
  return $.trim(this.value).length;  
}).map(function() {
  return this.value;
}).get();
 var oprator  = op;
 var       q  = value;
 var       p  = selfield;
  
             // document.getElementById("result").innerHTML=q;

               $.ajax({
        type: "post",
        url: "<?php echo site_url('reports/Adhoc_controller/resultss')?>",
        data: {
            q: q,
            p: p,
            operator:oprator,
            fields:fields,
            tables:table,
        },
        success: function(data)
        {
          if(value !=''&& op !='' && fields !=''){
              document.getElementById("result").innerHTML=data;
            }else{
              alert('Please Set your queries');
            }
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('No Relational ID');
        }
    });
}


 var count = $('#equipment_table tr').length;
    var limits = 500;

    function addasset(divName){
  
        if (count == limits)  {
            alert("<?php echo display('you_have_reached_the_limit_of_adding')?> " + count + "<?php echo display('inputs')?> ");
        }
        else{
            var newdiv = document.createElement('tr');
            var tabin="ssf"+count;
            var dropdown = document.getElementById("ssf1").innerHTML;
             newdiv = document.createElement("tr");
             newdiv.innerHTML =' <td><div class="col-sm-4"><select name="selectfield[]" id="ssf'+count+'"  class="form-control selectbox"></select></div></td><td> <div class="col-sm-4"><select class="form-control selectbox" name="operator[]" id="operator'+count+'"><option value="">Select Oprator</option><option value="=">=</option><option value=">">></option><option value="<"><</option><option value="<="><=</option><option value=">=">>=</option><option value="!=">!=</option></select></div></td><td> <div class="col-sm-4"><input name="value[]" class="form-control selectbox" type="text" placeholder="Value" id="q'+count+'" value=""></div></td><td> <button style="text-align: right;" class="btn btn-danger red" type="button" value="<?php echo display("delete")?>" onclick="deleteRow(this)"><i class="fa fa-close"></i></button></td>';
             document.getElementById(divName).appendChild(newdiv);
             document.getElementById(tabin).focus();
            document.getElementById("ssf"+count).innerHTML=dropdown;
            count++;
        }
    }


//##########
      function deleteRow(e) {
        var t = $("#equipment_table > tbody > tr").length;
        if (1 == t) alert("There only one row you can't delete.");
        else {
            var a = e.parentNode.parentNode;
            a.parentNode.removeChild(a)
        }
    }

</script>