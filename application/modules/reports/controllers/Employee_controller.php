<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends MX_Controller {

    public function __construct()
    {
      parent::__construct();

      $this->load->model(array(
         'report_model'
     ));		 
  }

  public function demographic_list(){   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('demographic_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"]    = base_url('reports/Employee_controller/demographic_list');
    $config["total_rows"]  = $this->report_model->count_demographic($id);
    $config["per_page"]    = 10;
    $config["uri_segment"] = 4;
    $config["last_link"]   = "Last"; 
    $config["first_link"]  = "First"; 
    $config['next_link']   = 'Next';
    $config['prev_link']   = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["emp_demogr"] = $this->report_model->demographic_list($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id']          = $id; 
    $data['dropdownemp'] = $this->report_model->dropdownemp();
    $data['module']      = "reports";
    $data['page']        = "demographic_list";   
    echo Modules::run('template/layout', $data); 
} 

public function positional_list()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('positional_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Employee_controller/positional_list');
    $config["total_rows"]  = $this->report_model->count_demographic($id);
    $config["per_page"]    = 10;
    $config["uri_segment"] = 4;
    $config["last_link"] = "Last"; 
    $config["first_link"] = "First"; 
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["emp_positinal"] = $this->report_model->demographic_list($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
    $data['id']          = $id; 
    $data['dropdownemp'] = $this->report_model->dropdownemp();
    $data['module']      = "reports";
    $data['page']        = "positional_list";   
    echo Modules::run('template/layout', $data); 
} 
    // Assets Report 
public function employee_assets()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('assets_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Employee_controller/employee_assets');
    $config["total_rows"]  = $this->report_model->count_equipment($id);
    $config["per_page"]    = 10;
    $config["uri_segment"] = 4;
    $config["last_link"] = "Last"; 
    $config["first_link"] = "First"; 
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["assets"] = $this->report_model->equipment_maping_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
    $data['dropdownemp'] = $this->report_model->employee_drop();
    $data['module'] = "reports";
    $data['page']   = "assets_list";   
    echo Modules::run('template/layout', $data); 
}    
    //Benifit information
public function benifit_list()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('benifit_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Employee_controller/positional_list');
    $config["total_rows"]  = $this->report_model->count_demographic($id);
    $config["per_page"]    = 10;
    $config["uri_segment"] = 4;
    $config["last_link"] = "Last"; 
    $config["first_link"] = "First"; 
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["emp_positinal"] = $this->report_model->demographic_list($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
    $data['dropdownemp'] = $this->report_model->dropdownemp();
    $data['module'] = "reports";
    $data['page']   = "benifit_list";   
    echo Modules::run('template/layout', $data); 
} 

public function custom_report()
{   
    $this->permission->method('reports','read')->redirect();
    $id = $this->input->post('employee_id');
    $data['title']    = display('customr_info'); 
        #-------------------------------#       
        #
        #pagination starts
        #
    $config["base_url"] = base_url('reports/Employee_controller/custom_report');
    $config["total_rows"]  = $this->report_model->count_custom_data($id);
    $config["per_page"]    = 10;
    $config["uri_segment"] = 4;
    $config["last_link"] = "Last"; 
    $config["first_link"] = "First"; 
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';  
    $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    /* ends of bootstrap */
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["emp_custom"] = $this->report_model->custom_report($config["per_page"], $page,$id);
    $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
    $data['id'] = $id; 
    $data['dropdownemp'] = $this->report_model->employee_drop();
    $data['module'] = "reports";
    $data['page']   = "custom_list";   
    echo Modules::run('template/layout', $data); 
}           

}
