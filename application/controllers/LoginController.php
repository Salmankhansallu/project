<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('index');
	}

    public function user_login(){ 
        $this->load->view('dashboard');
        
          
    }
}