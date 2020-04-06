<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_model extends CI_Model {

    
    function get_addressbook() { 
    // $this->db->order_by('att_id', 'desc');  
    //     $query = $this->db->get('emp_attendance');

$query =$this->db->select("count(DISTINCT(e.att_id)) as att_id,e.*,p.employee_id,p.first_name,p.last_name")->join('employee_history p','e.employee_id = p.employee_id','left')->group_by('e.att_id')->order_by('e.att_id', 'desc')->get('emp_attendance e');


        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
    
    function insert_csv($data) {
        $this->db->insert('emp_attendance', $data);
    }


public function delete_attn($id = null)
    {
        $this->db->where('att_id',$id)
            ->delete('emp_attendance');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    } 

    public function atten_create($data = array())
    {
        return $this->db->insert('emp_attendance', $data);
    }

   
    
public function update_attn($data = array())
    {
        return $this->db->where('att_id', $data["att_id"])
            ->update("emp_attendance", $data);
    }
    public function attn_updateForm($id){
        $this->db->where('att_id',$id);
        $query = $this->db->get('emp_attendance');
        return $query->row();
    }

   public  function get_atn_dropdown($id)
    {
        $query=$this->db->get_where('emp_attendance',array('att_id'=>$id));
        return $query->row_array();
    }  


    public function Employeename()
    {
        $this->db->select('*');
        $this->db->from('employee_history');
        $query=$this->db->get();
        $data=$query->result();
        
       $list = array('' => 'Select One...');
        if(!empty($data)){
            foreach ($data as $value){
                $list[$value->employee_id]=$value->first_name.$value->last_name."(".$value->employee_id.")";
            }
        }
        return $list;
    }


    /********* Repor Start  #################% ********/
     public function userReport($format_start_date,$format_end_date){
      
$this->db->select('e.*,count(DISTINCT(p.emp_his_id)) as emp_his_id,p.employee_id,p.first_name,p.last_name');

$this->db->from('emp_attendance e');
$this->db->join('employee_history p','e.employee_id = p.employee_id','left');
$this->db->where('e.date >=', $format_start_date);
$this->db->where('e.date <=', $format_end_date);
$this->db->group_by('e.att_id');
$query = $this->db->get();
$result = $query->result();
return $result;

    }
function search($id,$start_date,$end_date)
    {
        if (!empty($id)){
        $this->db->from('emp_attendance');
        $this->db->like('employee_id', $id);
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date); 
        $query = $this->db->get();
        return $query->result();
        }
        else {echo 'Sorry Enter Employee Id';}
    }


    function search_intime($date,$start_time,$end_time)
    {
        if (!empty($date)){
        $this->db->select('count(DISTINCT(e.att_id)) as att_id,e.*,p.employee_id,p.first_name,p.last_name');

$this->db->from('emp_attendance e');
$this->db->join('employee_history p','e.employee_id = p.employee_id','left');
        $this->db->like('e.date', $date);
        $this->db->where('e.sign_in >=', $start_time);
        $this->db->where('e.sign_in <=', $end_time); 
        $query = $this->db->get();
        return $query->result();
        }
        else {echo 'Sorry Enter Date';}
    }

    public function atnrp($id){
               $this->db->select('*');
        $this->db->from('employee_history');
        $this->db->where('employee_id',$id);
        $ab = $this->db->get();
        return $ab->result();
}



}
/*END OF FILE*/
