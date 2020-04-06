<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_model extends CI_Model {
 
	public function create($data = array())
	{
		return $this->db->insert('module', $data);
	}

	public function read()
	{
		return $this->db->select('*')
			->from('module')
			->get()
			->result();
	}

	public function single($id = null)
	{
		return $this->db->select('*')
			->from('module')
			->where('id', $id)
			->get()
			->row();
	}

	public function update($data = array())
	{
		return $this->db->where('id', $data["id"])
			->update("module", $data);
	}

	public function delete($id = null)
	{
		$this->db->where('id', $id)
			->delete("module");
		$this->db->where('fk_module_id', $id)
			->delete("module_permission");
		return true;
	}

	public function delete_by_directory($directory = null)
	{
		$row = $this->db->select('id')->from('module')->where('directory', $directory)->get();
		if ($row->num_rows() > 0) {
			$id = $row->row()->id;
			$this->db->where('id', $id)
				->delete("module");
			$this->db->where('fk_module_id', $id)
				->delete("module_permission");
			return true;
		} else {
			return false;
		}
	}
 
	public function dropdown()
	{
		$data = $this->db->select('id,name')
			->from("module")
			->where('status', 1)
			->order_by('name','asc')
			->get()
			->result();
		$list = array();
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}
 

}
