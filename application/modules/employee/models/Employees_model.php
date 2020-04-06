<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {
 
    public function employee()
	{
		$this->db->select('*');
        $this->db->from('employee_history');
        $query = $this->db->get();
        $data = $query->result();  
        $list = array('' => 'Select One...');
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->employee_id] = $value->first_name.' '.$value->last_name;
       		} 
       	}
       	return $list;
	}


 public  function get_dropdown_emp_pos($id)
    {
        $query=$this->db->get_where('employee_history',array('employee_id'=>$id));
        return $query->row_array();
    } 

 public  function get_pos($id)
    {
        $query=$this->db->get_where('employee_history',array('employee_id'=>$id));
        return $query->row_array();
    } 
    
	
/* ###########....Employee Salary Setup Start ....##################################  */

public function salary_setupView()
	{
		return $this->db->select('*')	
			->from('employee_salary_setup')
			->order_by('emp_sal_set_id', 'desc')
			->get()
			->result();
	}
public function emp_salsetup_create($data = array())
	{
		return $this->db->insert('employee_salary_setup', $data);//
	}
public function emp_salstup_delete($id = null)
	{
		$this->db->where('emp_sal_set_id',$id)
			->delete('employee_salary_setup');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_em_salstup($data = array())
	{
		return $this->db->where('emp_sal_set_id', $data["emp_sal_set_id"])
			->update("employee_salary_setup", $data);
	}
	public function salarysetup_updateForm($id){
        $this->db->where('emp_sal_set_id',$id);
        $query = $this->db->get('employee_salary_setup');
        return $query->row();
    }
    /* ###########....Employee Salary Setup End ....##################################  */

    /* ###########...Employee Performance Start ....##################################  */
         public function emp_performanceView()
	{
		
			 return $this->db->select('count(DISTINCT(per.emp_per_id)) as emp_per_id,per.*,p.employee_id,p.first_name,p.last_name')   
            ->from('employee_performance per')
            ->join('employee_history p', 'per.employee_id = p.employee_id', 'left')
            ->group_by('per.emp_per_id')
            ->order_by('per.emp_per_id', 'desc')
            ->get()
            ->result();
	}
	public function emp_performance_create($data = array())
	{
		return $this->db->insert('employee_performance', $data);
	}

	public function emp_performance_delete($id = null)
	{
		$this->db->where('emp_per_id',$id)
			->delete('employee_performance');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	 public  function get_performaceempid($id)
    {
        $query=$this->db->get_where('employee_performance',array('emp_per_id'=>$id));
        return $query->row_array();
    }  


	public function update_em_performance($data = array())
	{
		return $this->db->where('emp_per_id', $data["emp_per_id"])
			->update("employee_performance", $data);
	}
	public function emp_performance_updateForm($id){
        $result = $this->db->select('a.*,b.first_name,b.last_name')
                           ->from('employee_performance a')
                           ->join('employee_history b','a.employee_id = b.employee_id')
                           ->where('emp_per_id',$id)
                           ->get()
                           ->row();
                           return $result;
    }

    /* ###########....Employee Performance End ....##################################  */


    /* ###########...Employee Payment Start ....##################################  */
public function emp_paymentView()
	{
			return $this->db->select('count(DISTINCT(pment.emp_sal_pay_id)) as emp_sal_pay_id,pment.*,p.employee_id,p.first_name,p.last_name')   
            ->from('employee_salary_payment pment')
            ->join('employee_history p', 'pment.employee_id = p.employee_id', 'left')
            ->group_by('pment.emp_sal_pay_id')
            ->order_by('pment.emp_sal_pay_id', 'desc')
            ->get()
            ->result();
	}

	public function create_employee_payment($data = array())
	{
		return $this->db->insert('employee_salary_payment', $data);

	}

	public function emp_payment_delete($id = null)
	{
		$this->db->where('emp_sal_pay_id',$id)
			->delete('employee_salary_payment');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_payment($data = array())
	{
		return $this->db->where('emp_sal_pay_id', $data["emp_sal_pay_id"])
			->update("employee_salary_payment", $data);
	}
	public function payment_updateForm($id){
        $result = $this->db->select('a.*,b.first_name,b.last_name')
                           ->from('employee_salary_payment a')
                           ->join('employee_history b','a.employee_id=b.employee_id')
                           ->where('emp_sal_pay_id',$id)
                           ->get()
                           ->row();
                           return $result;
    }


    /* ###########...Employee Payment End ....##################################  */

    /* ###########...Employee sALARY PayType Start ....##################################  */


    public function emp_salPaytypeView()
	{
		return $this->db->select('*')	
			->from('employee_sal_pay_type')
			->order_by('emp_sal_pay_type_id', 'desc')
			->get()
			->result();
	}
	

	public function emp_payment_type_delete($id = null)
	{
		$this->db->where('emp_sal_pay_type_id',$id)
			->delete('employee_sal_pay_type');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 


/*------- payment */

 public function employee_details($id)
	{
		return $this->db->select('p.*,d.department_name,po.position_name')   
            ->from('employee_history p')
            ->join('department d', 'p.division_id = d.dept_id', 'left')
            ->join('position po', 'p.pos_id = po.pos_id', 'left')
			->where('p.employee_id',$id)
			->get()
			->row();
	}
	public function supervisorlist(){
		return $this->db->select('*')	
			->from('employee_history')
			->where('is_super_visor',1)
			->order_by('emp_his_id', 'desc')
			->get()
			->result();
	}
	
	public function emp_historyview()
	{
		return $this->db->select('*')	
			->from('employee_history')
			->group_by('employee_id')
			->order_by('emp_his_id', 'desc')
			->get()
			->result();
	}
	//Employee list
	public function emp_list()
	{
		$this->db->select('p.*,d.department_name,po.position_name,dt.type_name,rt.r_type_name as rd_type,gd.gender_name,ms.marital_sta,pf.frequency_name');
		$this->db->from('employee_history p');
		$this->db->join('department d', 'p.division_id = d.dept_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		$this->db->join('duty_type dt', 'p.duty_type = dt.id', 'left');
		$this->db->join('rate_type rt', 'p.rate_type = rt.id', 'left');
		$this->db->join('gender gd', 'p.gender = gd.id', 'left');
		$this->db->join('marital_info ms', 'p.marital_status = ms.id', 'left');
		$this->db->join('pay_frequency pf', 'p.pay_frequency = pf.id', 'left');
		$this->db->order_by('p.emp_his_id', 'desc');
		$query = $this->db->get();
		return $report = $query->result();
	}

public function insert_employee($data = array())
	{
		return $this->db->insert('employee_history', $data);//
	}

	public function emplyee_history_delete($id = null)
	{
		$this->db->where('employee_id',$id)
			->delete('employee_history');

		if ($this->db->affected_rows()) { 
				$this->db->where('employee_id',$id)
			->delete('custom_table');
			$this->db->where('employee_id',$id)
			->delete('employee_benifit');
			return true;
		} else {
			return false;
		}
	} 

	public function position_create($data = array())
	{
		return $this->db->insert('position', $data);
	}

	public function viewPosition()
	{
		return $this->db->select('*')	
			->from('position')
			->order_by('pos_id', 'desc')
			->get()
			->result();
	}


	public function update_position($data = array())
	{
		return $this->db->where('pos_id', $data["pos_id"])
			->update("position", $data);
	}

	public function delete_p($id = null)
	{
		$this->db->where('pos_id',$id)
			->delete('position');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function pos_updateForm($id){
        $this->db->where('pos_id',$id);
        $query = $this->db->get('position');
        return $query->row();
    }

    //update form employee ----
    public function update_employee($data = array())
	{
		return $this->db->where('employee_id', $data["employee_id"])
			->update("employee_history", $data);
	}


	public function employee_updateForm($id){
        $this->db->where('employee_id',$id);
        $query = $this->db->get('employee_history');
        return $query->row();
    }
    public function updateedu($id)
	{
		return $this->db->select('*')	
			->from('employee_history')
			->where('employee_id',$id)	
			->get()
			->result();
	}

	public function workupdat($id)
	{
		return $this->db->select('company_name,working_period,duties, 	supervisor')	
			->from('employee_history')
			->where('employee_id',$id)
			->get()
			->result();
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
       			$list[$value->position_name] = $value->position_name;
       		} 
       	}
       	return $list;
	}

		public function dropdowndept()
	{
		$this->db->select('*');
        $this->db->from('department');
        $this->db->where('parent_id',0);
        $query = $this->db->get();
       return  $query->result_array();
      
	}


	public function designation()
	{
		$this->db->select('*');
        $this->db->from('position');
        $query = $this->db->get();
        return $data = $query->result();
	}
	//Emplyee search
	public function employee_search($keyword)
	{
		$this->db->select('p.*,d.department_name,po.position_name,dt.type_name,rt.r_type_name,gd.gender_name,ms.marital_sta');
		$this->db->from('employee_history p');
		$this->db->join('department d', 'p.division_id = d.dept_id', 'left');
		$this->db->join('position po', 'p.pos_id = po.pos_id', 'left');
		$this->db->join('duty_type dt', 'p.duty_type = dt.id', 'left');
		$this->db->join('rate_type rt', 'p.rate_type = rt.id', 'left');
		$this->db->join('gender gd', 'p.gender = gd.id', 'left');
		$this->db->join('marital_info ms', 'p.marital_status = ms.id', 'left');
		$this->db->or_like(
			array(
			'p.employee_id'             => $keyword,
			'po.position_name' 	        => $keyword,
			'p.first_name' 	            => $keyword,
			'p.last_name' 	            => $keyword,
			'p.maiden_name'             => $keyword,
			'p.email' 	                => $keyword,
			'p.phone' 	                => $keyword,
			'p.alter_phone' 	        => $keyword,
			'p.present_address' 	    => $keyword,
			'p.parmanent_address' 	    => $keyword,
			'd.department_name'         => $keyword,
			'p.state'                   => $keyword,
			'p.city'                    => $keyword,
			'p.zip'                     => $keyword,
			'dt.type_name'              => $keyword,
			'p.hire_date'               => $keyword,
			'p.original_hire_date'      => $keyword,
			'p.termination_date'        => $keyword,
			'p.termination_reason'      => $keyword,
			'p.voluntary_termination'   => $keyword,
			'p.rehire_date'             => $keyword,
			'rt.r_type_name'            => $keyword,
			'p.rate'                    => $keyword,
			'p.pay_frequency'           => $keyword,
			'p.pay_frequency_txt'       => $keyword,
			'p.hourly_rate2'            => $keyword,
			'p.hourly_rate3'            => $keyword,
			'p.home_department'         => $keyword,
			'p.department_text'         => $keyword,
			'p.super_visor_id'          => $keyword,
			'p.supervisor_report'       => $keyword,
			'p.dob'                     => $keyword,
			'gd.gender_name'            => $keyword,
			'ms.marital_sta'            => $keyword,
			'p.ethnic_group'            => $keyword,
			'p.eeo_class_gp'            => $keyword,
			'p.ssn'                     => $keyword,
			'p.work_in_state'           => $keyword,
			'p.live_in_state'           => $keyword,
			'p.home_email'              => $keyword,
			'p.business_email'          => $keyword,
			'p.home_phone'              => $keyword,
			'p.business_phone'          => $keyword,
			'p.cell_phone'              => $keyword,
			'p.emerg_contct'            => $keyword,
			'p.emrg_h_phone'            => $keyword,
			'p.emrg_w_phone'            => $keyword,
			'p.emgr_contct_relation'    => $keyword,
			'p.alt_em_contct'           => $keyword,
			'p.alt_emg_h_phone'         => $keyword,
			'p.alt_emg_w_phone'         => $keyword,
				));
		$query = $this->db->get();

		return $report = $query->result();
	}

	public function customifo($id){
		$this->db->select('*');
        $this->db->from('custom_table');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
       return  $query->result();
	}
	public function benifit($id){
		$this->db->select('*');
        $this->db->from('employee_benifit');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
       return  $query->result();
	}

	public function award($id){
		$this->db->select('*');
        $this->db->from('award ');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
       return  $query->result();
	}

	 public function performance($id){
	 	$this->db->select('AVG(number_of_star) as star');
        $this->db->from('employee_performance ');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
        $result = $query->row();
        return $star = $result->star;
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


