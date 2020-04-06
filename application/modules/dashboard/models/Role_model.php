<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {
 

	public function create($data = array())
	{	
		$this->db->where('role_id', $data[0]['role_id'])->delete('sec_role_permission');
		return $this->db->insert_batch('sec_role_permission', $data);
	}


	public function update($data = array())
	{	
		$this->db->where('fk_role_id', $data[0]['fk_role_id'])->delete('user_role_access_tbl');
		return $this->db->insert_batch('user_role_access_tbl', $data);
	}


	public function get_all_role()
	{
		return $this->db->select("user_role_setup_tbl.*,user_role_access_tbl.*")
			->from('user_role_setup_tbl')
			->join('user_role_access_tbl','user_role_access_tbl.fk_role_id = user_role_setup_tbl.role_id', 'left')
			->group_by('user_role_setup_tbl.role_id')
			->order_by('user_role_setup_tbl.role_id','asc')
			->get()
			->result();
	}

	public function read()
	{
		return $this->db->select("
				module_permission.fk_user_id,
				CONCAT_WS(' ', user.firstname,user.lastname) AS user_name,
			")
			->from('module_permission')
			->join('user','user.id = module_permission.fk_user_id', 'left')
			->group_by('module_permission.fk_user_id')
			->order_by('user.firstname','asc')
			->get()
			->result();
	}

	public function view($id = null)
	{
		$result = $this->db->select("
				user_role_access_tbl.*,
				module.name as module_name
			")
			->from('user_role_access_tbl')
			->join('module', 'module.id = user_role_access_tbl.fk_module_id', 'left')
			->where('user_role_access_tbl.fk_role_id', $id)
			->get()
			->result();
			return $result;
	}

	public function get_role_by_id($id = null)
	{
		return $this->db->select("*")
			->from('user_role_setup_tbl')
			->where('role_id', $id)
			->get()
			->row();
	}

	public function permission_edit($id = null)
	{
		$modules = $this->db->select("id, name")
				->from("module")
				->where("status", 1)
				->get()
				->result();

		$mod = array();
		foreach ($modules as $value) {

			$modWisPer = $this->db->select("
				user_role_access_tbl.*,
				module.name as module_name
			")
			->from('user_role_access_tbl')
			->join('module', 'module.id = user_role_access_tbl.fk_module_id', 'left')
			->where('user_role_access_tbl.fk_role_id', $id)
			->where('user_role_access_tbl.fk_module_id', $value->id)
			->get()
			->row();

			$mod[$value->id] = (object)array(
				'name' 		   => $value->name,
				'fk_module_id' => $value->id,
				'fk_role_id'   => $id,
				'create'       => (!empty($modWisPer->_permission)?$modWisPer->_permission:0),
				'read'         => (!empty($modWisPer->view_permission)?$modWisPer->view_permission:0),
				'update'       => (!empty($modWisPer->update_permission)?$modWisPer->update_permission:0),
				'delete'       => (!empty($modWisPer->delete_permission)?$modWisPer->delete_permission:0)
			);

		}
		return $mod;
	}

	public function delete($role_id = null)
	{
		$this->db->where('role_id', $role_id)
			->delete("user_role_setup_tbl");

		return $this->db->where('fk_role_id', $role_id)
			->delete("user_role_access_tbl");
	}
 
  
}
