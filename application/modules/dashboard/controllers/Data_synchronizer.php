<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_synchronizer extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct(); 
		$this->load->library(array(
			'synchronizer/SyncData',
			'synchronizer/SyncManager',
		));
		$this->load->model(array('synchronizer_model'));
		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}
 
 	public function form($id = null)
 	{ 
 		$data['title']  = display('ftp_setting');
 		#----------------------------------#
 		$this->form_validation->set_rules('hostname', display('hostname'), 'required|max_length[100]');
 		$this->form_validation->set_rules('username', display('username'), 'required|max_length[100]');
 		$this->form_validation->set_rules('password', display('password'), 'required|max_length[100]');
 		$this->form_validation->set_rules('port', display('ftp_port'), 'required|max_length[5]|numeric');
 		$this->form_validation->set_rules('debug', display('ftp_debug'), 'required|max_length[100]');
 		$this->form_validation->set_rules('project_root', display('project_root'), 'required|max_length[100]');
 		#----------------------------------#
 		$data['ftp'] = (object)$ftpData =array(
 			'hostname' => $this->input->post('hostname'),
 			'username' => $this->input->post('username'),
 			'password' => $this->input->post('password'),
 			'port' 	   => $this->input->post('port'),
 			'debug'    => $this->input->post('debug'),
 			'project_root' => $this->input->post('project_root'),
 		);
 		#----------------------------------#
 		if ( $this->form_validation->run() ) {
 			//already exists
 			if ( $this->synchronizer_model->check_exists() ) {
	 			if ( $this->synchronizer_model->update($ftpData) ) {
	 				$this->session->set_flashdata('message', display('update_successfully'));
	 			} else { 
	 				$this->session->set_flashdata('exception', display('please_try_again'));
	 			}
 			} else {
	 			if ( $this->synchronizer_model->create($ftpData) ) {
	 				$this->session->set_flashdata('message', display('save_successfully'));
	 			} else {
	 				$this->session->set_flashdata('exception', display('please_try_again'));
	 			}
 			}
 			redirect('dashboard/data_synchronizer/form');
 		} else { 
			$data['module'] = "dashboard";
			$data['page']	= "synchronizer/setting";

			if ( $this->synchronizer_model->check_exists() )
			$data['ftp']    = $this->synchronizer_model->read();
		
			echo Modules::run('template/layout', $data); 
 		}
 	}


 	public function synchronize()
 	{ 
		$data['title']  = display('data_synchronize');
		$data['module'] = "dashboard";
		$data['page']	= "synchronizer/synchronizer";
		$data['internet']  = $this->checkConnection();
		$data['incoming']  = $this->checkIncoming();
		$data['outgoing']  = $this->checkOutgoing();
		echo Modules::run('template/layout', $data); 
 	}

	public function ftp_upload()
	{  
		if ( $this->synchronizer_model->check_exists() ) {

			$ftp = $this->synchronizer_model->read();

			$config = array(
				'hostname' => $ftp->hostname,
				'username' => $ftp->username,
				'password' => $ftp->password,
				'port'     => $ftp->port,
				'debug'    => $ftp->debug,
				'project_root' => $ftp->project_root
			);

			if ($this->syncmanager->upload($config)) {
				$data['success'] = display('upload_successfully');
			} else {
				$data['error']   =  display('unable_to_upload_file_please_check_configuration');
			}
		} else {
			$data['error']   =  display('please_configure_synchronizer_settings');
		}
		echo json_encode($data);
	}
	
	public function ftp_download()
	{  
		if ( !$this->checkIncoming() ) {

			if ( $this->synchronizer_model->check_exists() ) {
				$ftp = $this->synchronizer_model->read();

				$config = array(
					'hostname' => $ftp->hostname,
					'username' => $ftp->username,
					'password' => $ftp->password,
					'port'     => $ftp->port,
					'debug'    => $ftp->debug,
					'project_root' => $ftp->project_root
				);

				if ($this->syncmanager->download($config)) {
					$data['success'] = display('download_successfully');
				} else {
				$data['error']   =  display('unable_to_download_file_please_check_configuration');
				}  
			} else {
				$data['error']   =  display('please_configure_synchronizer_settings');
			} 

		} else { 
			$data['error']   =  display('data_import_first');
		} 
		echo json_encode($data);
	}
 
	public function import()
	{    
		if ( $this->checkIncoming() ) {

			if ($this->syncdata->importSQL()) { 
				$data['success'] = display('data_import_successfully');
			} else {
				$data['error']   =  display('unable_to_import_data_please_check_config_or_sql_file');
			}

		} else {
			$data['error']   =  display('download_data_from_server');
		}
		echo json_encode($data);
	}


	/*-----------------------------------------------*/
	/*-----------------------------------------------*/
	/*-----------------------------------------------*/
	/*-----------------------------------------------*/
 

 	public function checkConnection()
 	{    
		if($pf = @fsockopen("google.com", 80)) {
			return true; 
			fclose($pf);
		} else {
			return false;
		}
 	}

 	public function checkIncoming()
 	{
 		if (file_exists('./assets/data/incoming/backup.sql')){
 			return true;
 		} else {
 			return false;
 		}
 	}

 	public function checkOutgoing()
 	{
 		if (file_exists('./assets/data/outgoing/backup.sql')){
 			return true;
 		} else {
 			return false;
 		}
 	}
 
}
