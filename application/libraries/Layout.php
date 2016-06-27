<?php
class Layout{
	private $ci = null;
	public $activeLayout = 'default';
	public $controllerName = null;

	public function __construct($params){
		$this->ci =& get_instance();
		$this->ci->load->helper(array('url'));
		$this->activeLayout = (array_key_exists('activeLayout', $params) ? $params['activeLayout'] : $this->activeLayout);
        $this->controllerName = (array_key_exists('controllerName', $params) ? strtolower($params['controllerName']) : null);
	}

	public function getHeader($data = array()){
		$data['loggedin'] = ($this->ci->uri->segment(1) == "dashboard" ? true : false);
		$this->ci->load->view('layout/header', $data);
	}

	public function getFooter(){
		$this->ci->load->view('layout/footer');
	}

	public function render($page = null, $data = null, $returnData = false){
		$view['content'] = $this->ci->load->view(($this->controllerName == null ? '' : $this->controllerName.'/').$page, $data, true);
		$view['segment'] = $this->ci->uri->segment(2);
		$this->getHeader();
		$this->ci->load->view('layout/'.$this->activeLayout, $view);
		$this->getFooter();
	}
}
?>