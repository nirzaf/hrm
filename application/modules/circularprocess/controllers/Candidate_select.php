<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_select extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Selection_model',
		));		 
	}

public function candidate_shortlist_view(){   
        $this->permission->module('circularprocess','read')->redirect();
		$data['title']         = display('shortlist');  ;
		$data['shortlist']     = $this->Selection_model->viewShortlist();
		$data['dropdowncanid'] = $this->Selection_model->dropdowncanid(); 
		$data['dropdown']      = $this->Selection_model->dropdown(); 
		$data['module']        = "circularprocess";
		$data['page']          = "shortlist_view";  
		echo Modules::run('template/layout', $data); 
	} 

public function create_shortlist()
	{ 
		$data['title'] = display('candidateshortlist');
		#-------------------------------#
		$this->form_validation->set_rules('can_id',display('can_id'),'required|is_unique[candidate_shortlist.can_id]|max_length[50]');
		$this->form_validation->set_rules('job_adv_id',display('job_adv_id')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date_of_shortlist',display('date_of_shortlist'),'required|max_length[50]');
		$this->form_validation->set_rules('interview_date',display('interview_date')  ,'required|max_length[100]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'can_id' 	       => $this->input->post('can_id',true),
				'job_adv_id' 	   => $this->input->post('job_adv_id',true),
				'date_of_shortlist'=> $this->input->post('date_of_shortlist',true),
				'interview_date'   => $this->input->post('interview_date',true),
			];   

			if ($this->Selection_model->shortlist_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("circularprocess/Candidate_select/create_shortlist");

		} else {
			$data['title'] = display('create');
			$data['module'] = "circularprocess";
			$data['page']   = "shortlist_form"; 
			$data['dropdowncanid'] = $this->Selection_model->dropdowncanid(); 
			$data['dropdown'] = $this->Selection_model->dropdown(); 
			$data['shortlist'] = $this->Selection_model->viewShortlist();
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function delete_shortlist($id = null) 
	{ 
        $this->permission->module('circularprocess','delete')->redirect();

		if ($this->Selection_model->delete_shorlist($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('circularprocess/Candidate_select/candidate_shortlist_view');
	}

public function update_shortlist_form($id = null){
 		$this->form_validation->set_rules('can_short_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('can_id',display('can_id'),'required|max_length[50]');
		$this->form_validation->set_rules('job_adv_id',display('job_adv_id')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date_of_shortlist',display('date_of_shortlist'),'required|max_length[50]');
		$this->form_validation->set_rules('interview_date',display('interview_date')  ,'required|max_length[100]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'can_short_id' 	             => $this->input->post('can_short_id',true),
				'can_id' 	                 => $this->input->post('can_id',true),
				'job_adv_id' 	             => $this->input->post('job_adv_id',true),
				'date_of_shortlist' 		 => $this->input->post('date_of_shortlist',true),
				'interview_date' 		     => $this->input->post('interview_date',true),
			]; 
			
			if ($this->Selection_model->update_shortlist($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("circularprocess/Candidate_select/update_shortlist_form/". $id);

		} else {
			$data['title']   = display('update');
		    $data['data']    =$this->Selection_model->shortlist_updateForm($id);
		    $data['canlist'] =$this->Selection_model->Canlist();
			$data['module']  = "circularprocess";
			$data['dropdown']= $this->Selection_model->dropdown(); 
			$data['page']    = "update_short_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}


	/*######################## Interview Part ######################*/
public function candidate_interview_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('interview');  ;
		$data['interview'] = $this->Selection_model->viewInterview();
		$data['module'] = "circularprocess";
		$data['page']   = "interview_view";   
		echo Modules::run('template/layout', $data); 
	} 

	public function select_interviewlist($id){

	$data = $this->db->select('a.*,b.position_name')->from('candidate_shortlist a')->join('position b','a.job_adv_id=b.pos_id')->where('a.can_id',$id)->get()->row();

	echo json_encode($data);
}

public function create_interview()
	{ 
		$data['title'] = display('interview_list');
		#-------------------------------#
		$this->form_validation->set_rules('can_id',display('can_id'),'required|is_unique[candidate_interview.can_id]|max_length[50]');
		$this->form_validation->set_rules('job_adv_id',display('job_adv_id')  ,'required|max_length[100]');
		$this->form_validation->set_rules('interview_date',display('interview_date')  ,'required|max_length[100]');

		$this->form_validation->set_rules('interviewer_id',display('interviewer_id'),'required|max_length[50]');
		$this->form_validation->set_rules('interview_marks',display('interview_marks')  ,'required|max_length[100]');
		$this->form_validation->set_rules('written_total_marks',display('written_total_marks')  ,'required|max_length[100]');
		$this->form_validation->set_rules('mcq_total_marks',display('mcq_total_marks'),'required|max_length[50]');
		$this->form_validation->set_rules('total_marks',display('total_marks'),'required|max_length[50]');
		$this->form_validation->set_rules('recommandation',display('recommandation')  ,'max_length[100]');
		$this->form_validation->set_rules('selection',display('selection')  ,'required|max_length[30]');
		$this->form_validation->set_rules('details',display('details')  ,'max_length[100]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'can_id' 	         => $this->input->post('can_id',true),
				'job_adv_id' 	     => $this->input->post('job_adv_id',true),
				'interview_date' 	 => $this->input->post('interview_date',true),
				'interviewer_id' 	 => $this->input->post('interviewer_id',true),
				'interview_marks' 	 => $this->input->post('interview_marks',true),
				'written_total_marks'=> $this->input->post('written_total_marks',true),
				'mcq_total_marks' 	 => $this->input->post('mcq_total_marks',true),
				'total_marks' 	     => $this->input->post('total_marks',true),
				'recommandation' 	 => $this->input->post('recommandation',true),
				'selection' 	     => $this->input->post('selection',true),
				'details' 	         => $this->input->post('details',true),
			];   

			if ($this->Selection_model->interview_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("circularprocess/Candidate_select/create_interview");
		   } else {
			$data['title'] = display('create');
			$data['module'] = "circularprocess";
			$data['page']   = "interview_form"; 
			$data['dropdowninterview'] = $this->Selection_model->dropdowninterview(); 
			$data['interview'] = $this->Selection_model->viewInterview();
			//$data['dropdown'] = $this->Selection_model->dropdownPosition();
			echo Modules::run('template/layout', $data);   
			
		}   
	}


  public function delete_interview($id = null){ 
     $this->permission->module('circularprocess','delete')->redirect();
		if ($this->Selection_model->delete_interview($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("circularprocess/Candidate_select/candidate_interview_view");
	}

	public function interview_update_form($id = null){
		$this->form_validation->set_rules('can_int_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('can_id',display('can_id'),'required|max_length[50]');
		$this->form_validation->set_rules('job_adv_id',display('job_adv_id')  ,'required|max_length[100]');
		$this->form_validation->set_rules('interview_date',display('interview_date')  ,'required|max_length[100]');
		$this->form_validation->set_rules('interviewer_id',display('interviewer_id'),'required|max_length[50]');
		$this->form_validation->set_rules('interview_marks',display('interview_marks')  ,'required|max_length[100]');
		$this->form_validation->set_rules('written_total_marks',display('written_total_marks')  ,'required|max_length[100]');
		$this->form_validation->set_rules('mcq_total_marks',display('mcq_total_marks'),'required|max_length[50]');
		$this->form_validation->set_rules('recommandation',display('recommandation')  ,'required|max_length[100]');
		$this->form_validation->set_rules('selection',display('selection')  ,'required|max_length[30]');
		$this->form_validation->set_rules('details',display('details')  ,'required|max_length[100]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'can_int_id' 	     => $this->input->post('can_int_id',true),
				'can_id' 	         => $this->input->post('can_id',true),
				'job_adv_id' 	     => $this->input->post('job_adv_id',true),
				'interview_date' 	 => $this->input->post('interview_date',true),
				'interviewer_id' 	 => $this->input->post('interviewer_id',true),
				'interview_marks' 	 => $this->input->post('interview_marks',true),
				'written_total_marks'=> $this->input->post('written_total_marks',true),
				'mcq_total_marks' 	 => $this->input->post('mcq_total_marks',true),
				'recommandation' 	 => $this->input->post('recommandation',true),
				'selection' 	     => $this->input->post('selection',true),
				'details' 	         => $this->input->post('details',true),
			]; 
			
			if ($this->Selection_model->update_interview($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
				redirect("circularprocess/Candidate_select/create_interview");
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
				redirect("circularprocess/Candidate_select/interview_update_form/". $id);
			}	

	     	} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Selection_model->interview_updateForm($id);
			$data['module'] = "circularprocess";
			$data['dropdowninterview'] = $this->Selection_model->dropdowninterview(); 
			$data['page']   = "update_interview_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}
/* ##################### selection part ###########################*/

public function candidate_selection_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('selection');  ;
		$data['selection'] = $this->Selection_model->viewSelection();
		$data['module'] = "circularprocess";
		$data['page']   = "selection_view";   
		echo Modules::run('template/layout', $data); 
	} 


public function select_to_load($id){

	$data = $this->db->select('*')->from('candidate_interview')->where('can_id',$id)->get()->row();

	echo json_encode($data);
}


public function create_selection()
	{ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('can_id',display('can_id'),'required|is_unique[candidate_selection.can_id]|max_length[50]');
		$this->form_validation->set_rules('pos_id',display('pos_id'),'required|max_length[50]');
		$this->form_validation->set_rules('selection_terms',display('selection_terms')  ,'required|max_length[100]');
		$id=$this->input->post('can_id');
		$employee = $this->db->select('*')->from('candidate_basic_info')->where('can_id',$id)->get()->row();
	
		
		$employee_id = $this->randID();

		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'can_id' 	     => $this->input->post('can_id',true),
				'employee_id' 	 => $employee_id,
				'pos_id' 	     => $this->input->post('pos_id',true),
				'selection_terms'=> $this->input->post('selection_terms',true),
			];   

				$coa = $this->Selection_model->headcode();
			if($coa->HeadCode!=NULL){
				$headcode=$coa->HeadCode+1;
			}else{
				$headcode="502020000001";
			}

			$c_code = $employee_id;
			$c_name = $employee->first_name.$employee->last_name;
			$c_acc=$c_code.'-'.$c_name;
			$createby = $this->session->userdata('fullname');
			$createdate = date('Y-m-d H:i:s');
			$data['aco']  = (Object) $coaData = [
				'HeadCode'         => $headcode,
				'HeadName'         => $c_acc,
				'PHeadName'        => 'Account Payable',
				'HeadLevel'        => '2',
				'IsActive'         => '1',
				'IsTransaction'    => '1',
				'IsGL'             => '0',
				'HeadType'         => 'L',
				'IsBudget'         => '0',
				'IsDepreciation'   => '0',
				'DepreciationRate' => '0',
				'CreateBy'         => $createby,
				'CreateDate'       => $createdate,
			];
			$Data1 = [
				'employee_id'                => $employee_id,
				'pos_id' 	                 => $this->input->post('pos_id',true),
				'first_name' 	             => $employee->first_name,
				'last_name' 	             => $employee->last_name,
				'email'                      => $employee->email,
				'phone'                      => $employee->phone,
				'alter_phone' 	             => $employee->alter_phone,
				'present_address' 	         => $employee->present_address,
				'parmanent_address' 	     => $employee->parmanent_address,
				'picture'                    => $employee->picture,
				'state'                      => $employee->state,
			    'city'                       => $employee->city,
			     'zip'                       => $employee->zip
			];  
           if($this->Selection_model->selection_create($postData)){
			    $this->Selection_model->insert_employee($Data1);
			    $this->Selection_model->create_coa($coaData);
				$this->session->set_flashdata('message', display('successfully_saved'));
			
			redirect("circularprocess/Candidate_select/create_selection");
		}else{
		   $this->session->set_flashdata('exception', display('please_try_again'));
			redirect("circularprocess/Candidate_select/create_selection");	
		}
		} else {
			$data['title'] = display('create');
			$data['module'] = "circularprocess";
			$data['page']   = "selection_form"; 
			$data['dropdownselection'] = $this->Selection_model->dropdownselection(); 
			$data['selected'] = $this->Selection_model->selected(); 
			$data['selection'] = $this->Selection_model->viewSelection();
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_selection($id = null) 
	{ 
        $this->permission->module('circularprocess','delete')->redirect();

		if ($this->Selection_model->selection_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("circularprocess/Candidate_select/candidate_selection_view");
	}

       public function update_selection_form($id = null){
 		$this->form_validation->set_rules('can_id',display('can_id'),'required|max_length[50]');
		$this->form_validation->set_rules('pos_id',display('pos_id')  ,'required|max_length[100]');
		$this->form_validation->set_rules('selection_terms',display('selection_terms'),'max_length[100]');
		$employee = $this->db->select('*')->from('candidate_basic_info')->where('can_id',$id)->get()->row();
		$employee_id = $this->input->post('employee_id',true);
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'can_sel_id' 	             => $this->input->post('can_sel_id',true),
				'can_id' 	                 => $this->input->post('can_id',true),
				'employee_id' 	             => $employee_id,
				'pos_id' 		             => $this->input->post('pos_id',true),
				'selection_terms' 		     => $this->input->post('selection_terms',true),
			]; 

			$Data1 = [
				'employee_id'                => $employee_id,
				'pos_id' 	                 => $this->input->post('pos_id',true),
				'first_name' 	             => $employee->first_name,
				'last_name' 	             => $employee->last_name,
				'email'                      => $employee->email,
				'phone'                      => $employee->phone,
				'alter_phone' 	             => $employee->alter_phone,
				'present_address' 	         => $employee->present_address,
				'parmanent_address' 	     => $employee->parmanent_address,
				'picture'                    => $employee->picture,
				'state'                      => $employee->state,
			    'city'                       => $employee->city,
			     'zip'                       => $employee->zip
			];  
			// print_r($Data1);
			// exit; 
			
			
			if ($this->Selection_model->update_selection($postData)) { 
				$this->db->where('employee_id', $employee_id)
			  ->update("employee_history", $Data1);
				$this->session->set_flashdata('message', display('successfully_updated'));
				redirect("circularprocess/Candidate_select/candidate_selection_view");
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
				redirect("circularprocess/Candidate_select/update_selection_form/". $id);
			}
			

		} else {
			$data['title']  = display('update');
		    $data['data']   = $this->Selection_model->selection_updateForm($id);
		    $data['dropdownselection'] = $this->Selection_model->dropdownselection(); 
			$data['module'] = "circularprocess";
			$data['page']   = "update_selection_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}


	   public function randID()
    {
        $result = ""; 
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $charArray = str_split($chars);
        for($i = 0; $i < 7; $i++) {
                $randItem = array_rand($charArray);
                $result .="".$charArray[$randItem];
        }
        return "E".$result;
    }


}
