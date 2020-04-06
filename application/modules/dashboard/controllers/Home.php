<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
      $this->load->model('evencal_model', 'evencal');
		$this->load->library('calendar', $this->_setting());
 		$this->load->model('home_model'); 

		if (! $this->session->userdata('isLogIn'))
			redirect('login');
 	}
 
		function index($year = null, $month = null, $day = null){
		$year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
		$day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
		$d=date('Y-m-d');
		
		$date      = $this->evencal->getDateEvent($year, $month);
		$notice = $this->evencal->getNotice($year, $month, $day);
		$cur_event = $this->evencal->getEvent($year, $month, $day);
		$leave = $this->evencal->getLeave($year, $month, $day);
		$loans = $this->evencal->getLoan($year, $month, $day);

		$data      = array(
						'notes' => $this->calendar->generate($year, $month, $date),
						'year'  => $year, 
						'mon'   => $month,
						'month' => $this->_month($month),
						'day'   => $day,
						'leave' => $leave,
						'loans'  => $loans,
						'events'=> $cur_event,
					    'notice'=> $notice,
	                    'module' => "dashboard", 
						'page'   => "home/index"
						);
		$data['emp']   = $this->home_model->empnumber();
		$data['atn']   = $this->home_model->atntd();
		$data['atnworkhour']   = $this->home_model->atnwork();
		$data['lnamount']   = $this->home_model->loanamnt();
		$data['transaction']   = $this->home_model->totaltransaction();
		$data['transactiondduct']   = $this->home_model->totaltransactiondeduct();
		echo Modules::run('template/layout', $data); 
	}
	
	// for convert (int) month to (string) month in Indonesian
	function _month($month){
		$month = (int) $month;
		switch($month){
			case 1 : $month = 'January'; Break;
			case 2 : $month = 'February'; Break;
			case 3 : $month = 'March'; Break;
			case 4 : $month = 'April'; Break;
			case 5 : $month = 'May'; Break;
			case 6 : $month = 'Jun'; Break;
			case 7 : $month = 'July'; Break;
			case 8 : $month = 'August'; Break;
			case 9 : $month = 'September'; Break;
			case 10 : $month = 'October'; Break;
			case 11 : $month = 'November'; Break;
			case 12 : $month = 'December'; Break;
		}
		return $month;
	}
	
	// get detail event for selected date
	function detail_event(){		
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getEvent($this->input->post('year', true), $this->input->post('mon', true), $this->input->post('day', true));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Result', 'msg' => 'There\'s no result in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}
	
	function detail_notice(){		
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getNotice($this->input->post('year', true), $this->input->post('mon', true), $this->input->post('day', true));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Result', 'msg' => 'There\'s no result in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}

	function detail_leave(){		
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getLeave($this->input->post('year', true), $this->input->post('mon', true), $this->input->post('day', true));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Result', 'msg' => 'There\'s no result in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}
	//loan detail on date
	function detail_loan(){		
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getLoan($this->input->post('year', true), $this->input->post('mon', true), $this->input->post('day', true));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Result', 'msg' => 'There\'s no result in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}
	// same as index() function
	function detail($year = null, $month = null, $day = null){
		$year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
		$day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
		
		$date      = $this->evencal->getDateEvent($year, $month);
		$notice = $this->evencal->getNotice($year, $month, $day);
		$leave = $this->evencal->getLeave($year, $month, $day);
		$loan = $this->evencal->getLoan($year, $month, $day);
		$cur_event = $this->evencal->getEvent($year, $month, $day);
		$data 	   = array(
						'notes' => $this->calendar->generate($year, $month, $date),
						'year'  => $year,
						'mon'   => $month,
						'month' => $this->_month($month),
						'day'   => $day,
						'notice'=> $notice,
						'loan'  => $loan,
						'leave' => $leave,
						'events'=> $cur_event,
						'module' => "dashboard", 
						'page'   => "home/index"
						);
		echo Modules::run('template/layout', $data);
					

	}
	//Notice details
	
	
	// setting for calendar
	function _setting(){
		return array(
			'start_day' 		=> 'monday',
			'show_next_prev' 	=> true,
			'next_prev_url' 	=> site_url('dashboard/home/index'),
			'month_type'   		=> 'long',
            'day_type'     		=> 'short',
			'template' 			=> '{table_open}<table class="date">{/table_open}
								   {heading_row_start}&nbsp;{/heading_row_start}
								   {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date btn btn-success"Month">&lt;&lt;Prev</a>{/heading_previous_cell}
								   {heading_title_cell}{heading}{/heading_title_cell}
								   {heading_next_cell}<a href="{next_url}" class="next_date btn btn-success">Next&gt;&gt;</a></caption>{/heading_next_cell}
								   {heading_row_end}<col class="weekday" span="5"><col class="weekend_sat"><col class="weekend_sun">{/heading_row_end}
								   {week_row_start}<thead><tr>{/week_row_start}
								   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
								   {week_row_end}</tr></thead><tbody>{/week_row_end}
								   {cal_row_start}<tr>{/cal_row_start}
								   {cal_cell_start}<td>{/cal_cell_start}
								   {cal_cell_content}<div class="date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content}
								   {cal_cell_content_today}<div class="active_date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content_today}
								   {cal_cell_no_content}<div class="no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content}
								   {cal_cell_no_content_today}<div class="active_no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content_today}
								   {cal_cell_blank}&nbsp;{/cal_cell_blank}
								   {cal_cell_end}</td>{/cal_cell_end}
								   {cal_row_end}</tr>{/cal_row_end}
								   {table_close}</tbody></table>{/table_close}');
	}

	public function profile()
	{
		$data['title']  = "Profile";
		$data['module'] = "dashboard";  
		$data['page']   = "home/profile";  
		$id = $this->session->userdata('id');//
		$data['user']   = $this->home_model->profile($id);
		echo Modules::run('template/layout', $data);  
	}

	public function setting()
	{ 
		$data['title']    = "Profile Setting";
		$id = $this->session->userdata('id');
		/*-----------------------------------*/
		$this->form_validation->set_rules('firstname', 'First Name','required|max_length[50]');
		$this->form_validation->set_rules('lastname', 'Last Name','required|max_length[50]');
		#------------------------#
       	$this->form_validation->set_rules('email', 'Email Address', "required|valid_email|max_length[100]");
       	/*---#callback fn not supported#---*/ 
       	// $this->form_validation->set_rules('email', 'Email Address', "required|valid_email|max_length[100]|callback_email_check[$id]|trim"); 
		#------------------------#
		$this->form_validation->set_rules('password', 'Password','max_length[32]|md5');
		$this->form_validation->set_rules('about', 'About','max_length[1000]');
		/*-----------------------------------*/
        $config['upload_path']          = './assets/img/user/';
        $config['allowed_types']        = 'gif|jpg|png'; 

        $this->load->library('upload', $config);
 
        if ($this->upload->do_upload('image')) {  
            $data = $this->upload->data();  
            $image = $config['upload_path'].$data['file_name']; 

			$config['image_library']  = 'gd2';
			$config['source_image']   = $image;
			$config['create_thumb']   = false;
			$config['maintain_ratio'] = TRUE;
			$config['width']          = 115;
			$config['height']         = 90;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$this->session->set_flashdata('message', "Image Upload Successfully!");
        }
		/*-----------------------------------*/
		$data['user'] = (object)$userData = array(
			'id' 		  => $this->input->post('id'),
			'firstname'   => $this->input->post('firstname'),
			'lastname' 	  => $this->input->post('lastname'),
			'email' 	  => $this->input->post('email'),
			'password' 	  => (!empty($this->input->post('password'))?md5($this->input->post('password')):$this->input->post('oldpassword')),
			'about' 	  => $this->input->post('about',true),
			'image'   	  => (!empty($image)?$image:$this->input->post('old_image')) 
		);

		/*-----------------------------------*/
		if ($this->form_validation->run()) {

	        if (empty($userData['image'])) {
				$this->session->set_flashdata('exception', $this->upload->display_errors()); 
	        }

			if ($this->home_model->setting($userData)) {

				$this->session->set_userdata(array(
					'fullname'   => $this->input->post('firstname'). ' ' .$this->input->post('lastname'),
					'email' 	  => $this->input->post('email'),
					'image'   	  => (!empty($image)?$image:$this->input->post('old_image'))
				));


				$this->session->set_flashdata('message', display('update_successfully'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("dashboard/home/setting");

		} else {
			$data['module'] = "dashboard";  
			$data['page']   = "home/profile_setting"; 
			if(!empty($id))
			$data['user']   = $this->home_model->profile($id);
			echo Modules::run('template/layout', $data);
		}
	}
	///// Notice 
	 public function view_details(){
        $id = $this->uri->segment(4);
		$data['module'] = "dashboard";  
		$data['page']   = "home/notice_details";  
		$data['detls']   = $this->evencal->details($id);
       echo Modules::run('template/layout', $data); 

    }


	
}
