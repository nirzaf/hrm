<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Generate
{  
	private $ip = array('127.0.0.1', '::1', 'localhost');

	private function suffix() 
	{
		if (in_array($_SERVER['REMOTE_ADDR'], $this->ip)) {
		    return 'L';
		} else {
		    return 'S';
		}
	}

	public function id()
	{ 
		return str_replace('.', '', microtime(true).$this->suffix());
	}
}


