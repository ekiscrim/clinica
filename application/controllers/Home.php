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

		$this->load->view('home');
	}
}
