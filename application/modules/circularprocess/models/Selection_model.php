<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selection_model extends CI_Model {
 

public function viewShortlist()
	{

			 return $this->db->select('count(DISTINCT(stl.can_short_id)) as can_short_id,stl.*,bi.can_id,bi.first_name,bi.last_name,po.position_name')   
            ->from('candidate_shortlist stl')
            ->join('candidate_basic_info bi', 'stl.can_id = bi.can_id', 'left')
            ->join('position po', 'stl.job_adv_id = po.pos_id', 'left')
            ->group_by('stl.can_short_id')
            ->order_by('stl.can_short_id', 'desc')
            ->get()
            ->result();
	}

public function shortlist_create($data = array())
	{
		return $this->db->insert('candidate_shortlist', $data);
	}
	
	public function update_shortlist($data = array())
	{
		return $this->db->where('can_short_id', $data["can_short_id"])
			->update("candidate_shortlist", $data);
	}
	public function shortlist_updateForm($id){
        $this->db->where('can_short_id',$id);
        $query = $this->db->get('candidate_shortlist');
        return $query->row();
    }
    public function delete_shorlist($id = null)
	{
		$this->db->where('can_short_id',$id)
			->delete('candidate_shortlist');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	public function dropdownPosition()
	{
		$this->db->select('*');
        $this->db->from('candidate_shortlist');
        $query = $this->db->get();
        $data = $query->result();
       
     $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->job_adv_id] = $value->job_adv_id;
       		} 
       	}
       	return $list;
	}

	public function dropdown()
	{
		$this->db->select('*');
        $this->db->from('position');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->pos_id] = $value->position_name;
       		} 
       	}
       	return $list;
	}

public function dropdowncanid()
	{
		$this->db->select('*');
        $this->db->from('candidate_basic_info');
        $query = $this->db->get();
        $data = $query->result();
       
       $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->can_id] = $value->can_id."(".$value->first_name.")";
       		} 
       	}
       	return $list;
	}
	

/*##########################Interview Part ################*/

public function viewInterview()
	{
			 return $this->db->select('count(DISTINCT(int.can_int_id)) as can_int_id,int.*,bi.can_id,bi.first_name,bi.last_name,po.position_name')   
            ->from('candidate_interview int')
            ->join('candidate_basic_info bi', 'int.can_id = bi.can_id', 'left')
            ->join('position po', 'int.job_adv_id = po.pos_id', 'left')
            ->group_by('int.can_int_id')
            ->order_by('int.can_int_id', 'desc')
            ->get()
            ->result();
	}
	public function interview_create($data = array())
	{
		return $this->db->insert('candidate_interview', $data);
	}

	public function delete_interview($id = null)
	{
		$this->db->where('can_int_id',$id)
			->delete('candidate_interview');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	public function update_interview($data = array())
	{
		return $this->db->where('can_int_id', $data["can_int_id"])
			->update("candidate_interview", $data);
	}
	public function interview_updateForm($id){
        return $caninterviewInfo = $this->db->select('a.*,b.position_name')->from('candidate_interview a')->join('position b','a.job_adv_id=b.pos_id')->where('a.can_int_id',$id)->get()->row();
    }

    /* #################### Selection Part  #######################*/
    public function viewSelection()
	{
		
			return $this->db->select('count(DISTINCT(sel.can_sel_id)) as can_sel_id,sel.*,bi.can_id,bi.first_name,bi.last_name')   
            ->from('candidate_selection sel')
            ->join('candidate_basic_info bi', 'sel.can_id = bi.can_id', 'left')
            ->group_by('sel.can_sel_id')
            ->order_by('sel.can_sel_id', 'desc')
            ->get()
            ->result();
	}
	public function selection_create($data = array())
	{
		return $this->db->insert('candidate_selection', $data);
	}

	public function selection_delete($id = null)
	{
		$this->db->where('can_sel_id',$id)
			->delete('candidate_selection');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_selection($data = array())
	{
		return $this->db->where('can_sel_id', $data["can_sel_id"])
			->update("candidate_selection", $data);
	}
	public function selection_updateForm($id){
        $this->db->where('can_sel_id',$id);
        return $query = $this->db->select('a.*,b.position_name')->from('candidate_selection a')->join('position b','a.pos_id=b.pos_id')->where('a.can_sel_id',$id)->get()->row();
    }

    public function dropdowninterview()
	{
		$this->db->select('a.*,b.first_name,b.last_name');
        $this->db->from('candidate_shortlist a');
        $this->db->join('candidate_basic_info b','a.can_id=b.can_id');
        $query = $this->db->get();
        $data = $query->result();
       $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->can_id] = $value->first_name.' '.$value->last_name;
       		} 
       	}
       	return $list;
	}

	public function dropdownselection()
	{
        $data = $this->db->select('a.*,b.first_name,b.last_name')->from('candidate_interview a')->join('candidate_basic_info b','a.can_id=b.can_id')->where('a.selection','ok')->get()->result();
       
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->can_id] = $value->first_name.' '.$value->last_name;
       		} 
       	}
       	return $list;
	}



	/* selected dropdown position */
	public function selected()
	{
        $query = $this->db->get_where('candidate_interview',array('selection'=>"ok"));
        
        $data = $query->result();
       
       $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->job_adv_id] = $value->job_adv_id;
       		} 
       	}
       	return $list;
	}

/*  ################ selected auto ######################  */

public function insert_employee($data = array())
	{
		return $this->db->insert('employee_history', $data);//
	}

	public function Canlist(){
		$this->db->select("can_id,CONCAT_WS(' ',first_name,last_name) AS name");
        $this->db->from('candidate_basic_info');
        $query = $this->db->get();
        $data = $query->result();
       
     $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->can_id] = $value->name;
       		} 
       	}
       	return $list;

	}
    public function headcode(){
        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='2' And HeadCode LIKE '502020000%'");
        return $query->row();

    }
     public function create_coa($data = [])
    {
        $this->db->insert('acc_coa',$data);
        return true;
    }
}
