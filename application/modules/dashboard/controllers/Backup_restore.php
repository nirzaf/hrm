<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup_restore extends MX_Controller {

    private $savePath = "assets/data/backup/";
    private $fileName = "backup.sql";

 	public function __construct()
 	{
 		parent::__construct(); 
 		
		if (! $this->session->userdata('isAdmin') )
			redirect('login');
 	}
 
	public function index()
	{ 
		$data['title']  = display('backup_and_restore');
		$data['module'] = "dashboard";  
		$data['page']   = "home/backup_and_restore"; 
		$data['backup'] = $this->checkBackup();  
		$data['file']   = $this->checkFileInfo();  
		echo Modules::run('template/layout', $data); 
	}

	public function process()
	{
		$input  = $this->input->post('input'); 
		if ($input==1) {
			if ($this->backup()) {
				$data['success'] = display('backup_successfully');
			} else {
				$data['error'] = display('please_try_again');
			}
		}  
		
		if ($input==2) {
			if ($this->restore()) {
				$data['success'] = display('restore_successfully');
			} else {
				$data['error'] = display('please_try_again');
			}
		}

		echo json_encode($data);
	}


   	public function checkBackup()
 	{
 		if (file_exists($this->savePath.$this->fileName)){
 			return true;
 		} else {
 			return false;
 		}
 	}

   	public function checkFileInfo()
 	{
 		if (file_exists($this->savePath.$this->fileName)){
			$info = get_file_info($this->savePath.$this->fileName);
			return ( array(
				'name' => $info['name'],
				'size' => number_format($info['size'] / 1024, 2)." KB (".$info['size']." bytes)",
				'date' => date('d-m-Y H:i', $info['date']) . ' ('.$this->timeAgo($info['date']).')'
			));

 		} else {
 			return false;
 		}
 	}
 
    public function backup()
    { 
        $this->load->helper('file');
        $this->load->dbutil();  

		$prefs = array(
		    'format'        => 'txt',         
		    'add_drop'      => TRUE,         
		    'add_insert'    => TRUE,     
		    'newline'       => "\n"   
		); 
        $backup = $this->dbutil->backup($prefs);  
        
        if (write_file($this->savePath.$this->fileName, $backup)) {
        	return true;
        } else {
        	return false;
        }
    }

    public function restore()
    {
        $isi_file     = file_get_contents($this->savePath.$this->fileName);
        $string_query = rtrim( $isi_file, "\n;" );
        $array_query  = explode(";", $string_query);
        foreach($array_query as $query)
        {  
			$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
			$this->db->query($query);
			$this->db->query("SET FOREIGN_KEY_CHECKS = 1");
        }
        if (@unlink($this->savePath.$this->fileName)) {
        	return true;
        } else {
        	return false;
        }
    }

    public function download() {
        $db_name = 'backup' . '.sql';

        $this->load->dbutil();
        $prefs = array(
            'format' => 'sql',
            'filename' => 'backup.sql');
        $b = $this->dbutil->backup($prefs);
        $save = 'assets/data/backup/' . $db_name;
        $this->load->helper('file');
        $username = $this->db->username;
        //----- Removing Security Hash FROM CREATE VIEW Queries
  

        write_file($save, $b);

        $this->load->helper('download');
        
        if (force_download($db_name, str_replace("utf8mb4_unicode_ci;", " ", $b))) {
    			$this->session->set_flashdata('message', display('download_successfully'));
    		} else {
    			$this->session->set_flashdata('exception', display('please_try_again'));
    		}
    		redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete()
    {
    	if (file_exists($this->savePath.$this->fileName)) {
    		if (@unlink($this->savePath.$this->fileName)) {
    			$this->session->set_flashdata('message', display('delete_successfully'));
    		} else {
    			$this->session->set_flashdata('exception', display('please_try_again'));
    		}
    	} else {
    		$this->session->set_flashdata('exception', display('please_try_again'));
    	}
    	redirect($_SERVER['HTTP_REFERER']);
    }

	public function timeAgo($time_ago) {
		$time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
		$time  = time() - $time_ago;

		switch($time) { 
			// seconds
			case $time <= 60;
			return 'lessthan a minute ago';
			// minutes
			case $time >= 60 && $time < 3600;
			return (round($time/60) == 1) ? 'a minute' : round($time/60).' minutes ago';
			// hours
			case $time >= 3600 && $time < 86400;
			return (round($time/3600) == 1) ? 'a hour ago' : round($time/3600).' hours ago';
			// days
			case $time >= 86400 && $time < 604800;
			return (round($time/86400) == 1) ? 'a day ago' : round($time/86400).' days ago';
			// weeks
			case $time >= 604800 && $time < 2600640;
			return (round($time/604800) == 1) ? 'a week ago' : round($time/604800).' weeks ago';
			// months
			case $time >= 2600640 && $time < 31207680;
			return (round($time/2600640) == 1) ? 'a month ago' : round($time/2600640).' months ago';
			// years
			case $time >= 31207680;
			return (round($time/31207680) == 1) ? 'a year ago' : round($time/31207680).' years ago' ;
		}
	}

}
