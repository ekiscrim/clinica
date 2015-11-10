<?php
defined('BASEPATH') OR exit('No tienes acceso directo');

class Somos extends CI_Controller {
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
        $this->load->view('template/header.php');
        $this->load->view('template/menu.php');
        $this->load->view('somos');
        $this->load->view('template/footer.php');

    }
}
