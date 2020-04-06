<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {
 
    public function notice_view()
	{
		return $this->db->select('*')	
			->from('notice_board')
			->order_by('notice_id', 'desc')
			->get()
			->result();
	}
	
	public function notice_create($data = array())
	{
		return $this->db->insert('notice_board', $data);
	}

	public function notice_delete($id = null)
	{
		$this->db->where('notice_id',$id)
			->delete('notice_board');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_notice($data = array())
	{
		return $this->db->where('notice_id',$data["notice_id"])
			->update("notice_board", $data);


	}
	public function notice_updateForm($id){
        $this->db->where('notice_id',$id);
        $query = $this->db->get('notice_board');
        return $query->row();
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
