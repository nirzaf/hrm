<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {
 
    public function dept_view()
	{
		return $this->db->select('*')	
			->from('department')
			->order_by('dept_id', 'desc')
			->get()
			->result();
	}
	
	public function dept_create($data = array())
	{
		return $this->db->insert('department', $data);
	}

	public function dept_delete($id = null)
	{
		$this->db->where('dept_id',$id)
			->delete('department');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_dept($data = array())
	{
		return $this->db->where('dept_id',$data["dept_id"])
			->update("department", $data);


	}
	public function dept_updateForm($id){
        $this->db->where('dept_id',$id);
        $query = $this->db->get('department');
        return $query->row();
    }
    

    /// Division Part
    public function read_division($limit = null, $start = null)
	{
	  $this->db->select('*');
		$this->db->from('department');
		$this->db->where('parent_id >',0);
		$this->db->order_by('dept_id', 'desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();	
		}
		return false;
	} 

	public function findById($id = null)
	{ 
		return $this->db->select("*")->from("department")
			->where('dept_id',$id) 
    		->limit($limit, $start)
			->get()
			->row();

	} 
 
	public function update($data = [])
	{
		return $this->db->where('dept_id',$data['dept_id'])
			->update('department',$data); 
	} 
// Department Dropdown
	public function department_dropdown()
	{
		$data = $this->db->select("*")
			->from('department')
			->where('parent_id',0)  
			->get()
			->result();

		$list[''] = display('select_division');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->dept_id] = $value->department_name;
			return $list;
		} else {
			return false; 
		}
	}
 

public function count_division()
	{
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where('parent_id', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}
    
}
