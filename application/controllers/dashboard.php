<?php
class Dashboard extends CI_Controller{
	private $controllerName = 'Dashboard';
	public function __construct(){
		parent::__construct();
		$this->load->library('Layout', array('activeLayout' => 'dashboard', 'controllerName' => strtolower($this->controllerName)));
		$this->load->helper(array('url'));
	}

	public function index(){
		$this->layout->render('dashboard');
	}

	public function pengendara(){
		$this->layout->render('pengendara');
	}

	public function kendaraan($action = null){
		if($action == "tambah")
			$page = 'form';
		else
			$page = 'main';
		$this->layout->render('kendaraan/'.$page);
	}

	public function catatan(){
		$this->layout->render('catatan');
	}

	public function lapor(){
		$this->layout->render('lapor');
	}
}
?>