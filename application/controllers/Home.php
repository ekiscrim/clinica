<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//este helper me facilita usar funciones como por ejemplo base_url()
		$this->load->helper('url');
	}
	/**
	 * Index Page
	 */
	public function index()
	{
		$data['saludo'] = "hola mundo";
		$this->load->view('template/header.php');
		$this->load->view('template/menu.php');
		$this->load->view('home',$data);
		$this->load->view('template/footer.php');
		
	}
}
