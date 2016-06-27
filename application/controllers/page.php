<?php
class Page extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('Layout', array('controllerName' => 'page'));
	}

	public function index(){
		$this->layout->render('main');
	}

	public function register(){
		$this->layout->render('register');
	}
}
?>