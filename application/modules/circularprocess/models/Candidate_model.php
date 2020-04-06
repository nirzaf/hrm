<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_model extends CI_Model {
 
	public function create_caninfo($data = array())
	{
		return $this->db->insert('candidate_basic_info', $data);
	}

	public function viewcanInfo()
	{
		return $this->db->select('*')	
			->from('candidate_basic_info')
			->order_by('can_id', 'desc')
			->get()
			->result();
	}


	public function update_canInfo($data = array())
	{
		return $this->db->where('can_id', $data["can_id"])
			->update("candidate_basic_info", $data);
	}

	public function delete_cinfo($id = null)
	{
		$this->db->where('can_id',$id)
			->delete('candidate_basic_info');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function canifo_updateForm($id){
       $this->db->select('*');
$this->db->from('candidate_basic_info');

$this->db->join('candidate_education_info', 'candidate_basic_info.can_id = candidate_education_info.can_id','left');

$this->db->join('candidate_workexperience', 'candidate_basic_info.can_id = candidate_workexperience.can_id','left');
$this->db->where('candidate_basic_info.can_id',$id);
return $data= $this->db->get()->row();
    }
     /*#############################----Education info Part---############*/
     public function viewEduinfo()
	{
		return $this->db->select('*')	
			->from('candidate_education_info')
			->order_by('can_edu_id', 'desc')
			->get()
			->result();
	}
  public function upcanedu($id)
	{
		return $this->db->select('*')	
			->from('candidate_education_info')
			->where('can_id',$id)
			->get()
			->result_array();
	}
   
	public function caneduinfo_create($data = array())
	{
		return $this->db->insert('candidate_education_info', $data);
	}

public function eduinfo_dropdown()
	{
		$this->db->select('*');
        $this->db->from('candidate_basic_info');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->can_id] = $value->can_id.$value->first_name;
       		} 
       	}
       	return $list;
	}

	public function delete_canedu_info($id = null)
	{
		$this->db->where('can_id',$id)
			->delete('candidate_education_info');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
public function update_canEduinfo($data = array())
	{
		return $this->db->where('can_id', $data["can_id"])
			->update("candidate_education_info", $data);
	}
	public function canEdu_updateForm($id){  
         $this->db->where('can_id',$id);
        $query = $this->db->get('candidate_education_info');
        return $query->row();
    }

   public  function get_eduinf_dropdown($id)
    {
        $query=$this->db->get_where('candidate_basic_info',array('can_id'=>$id));
        return $query->row_array();
    }  




public function viewExperience()
	{
		return $this->db->select('*')	
			->from('candidate_workexperience')
			->order_by('can_workexp_id', 'desc')
			->get()
			->result();
	}
	public function work($id)
	{
		return $this->db->select('*')	
			->from('candidate_workexperience')
			->where('can_id',$id)
			->get()
			->result();
	}


public function canworkexp_create($data = array())
	{
		return $this->db->insert('candidate_workexperience', $data);
	}//
	public function update_workexperience($data = array())
	{
		return $this->db->where('can_id', $data["can_id"])
			->update("candidate_workexperience", $data);
	}
	public function workexperience_updateForm($id){
        $this->db->where('can_id',$id);
        $query = $this->db->get('candidate_workexperience');
        return $query->row();
    }
    public function delete_workexp($id = null)
	{
		$this->db->where('can_id',$id)
			->delete('candidate_workexperience');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

function retrieve_all_data()
{
  $this->db->select("candidate_basic_info.can_id,candidate_basic_info.first_name,candidate_basic_info.email,candidate_basic_info.phone,candidate_education_info.degree_name,candidate_education_info.university_name,candidate_education_info.cgp");
  $this->db->from('candidate_basic_info');
  $this->db->join('candidate_education_info', 'candidate_basic_info.can_id = candidate_education_info.can_id');
  $this->db->group_by('candidate_education_info.can_id');
  $query = $this->db->get();

  return $query->result();
}


  
    public function employee_details($id)
	{
		return $this->db->select('*')	
			->from('candidate_basic_info')
			->where('can_id',$id)
			->get()
			->result();
	}
	public function eduInfo($id)
	{
		return $this->db->select('degree_name,university_name,cgp')	
			->from('candidate_education_info')
			->where('can_id',$id)
			// ->order_by('can_workexp_id', 'desc')
			->get()
			->result();
	}
	public function workingexp($id)
	{
		return $this->db->select('*')	
			->from('candidate_workexperience')
			->where('can_id',$id)
			// ->order_by('can_workexp_id', 'desc')
			->get()
			->result();
	}

}


