<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		if(!$this->session->userdata('attempt')){
			$this->session->set_userdata('attempt', 1);
		}else{
			$this->session->set_userdata('attempt', $this->session->userdata('attempt')+1);
		}

		$length = 14;

		$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

		$this->session->set_userdata('random', $randomString);

		$this->load->view('index');
		// redirect('/');
	}	
}

//end of main controller