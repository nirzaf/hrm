
<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Evencal_model extends CI_Model {
	// for get all event date in one month
	function getDateEvent($year, $month){
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month" : "$year-$month";
		$query = $this->db->select('date_of_approve,sum(amount) as amount')->from('grand_loan')->like('date_of_approve', $year, 'after')->get();
		if($query->num_rows() > 0){
			$data = array();
			foreach($query->result_array() as $row){
				$ddata = explode('-',$row['date_of_approve']);
				$data[(int) end($ddata)] = $row[''];
			}
			return $data;
		}else{
			return false;
		}
	}
	
	// get Attendance detail for selected date
	function getEvent($year, $month, $day){
		$day   = ($day < 10 && strlen($day) == 1)? "0$day" : $day;
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month-$day" : "$year-$month-$day";
		$query =$this->db->select("count(DISTINCT(e.att_id)) as att_id,count(DISTINCT(p.employee_id)) as employee_id,d.*")->join('employee_history p','e.employee_id = p.employee_id','left')->join('department d','d.dept_id = p.dept_id','left')->group_by('d.dept_id')->get_where('emp_attendance e', array("e.date" => $year));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}
	//get Notice  detail for selected date
	function getNotice($year, $month, $day){
		$day   = ($day < 10 && strlen($day) == 1)? "0$day" : $day;
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month-$day" : "$year-$month-$day";
		$query = $this->db->select('notice_id as id,notice_type,notice_by')->order_by('notice_id')->get_where('notice_board', array('notice_date' => $year));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}
//Leave details
	function getLeave($year, $month, $day){
		$day   = ($day < 10 && strlen($day) == 1)? "0$day" : $day;
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month-$day" : "$year-$month-$day";
		$query =$this->db->select("count(DISTINCT(lf.leave_appl_id)) as leave_appl_id,lf.num_aprv_day,lf.leave_aprv_end_date,count(DISTINCT(p.employee_id)) as employee_id,p.first_name,p.last_name")->join('employee_history p','lf.employee_id = p.employee_id','left')->group_by('p.employee_id')->get_where('leave_apply lf', array("lf.apply_date" => $year));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}
//loan details
	function getLoan($year, $month, $day){
		$day   = ($day < 10 && strlen($day) == 1)? "0$day" : $day;
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month-$day" : "$year-$month-$day";
		
		$query =$this->db->select("count(DISTINCT(ln.loan_id)) as loan_id,ln.amount,ln.loan_details,count(DISTINCT(p.employee_id)) as employee_id,p.first_name,p.last_name")->join('employee_history p','ln.employee_id = p.employee_id','left')->group_by('p.employee_id')->get_where('grand_loan ln', array("ln.date_of_approve" => $year));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
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