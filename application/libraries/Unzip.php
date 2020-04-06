<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| __________________________________________________________________
|                CODEIGNITER UNZIP LIBRARY
| __________________________________________________________________
|				developed by Md. Shohrab Hossain
| 					   email <sourav.diubd@gmail.com>
| __________________________________________________________________
| HOW TO USE
| An example is given below  
| __________________________________________________________________
|
| examples
| $this->load->library('unzip');
| 
| $filePath = "your_directory/your_file.zip";
| $extarctTo = "destination_directory_to_extarct";
| $mode = true/false; true for delete the zip file after extract complete
| 
| $this->unzip->extract($filePath, $extractTo, $mode);
| __________________________________________________________________
*/ 


class Unzip
{ 
	protected $_status;
	protected $_message;
	protected $extension = array('zip','rar','gz');

	public function extract($filePath = null, $extractTo = null, $mode = true, $overwrite = null)
	{ 

		if ($filePath && $extractTo) {

			$ext = pathinfo($filePath)['extension'];

			if ($this->_check_exists($filePath)) { 
				
				if ($this->_overwrite($filePath, $overwrite)) { 


					if ($this->_extension($ext)) {

						if ($this->_writeable($extractTo)) {

							switch ($ext) {
								case 'zip':
									$this->_zip($filePath, $extractTo);
									break;

								case 'rar':
									$this->_rar($filePath, $extractTo);
									break;

								case 'gz':
									$this->_gz($filePath, $extractTo);
									break; 
							}

						} else {
							$this->_status  = false;
							$this->_message = "Directory not writeable by webserver"; 
						}

					} else { 
						$this->_status  = false;
						$this->_message = "Invalid file extension!"; 
					}

				} else { 
					$this->_status  = false;
					$this->_message = "This module already exists / installed!."; 
				}
			} else { 
				$this->_status  = false;
				$this->_message = "Uninstall / delete before re-installing the module."; 
			}

		} else { 
			$this->_status  = false;
			$this->_message = "You did not select a file";
		}
				
		$this->_delete($filePath, $mode);  

		return (object)array(
			'status' =>  $this->_status,
			'message' => $this->_message
		); 
	}


	private function _extension($ext)
	{
		if (in_array($ext, $this->extension)) {
			return true;
		} else {
			return false; 
		}
	}

	private function _writeable($extractTo)
	{
		if (is_writable($extractTo)) {
			return true;
		} else {
			return false;
		}
	}

	private function _delete($filePath, $mode)
	{
		if ($mode) {
			@unlink($filePath);
			return true;
		} else {
			return false;
		}
	}

	private function _overwrite($filePath, $overwrite)
	{   
		$filePath = pathinfo($filePath);
		$filePath = $filePath['dirname']. '/' .$filePath['filename'];
		
		if ($overwrite) {
			$this->_delete_module($filePath);
			return true;
		} else {
			if (is_dir($filePath)) {
			   return false;
			} else {
				$this->_delete_module($filePath);
				return true;
			}
		}
	}

	private function _check_exists($filePath)
	{   
		$filePath = pathinfo($filePath);
		$filePath = $filePath['dirname']. '/' .$filePath['filename'];
		if (file_exists($filePath.'/assets/data/env')) {
			return false;
		} else {
			return true;
		}
	}

	public function _delete_module($dirPath = null)
	{
		$basePath = 'application/modules/';
		if (is_dir($dirPath) && $dirPath != $basePath) { 
			if ($this->_delete_dir($dirPath)) {
				return true;
			} else {
				return false;
			}
		} else if (is_file($dirPath) && $dirPath != $basePath) {
			if (unlink($dirPath)) {
				return true;
			} else {
				return false;
			} 
		} else {
			return false;
		}   
	}

	public function _delete_dir($dirPath) { 
	    $dir = opendir($dirPath);
	    while(false !== ( $file = readdir($dir)) ) { 
	        if (( $file != '.' ) && ( $file != '..' )) { 
	            if ( is_dir($dirPath . '/' . $file) ) { 
	                $this->_delete_dir($dirPath . '/' . $file); 
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




	private function _zip($filePath, $extractTo)
	{
	    if (class_exists('ZipArchive')) {  
			$zip    = new ZipArchive;
			$zipRes = $zip->open($filePath);

			if ($zipRes === true) {
				$zip->extractTo($extractTo);
				$zip->close();

				$this->_status  = true;
				$this->_message = "Extract successfully!"; 
			} else {
				$this->_status  = false;
				$this->_message = "Error Occurs!"; 
			}
	    } else {
	    	$this->status = false;
	    	$this->_message = "Your PHP version does not support unzip functionality.";
	    }
	}

	private function _rar($filePath, $extractTo)
	{
	    if (class_exists('RarArchive')) {   

			if ($rar = RarArchive::open($filePath)) {
				$entries = $rar->getEntries();
		        foreach ($entries as $entry) {
		          $entry->extract($destination);
		        }
		        $rar->close();

				$this->_status  = true;
				$this->_message = "Extract successfully!"; 
			} 

	    } else {
	    	$this->_status = false;
	    	$this->_message = 'Your PHP version does not support .rar archive functionality. <a class="info" href="http://php.net/manual/en/rar.installation.php" target="_blank">How to install RarArchive</a>';
	    }
	}

	private function _gz($filePath, $extractTo)
	{
 		if (class_exists("gzopen")) {
		    $filename = pathinfo($filePath, PATHINFO_FILENAME);
		    $gzipped = gzopen($filePath, "rb");
		    $file = fopen($filename, "w");

		    while ($string = gzread($gzipped, 4096)) {
		    	fwrite($file, $string, strlen($string));
		    }
		    gzclose($gzipped);
		    fclose($file);
	    
			$this->_status  = true;
			$this->_message = "Extract successfully!"; 

 		} else {
 			$this->_status = false;
 			$this->_message = "Your PHP has no zlib support enabled.";
 		}
	}

}

