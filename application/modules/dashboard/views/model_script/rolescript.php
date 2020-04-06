<script type="text/javascript">


    function add_role()
    {
        $('#MyForm')[0].reset();
        $("#MyForm").attr("action", '<?php echo base_url()?>dashboard/role/create');
        $('#modal_form').modal('show'); 
        $('.modal-title').text('<?php echo display('add_role')?>'); 
        $('.save_btn').text('<?php echo display('add')?>'); 
    }


    function edit(id)
    {

	    var url = "<?php echo site_url('dashboard/role/edit_role')?>/"+id;
	    
	    $.ajax({
	        url : url,
	        type: "GET",
	        dataType: "JSON",
	        success: function(data)
	        {
	            $('[name="role_id"]').val(data.role_id);
	            $('[name="role_name"]').val(data.role_name);
	            $('[name="role_description"]').val(data.role_description);
	            $('#modal_form').modal('show'); 
	            $("#MyForm").attr("action", '<?php echo base_url()?>dashboard/role/update_role');
	            $('.modal-title').text('<?php echo display('edit_role')?>'); 
	            $('.save_btn').text('<?php echo display('update')?>');

	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            alert('Error get data from ajax');
	        }
	    });
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