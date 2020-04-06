<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Award_model extends CI_Model {
 
    public function award_view()
	{
		

			 return $this->db->select('count(DISTINCT(aw.award_id)) as award_id,aw.*,p.employee_id,p.first_name,p.last_name')   
            ->from('award aw')
            ->join('employee_history p', 'aw.employee_id = p.employee_id', 'left')
            ->group_by('aw.award_id')
            ->order_by('aw.award_id', 'desc')
            ->get()
            ->result();
	}
	
	public function award_create($data = array())
	{
		return $this->db->insert('award', $data);
	}

	public function award_delete($id = null)
	{
		$this->db->where('award_id',$id)
			->delete('award');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_award($data = array())
	{
		return $this->db->where('award_id',$data["award_id"])
			->update("award", $data);


	}
	public function award_updateForm($id){
        $this->db->where('award_id',$id);
        $query = $this->db->get('award');
        return $query->row();
    }
    
     public function dropdown(){
    	$this->db->select('*');
    	$this->db->from('employee_history');
    	$query=$this->db->get();
    	$data=$query->result();
    	$list = array('' => 'Select One...');
    	if(!empty($data)){
    		foreach ($data as  $value) {
    			$list[$value->employee_id]=$value->first_name." ".$value->last_name;
    		}
    	}
    	return $list;
    }
     public  function get_id($id)
    {
        $query=$this->db->get_where('award',array('award_id'=>$id));
        return $query->row_array();
    } 

}
