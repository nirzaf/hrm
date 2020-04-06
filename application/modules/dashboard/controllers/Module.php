<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'module_model' 
 		));
 		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}
 
	public function index()
	{
		$data['title']      = display('module_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "module/list";   
		$data['moduleData'] = $this->module_model->read();
		echo Modules::run('template/layout', $data); 
	}
  

	public function add_module()
	{   
		$data['title']      = display('add_module');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "module/add";   
		echo Modules::run('template/layout', $data); 
	}


	public function upload()
	{
        $config['upload_path']   = './application/modules/';
        $config['allowed_types'] = 'zip|rar|gz'; 
        $this->load->library('upload', $config);
        $overwrite = $this->input->post('overwrite');
        $overwrite = (($overwrite!=null)?$overwrite:false);
 		
        if ($this->upload->do_upload('module')) {  
            $data = $this->upload->data();  
            $filePath = $config['upload_path'].$data['file_name'];  

            $this->load->library('unzip');
            $result = $this->unzip->extract($filePath, $config['upload_path'], true, $overwrite);
            if ($result->status) {
            	$this->session->set_flashdata('message', $result->message);
            } else {
            	$this->session->set_flashdata('exception', $result->message);
            }  
        } else {
            $this->session->set_flashdata('exception', display('invalid_file'));
        }
		redirect("dashboard/module/add_module");
	}


	public function install()
	{
		$this->form_validation->set_rules('name', display('module_name'),'required|max_length[50]');
		$this->form_validation->set_rules('description', display('description'),'trim|max_length[500]');
		$this->form_validation->set_rules('image', display('image'),'required|max_length[100]');
		$this->form_validation->set_rules('directory', display('module'),'required|max_length[100]|is_unique[module.directory]');
		$this->form_validation->set_message('is_unique', 'The %s is already installed');
		/*-----------------------------------*/ 
		$directory = $this->input->post('directory'); 

		/*-----------ADD TO MODULE--------------*/
		$moduleData = array(
			'id' 		  => $this->input->post('id'),
			'name' 		  => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'image' 	  => $this->input->post('image'), 
			'directory'   => $directory,
			'status'      => 1
		);
		/*-----------------------------------*/
		if ($this->form_validation->run()) { 

			/*----------MODULE INSTALL------------*/
			// IMPORT DATABASE
			$dbPath = APPPATH.'modules/'.$directory.'/assets/data/database.sql';
			$configPath = APPPATH.'modules/'.$directory.'/config/config.php';
			if (file_exists($dbPath) && file_exists($configPath)) { 
		        $isi_file     = file_get_contents($dbPath);
		        $string_query = rtrim( $isi_file, "\n;" );
		        $array_query  = explode(";", $string_query);
		        $newQuery  	  = null; 
		        $succe  	  = array(); 
		        $error   	  = null; 
		        $sl           = 1;

				@include($configPath);   

				if (($HmvcConfig[$directory]["_database"]===true) && !empty($HmvcConfig[$directory]["_tables"]) && is_array($HmvcConfig[$directory]["_tables"]) && sizeof($HmvcConfig[$directory]["_tables"]) > 0) {

					foreach ($HmvcConfig[$directory]["_tables"] as  $key => $table) { 

				        foreach($array_query as $key2 => $query)
				        {     
				        	if(is_int(strpos($query, "`$table`"))) { 
				        		$succe[] = $table;
				        		$newQuery .= $query.";";
				        		unset($HmvcConfig[$directory]["_tables"][$key]); 
				        		unset($array_query[$key2]); 
				        		break;
							}  else {
								$error .= "`$table`"; 
				        		unset($HmvcConfig[$directory]["_tables"][$key]); 
				        		break;
							}
						} 
					}
	 
					if (strlen($error) > 0) {  
						$this->session->set_flashdata('exception',  $error . display('tables_are_not_available_in_database'));
						redirect("dashboard/module/add_module");
					} else {
				        $n_query = rtrim( $newQuery, "\n;" );
				        $n_query  = explode(";", $n_query);
				        $i=0;
				        foreach($n_query as $sql)
				        {      
				        	if (!$this->db->table_exists($succe[$i++])) {
								$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
								$this->db->query($sql);
								$this->db->query("SET FOREIGN_KEY_CHECKS = 1");
				        	}
						} 

						/*----------ADD TO MODULE ------------*/
						if ($this->module_model->create($moduleData)) { 
							// add a install flag
							@file_put_contents(
								APPPATH.'modules/'.$directory.'/assets/data/env', 
								date('d-m-Y')
							);

							$this->session->set_flashdata('message', display('module_added_successfully'));
						} else {
							$this->session->set_flashdata('exception', display('please_try_again'));
						}
					} 
				}  else if($HmvcConfig[$directory]["_database"]===false) {
					/*----------ADD TO MODULE ------------*/
					if ($this->module_model->create($moduleData)) { 
						// add a install flag
						@file_put_contents(
							APPPATH.'modules/'.$directory.'/assets/data/env', 
							date('d-m-Y')
						);

						$this->session->set_flashdata('message', display('module_added_successfully'));
					} else {
						$this->session->set_flashdata('exception', display('please_try_again'));
					}
				}  else {
					$this->session->set_flashdata('exception', display('no_tables_are_registered_in_config'));
				}

			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}
			redirect("dashboard/module/add_module");

		} else { 
			$this->session->set_flashdata('exception', validation_errors());
		}
		redirect("dashboard/module/add_module");
	}
 

	public function uninstall($dirPath = null, $action = null)
	{
		$directory = $dirPath;
		$basePath = "application/modules/";
		$dirPath  = $basePath.urldecode($dirPath);  

		if (is_dir($dirPath) && $dirPath != $basePath) { 

			/*-------DELETE MODULE DATABASE---------*/
			$configPath = APPPATH.'modules/'.$directory.'/config/config.php';
			if (file_exists($configPath)) {  

				@include($configPath);   

				if (!empty($HmvcConfig[$directory]["_tables"]) && is_array($HmvcConfig[$directory]["_tables"]) && sizeof($HmvcConfig[$directory]["_tables"]) > 0) {

					foreach ($HmvcConfig[$directory]["_tables"] as $table) {
						if ($this->db->table_exists($table) ) {
							$this->db->query("DROP TABLE `$table`"); 
						} 	
					}
				}
			} 

			if ($action == "delete") {
				$this->delete_dir($dirPath);
			}
			/*-------DELETE FROM MODULE LIST---------*/ 
			$this->module_model->delete_by_directory($directory);
			//delete the install flag
			if (file_exists(APPPATH.'modules/'.$directory.'/assets/data/env'))
			@unlink(APPPATH.'modules/'.$directory.'/assets/data/env');

			$this->session->set_flashdata('message', display('delete_successfully'));


		} else if (is_file($dirPath) && $dirPath != $basePath) {
			if (unlink($dirPath)) { 
				$this->session->set_flashdata('message', display('delete_successfully'));
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			} 
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}  
 
		redirect($_SERVER['HTTP_REFERER']);
	}

 
	public function status($id = null, $action = null)
	{
		$action = ($action=='active'?1:0);

		$data = array(
			'id'     => $id,
			'status' => $action
		);

		if ($this->module_model->update($data)) {
			$this->session->set_flashdata('message', display('update_successfully'));
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}

		redirect($_SERVER['HTTP_REFERER']);
	}


	public function delete_dir($dirPath) { 
	    $dir = opendir($dirPath);
	    while(false !== ( $file = readdir($dir)) ) { 
	        if (( $file != '.' ) && ( $file != '..' )) { 
	            if ( is_dir($dirPath . '/' . $file) ) { 
	                $this->delete_dir($dirPath . '/' . $file); 
	            } 
	            else { 
	                unlink($dirPath . '/' . $file); 
	            } 
	        } 
	    } 
	    closedir($dir); 
	    rmdir($dirPath);
	    return true;
	}


}
