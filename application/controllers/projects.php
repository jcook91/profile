<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class projects extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$title = array('title'=>'This is my home page!','base_url'=>$this->config->base_url());
		$this->load->view('head',$title);
		$this->load->view('projects');
	}
	public function project_1()
	{
		$title = array('title'=>'Project Page 1!','base_url'=>$this->config->base_url());
		$this->load->view('head',$title);	
		$this->load->view('projects');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */