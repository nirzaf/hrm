<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
            'message_model' 
		));   
        
        if (!$this->session->userdata('isLogIn')) 
        redirect('login'); 
	}
 
    public function index()
    {
        $data['title']  =  display('inbox_message');
        $id = $this->session->userdata('id'); 
        #
        #pagination starts
        #
        $config["base_url"]       = base_url('dashboard/message/index/'); 
        $config["total_rows"]     = $this->db->get_where('message', array('receiver_id' => $this->session->userdata('id')))->num_rows(); 
        $config["per_page"]       = 25;
        $config["uri_segment"]    = 4; 
        $config["num_links"]      = 5;  
        /* This Application Must Be Used With BootStrap 3 * */
        $config['full_tag_open']  = "<ul class='pagination col-xs pull-right m-0'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config['cur_tag_open']   = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']  = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']  = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open']  = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']  = "<li>";
        $config['last_tagl_close'] = "</li>"; 
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['messages'] = $this->message_model->inbox($id, $config["per_page"], $page); 
        $data["links"] = $this->pagination->create_links(); 
        #
        #pagination ends
        #  
        $data['module'] = "dashboard";
        $data['page']   = "messages/inbox";
        echo Modules::run('template/layout', $data); 
    } 
 
	public function sent()
	{ 
        $data['title']    =  display('sent_message');
        $id = $this->session->userdata('id'); 
        #
        #pagination starts
        #
        $config["base_url"]       = base_url('dashboard/message/sent/'); 
        $config["total_rows"]     = $this->db->get_where('message', array('sender_id' => $this->session->userdata('id')))->num_rows(); 
        $config["per_page"]       = 25;
        $config["uri_segment"]    = 4; 
        $config["num_links"]      = 5;  
        /* This Application Must Be Used With BootStrap 3 * */
        $config['full_tag_open']  = "<ul class='pagination col-xs pull-right m-0'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config['cur_tag_open']   = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']  = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']  = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open']  = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']  = "<li>";
        $config['last_tagl_close'] = "</li>"; 
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['messages'] = $this->message_model->sent($id, $config["per_page"], $page); 
        $data["links"] = $this->pagination->create_links(); 
        #
        #pagination ends
        # 
        $data['module'] = "dashboard";
        $data['page']   = "messages/sent";
        echo Modules::run('template/layout', $data); 
	} 

    public function inbox_information($id = null, $sender_id = null)
    {  
        $data['title'] = display('message_details');
        $receiver_id = $this->session->userdata('id'); 
        #-------------------------------#
        $this->message_model->update(
            array(
                'id' => $id, 
                'receiver_status' => 1
            )
        );
        #-------------------------------#
        $data['message'] = $this->message_model->inbox_information($id, $sender_id, $receiver_id);
        $data['module'] = "dashboard";
        $data['page']   = "messages/inbox_information";
        echo Modules::run('template/layout', $data); 
    }

    public function sent_information($id = null, $receiver_id = null)
    {  
        $data['title'] = display('message_details');
        $sender_id = $this->session->userdata('id'); 
        #-------------------------------#
        $data['message'] = $this->message_model->sent_information($id, $sender_id, $receiver_id); 
        $data['module'] = "dashboard";
        $data['page']   = "messages/sent_information";
        echo Modules::run('template/layout', $data); 
    }
 

    public function new_message()
    { 
        $data['title'] = display('new_message');
        /*----------FORM VALIDATION RULES----------*/
        $this->form_validation->set_rules('receiver_id', display('receiver_name') ,'required|max_length[11]');
        $this->form_validation->set_rules('subject', display('subject'),'required|max_length[255]');
        $this->form_validation->set_rules('message', display('message'),'required|trim');
        /*-------------STORE DATA------------*/
        $id = $this->session->userdata('id');
        $date    = $this->input->post('date');

        $data['message'] = (object)$postData = array( 
            'id'          => $this->input->post('id'),
            'sender_id'   => $id,
            'receiver_id' => $this->input->post('receiver_id'),
            'subject'     => $this->input->post('subject'),
            'message'     => $this->input->post('message', true),
            'datetime'    => date("Y-m-d h:i:s"),
            'sender_status'   => 1, 
            'receiver_status' => 0, 
        );  

        /*-----------CREATE A NEW RECORD-----------*/
        if ($this->form_validation->run() === true) { 
            if ($this->message_model->create($postData)) {
                #set success message
                $this->session->set_flashdata('message', display('message_sent!'));
            } else {
                #set exception message
                $this->session->set_flashdata('exception', display('please_try_again'));
            } 
            redirect('dashboard/message/new_message');
        } else { 
            $id = $this->session->userdata('id'); 
            $data['user_list'] = $this->message_model->user_list($id);
            $data['module'] = "dashboard";
            $data['page']   = "messages/new_message";
            echo Modules::run('template/layout', $data); 
        }  
    }
 

    public function delete($id = null, $sender_id = null, $receiver_id = null) 
    {
        $uid = $this->session->userdata('id');
        if ($uid == $sender_id) {
            $condition = "sender_status";
            $this->message_model->delete($id, $condition);
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else if ($uid == $receiver_id) {
            $condition = "receiver_status";
            $this->message_model->delete($id, $condition);
            $this->session->set_flashdata('message',  display('delete_successfully'));
        } else {
            $this->session->set_flashdata('exception',  display('please_try_again'));
        }
        redirect($_SERVER['HTTP_REFERER']); 
    }
  
	
}
