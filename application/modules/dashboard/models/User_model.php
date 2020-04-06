<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
 
	public function create($data = array())
	{
		return $this->db->insert('user', $data);
	}

	public function read()
	{
		return $this->db->select("
				user.*, 
				CONCAT_WS(' ', firstname, lastname) AS fullname 
			")
			->from('user')
			->order_by('id', 'desc')
			->get()
			->result();
	}

	public function single($id = null)
	{
		return $this->db->select('*')
			->from('user')
			->where('id', $id)
			->get()
			->row();
	}

	public function update($data = array())
	{
		return $this->db->where('id', $data["id"])
			->update("user", $data);
	}

	public function delete($id = null)
	{
		return $this->db->where('id', $id)
			->where_not_in('is_admin',1)
			->delete("user");
	}

	public function dropdown()
	{
		$data = $this->db->select("id, CONCAT_WS(' ', firstname, lastname) AS fullname")
			->from("user")
			->where('status', 1)
			->where_not_in('is_admin', 1)
			->get()
			->result();
		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->fullname;
			return $list;
		} else {
			return false; 
		}
	}
 
public function employee(){
	$data = $this->db->select("employee_id, CONCAT_WS(' ', first_name, last_name) AS fullname")
			->from("employee_history")
			->get()
			->result();
		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->employee_id] = $value->fullname;
			return $list;
		} else {
			return false; 
		}
}
// employee info
public function empinfo($email){
return $result = $this->db->select('first_name,last_name,employee_id')->from('employee_history')->where('email',$email)->get()->row();
}

}
