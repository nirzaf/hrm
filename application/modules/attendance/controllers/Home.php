<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array(
            'Csv_model'
        )); 
        $this->load->library('csvimport');     
    }
    
    function index() {
        $this->permission->module('attendance','read')->redirect();
        $data['title']            = display('attendance_list');
        $data['addressbook']      = $this->Csv_model->get_addressbook();
        $data['dropdownatn']      = $this->Csv_model->Employeename();
        $data['module']           = "attendance";
        $data['page']             ="atnview";   
        echo Modules::run('template/layout', $data); 
    }


    function manageatn() {
        $data['title']            = display('attendance_list'); 
        $data['addressbook']      = $this->Csv_model->get_addressbook();
        $data['module']           = "attendance";
        $data['page']             = "manage_attendance";   
        echo Modules::run('template/layout', $data); 
    }
    function importcsv() {
        $data['addressbook'] = $this->Csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('atnview', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                       'employee_id'=>$row['employee_id'],
                       'date'      =>$row['date'],
                       'sign_in'   =>$row['sign_in'],
                       'sign_out'  =>$row['sign_out'],
                       'staytime'  =>$row['staytime'],
                   );
                    $this->Csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect("attendance/Home/index");
               // redirect("attendance/Home/index");
                // echo '<script>window.location.href = "'.base_url().'attendance/Home/index"</script>';

                
            } else 
            $data['error'] = "Error occured";
            $this->load->view('atnview', $data);
        }

    } 
    public function create_atten()
    { 
        $data['title'] = display('employee');
        // echo base_url();
        // exit;
        #-------------------------------#
        $this->form_validation->set_rules('employee_id',display('employee_id'),'required');
         $timezone = $this->db->select('timezone')->from('setting')->get()->row();
   date_default_timezone_set($timezone->timezone);
        $date=date('Y-m-d');

        $signin=date("h:i:s a", time());
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'employee_id'    => $this->input->post('employee_id',true),
                'date'           => $date,
                'sign_in'        => $signin,
                
            ];   

            if ($this->Csv_model->atten_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfull'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }

           redirect("attendance/Home/index");

        } else {
            $data['title']  = display('create');
            $data['module'] = "attendance";
            $data['page']   = "attendance_form";
            $data['dropdownatn'] =$this->Csv_model->Employeename();
            echo Modules::run('template/layout', $data);   
            
        }   
    }
    public function delete_atn($id = null) 
    { 
        $this->permission->method('attendance','delete')->redirect();

        if ($this->Csv_model->delete_attn($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect("attendance/Home/manageatn");
    }

    public function update_atn_form($id = null){
        $this->permission->method('attendance','delete')->redirect();
        $this->form_validation->set_rules('att_id',null,'required|max_length[11]');
        $this->form_validation->set_rules('employee_id',display('employee_id'),'required');
        $this->form_validation->set_rules('date',display('date')  ,'required');
        $this->form_validation->set_rules('sign_in',display('sign_in')  ,'required');
        $this->form_validation->set_rules('sign_out',display('sign_out'));
        $this->form_validation->set_rules('staytime',display('staytime'));
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'att_id'               => $this->input->post('att_id',true),
                'employee_id'              => $this->input->post('employee_id',true),
                'date'                 => $this->input->post('date',true),
                'sign_in'              => $this->input->post('sign_in',true),
                'sign_out'             => $this->input->post('sign_out',true),
                'staytime'             => $this->input->post('staytime',true),
                
            ]; 
            
            if ($this->Csv_model->update_attn($postData)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
                redirect("attendance/Home/index");

        } else {
         $data['data']=$this->Csv_model->attn_updateForm($id);
         $data['module']      = "attendance";
         $data['dropdownatn'] =$this->Csv_model->Employeename();
         $data['query']       = $this->Csv_model->get_atn_dropdown($id);
         $data['page']        = "update_atn";   
         echo Modules::run('template/layout',$data); 
     }

 }
    //// checkout atn ///
 public function checkout(){
    $timezone = $this->db->select('timezone')->from('setting')->get()->row();
   date_default_timezone_set($timezone->timezone);

   $sign_out =  date("h:i:s a", time());
   $sign_in  =  $this->input->post('sign_in',true);
   $in=new DateTime($sign_in);
   $Out=new DateTime($sign_out);
   $interval=$in->diff($Out);
   $stay =  $interval->format('%H:%I:%S');
   $postData = [
    'att_id'               => $this->input->post('att_id',true),
    'sign_out'             =>  $sign_out,
    'staytime'             => $stay,
]; 
$update = $this->db->where('att_id',$this->input->post('att_id',true))
            ->update("emp_attendance", $postData);
            if ($update) { 
                $this->session->set_flashdata('message', display('successfully_checkout'));
                  redirect("attendance/Home/index");
            }

}

/* ########## Report Start ####################*/
public function report_user(){

    $data['title']            = display('attendance_list');
    $data['module']           = "attendance";
    $data['page']             = "user_views_report";   
    echo Modules::run('template/layout', $data); 
    }//

    public function report_byId(){

        $data['title']            = display('attendance_list');
        $data['module']           = "attendance";
        $data['page']             = "attn_Id_report";   
        echo Modules::run('template/layout', $data); 
    }//

    public function report_view(){

        $this->permission->module('attendance','read')->redirect();
        $format_start_date = $this->input->post('start_date');
        $format_end_date   = $this->input->post('end_date');
        $data['date']      = $format_start_date;
        $data['date']      = $format_end_date;
        $data['query']     = $this->Csv_model->userReport($format_start_date,$format_end_date);
        $data['module']    = "attendance";
        $data['page']      = "user_views_report";   
        echo Modules::run('template/layout', $data); 
    }
    public function AtnReport_view(){

        $this->permission->module('attendance','read')->redirect();
        $data['title']    = display('attendance_repor');
        $id            = $this->input->post('employee_id');
        $start_date    = $this->input->post('s_date');
        $end_date      = $this->input->post('e_date');
        $data['employee_id']  = $id;
        $data['date']  = $start_date;
        $data['date']  = $end_date;
        $data['ab']   = $this->Csv_model->atnrp($id);
        $data['query'] = $this->Csv_model->search($id,$start_date,$end_date);

        $data['module']= "attendance";
        $data['page']  = "att_reportview";   
        echo Modules::run('template/layout', $data); 
    }
    public function atntime_report(){

        $data['title']            = display('attendance_list');
        $data['module']           = "attendance";
        $data['page']             = "Date_time_report";   
        echo Modules::run('template/layout', $data); 
    }//

    public function AtnTimeReport_view(){

        $this->permission->module('attendance','read')->redirect();
        $data['title']           = display('attendance_repor');
        $date                 = $this->input->post('date');
        $start_time           = $this->input->post('s_time');
        $end_time             = $this->input->post('e_time');
        $data['date']         = $date;
        $data['sign_in']      = $start_time;
        $data['sign_in']      = $end_time;
        $data['query']        = $this->Csv_model->search_intime($date,$start_time,$end_time);
        $data['module']       = "attendance";
        $data['page']         = "Date_time_report";   
        echo Modules::run('template/layout', $data); 
    }

    /**** ###### Id checking ######### */


    function attenlist() {
        $data['title']            = display('attendance_report');  ;
        $data['addressbook']      = $this->Csv_model->get_addressbook();
        $data['module']           = "attendance";
        $data['page']             = "attendance_list";
        $data['dropdownatn']      =  $this->Csv_model->Employeename();   
        echo Modules::run('template/layout', $data); 
    } 

    /*  atn edit */
    public function edit_atn_form($id = null){
        $this->permission->method('attendance','delete')->redirect();
        $this->form_validation->set_rules('att_id',null,'required|max_length[11]');
        $this->form_validation->set_rules('employee_id',display('employee_id'),'required');
        $this->form_validation->set_rules('date',display('date')  ,'required');
        $this->form_validation->set_rules('sign_in',display('sign_in')  ,'required');
        $this->form_validation->set_rules('sign_out',display('sign_out'));
        $this->form_validation->set_rules('staytime',display('staytime'));
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'att_id'               => $this->input->post('att_id',true),
                'employee_id'          => $this->input->post('employee_id',true),
                'date'                 => $this->input->post('date',true),
                'sign_in'              => $this->input->post('sign_in',true),
                'sign_out'             => $this->input->post('sign_out',true),
                'staytime'             => $this->input->post('staytime',true),
                
            ]; 
            
            if ($this->Csv_model->update_attn($postData)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
           redirect("attendance/Home/index");

        } else {
         $data['data']=$this->Csv_model->attn_updateForm($id);
         $data['module']      = "attendance";
         $data['dropdownatn'] =$this->Csv_model->Employeename();
         $data['query']       = $this->Csv_model->get_atn_dropdown($id);
         $data['page']        = "edit_attendance";   
         echo Modules::run('template/layout',$data); 
     }

 }

}

