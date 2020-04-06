 <style type="text/css">
     .fa-folder{
        color:#D4AC0D;
     }
     .fa-folder-open-o{
        color:#D4AC0D;
     }
 </style>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">            
             <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                         
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                <div class="col-md-6">
                    <ul id="tree3">
                   <?php

                    $visit=array();
                    for ($i = 0; $i < count($userList); $i++)
                    {
                        $visit[$i] = false;
                    }

                    $this->accounts_model->dfs("COA","0",$userList,$visit,0);
                    
                    ?>
                    </ul>
                </div> 
<?php if($this->permission->method('accounts','update')->access() || $this->permission->method('accounts','create')->access()): ?>
                <div class="col-md-6" id="newform"></div>
                 <?php endif; ?>
            </div>
 </div> 
</div>
 </div> 
</div>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                
                $.fn.extend({
                    treed: function (o) {

                        var openedClass = 'fa-folder-open-o';
                        var closedClass = 'fa-folder-o';

                        if (typeof o !== 'undefined') {
                            if (typeof o.openedClass !== 'undefined') {
                                openedClass = o.openedClass;
                            }
                            if (typeof o.closedClass !== 'undefined') {
                                closedClass = o.closedClass;
                            }
                        }
                        ;

                        //initialize each of the top levels
                        var tree = $(this);
                        tree.addClass("tree");
                        tree.find('li').has("ul").each(function () {
                            var branch = $(this); //li with children ul
                            branch.prepend("<i class='indicator fa " + closedClass + "'></i>");
                            branch.addClass('branch');
                            branch.on('click', function (e) {
                                if (this === e.target) {
                                    var icon = $(this).children('i:first');
                                    icon.toggleClass(openedClass + " " + closedClass);
                                    $(this).children().children().toggle();
                                }
                            });
                            branch.children().children().toggle();
                        });
                        //fire event from the dynamically added icon
                        tree.find('.branch .indicator').each(function () {
                            $(this).on('click', function () {
                                $(this).closest('li').click();
                            });
                        });
                        //fire event to open branch if the li contains an anchor instead of text
                        tree.find('.branch>a').each(function () {
                            $(this).on('click', function (e) {
                                $(this).closest('li').click();
                                e.preventDefault();
                            });
                        });
                        //fire event to open branch if the li contains a button instead of text
                        tree.find('.branch>button').each(function () {
                            $(this).on('click', function (e) {
                                $(this).closest('li').click();
                                e.preventDefault();
                            });
                        });
                    }
                });

                //Initialization of treeviews
            
                $('#tree3').treed({openedClass: 'fa-folder-open-o', closedClass: 'fa-folder'});

            });

        </script>
     
 <script type="text/javascript">
function loadData(id){
   // alert(id);
    $.ajax({
        url : "<?php echo site_url('accounts/accounts/selectedform/')?>" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
            $('#newform').html(data);
             $('#btnSave').hide();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}


</script>
<script type="text/javascript">
    function newdata(id){
     $.ajax({
        url : "<?php echo site_url('accounts/accounts/newform/')?>" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          // console.log(data.headcode);
           console.log(data.rowdata);
           var headlabel = data.headlabel;
           $('#txtHeadCode').val(data.headcode);
            document.getElementById("txtHeadName").value = '';
            $('#txtPHead').val(data.rowdata.HeadName);
            $('#txtHeadLevel').val(headlabel);
            $('#btnSave').prop("disabled", false);
             $('#btnSave').show();
            $('#btnUpdate').hide();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

</script>