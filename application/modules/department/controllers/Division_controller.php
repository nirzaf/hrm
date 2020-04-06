<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Division_controller extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Department_model',
		));		 
	}

public function index()
    {   
        $this->permission->method('department','read')->redirect();
        $data['title']    = display('list'); 
        #-------------------------------#       
        #
        #pagination starts
        #
        $config["base_url"] = base_url('department/division_controller/index');
        $config["total_rows"]  = $this->Department_model->count_division();
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
        $data["division"] = $this->Department_model->read_division($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['module'] = "department";
        $data['page']   = "division_list";   
        echo Modules::run('template/layout', $data); 
    }  


public function division_form($id = null)
 {
  $this->permission->method('department','create')->redirect();
  $data['title'] = display('add_division');
  #-------------------------------#
  $this->form_validation->set_rules('division_name', display('division_name')  ,'required|max_length[100]');
  #-------------------------------#
   $data['division']   = (Object) $postData = [
   'dept_id'          => $this->input->post('dept_id'), 
   'department_name'    => $this->input->post('division_name'),
   'parent_id'        => $this->input->post('parent_id')
   
  ];


  if ($this->form_validation->run()) { 

   if (empty($postData['dept_id'])) {

          $this->permission->method('department','create')->redirect();
    if ($this->Department_model->dept_create($postData)) { 
     $this->session->set_flashdata('message', display('save_successfully'));
     redirect('department/division_controller/index');
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("department/Division_controller/division_form"); 

   } else {

    $this->permission->method('department','update')->redirect();

    if ($this->Department_model->update($postData)) { 
     $this->session->set_flashdata('message', display('update_successfully'));
      redirect("department/Division_controller/index/"); 
    } else {
     $this->session->set_flashdata('exception',  display('please_try_again'));
      redirect("department/Division_controller/division_form/".$postData['dept_id']); 
    }  
   }

  } else { 
   if(!empty($id)) {
    $data['title'] = display('update_division');
    $data['division']   = $this->Department_model->findById($id);
   }
   $data['module'] = "department";
   $data['department']  = $this->Department_model->department_dropdown();
   $data['page']   = "division_form";   
   echo Modules::run('template/layout', $data); 
   }   
 }


 public function delete_division($id=null){
        $this->permission->module('department','delete')->redirect();
        if($this->Department_model->dept_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('department/Division_controller/index');
    }

	
     

}
