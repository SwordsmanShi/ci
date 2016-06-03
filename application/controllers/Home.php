<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
	public function test(){
		echo 'aa';
	}
	public function index(){
		$this->load->helper('url');
		redirect('welcome/shina');
		//echo site_url().'<br>';
		//echo base_url();
		//echo 22;
	}
}