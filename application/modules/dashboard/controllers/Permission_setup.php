<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission_setup extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model(array(
 			'module_permission_model',
 			'module_model'
 		));
 		
		if (! $this->session->userdata('isAdmin'))
			redirect('login');
 	}


	public function index()
	{
		$data['p_menu']     = $this->db->select('menu_id,menu_title')->get('sec_menu_item')->result();
		$data['title']      = display('menu_permission_form');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "menupermission/permission_set";   
		$data['module_list'] = $this->module_model->dropdown();
		echo Modules::run('template/layout', $data); 
	}

	public function save()
	{
		$this->form_validation->set_rules('menu_title', 'Menu Title','required|is_unique[sec_menu_item.menu_title]');

		if ($this->form_validation->run()) {
			$setData = array(
				'menu_title' 		=> $this->input->post('menu_title'),
				'page_url' 			=> $this->input->post('page_url'),
				'module' 			=> $this->input->post('module'),
				'parent_menu' 		=> $this->input->post('parent_menu'),
				'is_report' 		=> ($this->input->post('is_report')?1:0),
				'createdate'		=> date('Y-m-d'),
				'createby'			=> $this->session->userdata('id'),
			);
			$this->db->insert('sec_menu_item',$setData);
			$this->session->set_flashdata('message', display('save_successfully'));
			redirect('dashboard/permission_setup');
		} else {

			$data['p_menu']     = $this->db->select('menu_id,menu_title')->get('sec_menu_item')->result();
			$data['title']      = display('menu_permission_form');
			$data['module'] 	= "dashboard";  
			$data['page']   	= "menupermission/permission_set";   
			$data['module_list'] = $this->module_model->dropdown();
			echo Modules::run('template/layout', $data); 
		}
	}


	public function menu_item_list()
	{

		$data['title']      = display('menu_permission_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "menupermission/permission_set_list";   

		$limit=15;

        @$start = ($this->uri->segment(4)?$this->uri->segment(4):0);

        $config = $this->pasination($limit,'sec_menu_item','dashboard/Permission_setup/menu_item_list');
        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();

		$data['menu_item_list'] = $this->db->select('*')->limit($limit,$start)->order_by('module','asc')->get('sec_menu_item')->result();
		echo Modules::run('template/layout', $data); 
	}

	

	public function edit($id)
	{
		$data['p_menu']     = $this->db->select('menu_id,menu_title')->get('sec_menu_item')->result();
		$data['title']      = display('module_permission_list');
		$data['module'] 	= "dashboard";  
		$data['page']   	= "menupermission/edit";   
		$data['menu_item'] = $this->db->select('*')->where('menu_id',$id)->get('sec_menu_item')->row();
		echo Modules::run('template/layout', $data); 
	}

	public function update()
	{
		$setData = array(
			'menu_title' 		=> $this->input->post('menu_title'),
			'page_url' 			=> $this->input->post('page_url'),
			'module' 			=> $this->input->post('module'),
			'parent_menu' 		=> $this->input->post('parent_menu'),
			'is_report' 		=> ($this->input->post('is_report')?1:0)
		);
		$menu_id = $this->input->post('menu_id');
		$this->db->where('menu_id',$menu_id)->update('sec_menu_item',$setData);
		redirect('dashboard/permission_setup/menu_item_list');
	}



public function pasination($limit,$tbl,$url){
        $total_rows = $this->db->select('*')
        ->from($tbl)
        ->get()
        ->num_rows();
        $config["base_url"] = base_url($url);
        $config["total_rows"] = $total_rows;
        $config["per_page"] = $limit;
        $config['suffix'] = '?'.http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].$config['suffix'];
        // integrate bootstrap pagination
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
        return $config;
}



public function delete($id){
	$this->db->where('menu_id',$id)->delete('sec_menu_item');
	$this->session->set_flashdata('message', display('delete_successfully'));
	redirect('dashboard/permission_setup/menu_item_list');
}




}
