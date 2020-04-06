<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'setting_model'
		));

		if (!$this->session->userdata('isAdmin')) 
		redirect('login'); 
	}
 

	public function index()
	{
		$data['title'] = display('application_setting');
		#-------------------------------#
		//check setting table row if not exists then insert a row
		$this->check_setting();
		#-------------------------------#
		$data['languageList'] = $this->languageList(); 
		$data['setting'] = $this->setting_model->read(); 
        $data['timezonelist'] = array(
'Africa/Casablanca' => 'Africa/Casablanca',
'Africa/Lagos' => 'Africa/Lagos',
'Africa/Cairo' => 'Africa/Cairo',
'Africa/Harare' => 'Africa/Harare',
'Africa/Johannesburg' => 'Africa/Johannesburg',
'Africa/Monrovia' => 'Africa/Monrovia',
'America/Anchorage' => 'America/Anchorage',
'America/Los_Angeles' => 'America/Los_Angeles',
'America/Tijuana' => 'America/Tijuana',
'America/Chihuahua' => 'America/Chihuahua',
'America/Mazatlan' => 'America/Mazatlan',
'America/Denver' => 'America/Denver',
'America/Managua' => 'America/Managua',
'America/Chicago' => 'America/Chicago',
'America/Mexico_City' => 'America/Mexico_City',
'America/Monterrey' => 'America/Monterrey',
'America/New_York' => 'America/New_York',
'America/Lima' => 'America/Lima',
'America/Bogota' => 'America/Bogota',
'America/Caracas' => 'America/Caracas',
'America/La_Paz' => 'America/La_Paz',
'America/Santiago' => 'America/Santiago',
'America/St_Johns' => 'America/St_Johns',
'America/Sao_Paulo' => 'America/Sao_Paulo',
'America/Argentina' => 'America/Argentina',
'America/Godthab' => 'America/Godthab',
'America/Noronha' => 'America/Noronha',
'Asia/Jerusalem' => 'Asia/Jerusalem',
'Asia/Baghdad' => 'Asia/Baghdad',
'Asia/Kuwait' => 'Asia/Kuwait',
'Africa/Nairobi' => 'Africa/Nairobi',
'Asia/Riyadh' => 'Asia/Riyadh',
'Asia/Tehran' => 'Asia/Tehran',
'Asia/Baku' => 'Asia/Baku',
'Asia/Muscat' => 'Asia/Muscat',
'Asia/Tbilisi' => 'Asia/Tbilisi',
'Asia/Yerevan' => 'Asia/Yerevan',
'Asia/Kabul' => 'Asia/Kabul',
'Asia/Karachi' => 'Asia/Karachi',
'Asia/Tashkent' => 'Asia/Tashkent',
'Asia/Kolkata' => 'Asia/Kolkata',
'Asia/Katmandu' => 'Asia/Katmandu',
'Asia/Almaty' => 'Asia/Almaty',
'Asia/Dhaka' => 'Asia/Dhaka',
'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
'Asia/Rangoon' => 'Asia/Rangoon',
'Asia/Bangkok' => 'Asia/Bangkok',
'Asia/Jakarta' => 'Asia/Jakarta',
'Asia/Hong_Kong' => 'Asia/Hong_Kong',
'Asia/Chongqing' => 'Asia/Chongqing',
'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
'Australia/Perth' => 'Australia/Perth',
'Asia/Singapore' => 'Asia/Singapore',
'Asia/Taipei' => 'Asia/Taipei', 
'Asia/Ulan_Bator' => 'Asia/Ulan_Bator',
'Asia/Urumqi' => 'Asia/Urumqi',
'Asia/Irkutsk' => 'Asia/Irkutsk',
'Asia/Tokyo' => 'Asia/Tokyo',
'Asia/Seoul' => 'Asia/Seoul',
'Asia/Yakutsk' => 'Asia/Yakutsk',
'Asia/Vladivostok' => 'Asia/Vladivostok',
'Asia/Kamchatka' => 'Asia/Kamchatka',
'Asia/Magadan' => 'Asia/Magadan',
'Atlantic/Azores' => 'Atlantic/Azores',
'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
'Australia/Adelaide' => 'Australia/Adelaide',
'Australia/Darwin' => 'Australia/Darwin',
'Australia/Brisbane' => 'Australia/Brisbane',
'Australia/Canberra' => 'Australia/Canberra',
'Australia/Sydney' => 'Australia/Sydney',
'Australia/Hobart' => 'Australia/Hobart',
'Australia/Melbourne' => 'Australia/Melbourne',
'Canada/Atlantic' => 'Canada/Atlantic',
'Europe/Helsinki' => 'Europe/Helsinki',
'Europe/London' => 'Europe/London',
'Europe/Dublin' => 'Europe/Dublin',
'Europe/Lisbon' => 'Europe/Lisbon',
'Europe/Belgrade' => 'Europe/Belgrade',
'Europe/Berlin' => 'Europe/Berlin',
'Europe/Bratislava' => 'Europe/Bratislava',
'Europe/Brussels' => 'Europe/Brussels',
'Europe/Budapest' => 'Europe/Budapest',
'Europe/Copenhagen' => 'Europe/Copenhagen',
'Europe/Ljubljana' => 'Europe/Ljubljana',
'Europe/Madrid' => 'Europe/Madrid',
'Europe/Paris' => 'Europe/Paris',
'Europe/Prague' => 'Europe/Prague', 
'Europe/Sarajevo' => 'Europe/Sarajevo',
'Europe/Skopje' => 'Europe/Skopje',
'Europe/Stockholm' => 'Europe/Stockholm',
'Europe/Vienna' => 'Europe/Vienna',
'Europe/Warsaw' => 'Europe/Warsaw',
'Europe/Zagreb' => 'Europe/Zagreb',
'Europe/Athens' => 'Europe/Athens',
'Europe/Bucharest' => 'Europe/Bucharest',
'Europe/Riga' => 'Europe/Riga',
'Europe/Sofia' => 'Europe/Sofia',
'Europe/Tallinn' => 'Europe/Tallinn',
'Europe/Vilnius' => 'Europe/Vilnius',
'Europe/Minsk' => 'Europe/Minsk',
'Europe/Istanbul' => 'Europe/Istanbul',
'Europe/Moscow' => 'Europe/Moscow',
'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
'Pacific/Fiji' => 'Pacific/Fiji',
'Pacific/Kwajalein' => 'Pacific/Kwajalein',
'Pacific/Midway' => 'Pacific/Midway',
'Pacific/Samoa' => 'Pacific/Samoa',
'Pacific/Honolulu' => 'Pacific/Honolulu',
'Pacific/Auckland' => 'Pacific/Auckland',
'Pacific/Tongatapu' => 'Pacific/Tongatapu',
'Pacific/Guam' => 'Pacific/Guam',
			);
		$data['module'] = "dashboard";  
		$data['page']   = "home/setting";  
		echo Modules::run('template/layout', $data); 
	} 

	public function create()
	{
		$data['title'] = display('application_setting');
		#-------------------------------#
		$this->form_validation->set_rules('title',display('application_title'),'required|max_length[50]');
		$this->form_validation->set_rules('address', display('address') ,'max_length[255]');
		$this->form_validation->set_rules('email',display('email'),'max_length[100]|valid_email');
		$this->form_validation->set_rules('phone',display('phone'),'max_length[20]');
		$this->form_validation->set_rules('language',display('language'),'max_length[250]'); 
		$this->form_validation->set_rules('footer_text',display('footer_text'),'max_length[255]'); 
		#-------------------------------#
		//logo upload
		$logo = $this->fileupload->do_upload(
			'assets/img/icons/',
			'logo'
		);
		// if logo is uploaded then resize the logo
		if ($logo !== false && $logo != null) {
			$this->fileupload->do_resize(
				$logo, 
				210,
				48
			);
		}
		//if logo is not uploaded
		if ($logo === false) {
			$this->session->set_flashdata('exception', display('invalid_logo'));
		}


		//favicon upload
		$favicon = $this->fileupload->do_upload(
			'assets/img/icons/',
			'favicon'
		);
		// if favicon is uploaded then resize the favicon
		if ($favicon !== false && $favicon != null) {
			$this->fileupload->do_resize(
				$favicon, 
				32,
				32
			);
		}
		//if favicon is not uploaded
		if ($favicon === false) {
			$this->session->set_flashdata('exception',  display('invalid_favicon'));
		}		
		#-------------------------------#

		$data['setting'] = (object)$postData = [
			'id'          => $this->input->post('id'),
			'title' 	  => $this->input->post('title'),
			'address' => $this->input->post('address', false),
			'email' 	  => $this->input->post('email'),
			'phone' 	  => $this->input->post('phone'),
			'logo' 	      => (!empty($logo)?$logo:$this->input->post('old_logo')),
			'favicon' 	  => (!empty($favicon)?$favicon:$this->input->post('old_favicon')),
			'language'    => $this->input->post('language'), 
			'timezone'    => $this->input->post('timezone'),
			'site_align'  => $this->input->post('site_align'), 
			'footer_text' => $this->input->post('footer_text', false) 
		]; 
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			#if empty $id then insert data
			if (empty($postData['id'])) {
				if ($this->setting_model->create($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('save_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception',display('please_try_again'));
				}
			} else {
				if ($this->setting_model->update($postData)) {
					#set success message
					$this->session->set_flashdata('message',display('update_successfully'));
				} else {
					#set exception message
					$this->session->set_flashdata('exception', display('please_try_again'));
				} 
			}
 
			redirect('dashboard/setting');

		} else { 
			$data['languageList'] = $this->languageList();
			$data['module'] = "dashboard";  
			$data['page']   = "home/setting";  
			echo Modules::run('template/layout', $data); 
		} 
	}

	//check setting table row if not exists then insert a row
	public function check_setting()
	{
		if ($this->db->count_all('setting') == 0) {
			$this->db->insert('setting',[
				'title' => 'Dynamic Admin Panel',
				'address' => '123/A, Street, State-12345, Demo',
				'footer_text' => '2018&copy;Copyright',
			]);
		}
	}


    public function languageList()
    { 
        if ($this->db->table_exists("language")) { 

                $fields = $this->db->field_data("language");

                $i = 1;
                foreach ($fields as $field)
                {  
                    if ($i++ > 2)
                    $result[$field->name] = ucfirst($field->name);
                }

                if (!empty($result)) return $result;
 

        } else {
            return false; 
        }
    }


}
