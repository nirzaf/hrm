<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Loan_model'
		));		 
	}

	public function loan_view(){   
		$this->permission->module('loan','read')->redirect();
		$data['title']    = display('selection');  ;
		$data['loan']     = $this->Loan_model->viewLoan();
		$data['module']   = "loan";
		$data['page']     = "loan_view";   
		echo Modules::run('template/layout', $data); 
	} 




	public function create_grandloan(){ 
		$data['title'] = display('loan');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('permission_by',display('permission_by'),'required|max_length[50]');
		$this->form_validation->set_rules('loan_details',display('loan_details'));
		$this->form_validation->set_rules('amount',display('amount')  ,'required|max_length[100]');
		$this->form_validation->set_rules('interest_rate',display('interest_rate')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment',display('installment')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment_period',display('installment_period')  ,'required|max_length[100]');
		$this->form_validation->set_rules('repayment_amount',display('repayment_amount')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date_of_approve',display('date_of_approve')  ,'required|max_length[100]');
		$this->form_validation->set_rules('loan_status',display('loan_status')  ,'required|max_length[100]');
		$this->form_validation->set_rules('repayment_start_date',display('repayment_start_date')  ,'required|max_length[100]');
// acc transaction information
		

		#-------------------------------#
		if ($this->form_validation->run() === true) {
 $emp_id = $this->input->post('employee_id',true);
		$c_name = $this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$emp_id)->get()->row();
		$c_acc=$emp_id.'-'.$c_name->first_name.$c_name->last_name;
      $coatransactionInfo = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$c_acc)->get()->row();
  $COAID = $coatransactionInfo->HeadCode;
			$postData = [
				'employee_id'        => $this->input->post('employee_id',true),
				'permission_by'      => $this->input->post('permission_by',true),
				'loan_details' 	     => $this->input->post('loan_details',true),
				'amount' 	         => $this->input->post('amount',true),
				'interest_rate'      => $this->input->post('interest_rate',true),
				'installment' 	     => $this->input->post('installment',true),
				'installment_period' => $this->input->post('installment_period',true),
				'repayment_amount'   => $this->input->post('repayment_amount',true),
				'date_of_approve' 	 => $this->input->post('date_of_approve',true),
				'loan_status' 	     => $this->input->post('loan_status',true),
				'repayment_start_date' 	 => $this->input->post('repayment_start_date',true),
				
			]; 

				    
  
			if ($this->Loan_model->grndloan_create($postData)) { 
				$voucherNo = $this->db->insert_id();
				//Cash In Hand for Loan 
				    $CashinHandCredit = array(
      'VNo'            => $voucherNo,
      'Vtype'          => 'GrantLoan',
      'VDate'          => date('Y-m-d'),
      'COAID'          => 1020101,
      'Narration'      => 'Cash in hand Credit For Employee Id'.$this->input->post('employee_id',true),
      'Debit'          => 0,
      'Credit'         => $this->input->post('amount',true),
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    ); 

	   $this->db->insert('acc_transaction',$CashinHandCredit);
          //ACC payable  debit
 	$accpayable = array(
      'VNo'            => $voucherNo,
      'Vtype'          => 'Loan Grant',
      'VDate'          => date('Y-m-d'),
      'COAID'          => $COAID,
      'Narration'      => 'Payable For Employee Id'.$this->input->post('employee_id',true),
      'Debit'          => $this->input->post('amount',true),
      'Credit'         => 0,
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$accpayable);
				$this->session->set_flashdata('message', display('successfully_inserted'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("loan/Loan/create_grandloan");
		} else {
			$data['title']   = display('create');
			$data['module']  = "loan";
			$data['page']    = "grandloan_form"; 
			$data['gndloan'] = $this->Loan_model->grndloandropdown();
			$data['loan']    = $this->Loan_model->LoanList(); 
			
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function delete_grndloan($id = null) 
	{ 
		$this->permission->module('loan','delete')->redirect();

		if ($this->Loan_model->grndloan_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("loan/Loan/loan_view");
	}

	public function update_grnloan_form($id = null){
		$this->form_validation->set_rules('loan_id',null,'required|max_length[11]');
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('permission_by',display('permission_by'),'required|max_length[50]');
		$this->form_validation->set_rules('loan_details',display('loan_details'));
		$this->form_validation->set_rules('amount',display('amount')  ,'required|max_length[100]');
		$this->form_validation->set_rules('interest_rate',display('interest_rate')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment',display('installment')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment_period',display('installment_period')  ,'required|max_length[100]');
		$this->form_validation->set_rules('repayment_amount',display('repayment_amount')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date_of_approve',display('date_of_approve')  ,'required|max_length[100]');
		$this->form_validation->set_rules('repayment_start_date',display('repayment_start_date')  ,'required|max_length[100]');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'loan_id' 	         => $this->input->post('loan_id',true),
				'employee_id'        => $this->input->post('employee_id',true),
				'permission_by'      => $this->input->post('permission_by',true),
				'loan_details' 	     => $this->input->post('loan_details',true),
				'amount' 	         => $this->input->post('amount',true),
				'interest_rate'      => $this->input->post('interest_rate',true),
				'installment' 	     => $this->input->post('installment',true),
				'installment_period' => $this->input->post('installment_period',true),
				'repayment_amount'   => $this->input->post('repayment_amount',true),
				'date_of_approve' 	 => $this->input->post('date_of_approve',true),
				'repayment_start_date'=> $this->input->post('repayment_start_date',true),
			]; 
			
			if ($this->Loan_model->update_grndloan($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("loan/Loan/update_grnloan_form/". $id);

		} else {
			$data['title']     = display('update');
			$data['data']      =$this->Loan_model->grndloan_updateForm($id);
			$data['employee']  = $this->Loan_model->grndloandropdown(); 
			$data['query']     = $this->Loan_model->get_dropdown_emp_id($id);
			$data['gndloan'] = $this->Loan_model->grndloandropdown();
			$data['module']    = "loan";	
			$data['page']      = "update_grnloan_form";   
			echo Modules::run('template/layout', $data); 
		}

	}

	/* ################ Employee Salary Setup Start   #######################....*/

	public function installmentView(){   

		$this->permission->module('loan','read')->redirect();
		$data['title']    = display('selection');  ;
		$data['loanss']   = $this->Loan_model->installment_view();
		$data['module']   = "loan";
		$data['page']     = "installment_v";   
		echo Modules::run('template/layout', $data); 
	} 
//

	public function create_installment(){ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('loan_id',display('loan_id'),'required|max_length[50]');
		$this->form_validation->set_rules('installment_amount',display('installment_amount'));
		$this->form_validation->set_rules('payment',display('payment')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date',display('date')  ,'required|max_length[100]');
		$this->form_validation->set_rules('received_by',display('received_by')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment_no',display('installment_no')  ,'required|max_length[100]');
		$this->form_validation->set_rules('notes',display('notes')  ,'required|max_length[100]');
		#-------------------------------#

		$emp_id = $this->input->post('employee_id',true);
		$c_name = $this->db->select('first_name,last_name')->from('employee_history')->where('employee_id',$emp_id)->get()->row();
		$c_acc=$emp_id.'-'.$c_name->first_name.$c_name->last_name;
       $coatransactionInfo = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$c_acc)->get()->row();
       $COAID = $coatransactionInfo->HeadCode;
		if ($this->form_validation->run() === true) {

			$postData = [
				'employee_id'        => $this->input->post('employee_id',true),
				'loan_id' 	         => $this->input->post('loan_id',true),
				'installment_amount' => $this->input->post('installment_amount',true),
				'payment' 	         => $this->input->post('payment',true),
				'date' 	             => $this->input->post('date',true),
				'received_by'        => $this->input->post('received_by',true),
				'installment_no' 	 => $this->input->post('installment_no',true),
				'notes' 	         => $this->input->post('notes',true),
				
				
			];   
			 $CashinHandDebit = array(
      'VNo'         => $this->input->post('loan_id',true),
      'Vtype'       => 'LoanInstall',
      'VDate'       => date('Y-m-d'),
      'COAID'       => 1020101,
      'Narration'   => 'Cash in hand Debit For Employee Id'.$this->input->post('employee_id',true),
      'Debit'       => $this->input->post('payment',true),
      'Credit'      => 0,
      'IsPosted'    => 1,
      'CreateBy'    => $this->session->userdata('id'),
      'CreateDate'  => date('Y-m-d H:i:s'),
      'IsAppove'    => 1
    ); 

	   
          //ACC payable  Credit
 	$accpayable = array(
      'VNo'            => $this->input->post('loan_id',true),
      'Vtype'          => 'LoanInstall',
      'VDate'          => date('Y-m-d'),
      'COAID'          => $COAID,
      'Narration'      => 'Payable For Employee Id'.$this->input->post('employee_id',true),
      'Debit'          => 0,
      'Credit'         => $this->input->post('payment',true),
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    ); 
      

			if ($this->Loan_model->installment_create($postData)) { 
				$this->db->insert('acc_transaction',$CashinHandDebit);
				 $this->db->insert('acc_transaction',$accpayable);
				$this->session->set_flashdata('message', display('successfully_installed'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("loan/Loan/create_installment");

		} else {
			$data['title']   = display('create');
			$data['module']  = "loan";
			$data['page']    = "installment_form"; 
			$data['gndloan'] = $this->Loan_model->installdropdown();
			$data['autoincrement'] = $this->Loan_model->autoincrement();
			$data['loanss']  = $this->Loan_model->installment_view();
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function select_to_load(){
		$id = $this->input->post('employee_id');
		$data = $this->db->select('*')->from('grand_loan')->where('employee_id',$id)->get()->result();
		 $html = "<option value=\'\'>Select One</option>";
         foreach($data as $info){
         	$html.="<option value='$info->loan_id'>$info->loan_id</option>";
         }
         echo json_encode($html);
		
	}

	public function select_to_install($id){
		$data = $this->db->select('*')->from('grand_loan')->where('loan_id',$id)->get()->row();
		echo json_encode($data);
	}
	public function select_to_autoincrement($id){
		$data = $this->db->select_max('installment_no')->from('loan_installment')->where('loan_id',$id)->get()->row();
		$install_num = (!empty($data->installment_no)?$data->installment_no:0);
		echo json_encode($install_num);
	}



	public function delete_install($id = null) 
	{ 
		$this->permission->module('loan','delete')->redirect();

		if ($this->Loan_model->install_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("loan/Loan/installmentView");
	}


	

// /* ################ Employee Salary Setup End   #######################....*/
// /* <<<<<<<<<<<<<##############^^^^^^@@@@^^^^^###############>>>>>>>
	public function update_install_form($id = null){
		$this->form_validation->set_rules('loan_inst_id',null,'required|max_length[11]');
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('loan_id',display('loan_id'),'required|max_length[50]');
		$this->form_validation->set_rules('installment_amount',display('installment_amount'));
		$this->form_validation->set_rules('payment',display('payment')  ,'required|max_length[100]');
		$this->form_validation->set_rules('date',display('date')  ,'required|max_length[100]');
		$this->form_validation->set_rules('received_by',display('received_by')  ,'required|max_length[100]');
		$this->form_validation->set_rules('installment_no',display('installment_no')  ,'required|max_length[100]');
		$this->form_validation->set_rules('notes',display('notes')  ,'required|max_length[100]');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'loan_inst_id' 	     => $this->input->post('loan_inst_id',true),
				'employee_id'        => $this->input->post('employee_id',true),
				'loan_id' 	         => $this->input->post('loan_id',true),
				'installment_amount' => $this->input->post('installment_amount',true),
				'payment' 	         => $this->input->post('payment',true),
				'date' 	             => $this->input->post('date',true),
				'received_by'        => $this->input->post('received_by',true),
				'installment_no' 	 => $this->input->post('installment_no',true),
				'notes' 	         => $this->input->post('notes',true),

			]; 
			
			if ($this->Loan_model->update_loanInstall($postData)) { 
				$this->session->set_flashdata('message', display('successfully_installed'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("loan/Loan/update_install_form/". $id);

		} else {
			$data['title']     = display('update');
			$data['data']      =$this->Loan_model->installUpdate($id);
			$data['gndloan']   = $this->Loan_model->installdropdown();
			$data['autoincrement'] = $this->Loan_model->autoincrement();
			$data['query']     = $this->Loan_model->get_install_empid($id);
			$data['module']    = "loan";	
			$data['page']      = "update_install_form";   
			echo Modules::run('template/layout', $data); 
		}

	}

	/* @@@@@  Report Loan @@@@@@@@@@@ */
	public function loan_report(){

		$data['title']            = display('loan_report');
		$data['loan']             = $this->Loan_model->viewLoan();
		$data['gndloan']          = $this->Loan_model->installdropdown();   
		$data['module']           = "loan";
		$data['page']             = "ln_report";
		echo Modules::run('template/layout', $data); 
    }//

    public function lnreport_view(){

    	$this->permission->module('loan','read')->redirect();
    	$id             = $this->input->post('employee_id');
    	$start_date     = $this->input->post('start_date');
    	$end_date       = $this->input->post('end_date');
    	$data['ab']     = $this->Loan_model->report_loan($id,$start_date,$end_date);
    	$data['emp']    = $this->Loan_model->emp_info($id);
    	$data['module'] = "loan";
    	$data['page']   = "loan_report";  
    	echo Modules::run('template/layout', $data); 
    }
    // loan view id wise
     public function view_details($id){

    	$this->permission->module('loan','read')->redirect();
    	$data['ab']     = $this->Loan_model->report_loan_by_id($id);
    	$data['emp']    = $this->Loan_model->emp_info($id);
    	$data['module'] = "loan";
    	$data['page']   = "loan_report";  
    	echo Modules::run('template/layout', $data); 
    }
    public function details_view(){

    	$this->permission->module('loan','read')->redirect();
    	$id = $this->uri->segment(4);
    	$data['abc']    = $this->Loan_model->loanViewDetails($id);
    	$data['module'] = "loan";
    	$data['page']   = "loan_datailsView";  
    	echo Modules::run('template/layout', $data); 
    }
}
