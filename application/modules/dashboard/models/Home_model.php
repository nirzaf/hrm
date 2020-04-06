<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


	public function checkUser($data = array())
	{
		return $this->db->select("
				user.id, 
				CONCAT_WS(' ', user.firstname, user.lastname) AS fullname,
				user.email, 
				user.image, 
				user.last_login,
				user.last_logout, 
				user.ip_address, 
				user.status, 
				user.is_admin, 
				IF (user.is_admin=1, 'Admin', 'User') as user_level
			")
			->from('user')
			->where('email', $data['email'])
			->where('password', md5($data['password']))
			->get();
	}

	public function userPermission($id = null)
	{
		return $this->db->select("
			module.controller, 
			module_permission.fk_module_id, 
			module_permission.create, 
			module_permission.read, 
			module_permission.update, 
			module_permission.delete
			")
			->from('module_permission')
			->join('module', 'module.id = module_permission.fk_module_id', 'full')
			->where('module_permission.fk_user_id', $id)
			->get()
			->result();
	}


	public function last_login($id = null)
	{
		return $this->db->set('last_login', date('Y-m-d H:i:s'))
			->set('ip_address', $this->input->ip_address())
			->where('id',$this->session->userdata('id'))
			->update('user');
	}

	public function last_logout($id = null)
	{
		return $this->db->set('last_logout', date('Y-m-d H:i:s'))
			->where('id', $this->session->userdata('id'))
			->update('user');
	}

	public function profile($id = null)
	{
		return $this->db->select("
			*, 
				CONCAT_WS(' ', firstname, lastname) AS fullname,
				IF (user.is_admin=1, 'Admin', 'User') as user_level
			")
			->from("user")
			->where("id", $id)
			->get()
			->row();
	}

	public function setting($data = array())
	{
		return $this->db->where('id', $data['id'])
			->update('user', $data);
	}

	public function empnumber()
	{
		return $this->db->select('COUNT(DISTINCT(employee_id)) AS employee_id')
			->from("employee_history")
			->get()
			->row();
	}



	public function atntd()
	{
		$date=date('Y-m-d');
		return $this->db->select('COUNT(employee_id) AS employee_id')
			->from("emp_attendance")
			->where("date", $date)
			->get()
			->row();
	}


	public function loanamnt()
	{
		
		return $this->db->select('SUM(amount) AS amount')
			->from("grand_loan")
			->get()
			->row();
	}
	

	public function atnwork(){
		
		$d=date('Y-m-d', strtotime('-1 day'));
		

		return $this->db->select("SEC_TO_TIME(SUM(TIME_TO_SEC(`staytime`))) as staytime")
			->from("emp_attendance")
			->where("date", $d)
			->get()
			->row();
	}

	public function totaltransaction()
	{
   $tdate=date('Y-m-d');
	$this->db->select('SUM(amount) AS amount');
    $this->db->from('acn_account_transaction');
    $this->db->join('acc_account_name','acn_account_transaction.account_id = acc_account_name.account_id');
    $this->db->where('acc_account_name.account_type',1);
    $this->db->where('acn_account_transaction.tran_date',$tdate);
  $query = $this->db->get();
 return $dtaa=$query->row();

}

public function totaltransactiondeduct()
	{
   $tdate=date('Y-m-d');
	$this->db->select('SUM(amount) AS amount');
    $this->db->from('acn_account_transaction');
    $this->db->join('acc_account_name','acn_account_transaction.account_id = acc_account_name.account_id');
    $this->db->where('acc_account_name.account_type',0);
     $this->db->where('acn_account_transaction.tran_date',$tdate);

  $query = $this->db->get();
 return $dtaa=$query->row();

}

 public function details($id)
    {
            return $this->db->select('*')	
			->from('notice_board')
			 ->where('notice_id',$id)
			->get()
			->result();
    }

}
 