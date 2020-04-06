<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {
 
    public function demographic_list($limit = null, $start = null,$id = null)
    {
   
      $this->db->select('p.*,d.department_name,po.position_name,dt.type_name,rt.r_type_name as rd_type,gd.gender_name,ms.marital_sta,pf.frequency_name,sp.first_name as f_name,sp.last_name as l_name');
        $this->db->from('employee_history p');
        $this->db->join('department d', 'p.dept_id = d.dept_id', 'left');
        $this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
        $this->db->join('duty_type dt', 'p.duty_type = dt.id', 'left');
        $this->db->join('rate_type rt', 'p.rate_type = rt.id', 'left');
        $this->db->join('gender gd', 'p.gender = gd.id', 'left');
        $this->db->join('marital_info ms', 'p.marital_status = ms.id', 'left');
        $this->db->join('pay_frequency pf', 'p.pay_frequency = pf.id', 'left');
        $this->db->join('employee_history sp', 'p.super_visor_id = sp.emp_his_id', 'left');
          if(!empty($id)){
        $this->db->where('p.emp_his_id',$id);
        }
          $this->db->limit($limit, $start);
        $this->db->order_by('p.emp_his_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 
    public function count_demographic($id = null)
    {
        $this->db->select('*');
        $this->db->from('employee_history');
         if(!empty($id)){
        $this->db->where('emp_his_id',$id);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }

// Department Dropdown
    public function dropdownemp()
    {
        $data = $this->db->select("*")
            ->from('employee_history') 
            ->get()
            ->result();

        $list[''] = display('select_type');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->emp_his_id] = $value->first_name.' '.$value->last_name;
            return $list;
        } else {
            return false; 
        }
    }

     public function equipment_maping_report($limit = null, $start = null,$id = null)
    {
        $this->db->select('a.*,b.*,c.type_name,em.first_name,em.last_name');
        $this->db->from('employee_equipment a');
        $this->db->join('employee_history em','a.employee_id = em.employee_id','left');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->join('equipment_type c','b.type_id = c.type_id');
        if(!empty($id)){
        $this->db->where('em.employee_id',$id);
        }
        $this->db->order_by('a.equipment_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 

     public function employee_drop()
    {
        $data = $this->db->select("*")
            ->from('employee_history') 
            ->get()
            ->result();

        $list[''] = display('select_type');
        if (!empty($data)) {
            foreach($data as $value)
                $list[$value->employee_id] = $value->first_name.' '.$value->last_name;
            return $list;
        } else {
            return false; 
        }
    }

// equipmnet count
     public function count_equipment($id = null)
    {
        $this->db->select('a.*,b.*,c.type_name,em.first_name,em.last_name');
        $this->db->from('employee_equipment a');
        $this->db->join('employee_history em','a.employee_id = em.employee_id','left');
        $this->db->join('equipment b','a.equipment_id = b.equipment_id','left');
        $this->db->join('equipment_type c','b.type_id = c.type_id');
        if(!empty($id)){
        $this->db->where('em.employee_id',$id);
        }
        $this->db->order_by('a.equipment_id', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }
 // custom information
 public function custom_report($limit = null, $start = null,$id = null)
    {
        $this->db->select('a.*,b.first_name,b.last_name');
        $this->db->from('custom_table a');
        $this->db->join('employee_history b','a.employee_id = b.employee_id','left');
        if(!empty($id)){
        $this->db->where('b.employee_id',$id);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();    
        }
        return false;
    } 
//count custom information
      public function count_custom_data($id = null)
    {
       $this->db->select('a.*,b.first_name,b.last_name');
        $this->db->from('custom_table a');
        $this->db->join('employee_history b','a.employee_id = b.employee_id','left');
        if(!empty($id)){
        $this->db->where('b.employee_id',$id);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();  
        }
        return false;
    }
}
