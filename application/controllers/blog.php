<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$this->load->view('view_header');
		$this->load->view('index');
		$this->load->view('view_footer');
	}
	
	public function header()
    {
        $this->data['menu'] = array("HomePage"=>"Blog/index","Asia"=>"Blog/asia","Australia"=>"Blog/australia","Eropa"=>"Blog/eropa","Projects"=>"Blog/projects","About Me"=>"Blog/aboutme");
		$this->data['news'] = $this->db->get('posting');
	}
	
	public function asia()
	{
		$this->load->view('view_header');
		$this->load->view('view_asia');
		$this->load->view('view_footer');
	}
	
	public function australia()
	{
		$this->load->view('view_header');
		$this->load->view('view_australia');
		$this->load->view('view_footer');
	}
	
	public function eropa()
	{
		$this->load->view('view_header');
		$this->load->view('view_eropa');
		$this->load->view('view_footer');
	}
	
	public function projects()
	{
		$this->load->view('view_header');
		$this->load->view('view_projects');
		$this->load->view('view_footer');
	}
	
	public function aboutme()
	{
		$this->load->view('view_header');
		$this->load->view('view_aboutme');
		$this->load->view('view_footer');
	}
}