<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct();		

	}

	public function index()
	{
		$this->layout_library
        ->setTitle('APP-Estarpcl')
        ->view('welcome_message');
		
		//$this->load->view('welcome_message');
	}
}
