<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		$this->load->library('email');
		$this->load->helper('form');		
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '*Required Field');
		$this->form_validation->set_message('valid_email', '*Invalid Email');
		$this->form_validation->set_rules('name', 'Your Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sender_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		
		$descr_home = 'Techno-Excel provides inspection, testing and calibration of tanks, flow meters, truck tankers and other oil and gas engineering services';
		$descr_flowmeters = 'Our procedure for flow meter calibration meets the requirements of the API Manual of Petroleum Measurement Standards Chapter 12 Section 2';
		$descr_storagetanks = 'Our techniques for Storage Tanks calibration are prepared to meet the requirements of API MPMS Chapter 2.2A -Measurement and Calibration of Upright Cylindrical Tanks by the Manual Tank Strapping Method';
		$descr_instrumentations = 'We engage in calibration of instruments: Pressure Gauges, Thermometers, Thermocouples, Conductivity Meters, Hydrometers, etc';
		$descr_trucktankers = 'One of our specialities is truck tanker calibration which meets the requirements of API Standard 2555 (R2009) -Method for Liquid Calibration of Tanks';
		$descr_refineries = 'We engage in Major Inspection of Oil Refineries as Third Party Inspectors';
		$descr_gasplants = 'We engage in inspection of Gas Plants for Domestic and Industrial Users';
		$descr_oilinstallations = 'We engage in supervision and construction management of new and old steel plants from single oil tank installation';
		$descr_ultrasonics = 'We engage in the application of destructive and non-destructive testing: ultrasonics';
		$descr_gammaray = 'We engage in the application of destructive and non-destructive testing: gamma and x-ray';
		$descr_pressuretesting = 'We engage in the application of destructive and non-destructive testing: pressure testing';
		$descr_vacuumbox = 'We engage in the application of destructive and non-destructive testing: vacuum box testing';
		$descr_sandblasting = 'We engage in corrosion protection and control: sandblasting and painting';
		$descr_cathodic = 'We engage in corrosion protection and control: cathodic protection';
		
		$id = 1;
		$nav = 'nav_home';
		$others = 'home_header';
		$descr = $descr_home;
		
		if($page == 'services'){
			$id = 2;
			$nav = 'nav_services';
			$others = 'other_header';
			$descr = $descr_home;
		}elseif($page == 'clients'){
			$id = 18;
			$nav = 'nav_clients';
			$others = 'other_header';
			$descr = $descr_home;
		}elseif($page == 'contactus'){
			$id = 18;
			$others = 'home_header';
			$nav = 'nav_contactus';
			$descr = $descr_home;
			if ($this->form_validation->run() == FALSE)
			{
			$page = 'contactus';
			}
			else
			{			
			$this->email->to('techno-excel@hotmail.com');
			$this->email->from($this->input->post('sender_email'), $this->input->post('name'));
			$this->email->message($this->input->post('message'));
			$this->email->subject($this->input->post('subject'));
			$this->email->send();			
			$page = 'contact_success';
			}
			
		}elseif($page == 'flow_meters'){
			$id = 3;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_flowmeters;		
		}elseif($page == 'storage_tanks'){
			$id = 4;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_storagetanks;
		}elseif($page == 'instrumentations'){
			$id = 5;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_instrumentations;
		}elseif($page == 'truck_tankers'){
			$id = 7;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_trucktankers;
		}elseif($page == 'refineries'){
			$id = 6;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_refineries;
		}elseif($page == 'gas_plants'){
			$id = 8;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_gasplants;
		}elseif($page == 'oil_installations'){
			$id = 9;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_oilinstallations;
		}elseif($page == 'ultrasonics'){
			$id = 10;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_ultrasonics;
		}elseif($page == 'gammaray'){
			$id = 11;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_gammaray;
		}elseif($page == 'pressure_testing'){
			$id = 12;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_pressuretesting;
		}elseif($page == 'vacuumbox_testing'){
			$id = 13;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_vacuumbox;
		}elseif($page == 'sandblasting_painting'){
			$id = 14;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_sandblasting;
		}elseif($page == 'cathodic_protection'){
			$id = 15;
			$nav = 'nav_pages';
			$others = 'pages_header';
			$descr = $descr_cathodic;
		}
		
		$meta = array(
				array('name' => 'description', 'content' => $descr),
				array('name' => 'keywords', 'content' => 'Techno-Excel, inspection services, test, integrity, calibration, engineering, oil and gas, storage tanks'),
				 );		
		
		$this->load->helper('html');
		$this->load->model('comment_model');		
		$data['page_comment'] = $this->comment_model->get_comment($id);
		$data['sidebar_comment'] = $this->comment_model->get_sidebar();
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['meta'] = meta($meta);
		if($page == 'home'){
			$this->load->view('templates/'. $others, $data);
			$this->load->view('navigation/'. $nav);
			$this->load->view('pages/' . $page, $data);
			$this->load->view('templates/footer_home');
		}else{
			$this->load->view('templates/'. $others, $data);
			$this->load->view('navigation/'. $nav);
			$this->load->view('templates/sidebar.php');
			$this->load->view('pages/' . $page, $data);
			$this->load->view('templates/footer_others');
		}
		
		
		
	}
	
		
}