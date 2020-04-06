<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'user_model'  
 		));
 		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}
 
	public function index()
	{ 
		$data['title']      = display('user_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "user/list";   
		$data['user'] = $this->user_model->read();
		echo Modules::run('template/layout', $data); 
	}
 

    public function email_check($email, $id)
    { 
        $emailExists = $this->db->select('email')
            ->where('email',$email) 
            ->where_not_in('id',$id) 
            ->get('user')
            ->num_rows();

        if ($emailExists > 0) {
            $this->form_validation->set_message('email_check', 'The {field} is already registered.');
            return false;
        } else {
            return true;
        }
    } 

 
	public function form($id = null)
	{ 
		$data['title']    = display('add_user');
		/*-----------------------------------*/
		$this->form_validation->set_rules('firstname', display('firstname'),'required|max_length[50]');
		$this->form_validation->set_rules('lastname', display('lastname'),'required|max_length[50]');
		#------------------------#
		if (!empty($id)) {   
       		$this->form_validation->set_rules('email', display('email'), "required|valid_email|max_length[100]");
       		/*---#callback fn not supported#---*/ 
       		// $this->form_validation->set_rules('email', 'Email Address', "required|valid_email|max_length[100]|callback_email_check[$id]|trim"); 
		} else {
			$this->form_validation->set_rules('email', display('email'),'required|valid_email|max_length[100]');
		}
		#------------------------#
		if(empty($id)){
		$this->form_validation->set_rules('password', display('password'),'required|max_length[32]|md5');
		}
		$this->form_validation->set_rules('about', display('about'),'max_length[1000]');
		$this->form_validation->set_rules('status', display('status'),'required|max_length[1]');
		/*-----------------------------------*/
        $config['upload_path']          = './assets/img/user/';
        $config['allowed_types']        = 'gif|jpg|png'; 

   //      $this->load->library('upload', $config);
 
   //      if ($this->upload->do_upload('image')) {  
   //          $data = $this->upload->data();  
   //          $image = $config['upload_path'].$data['file_name']; 
			// $config['image_library']  = 'gd2';
			// $config['source_image']   = $image;
			// $config['create_thumb']   = false;
			// $config['maintain_ratio'] = TRUE;
			// $config['width']          = 115;
			// $config['height']         = 90;
			// $this->load->library('image_lib', $config);
			// $this->image_lib->resize();
			// $this->session->set_flashdata('message', display('image_upload_successfully'));
   //      }
         $image = $this->input->post('image');
		/*-----------------------------------*/
		$data['user'] = (object)$userLevelData = array(
			'id' 		  => $this->input->post('id'),
			'firstname'   => $this->input->post('firstname'),
			'lastname' 	  => $this->input->post('lastname'),
			'email' 	  => $this->input->post('email'),
			'password' 	  => (!empty($this->input->post('password'))?md5($this->input->post('password')):$this->input->post('oldpassword')),
			'about' 	  => $this->input->post('about',true),
			'image'   	  => (!empty($image)?$image:$this->input->post('old_image')),
			'last_login'  => null,
			'last_logout' => null,
			'ip_address'  => null,
			'status'      => $this->input->post('status'),
			'is_admin'    => 0
		);

		/*-----------------------------------*/
		if ($this->form_validation->run()) {

	   //      if (empty($userLevelData['image'])) {
				// $this->session->set_flashdata('exception', $this->upload->display_errors()); 
	   //      }

			if (empty($userLevelData['id'])) {
				if ($this->user_model->create($userLevelData)) {
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("dashboard/user/form/");

			} else {
				if ($this->user_model->update($userLevelData)) {
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}

				redirect("dashboard/user/form/$id");
			}


		} else {
			$data['module'] = "dashboard";  
			$data['page']   = "user/form"; 
			$data['empl']   = $this->user_model->employee();
			if(!empty($id))
			$data['user']   = $this->user_model->single($id);
		    $data['empinfo']= $this->user_model->empinfo($data['user']->email);
			echo Modules::run('template/layout', $data);
		}
	}

	public function delete($id = null)
	{ 
		if ($this->user_model->delete($id)) {
			$this->session->set_flashdata('message', display('delete_successfully'));
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}

		redirect("dashboard/user/index");
	}

	public function employeeData(){
		$employee_id = $this->input->post('employee_id');
		$data = $this->db->select('first_name,last_name,email,picture')->from('employee_history')->where('employee_id',$employee_id)->get()->row();
		$info = array(
			'first_name' => $data->first_name,
			'last_name'  => $data->last_name,
			'emails'     => (!empty($data->email)?$data->email:null),
			'image'      => $data->picture,
		);
		echo json_encode($info);
	}
}
