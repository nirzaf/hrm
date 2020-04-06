<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Tax_model'
		));		 
	}

public function tax_setup_view(){   
        $this->permission->module('tax','read')->redirect();
		$data['title']    = display('tax_setup');  ;
		$data['taxs']     = $this->Tax_model->viewTaxsetup();
		$data['module']   = "tax";
		$data['page']     = "tax_setup_view";   
		echo Modules::run('template/layout', $data); 
	} 

public function create_tax_setup(){ 
		$data['title'] = display('list_tax_setup');
		#-------------------------------#
		$this->form_validation->set_rules('start_amount[]',display('start_amount'),'required|max_length[30]');
		$this->form_validation->set_rules('end_amount[]',display('end_amount'),'required|max_length[30]');
		$this->form_validation->set_rules('rate[]',display('rate'),'required|max_length[30]');
	    $sm = $this->input->post('start_amount');
	    $em = $this->input->post('end_amount');
	    $rt = $this->input->post('rate');
		#-------------------------------#
		if ($this->form_validation->run() === true) {
		    for ($i=0; $i < sizeof($sm); $i++) {
				$postData = [
					'start_amount'  => $sm[$i],
					'end_amount' 	=> $em[$i],
					'rate' 	        => $rt[$i],					
				];     
				$this->Tax_model->taxsetup_create($postData);
		    }
		    $this->session->set_flashdata('message', display('save_successfully'));
			redirect("tax/Tax/create_tax_setup");
		}else {
			$data['title']    = display('create');
			$data['module']   = "tax";
			$data['page']     = "tax_setupform"; 
			$data['taxs']     = $this->Tax_model->viewTaxsetup();
			echo Modules::run('template/layout', $data);   
			
		}   
	}
public function delete_taxsetup($id = null){ 
        $this->permission->module('tax','delete')->redirect();
		if ($this->Tax_model->taxsetup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("tax/Tax/tax_setup_view");
	}

public function update_taxsetup_form($id = null){
 		$this->form_validation->set_rules('tax_setup_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('start_amount',display('start_amount'),'required|max_length[30]');
		$this->form_validation->set_rules('end_amount',display('end_amount'),'required|max_length[30]');
		$this->form_validation->set_rules('rate',display('rate'),'required|max_length[30]');		
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			$postData = [
			    'tax_setup_id' 	  => $this->input->post('tax_setup_id',true),
				'start_amount' 	  => $this->input->post('start_amount',true),
				'end_amount'      => $this->input->post("end_amount",true),
				'rate'            => $this->input->post("rate",true),
			]; 		
			if ($this->Tax_model->update_taxsetup($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("tax/Tax/update_taxsetup_form/". $id);

		} else {
			$data['title']     = display('update');
		    $data['data']      =$this->Tax_model->taxsetup_updateForm($id);   
			$data['module']    = "tax";	
			$data['page']      = "taxserupt_update_form";   //
			echo Modules::run('template/layout', $data); 
		}
	}


public function tax_collection_view(){   
        $this->permission->module('tax','read')->redirect();
		$data['title']    = display('tax_setup');  ;
		$data['collect']  = $this->Tax_model->viewcollection();
		$data['module']   = "tax";
		$data['page']     = "tax_collection_view";   
		echo Modules::run('template/layout', $data); 
	} 

public function delete_taxcollection($id = null) { 
        $this->permission->module('tax','delete')->redirect();
		if ($this->Tax_model->taxcollect_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("tax/Tax/tax_collection_view");
	}
}
