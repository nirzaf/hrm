<script type="text/javascript">


    function add_access()
    {
        $('#MyForm')[0].reset();
        $("#MyForm").attr("action", '<?php echo base_url()?>dashboard/role/save_role_access');
        $('#modal_form').modal('show'); 
        $('.modal-title').text('<?php echo display('user_access_role')?>'); 
        $('.save_btn').text('<?php echo display('add')?>'); 
    }



//============================================================
function save()
{
    $('.save_btn').text('saving...'); 
    $('.save_btn').attr('disabled',true); 
    
    var url = $("#MyForm").attr('action');

    $.ajax({
        url : url,
        type: "POST",
        data: $('#MyForm').serialize(),
        success: function(data)
        {
            if(data)
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            $('.save_btn').text('save'); 
            $('.save_btn').attr('disabled',false); 
        },

        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('.save_btn').text('save'); 
            $('.save_btn').attr('disabled',false); 
        }
    });
}  


function reload_table(){

	$("#RoleTbl").load(location.href+" #RoleTbl>*","");
} 


</script>