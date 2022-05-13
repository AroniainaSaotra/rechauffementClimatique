<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}		
	public function index2()
	{
		$this->load->view('welcome_message2');
		
	}		
	public function index3($texte,$texte2)
	{
		//$this->load->view('welcome_message2');
		echo $texte." ".$_GET['id']." ".$texte2;
		
	}	
	public function index4($texte,$texte2)
	{
		$data=array();
		$data["v1"]=$texte;
		$data["v2"]=$texte2;
		$this->load->view('welcome_message4',$data);
		
	}	
	public function index5($texte)
	{
		$data=array();
		$data["vue"]=$texte;
		$this->load->view('template',$data);
		
	}			
}
