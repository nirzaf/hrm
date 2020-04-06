<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_model extends CI_Model {
 
    /// type Part

    public function type_create($data = array())
    {
        return $this->db->insert('equipment_type', $data);
    }
    public function read_type($limit = null, $start = null)
    {
      $this->db->select('*');
        $this->db->from('equipment_type');
        $this->db->order_by('type_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

    public function findById_type($id = null)
    { 
        return $this->db->select("*")->from("equipment_type")
            ->where('type_id',$id) 
            ->limit($limit, $start)
            ->get()
            ->row();

    } 
 
    public function update($data = [])
    {
        return $this->db->where('type_id',$data['type_id'])
            ->update('equipment_type',$data); 
    } 
// Department Dropdown
    public function type_dropdown()
    {
        $data = $this->db->select("*")
            ->from('equipment_type') 
            ->get()
            ->result();

        $list[''] = display('select_type');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->type_id] = $value->type_name;
            return $list;
        } else {
            return false; 
        }
    }
 

public function count_type()
    {
        $this->db->select('*');
        $this->db->from('equipment_type');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }

    public function type_delete($id = null)
    {
        $this->db->where('type_id',$id)
            ->delete('equipment_type');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    } 

    /* Equipment Part start 
    |
    |############################################
    |
    */
      public function equipment_create($data = array())
    {
        return $this->db->insert('equipment', $data);
    }
    public function read_equipment($limit = null, $start = null)
    {
         $this->db->select('a.*,b.type_name');
        $this->db->from('equipment a');
        $this->db->join('equipment_type b','a.type_id = b.type_id');
        $this->db->order_by('a.equipment_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

    public function findById_equipment($id = null)
    { 
        return $this->db->select("*")->from("equipment")
            ->where('equipment_id',$id) 
            ->limit($limit, $start)
            ->get()
            ->row();

    } 
 
    public function update_equipment($data = [])
    {
        return $this->db->where('equipment_id',$data['equipment_id'])
            ->update('equipment',$data); 
    } 


public function count_equipment()
    {
        $this->db->select('*');
        $this->db->from('equipment');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }

    public function equipment_delete($id = null)
    {
        $this->db->where('equipment_id',$id)
            ->delete('equipment');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    } 

   /* Equipment Maping
    |
    |############################################
    |
    */
      public function maping_create()
    {
     $equip_id = $this->input->post('equipment_id');
     $issue_date =  $this->input->post('dates');
      for ($i=0, $n=count($equip_id); $i < $n; $i++) {
      $equipment_id = $equip_id[$i];
      $date         = $issue_date[$i];
        $equipment_maping = array(
     'equipment_id'     => $equipment_id, 
     'employee_id'      => $this->input->post('employee_id'),
     'issue_date'       => $date,
        
      );
        $assign = array(
      ' is_assign' => 1,
        );
      
       $insert = $this->db->insert('employee_equipment',$equipment_maping);
       $this->db->where('equipment_id',$equipment_id)
            ->update('equipment',$assign);
    }
    if($insert){
        return true;
    }else{
        return false;
    }
    }
    public function maping_equipment($limit = null, $start = null)
    {
        $this->db->select('a.*,b.equipment_name');
        $this->db->from('employee_equipment a');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->group_by('a.employee_id');
        $this->db->order_by('a.id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

    public function findById_maping($id = null)
    { 
        return $this->db->select("a.*,b.equipment_name")->from("employee_equipment a")
            ->join('equipment b','a.equipment_id = b.equipment_id')
            ->where('a.employee_id',$id) 
            ->limit($limit, $start)
            ->get()
            ->result();

    } 
    public function findById_emp($id = null)
    { 
        return $this->db->select("*")->from("employee_equipment")
            ->where('employee_id',$id) 
            ->limit($limit, $start)
            ->get()
            ->row();

    } 
 
    public function maping_update()
    {
         $issue_date =  $this->input->post('dates');
        $employee_id = $this->input->post('old_emp_id');
        $equipupd = $this->db->select('*')->from('employee_equipment')->where('employee_id',$employee_id)->get()->result();
         $assign = array(
      ' is_assign' => 0,
        );
        foreach ($equipupd as $value) {
       $this->db->where('equipment_id',$value->equipment_id)
            ->update('equipment',$assign);
        }
         $this->db->where('employee_id',$employee_id)
            ->delete('employee_equipment');

         $equip_id = $this->input->post('equipment_id');
      for ($i=0, $n=count($equip_id); $i < $n; $i++) {
      $equipment_id = $equip_id[$i];
      $date         = $issue_date[$i];
        $equipment_maping = array(
     'equipment_id'     => $equipment_id, 
     'employee_id'      => $this->input->post('employee_id'),
     'issue_date'       => $date,
        
      );
     $assign_update = array(
      ' is_assign' => 1,
        );
     $insert = $this->db->insert('employee_equipment',$equipment_maping);
      $this->db->where('equipment_id',$equipment_id)
            ->update('equipment',$assign_update);
    }
    if($insert){
        return true;
    }else{
        return false;
    }
    } 


public function count_maping()
    {
        $this->db->select('*');
        $this->db->from('employee_equipment');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }

    public function maping_delete($id = null)
    {
         $equipupd = $this->db->select('*')->from('employee_equipment')->where('employee_id',$id)->get()->result();
         $assign = array(
      ' is_assign' => 0,
        );
        foreach ($equipupd as $value) {
       $this->db->where('equipment_id',$value->equipment_id)
            ->update('equipment',$assign);
        }
        $this->db->where('employee_id',$id)
            ->delete('employee_equipment');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    } 
 // Equipment Dropdown
    public function equipment_dropdown()
    {
      return  $data = $this->db->select("*")
            ->from('equipment') 
            ->where('is_assign',0)
            ->get()
            ->result();

        
    }
    public function update_equipment_dropdown()
    {
      return  $data = $this->db->select("*")
            ->from('equipment') 
            //->where('is_assign',0)
            ->get()
            ->result();

        
    }

    // Employee Dropdown
    public function employee_dropdown()
    {
        $data = $this->db->select("*")
            ->from('employee_history') 
            ->get()
            ->result();

        $list[''] = display('select_employee');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->employee_id] = $value->first_name.$value->last_name;
            return $list;
        } else {
            return false; 
        }
    }
    // Asset return information
     public function asset_return()
    {
        
     $return_date =  $this->input->post('return_date');
        $employee_id = $this->input->post('employee_id');
        $damage = $this->input->post('damarage_descript');
         $equip_id = $this->input->post('equipment_id');
      for ($i=0, $n=count($equip_id); $i < $n; $i++) {
      $equipment_id = $equip_id[$i];
      $date = $return_date[$i];
      $damage_desc = $damage[$i];
        $equipment_return = array(
     'return_date'      => $date,
     'damarage_desc'    => $damage_desc,
        
      );
         $assign_update = array(
      ' is_assign' => 0,
        );
      $update = $this->db->where('employee_id',$employee_id)->where('equipment_id',$equipment_id)
            ->update('employee_equipment',$equipment_return);
             $this->db->where('equipment_id',$equipment_id)
            ->update('equipment',$assign_update);
    }
    if($update){
        return true;
    }else{
        return false;
    }
    } 

    // return equipment
        public function findById_equipment_return($id = null)
    { 
        return $this->db->select("*")->from("employee_equipment")
            ->where('employee_id',$id) 
            ->where('return_date !=','')
            ->limit($limit, $start)
            ->get()
            ->result();

    } 
    // return list 
    public function return_list($limit = null, $start = null)
    {
        $this->db->select('a.*,b.equipment_name');
        $this->db->from('employee_equipment a');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->where('a.return_date !=','');
        $this->db->order_by('a.id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

     public function count_return_list()
    {
        $this->db->select('a.*,b.equipment_name');
        $this->db->from('employee_equipment a');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->where('a.return_date !=','');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();    
        }
        return false;
    } 

    public function search_equipment($equipment){
        $query=$this->db->select('*')
                ->from('equipment')
                ->where('is_assign',0)
                ->like('equipment_name', $equipment, 'both')
                ->group_by('equipment_id')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();  
        }
        return false;
    }

}
