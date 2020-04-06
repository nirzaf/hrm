<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_controller extends MX_Controller {

    public function __construct()
    {
      parent::__construct();

      $this->load->model(array(
         'Notice_model'
     ));		 
  }

  public function notice_view(){   
    $this->permission->method('noticeboard','read')->redirect();
    $data['title']    = display('noticeboard');  ;
    $data['mang']     = $this->Notice_model->notice_view();
    $data['module']   = "noticeboard";
    $data['page']     = "notice_view";   
    echo Modules::run('template/layout', $data); 
}


public function create_notice(){ 
   $this->form_validation->set_rules('notice_descriptiion',display('notice_descriptiion'));
   $this->form_validation->set_rules('notice_date',display('notice_date'));
   $this->form_validation->set_rules('notice_type',display('notice_type'),'max_length[50]');
   $this->form_validation->set_rules('notice_by',display('notice_by')  ,'max_length[50]');
   $this->load->library('myupload');
   $img = $this->myupload->do_upload(
    './application/modules/noticeboard/assets/images/', 
    'notice_attachment');
        #-------------------------------#
   if ($this->form_validation->run() === true) {
    $postData = [
     'notice_descriptiion' 	  => $this->input->post('notice_descriptiion',true),
     'notice_date'            =>$this->input->post('notice_date',true),
     'notice_type' 	          => $this->input->post('notice_type',true),
     'notice_by' 	          => $this->input->post('notice_by',true),
     'notice_attachment'      => $img,
 ];   

 if ($this->Notice_model->notice_create($postData)) { 
    $this->session->set_flashdata('message', display('successfully_created'));
} else {
    $this->session->set_flashdata('exception',  display('please_try_again'));
}
redirect("noticeboard/Notice_controller/create_notice");
} else {
        $data['title']  = display('noticeboard');
        $data['module'] = "noticeboard";//
        $data['mang']   = $this->Notice_model->notice_view();
        $data['page']   = "notice_form";   
        echo Modules::run('template/layout', $data); 
        }   
    }


    public function delete_notice($id = null){ 
        $this->permission->method('noticeboard','delete')->redirect();
        if ($this->Notice_model->notice_delete($id)) {
			#set success message
         $this->session->set_flashdata('message',display('delete_successfully'));
     } else {
			#set exception message
         $this->session->set_flashdata('exception',display('please_try_again'));

     }
     redirect("noticeboard/Notice_controller/notice_view");
 }

 public function update_notice_form($id = null){ 
    $data['title'] = display('agent');
        #-------------------------------#
    $this->form_validation->set_rules('notice_id',display('notice_id'));
    $this->form_validation->set_rules('notice_descriptiion',display('notice_descriptiion'));
    $this->form_validation->set_rules('notice_date',display('notice_date'));
    $this->form_validation->set_rules('notice_type',display('notice_type'),'max_length[50]');
    $this->form_validation->set_rules('notice_by',display('notice_by')  ,'max_length[50]');
    $this->load->library('myupload');
    $img = $this->myupload->do_upload(
        './application/modules/noticeboard/assets/images/', 
        'notice_attachment');

        #-------------------------------#
    if ($this->form_validation->run() === true) {
        $Data = [
        'notice_id'            =>$this->input->post('notice_id',true),
        'notice_descriptiion'  => $this->input->post('notice_descriptiion',true),
        'notice_date'          =>$this->input->post('notice_date',true),
        'notice_type' 	       => $this->input->post('notice_type',true),
        'notice_by' 	       => $this->input->post('notice_by',true),
        'notice_attachment'    =>(!empty($img) ? $img : $this->input->post('notice_attachment')),
    ];   

    if ($this->Notice_model->update_notice($Data)) { 
        $this->session->set_flashdata('message', display('successfully_updated'));
    } else {
        $this->session->set_flashdata('exception',  display('please_try_again'));
    }
    redirect("noticeboard/Notice_controller/notice_view");
} else {
     $data['title']     = display('update');
     $data['data']      = $this->Notice_model->notice_updateForm($id);
     $data['module']    = "noticeboard";    
     $data['page']      = "update_notice_form";   
     echo Modules::run('template/layout', $data);  
}   
}
public function download(){
    $this->load->helper('download');
    $filepath = $this->input->get('file');
    if (file_exists($filepath)) {
        return force_download($filepath, NULL);
    } else {
        return false;
    }
} 



public function view_details(){

    $id             = $this->uri->segment(4);
    $data['title']  = display('Details');  
    $data['detls']  = $this->Notice_model->details($id);
    $data['module'] = "noticeboard";
    $data['page']   = "notice_datails";   
    echo Modules::run('template/layout', $data); 

}

}
