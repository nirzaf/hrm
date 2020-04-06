<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_controller extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Department_model',
		));		 
	}

public function dept_view()
	{   
        $this->permission->method('department','read')->redirect();

		$data['title']    = display('department');  ;
		$data['mang']   = $this->Department_model->dept_view();
		$data['module']   = "department";
		$data['page']     = "department_view";   
		echo Modules::run('template/layout', $data); 
	}





public function create_dept()
    { 
        $data['title'] = display('department');
        #-------------------------------#
        $this->form_validation->set_rules('department_name',display('department_name'),'required|max_length[150]');
       
        
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
            'department_name'      => $this->input->post('department_name',true),
            
                
            ];   

            if ($this->Department_model->dept_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("department/Department_controller/create_dept");



        } else {
            $data['title']  = display('department');
            $data['module'] = "department";
            $data['mang'] = $this->Department_model->dept_view();
            $data['page']   = "dept_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }

 public function delete_dept($id=null){
        $this->permission->module('department','delete')->redirect();
        if($this->Department_model->dept_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('department/Department_controller/dept_view');
    }

	public function update_dept_form($id = null)
    { 
       $this->form_validation->set_rules('dept_id',display('dept_id'));
        $this->form_validation->set_rules('department_name',display('department_name'),'required|max_length[150]');
       
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
            'dept_id'   =>$this->input->post('dept_id',true),
            
            'department_name' => $this->input->post('department_name',true),
            
            ];   

            if ($this->Department_model->update_dept($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("department/Department_controller/dept_view");



        } else {
           $data['title']      = display('update');
            $data['data']      =$this->Department_model->dept_updateForm($id);
            $data['module']    = "department";    
            $data['page']      = "update_dept_form";   
            echo Modules::run('template/layout', $data);  
        }      
    }

     

}
