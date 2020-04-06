<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Candidate_model'
		));		 
	}
 
	public function candidateinfo_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('candidate_list');  ;
		$data['caninfo'] = $this->Candidate_model->viewcanInfo();
		$data['edu'] = $this->Candidate_model->viewEduinfo();
		$data['exp'] = $this->Candidate_model->viewExperience();
		$data['module'] = "circularprocess";
		$data['page']   = "canInfoview";   
		echo Modules::run('template/layout', $data); 
	} 

 
	
 	public function caninfo_create()
	{ 
		
		$data['title'] = display('write_y_p_info');
		#-------------------------------#
		$this->form_validation->set_rules('first_name',display('first_name'),'max_length[50]');
		$this->form_validation->set_rules('last_name',display('last_name')  ,'max_length[100]');
		$this->form_validation->set_rules('email',display('email')  ,'max_length[32]');
		$this->form_validation->set_rules('phone',display('phone')  ,'max_length[100]');
		$this->form_validation->set_rules('alter_phone',display('alter_phone')  ,'max_length[100]');
		$this->form_validation->set_rules('present_address',display('present_address')  ,'max_length[100]');
		$this->form_validation->set_rules('parmanent_address',display('parmanent_address')  ,'max_length[100]');
		$this->load->library('myupload');
		$img = $this->myupload->do_upload(
	    	'./application/modules/circularprocess/assets/images/','picture'

	    );
		$this->form_validation->set_rules('can_id',display('can_id'));
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('comments',display('comments'));	
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
        $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
		$id = $this->generate->id();
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			

			$postData1= [
			'can_id' 	               => $id,
			'first_name' 	          => $this->input->post('first_name',true),
			'last_name' 	          => $this->input->post('last_name',true),
			'email' 	              => $this->input->post('email',true),
			'phone' 	              => $this->input->post('phone',true),
			'alter_phone' 	          => $this->input->post('alter_phone',true),
			'present_address' 	      => $this->input->post('present_address',true),
			'parmanent_address' 	  => $this->input->post('parmanent_address',true),
			'picture' 	              => $img,
			'ssn'                     => $this->input->post('ssn',true),
			'state'                   => $this->input->post('state',true),
			'city'                    => $this->input->post('city',true),
			'zip'                     => $this->input->post('zip_code',true),
			];   
			$this->db->insert('candidate_basic_info', $postData1);
		

			for ($i=0; $i < sizeof($unis); $i++) {
				$postData2= [
					'can_id' 	              =>$id,
					'university_name'         => $unis[$i],
					'degree_name' 	          => $degs[$i],
					'cgp' 	                  => $cgps[$i], 
					'comments' 	              => $this->input->post('comments',true),
					
				];  
				if(!empty($unis[$i])){   
				$this->Candidate_model->caneduinfo_create($postData2);
			}
		    }
			
			for ($i=0; $i < sizeof($comname); $i++) {
			$postData = [
			'can_id' 	                   => $id,
			'company_name'                 => $comname[$i],
			'working_period' 	           => $wperiod[$i],
			'duties' 	                   => $duties[$i], 
			'supervisor' 	               => $supe[$i], 
			
			];   
			
if(!empty($comname[$i])){
			 $this->Candidate_model->canworkexp_create($postData);
			}
		    }
			
				$this->session->set_flashdata('message', display('successfully_saved'));
			
			redirect("circularprocess/Candidate/caninfo_create");



		} else {
			$data['title'] = display('create_details');
			$data['module'] = "circularprocess";
			$data['dropdown_edu'] = $this->Candidate_model->eduinfo_dropdown();
			$data['page']   = "canInfo_form";
			$data['country_list']  =  array(

        "Afghanistan" =>"Afghanistan",
		"Albania" =>"Albania",
		"Algeria" =>"Algeria",
		"Andorra" =>"Andorra",
		"Angola" =>"Angola",
		"Antigua and Barbuda" =>"Antigua and Barbuda",
		"Argentina" =>"Argentina",
		"Armenia" =>"Armenia",
		"Australia" =>"Australia",
		"Austria" =>"Austria",
		"Azerbaijan" =>"Azerbaijan",
		"Bahamas" =>"Bahamas",
		"Bahrain" =>"Bahrain",
		"Bangladesh" =>"Bangladesh",
		"Barbados" =>"Barbados",
		"Belarus" =>"Belarus",
		"Belgium" =>"Belgium",
		"Belize" =>"Belize",
		"Benin" =>"Benin",
		"Bhutan" =>"Bhutan",
		"Bolivia" =>"Bolivia",
		"Bosnia and Herzegovina" =>"Bosnia and Herzegovina",
		"Botswana" =>"Botswana",
		"Brazil" =>"Brazil",
		"Brunei" =>"Brunei",
		"Bulgaria" =>"Bulgaria",
		"Burkina Faso" =>"Burkina Faso",
		"Burundi" =>"Burundi",
		"Cambodia" =>"Cambodia",
		"Cameroon" =>"Cameroon",
		"Canada" =>"Canada",
		"Cape Verde" =>"Cape Verde",
		"Central African Republic" =>"Central African Republic",
		"Chad" => "Chad",
		"Chile" =>"Chile",
		"China" =>"China",
		"Colombi" =>"Colombi",
		"Comoros" =>"Comoros",
		"Congo (Brazzaville)" =>"Congo (Brazzaville)",
		"Congo" =>"Congo",
		"Costa Rica" =>"Costa Rica",
		"Cote d'Ivoire" =>"Cote d'Ivoire",
		"Croatia" =>"Croatia",
		"Cuba" =>"Cuba",
		"Cyprus" =>"Cyprus",
		"Czech Republic" =>"Czech Republic",
		"Denmark" =>"Denmark",
		"Djibouti" =>"Djibouti",
		"Dominica" =>"Dominica",
		"Dominican Republic" =>"Dominican Republic",
		"East Timor (Timor Timur)" =>"East Timor (Timor Timur)",
		"Ecuador" =>"Ecuador",
		"Egypt" =>"Egypt",
		"El Salvador" =>"El Salvador",
		"Equatorial Guinea" =>"Equatorial Guinea",
		"Eritrea" =>"Eritrea",
		"Estonia" =>"Estonia",
		"Ethiopia" =>"Ethiopia",
		"Fiji" =>"Fiji",
		"Finland" =>"Finland",
		"France" =>"France",
		"Gabon" =>"Gabon",
		"Gambia, The" =>"Gambia, The",
		"Georgia" =>"Georgia",
		"Germany" =>"Germany",
		"Ghana" =>"Ghana",
		"Greece" =>"Greece",
		"Grenada" =>"Grenada",
		"Guatemala" =>"Guatemala",
		"Guinea" =>"Guinea",
		"Guinea-Bissau" =>"Guinea-Bissau",
		"Guyana" =>"Guyana",
		"Haiti" =>"Haiti",
		"Honduras" =>"Honduras",
		"Hungary" =>"Hungary",
		"Iceland" =>"Iceland",
		"India" =>"India",
		"Indonesia" =>"Indonesia",
		"Iran" =>"Iran",
		"Iraq" =>"Iraq",
		"Ireland" =>"Ireland",
		"Israel" =>"Israel",
		"Italy" =>"Italy",
		"Jamaica" =>"Jamaica",
		"Japan" =>"Japan",
		"Jordan" =>"Jordan",
		"Kazakhstan" =>"Kazakhstan",
		"Kenya" =>"Kenya",
		"Kiribati" =>"Kiribati",
		"Korea, North" =>"Korea, North",
		"Korea, South" =>"Korea, South",
		"Kuwait" =>"Kuwait",
		"Kyrgyzstan" =>"Kyrgyzstan",
		"Laos"=>"Laos",
		"Latvia" =>"Latvia",
		"Lebanon" =>"Lebanon",
		"Lesotho" =>"Lesotho",
		"Liberia" =>"Liberia",
		"Libya" =>"Libya",
		"Liechtenstein" =>"Liechtenstein",
		"Lithuania" =>"Lithuania",
		"Luxembourg" =>"Luxembourg",
		"Macedonia" =>"Macedonia",
		"Madagascar" =>"Madagascar",
		"Malawi" =>"Malawi",
		"Malaysia" =>"Malaysia",
		"Maldives" =>"Maldives",
		"Mali" =>"Mali",
		"Malta" =>"Malta",
		"Marshall Islands" =>"Marshall Islands",
		"Mauritania" =>"Mauritania",
		"Mauritius" =>"Mauritius",
		"Mexico" =>"Mexico",
		"Micronesia" =>"Micronesia",
		"Moldova" =>"Moldova",
		"Monaco" =>"Monaco",
		"Mongolia" =>"Mongolia",
		"Morocco" =>"Morocco",
		"Mozambique" =>"Mozambique",
		"Myanmar" =>"Myanmar",
		"Namibia" =>"Namibia",
		"Nauru" =>"Nauru",
		"Nepal" =>"Nepal",
		"Netherlands" =>"Netherlands",
		"New Zealand" =>"New Zealand",
		"Nicaragua" =>"Nicaragua",
		"Niger" =>"Niger",
		"Nigeria" =>"Nigeria",
		"Norway" =>"Norway",
		"Oman" =>"Oman",
		"Pakistan" =>"Pakistan",
		"Palau" =>"Palau",
		"Panama" =>"Panama",
		"Papua New Guinea" =>"Papua New Guinea",
		"Paraguay" =>"Paraguay",
		"Peru" =>"Peru",
		"Philippines" =>"Philippines",
		"Poland" =>"Poland",
		"Portugal" =>"Portugal",
		"Qatar" =>"Qatar",
		"Romania" =>"Romania",
		"Russia" =>"Russia",
		"Rwanda" =>"Rwanda",
		"Saint Kitts and Nevis" =>"Saint Kitts and Nevis",
		"Saint Lucia" =>"Saint Lucia",
		"Saint Vincent" =>"Saint Vincent",
		"Samoa" =>"Samoa",
		"San Marino" =>"San Marino",
		"Sao Tome and Principe" =>"Sao Tome and Principe",
		"Saudi Arabia" =>"Saudi Arabia",
		"Senegal" =>"Senegal",
		"Serbia and Montenegro" =>"Serbia and Montenegro",
		"Seychelles" =>"Seychelles",
		"Sierra Leone" =>"Sierra Leone",
		"Singapore" =>"Singapore",
		"Slovakia" =>"Slovakia",
		"Slovenia" =>"Slovenia",
		"Solomon Islands" =>"Solomon Islands",
		"Somalia" =>"Somalia",
		"South Africa" =>"South Africa",
		"Spain" =>"Spain",
		"Sri Lanka" =>"Sri Lanka",
		"Sudan" =>"Sudan",
		"Suriname" =>"Suriname",
		"Swaziland" =>"Swaziland",
		"Sweden" =>"Sweden",
		"Switzerland" =>"Switzerland",
		"Syria" =>"Syria",
		"Taiwan" =>"Taiwan",
		"Tajikistan" =>"Tajikistan",
		"Tanzania" =>"Tanzania",
		"Thailand" =>"Thailand",
		"Togo" =>"Togo",
		"Tonga" =>"Tonga",
		"Trinidad and Tobago" =>"Trinidad and Tobago",
		"Tunisia" =>"Tunisia",
		"Turkey" =>"Turkey",
		"Turkmenistan" =>"Turkmenistan",
		"Tuvalu" =>"Tuvalu",
		"Uganda" =>"Uganda",
		"Ukraine" =>"Ukraine",
		"United Arab Emirates" =>"United Arab Emirates",
		"United Kingdom" =>"United Kingdom",
		"United States" =>"United States",
		"Uruguay" =>"Uruguay",
		"Uzbekistan" =>"Uzbekistan",
		"Vanuatu" =>"Vanuatu",
		"Vatican City" =>"Vatican City",
		"Venezuela" =>"Venezuela",
		"Vietnam" =>"Vietnam",
		"Yemen" =>"Yemen",
		"Zambia" =>"Zambia",
		"Zimbabwe" =>"Zimbabwe"
		);
			echo Modules::run('template/layout', $data); 
			
		}   
	}
/*  ########################    details save  #######################################  */

	/* ############# For viewing details  #################### */
	public function candatails_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('view details');  ;
        $data['all_data'] = $this->Candidate_model->retrieve_all_data();
		$data['module']   = "circularprocess";
		$data['page']     = "can_details";   
		echo Modules::run('template/layout', $data); 
	} 

public function cv()
	{   
        $this->permission->module('circularprocess','read')->redirect();
   
		$data['title']    = display('view details');  
		 $id = $this->uri->segment(4);
        $data['cv'] = $this->Candidate_model->employee_details($id);
        $data['edu'] = $this->Candidate_model->eduInfo($id);
        $data['wrk'] = $this->Candidate_model->workingexp($id);
		$data['module']   = "circularprocess";
		$data['page']     = "cv";   
		echo Modules::run('template/layout', $data); 
	} 

	/* ############# For viewing details  #################### */


	public function delete_canInfo($id = null) 
	{ 
        $this->permission->module('circularprocess','delete')->redirect();

		if ($this->Candidate_model->delete_cinfo($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('circularprocess/Candidate/candidateinfo_view');
	}
	 
   public function update_canifo_form($id = null){
		
		$data['title'] = display('write_y_p_info');
		#-------------------------------#
		$this->form_validation->set_rules('can_id',null,'required|max_length[20]');
		$this->form_validation->set_rules('first_name',display('first_name'),'required|max_length[50]');
		$this->form_validation->set_rules('last_name',display('last_name')  ,'max_length[100]');
		$this->form_validation->set_rules('email',display('email')  ,'required|max_length[32]');
		$this->form_validation->set_rules('phone',display('phone')  ,'required|max_length[100]');
		$this->form_validation->set_rules('alter_phone',display('alter_phone')  ,'max_length[100]');
		$this->form_validation->set_rules('present_address',display('present_address')  ,'max_length[100]');
		$this->form_validation->set_rules('parmanent_address',display('parmanent_address')  ,'max_length[100]');
		$this->load->library('myupload');
		$img = $this->myupload->do_upload(
	    	'./application/modules/circularprocess/assets/images/','picture'

	    );
	
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('comments',display('comments'));	
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
        $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			
			$postData1= [
			'can_id' 	               =>$this->input->post('can_id',true),
			'first_name' 	          => $this->input->post('first_name',true),
			'last_name' 	          => $this->input->post('last_name',true),
			'email' 	              => $this->input->post('email',true),
			'phone' 	              => $this->input->post('phone',true),
			'alter_phone' 	          => $this->input->post('alter_phone',true),
			'present_address' 	      => $this->input->post('present_address',true),
			'parmanent_address' 	  => $this->input->post('parmanent_address',true),
			'picture' 	              =>(!empty($img) ? $img : $this->input->post('picture')),
			'ssn'                     => $this->input->post('ssn',true),
			'state'                   => $this->input->post('state',true),
			'city'                    => $this->input->post('city',true),
			'zip'                     => $this->input->post('zip_code',true),
			];                 
			$this->Candidate_model->update_canInfo($postData1);
		
$this->db->where('can_id',$this->input->post('can_id'))
 			->delete('candidate_education_info');
			for ($i=0; $i < sizeof($unis); $i++) {
				$postData2= [
					'can_id' 	              => $this->input->post('can_id'),
					'university_name'         => $unis[$i],
					'degree_name' 	          => $degs[$i],
					'cgp' 	                  => $cgps[$i], 
					'comments' 	              => $this->input->post('comments',true),
					
				];  
				if(!empty($unis[$i])){
			$this->db->insert('candidate_education_info', $postData2);
				}
		    }
			
			$this->db->where('can_id',$this->input->post('can_id'))
 			->delete('candidate_workexperience');

			for ($i=0; $i < sizeof($comname); $i++) {
			$postData = [
			'can_id' 	                   => $this->input->post('can_id',true),
			'company_name'                 => $comname[$i],
			'working_period' 	           => $wperiod[$i],
			'duties' 	                   => $duties[$i], 
			'supervisor' 	               => $supe[$i], 
			
			];   
			
				if(!empty($comname[$i])){
		 $this->db->insert('candidate_workexperience', $postData);
				}
		    }
			
				$this->session->set_flashdata('message', display('successfully_updated'));
			
		redirect("circularprocess/Candidate/candidateinfo_view");



		} else {
$id= $this->uri->segment(4);
$data['title'] = display('create_details');
$data['module'] = "circularprocess";
$data['basinfo']=$this->Candidate_model->canifo_updateForm($id);
$data['edinfo']=$this->Candidate_model->canEdu_updateForm($id);
$data['work']=$this->Candidate_model->work($id);
$data['edu'] = $this->Candidate_model->upcanedu($id);
$data['page']   = "update_canIfo";
$data['country_list']  =  array(

"Alabama" => "Alabama",

"Alaska"  => "Alaska",

"Arizona" => "Arizona",

"Arkansas"=> "Arkansas",

"California" => "California",

"Colorado" => "Colorado",

"Connecticut"=> "Connecticut",

"Delaware" => "Delaware",

"Florida"  => "Florida",

"Georgia"  => "Georgia",

"Hawaii"   => "Hawaii",

"Idaho"    => "Idaho",

"Illinois" => "Illinois",
 
"Indiana"  => "Indiana",

"Iowa"     => "Iowa",

"Kansas"   => "Kansas",

"Kentucky" => "Kentucky",

"Louisiana" =>"Louisiana",

"Maine"    => "Maine",

"Maryland" => "Maryland",

"Massachusetts" => "Massachusetts",

"Michigan" => "Michigan",

"Minnesota" => "Minnesota",

"Mississippi" =>"Mississippi",

"Missouri" => "Missouri",

"Montana" => "Montana",

"Nebraska" => "Nebraska",

"Nevada" => "Nevada",

"New Hampshire" => "New Hampshire",

"New Jersey" => "New Jersey",

"New Mexico" => "New Mexico",

"New York" => "New York",

"North Carolina" => "North Carolina",

"North Dakota" =>"North Dakota",

"Ohio" =>  "Ohio",

"Oklahoma" => "Oklahoma",

"Oregon" => "Oregon",

"Pennsylvania" => "Pennsylvania",

"Rhode Rhode" =>"Rhode Island",

"South Carolina" => "South Carolina",

"sDakota" => "sDakota",

"Tennessee" =>"Tennessee",

"Texas" => "Texas",

"Utah" => "Utah",

"Vermont" => "Vermont",

"Virginia" =>"Virginia",

"Washington" => "Washington",

"West Virginia" => "West Virginia",

"Wisconsin" => "Wisconsin",

"Wyoming" => "Wyoming"
		);
echo Modules::run('template/layout', $data); 
			
		}   
	}

/*##################### ---Advertisement part---####################*/  


public function candidate_edu_info_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('educationinfo_list');  ;
		$data['edu']      = $this->Candidate_model->viewEduinfo();
		$data['module']   = "circularprocess";
		$data['page']     = "canInfoview";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_can_eduinfo()
	{ 
		/***** file upload code start ***********/ 

		$data['title'] = display('educationinfo_list');

		#-------------------------------#
		$this->form_validation->set_rules('can_id',display('can_id'));
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('comments',display('comments')  ,'required');	
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
 
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$id = $this->input->post('can_id');

		    for ($i=0; $i < sizeof($unis); $i++) {
				$postData = [
					'can_id' 	              => $this->input->post('can_id'),
					'university_name'         => $unis[$i],
					'degree_name' 	          => $degs[$i],
					'cgp' 	                  => $cgps[$i], 
					'comments' 	              => $this->input->post('comments',true),
					
				];     
				$this->Candidate_model->caneduinfo_create($postData);
		    }

		    $this->session->set_flashdata('message', display('save_successfully'));
			redirect("circularprocess/Candidate/caninfo_create/$id/#tabs-3");



		} else {
			$data['title'] = display('create');
			$data['module'] = "circularprocess";
			$data['page']   = "can_edu_form"; 
			$data['dropdown_edu'] = $this->Candidate_model->eduinfo_dropdown();
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function delete_can_edu_Info($id = null) 
	{ 
        $this->permission->module('circularprocess','delete')->redirect();

		if ($this->Candidate_model->delete_canedu_info($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('circularprocess/Candidate/candidateinfo_view');
	}


public function update_can_eduifo_form($id = null){
 		$this->form_validation->set_rules('can_id',display('can_id'));
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('comments',display('comments')  ,'required');	
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

		$this->db->where('can_id',$this->input->post('can_id'))
 			->delete('candidate_education_info');
			  

		    for ($i=0; $i < sizeof($unis); $i++) {
				$postData = [
					'can_id' 	              => $this->input->post('can_id'),
					'university_name'         => $unis[$i],
					'degree_name' 	          => $degs[$i],
					'cgp' 	                  => $cgps[$i], 
					'comments' 	              => $this->input->post('comments',true),
					
				];     
				
			
	      $this->db->insert('candidate_education_info', $postData);
		    }
		    
				$this->session->set_flashdata('message', display('successfully_updated'));
			
		
			redirect("circularprocess/Candidate/candidateinfo_view/". $id);

		} else {
			$data['title'] = display('update');
			$id= $this->uri->segment(4);
		    $data['data']=$this->Candidate_model->canEdu_updateForm($id);
		    $data['edu'] = $this->Candidate_model->upcanedu($id);
		     $data['work']=$this->Candidate_model->work($id);
		     $data['query']= $this->Candidate_model->get_eduinf_dropdown($id);
			$data['module'] = "circularprocess";
			
			$data['page']   = "update_canedu_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}

/***** workexperience start ***********/


public function workexperience_view()
	{   
        $this->permission->module('circularprocess','read')->redirect();

		$data['title']    = display('educationinfo_list');  ;
		$data['exp'] = $this->Candidate_model->viewExperience();
		$data['module'] = "circularprocess";
		$data['page']   = "workexperienceView";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_workexperience()
	{ 

		$data['title'] = display('workexperience_list');

		#-------------------------------#
		$this->form_validation->set_rules('can_id',display('can_id'),'required');
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
        $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
	  
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {
 for ($i=0; $i < sizeof($comname); $i++) {
			$postData = [
			'can_id' 	                   => $this->input->post('can_id',true),
			'company_name'                 => $comname[$i],
			'working_period' 	           => $wperiod[$i],
			'duties' 	                   => $duties[$i], 
			'supervisor' 	               => $supe[$i], 
			
			];   
			

			 $this->Candidate_model->canworkexp_create($postData);
		    }

		    $this->session->set_flashdata('message', display('save_successfully'));
			redirect("circularprocess/Candidate/candidateinfo_view");



		}  else {
			$data['title'] = display('create');
			$data['module'] = "circularprocess";
			$data['page']   = "can_workexperience_form"; 
			$data['dropdown_edu'] = $this->Candidate_model->eduinfo_dropdown();
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function update_workexperience_form($id = null){
 		$this->form_validation->set_rules('can_id',display('can_id'),'required');
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
        $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
	  	
	   
		#-------------------------------#
		if ($this->form_validation->run() === true) {
		    	$this->db->where('can_id',$this->input->post('can_id'))
 			->delete('candidate_workexperience');
			  

		 for ($i=0; $i < sizeof($comname); $i++) {
			$postData = [
			'can_id' 	                   => $this->input->post('can_id',true),
			'company_name'                 => $comname[$i],
			'working_period' 	           => $wperiod[$i],
			'duties' 	                   => $duties[$i], 
			'supervisor' 	               => $supe[$i], 
			
			];   
			
		
		 $this->db->insert('candidate_workexperience', $postData);
		    }
		    
				$this->session->set_flashdata('message', display('successfully_updated'));
			
		
			redirect("circularprocess/Candidate/candidateinfo_view/". $id);

		} 
		
		else {
			$data['title'] = display('update');
		    $data['data']=$this->Candidate_model->workexperience_updateForm($id);
		   $id= $this->uri->segment(4);
		    $data['work']=$this->Candidate_model->work($id);
			$data['module'] = "circularprocess";
			
			$data['page']   = "update_workexperience_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}
	public function delete_workexperience($id = null) 
	{ 
        $this->permission->module('circularprocess','delete')->redirect();

		if ($this->Candidate_model->delete_workexp($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('circularprocess/Candidate/candidateinfo_view/#menu1');
	}


public function view_details(){
     $data=array();    
     $data['ab']=$this->Candidate_model->employee_details($id);
     //$data['ab']=$this->Candidate_model->Eduinfo($id);
     $this->load->view('cv',$data);
     


 }




}
