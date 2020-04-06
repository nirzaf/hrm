<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_permission extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'module_permission_model',
 			'module_model', 
 			'user_model'
 		));
 		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}
 
	public function index()
	{
		$data['title']      = display('module_permission_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "module/permission_list";   
		$data['module_permission'] = $this->module_permission_model->read();
		echo Modules::run('template/layout', $data); 
	}

	public function view($id)
	{
		$data['title']      = display('user_permission');
		$data['module']     = "dashboard";  
		$data['page']       = "module/permission_view"; 
		$data['permission'] = $this->module_permission_model->single($id);
		echo Modules::run('template/layout', $data);
	}

	public function create()
	{
		$data['title'] = display('add_module_permission');
		/*-----------------------------------*/ 
		$this->form_validation->set_rules('fk_user_id', display('username'),'required|numeric|max_length[11]|is_unique[module_permission.fk_user_id]');
		/*-----------------------------------*/
		$data['module_permission'] = (object)array(
			'fk_user_id' => $this->input->post('fk_user_id'),
		);
		/*-----------------------------------*/ 
		$fk_module_id  = $this->input->post('fk_module_id'); 
		$create  	   = $this->input->post('create');
		$read  		   = $this->input->post('read');
		$update  	   = $this->input->post('update');
		$delete  	   = $this->input->post('delete');
 
		for($i=0; $i < sizeof($fk_module_id); $i++) {
			for($j=0; $j < sizeof($fk_module_id[$i]); $j++ ) { 
				$dataStore[$i] = array(
					'fk_user_id'   => $this->input->post('fk_user_id'),
					'fk_module_id' => $fk_module_id[$i][$j], 
					'create'       => (!empty($create[$i][$j])?$create[$i][$j]:0), 
					'read'         => (!empty($read[$i][$j])?$read[$i][$j]:0), 
					'update'       => (!empty($update[$i][$j])?$update[$i][$j]:0), 
					'delete'       => (!empty($delete[$i][$j])?$delete[$i][$j]:0), 
				); 
			}
		} 

		/*-----------------------------------*/
		if ($this->form_validation->run()) {

			if ($this->module_permission_model->create($dataStore)) {
				$this->session->set_flashdata('message', display('module_permission_added_successfully'));
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}
			redirect("dashboard/module_permission/create/");

		} else {
			$data['module'] = "dashboard";  
			$data['page']   = "module/permission_form"; 
			$data['module_list'] = $this->module_model->dropdown();
			$data['user_list'] = $this->user_model->dropdown();
			echo Modules::run('template/layout', $data);
		}
	}

  

	public function edit($id = null)
	{
		$data['title'] = display('update_module_permission');
		/*-----------------------------------*/ 
		$this->form_validation->set_rules('fk_user_id', display('username'),'required|numeric|max_length[11]');
		/*-----------------------------------*/
		$data['module_permission'] = (object)array(
			'fk_user_id' => $this->input->post('fk_user_id'),
		);
		/*-----------------------------------*/ 
		$fk_module_id  = $this->input->post('fk_module_id'); 
		$create  	   = $this->input->post('create');
		$read  		   = $this->input->post('read');
		$update  	   = $this->input->post('update');
		$delete  	   = $this->input->post('delete');
 
		for($i=0; $i < sizeof($fk_module_id); $i++) {
			for($j=0; $j < sizeof($fk_module_id[$i]); $j++ ) { 
				$dataStore[$i] = array(
					'fk_user_id'   => $this->input->post('fk_user_id'),
					'fk_module_id' => $fk_module_id[$i][$j], 
					'create'       => (!empty($create[$i][$j])?$create[$i][$j]:0), 
					'read'         => (!empty($read[$i][$j])?$read[$i][$j]:0), 
					'update'       => (!empty($update[$i][$j])?$update[$i][$j]:0), 
					'delete'       => (!empty($delete[$i][$j])?$delete[$i][$j]:0), 
				); 
			}
		} 

		/*-----------------------------------*/
		if ($this->form_validation->run()) {

			// delete previous permission
			if ($this->module_permission_model->create($dataStore)) {
				$this->session->set_flashdata('message', display('update_successfully'));
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}
			redirect("dashboard/module_permission/edit/$id");

		} else {
			$data['module'] = "dashboard";  
			$data['page']   = "module/permission_edit"; 
			$data['module_list'] = $this->module_model->dropdown();
			$data['user_list'] = $this->user_model->dropdown();
			$data['permission'] = $this->module_permission_model->permission_edit($id);
			echo Modules::run('template/layout', $data);
		}
	}



	public function delete($id = null)
	{
		if ($this->module_permission_model->delete($id)) {
			$this->session->set_flashdata('message', display('delete_successfully'));
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}

		redirect("dashboard/module_permission/index");
	}
 

}
