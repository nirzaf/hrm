<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
* ------------------------------------------
* Developed by <sourav.diubd@gmail.com>
* ------------------------------------------
*/

class SyncManager {

	//incoming & outgoing path
	private $incomingPath  = "./assets/data/incoming/";
	private $outgoingPath   = "./assets/data/outgoing/";
	private $fileName       = "backup.sql";

	//file upload to server
	public function upload($conf = array())
	{ 
		$ci =& get_instance();
		$ci->load->library('ftp'); 

		$config = array(
			'hostname' => (($conf['hostname'] != null) ? $conf['hostname'] : null),
			'username' => (($conf['username'] != null) ? $conf['username'] : null),
			'password' => (($conf['password'] != null) ? $conf['password'] : null),
			'port'     => (($conf['port'] != null) ? $conf['port'] : 21),
			'debug'    => (($conf['debug'] != null) ? $conf['debug'] : false),
			'project_root' => (($conf['project_root'] != null) ? $conf['project_root'] : "./public_html/")
		);
 
		$localPath  = $this->outgoingPath.$this->fileName;
		$serverDir  = $config['project_root'].$this->incomingPath;
		$serverPath = $serverDir.$this->fileName;

		//check connection
		if ($ci->ftp->connect($config))
		{  
  			// if destination direcotry not exists then make directory
			$list = $ci->ftp->list_files($serverDir);
			if (sizeof($list) == 0)
				$ci->ftp->mkdir( $serverDir , 0775);

			//check file and upload 
			if (file_exists($localPath))
			if ($ci->ftp->upload($localPath, $serverPath, 'ascii', 0775))
			{
				//delete local file
				@unlink($localPath);
				return true;
			} else {
				return false;
			}

		} else {
			return false; 
		}

		$ci->ftp->close();
	}


    //file download from server
    public function download($conf = array())
    { 
		$ci =& get_instance();
		$ci->load->library('ftp'); 

		$config = array(
			'hostname' => (($conf['hostname'] != null) ? $conf['hostname'] : null),
			'username' => (($conf['username'] != null) ? $conf['username'] : null),
			'password' => (($conf['password'] != null) ? $conf['password'] : null),
			'port'     => (($conf['port'] != null) ? $conf['port'] : 21),
			'debug'    => (($conf['debug'] != null) ? $conf['debug'] : false),
			'project_root' => (($conf['project_root'] != null) ? $conf['project_root'] : "./public_html/")
		);

		$localPath  = $this->incomingPath.$this->fileName; 
		$serverDir  = $config['project_root'].$this->outgoingPath;
		$serverPath = $serverDir.$this->fileName;
 
		if(!file_exists($this->incomingPath))
			@mkdir($this->incomingPath, true, 0777);
 
		//check connection
		if ($ci->ftp->connect($config))
		{
			//downloading process
			if($ci->ftp->download($serverPath, $localPath, 'ascii'))
			{ 
				@$ci->ftp->delete_file($serverPath);
				return true;

			} else {
				return false;
			}

		} else {
			return false; 
		}
    }

}

