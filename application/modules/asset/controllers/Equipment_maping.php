<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment_maping extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'asset_model'
		));		 
	}

   public function maping_list()
    {   
        $this->permission->method('asset','read')->redirect();
        $data['title']    = display('assign_list'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('asset/Equipment_maping/maping_list');
        $config["total_rows"]  = $this->asset_model->count_equipment();
        $config["per_page"]    = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["equipment"] = $this->asset_model->maping_equipment($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['module'] = "asset";
        $data['page']   = "maping_list";   
        echo Modules::run('template/layout', $data); 
    }  

// maping form and insert
public function maping_form()
 {
  $this->permission->method('asset','create')->redirect();
  $data['title'] = display('assign_asset');
  #-------------------------------#
  $this->form_validation->set_rules('employee_id', display('employee')  ,'required|max_length[100]');
  #-------------------------------#
 
  if ($this->form_validation->run()) { 
      $this->permission->method('asset','create')->redirect();
    if ($this->asset_model->maping_create()) { 
     $this->session->set_flashdata('message', display('save_successfully'));
     redirect('asset/Equipment_maping/maping_list');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("asset/Equipment_maping/maping_form"); 

  } else { 
   $data['equipment']   =  $this->asset_model->equipment_dropdown();
   $data['employee']    = $this->asset_model->employee_dropdown();
   $data['module'] = "asset";
   $data['page']   = "maping_form";   
   echo Modules::run('template/layout', $data); 
   }   
 }


 public function delete_maping($id=null){
        $this->permission->module('asset','delete')->redirect();
        if($this->asset_model->maping_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('asset/Equipment_maping/maping_list');
    }
//update maping
    public function maping_update($id = null)
 {
  $this->permission->method('asset','create')->redirect();
  $data['title'] = display('update_assign');
  #-------------------------------#
  $this->form_validation->set_rules('employee_id', display('employee')  ,'required|max_length[100]');
  #-------------------------------#
 
  if ($this->form_validation->run()) { 
      $this->permission->method('asset','update')->redirect();
    if ($this->asset_model->maping_update()) { 
     $this->session->set_flashdata('message', display('successfully_updated'));
     redirect('asset/Equipment_maping/maping_list');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("asset/Equipment_maping/maping_update/".$id); 

  } else { 
   $data['equipment']   = $this->asset_model->update_equipment_dropdown();
   $data['employee']    = $this->asset_model->employee_dropdown();
   $data['maping_info'] = $this->asset_model->findById_maping($id);
   $data['empselect']   = $this->asset_model->findById_emp($id);
   $data['module'] = "asset";
   $data['page']   = "maping_update_form";   
   echo Modules::run('template/layout', $data); 
   }   
 }
    public function return_asset(){

       $this->permission->method('asset','update')->redirect();
        $data['title']    = display('return_assets'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('asset/Equipment_maping/maping_list');
        $config["total_rows"]  = $this->asset_model->count_equipment();
        $config["per_page"]    = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["equipment"] = $this->asset_model->maping_equipment($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['module'] = "asset";
        $data['page']   = "asset_return_form";   
        echo Modules::run('template/layout', $data);
    }
    // asset return form
     public function asset_return_form($id = null)
 {
  $this->permission->method('asset','update')->redirect();
  $data['title'] = display('return_asset');
  #-------------------------------#
  $this->form_validation->set_rules('employee_id', display('employee')  ,'required|max_length[100]');
  #-------------------------------#
 
  if ($this->form_validation->run()) { 
      $this->permission->method('asset','update')->redirect();
    if ($this->asset_model->asset_return()) { 
     $this->session->set_flashdata('message', display('return_successfull'));
     redirect('asset/Equipment_maping/return_asset');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("asset/Equipment_maping/asset_return_form/".$id); 

  } else { 
   $data['equipment']   = $this->asset_model->update_equipment_dropdown();
   $data['employee']    = $this->asset_model->employee_dropdown();
   $data['maping_info'] = $this->asset_model->findById_equipment_return($id);
   $data['empselect']   = $this->asset_model->findById_emp($id);
   $data['module'] = "asset";
   $data['page']   = "asset_return_f";   
   echo Modules::run('template/layout', $data); 
   }   
 }


 public function return_list(){

       $this->permission->method('asset','read')->redirect();
        $data['title']    = display('return_list'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('asset/Equipment_maping/return_list');
        $config["total_rows"]  = $this->asset_model->count_return_list();
        $config["per_page"]    = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["equipment"] = $this->asset_model->return_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['module'] = "asset";
        $data['page']   = "return_list";   
        echo Modules::run('template/layout', $data);
    }
    // equipment auto complete
    public function asset_search()
  { 
    $equipment   = $this->input->post('equipment');
        $search_equipment  = $this->asset_model->search_equipment($equipment);
    $list[''] = '';
    foreach ($search_equipment as $value) {
      $json_equipment[] = array('label'=>$value['equipment_name'],'value'=>$value['equipment_id']);
    } 
   
        echo json_encode($json_equipment);
  }
}
