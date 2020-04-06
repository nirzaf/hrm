<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| __________________________________________________________________
|                CODEIGNITER PERMISSION LIBRARY
| __________________________________________________________________
|				developed by Md. Shohrab Hossain
| 					   email <sourav.diubd@gmail.com>
| __________________________________________________________________
| HOW TO USE
| An example is given below 
| _______________________initial setup______________________________
|
| file location: application/libraries/Permission.php
|
| first, load library
|    $this->load->library('permission');
| or $autoload['libraries'] = array('permission');
|
| permission array
|	$permission['dashboard'] => array (
|        [create] => 0 
|        [read]   => 0
|        [update] => 0
|        [delete] => 1
|	);
|
| session data  
|	isAdmin    = true/false
|	isLogIn    = true/false
|	permission = json_encode($permission)
|
| ->access()   return true / false
| ->redirect() return true / redirect('login')
|
| _________________auto access only module__________________________
| 
| var_dump($this->permission->module()->access());
| var_dump($this->permission->module()->redirect()); 
|
| _________________direct access only module________________________
| --- best use ---
|
| var_dump($this->permission->module('user')->access());
| var_dump($this->permission->module('user')->redirect());
|
| _________direct access module and auto access method______________
|  
| var_dump($this->permission->module('user')->create()->access());
| var_dump($this->permission->module('user')->read()->access());
| var_dump($this->permission->module('user')->update()->access());
| var_dump($this->permission->module('user')->delete()->access());
|
| --- with redirect ---
|
| var_dump($this->permission->module('user')->create()->redirect());
| var_dump($this->permission->module('user')->read()->redirect());
| var_dump($this->permission->module('user')->update()->redirect());
| var_dump($this->permission->module('user')->delete()->redirect());
|
| _________________auto access module and method____________________
| 
| var_dump($this->permission->module()->create()->access());
| var_dump($this->permission->module()->create()->redirect());
|
| ________auto acess module and direct acess method__________________
| --- available methods are create, read, update, delete ---
|
| var_dump($this->permission->method(null, 'create')->access());
| var_dump($this->permission->method(null, 'create')->redirect());
|
| ________________direct access module and method____________________
| --- best use ---
|
| var_dump($this->permission->method('user', 'create')->access());
| var_dump($this->permission->method('user', 'create')->redirect());
|
| __________________________________________________________________
*/

class Permission
{    
	protected $permission;
	protected $module; 
	protected $label; 
	protected $redirect = "login";
	protected $ci;

	public function __construct()
	{
		$this->module = '';
		$this->label = '';
		$this->ci =& get_instance();
	}

 
	public function access()
	{ 
		return $this->permission;
	}

	public function redirect()
	{  
		if ($this->permission) { 
			return $this->permission;
		} else {
			$this->ci->session->set_flashdata('exception', "You do not have permission to access. Please contact with administrator.");
			redirect($this->redirect);
		}
	}


	public function module($module = null)
	{
		$module = (($module!=null)?strtolower($module):$this->ci->uri->segment(1));
		$this->module = $module;
		if ($this->checkModule($module)) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this; 
	}



	public function check_label($label = null)
	{
		$label = (($label!=null)?strtolower($label):$this->ci->uri->segment(1));
		$this->label = $label;
		if ($this->check_label_to_Permission($label)) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this; 
	}


	public function method($module = null, $method = null)
	{

		$module = (($module!=null)?strtolower($module):$this->ci->uri->segment(1));
		$method = strtolower($method);

		if ($this->checkMethod($module, $method)) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this;
	}	


	public function create()
	{   
		if ($this->checkLebel_permission_type($this->label, 'create')) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this;
	}
 

	public function read()
	{   
		if ($this->checkLebel_permission_type($this->label, 'read')) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this;
	}

	public function update()
	{   
		if ($this->checkLebel_permission_type($this->label, 'update')) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this;
	}
 
	public function delete()
	{   
		if ($this->checkLebel_permission_type($this->label, 'delete')) {
			$this->permission = true;
		} else {
			$this->permission = false;
		} 
		return $this;
	}
	 
	protected function checkModule($module = NULL)
	{ 
		$permission = $this->ci->session->userdata('permission');
		$isAdmin    = $this->ci->session->userdata('isAdmin');
		$isLogIn    = $this->ci->session->userdata('isLogIn');

		if ($isLogIn && $isAdmin) { 
			return true;
		} else if($isLogIn) { 

			if ($permission!=NULL) {

				$permission = json_decode($permission, true);
				//module list
				@$modules = array_keys(@$permission);

				if($modules!=NULL){
					//check current module permission
					if (in_array(@$module, @$modules) ) {
						return true;  
					} else {
						return false;
					} 
				}else{
						return false;
					}
			} else {
				return false;
			} 
		} else {
			return false;
		} 
	}


	protected function check_label_to_Permission($label = null)
	{ 
		$permission = $this->ci->session->userdata('label_permission');
		$isAdmin    = $this->ci->session->userdata('isAdmin');
		$isLogIn    = $this->ci->session->userdata('isLogIn');

		if ($isLogIn && $isAdmin) { 
			return true;
		} else if($isLogIn) { 
			if (($permission!=null)) {
				$permission = json_decode($permission, true);
				//module list
				$labels = array_keys(@$permission);
				//check current module permission
				if ( in_array($label, $labels) ) {
					return true;  
				} else {
					return false;
				} 
			} else {
				return false;
			} 
		} else {
			return false;
		} 
	}


	protected function checkMethod($module = null, $method = null)
	{ 
		$permission = $this->ci->session->userdata('permission');
		$isAdmin    = $this->ci->session->userdata('isAdmin');
		$isLogIn    = $this->ci->session->userdata('isLogIn');

		if ($isLogIn && $isAdmin) {
			//action of administrator
			return true;
		} else if($isLogIn) {

			if (($permission!=null)) {
				$permission = json_decode($permission, true);

				//module list
				$modules = array_keys($permission);

				//check current module permission
				if ( in_array($module, $modules) ) {

					//convert method to asoc
					$methodList = $permission[$module]; 

					$methods = array_keys($permission[$module]);

					//check for each input
					if (in_array(strtolower($method), $methods)) {
						if ($methodList[$method] == 1) {
							return true;
						} else {
							return false;
						}	

					} else {
						return false;
					} 

				} else {
					return false;
				} 
			} else {
				return false;
			}

		} else {
			return false;
		} 
	}


	protected function checkLebel_permission_type($label = null, $method = null)
	{ 
		$permission = $this->ci->session->userdata('label_permission');
		$isAdmin    = $this->ci->session->userdata('isAdmin');
		$isLogIn    = $this->ci->session->userdata('isLogIn');

		if ($isLogIn && $isAdmin) {
			//action of administrator
			return true;
		} else if($isLogIn) {

			if (($permission!=null)) {

			$permission = json_decode($permission, true);
				//module list
				$labels = array_keys($permission);

				//check current module permission
				if (in_array($label, $labels) ) {
					//convert method to asoc
					$labelList = $permission[$label]; 

					$methods = array_keys($permission[$label]);

					//check for each input
					if (in_array(strtolower($method), $methods)) {
						if ($labelList[$method] == 1) {
							return true;
						} else {
							return false;
						}	

					} else {
						return false;
					} 

				} else {
					return false;
				} 
			} else {
				return false;
			}

		} else {
			return false;
		} 
	}


}


/* example use
#controller.php
class MyController extends CI_Controller
{
	
	function __construct()
	{
		$this->permission->module()->ridirect();
		or
		$this->permission->module('inventroy')->ridirect();
	}

	public function create()
	{
		$this->permission->method('inventroy', 'create')->ridirect();
		or
		$this->permission->method(null, 'create')->ridirect();
		or
		$this->permission->method()->create()->ridirect();
	}
}

#view.php
if ($this->permission->module()->delete()->access()) {
	echo "<a href='#'>Delete</a>"
}
if ($this->permission->module('inventroy')->delete()->access()) {
	echo "<a href='#'>Delete</a>"
}
if ($this->permission->module('inventroy', 'delete')->access()) {
	echo "<a href='#'>Delete</a>"
}
if ($this->permission->module(null, 'delete')->access()) {
	echo "<a href='#'>Delete</a>"
} 

#menu
if ($this->permission->module('inventroy')->access()) {

	echo "<label>Inventory Module</label>";
	
	if ($this->permission->module('inventroy', 'read')->access()) {
		echo "<a href='#'>User List</a>"
	}
	if ($this->permission->module('inventroy', 'read')->access()) {
		echo "<a href='#'>User List</a>"
	}
}
*/
