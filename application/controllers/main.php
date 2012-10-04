<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {
	var $options=array();
	
	function __construct(){
		parent::__construct();
		
		$this->options['variables']= array(
			''=>'-- Select --',
			'http://localhost:8081/epay/service'=>'Localhost New Api | (localhost:8081/epay/service)',
			'http://localhost:8081/epay/verify'=>'Localhost New Api : Verification | (localhost:8081/epay/verify)',
			'http://esewaincubator.f1soft.com.np/epay/service'=> 'Incubator New Api | (esewaincubator.f1soft.com.np/epay/service)',
			'http://esewaincubator.f1soft.com.np/epay/verify'=>'Incubator New Api : Verification | (esewaincubator.f1soft.com.np/epay/verify)',
		
			'http://localhost:8081/epay/main'=>'Localhost Old Api | (localhost:8081/epay/main)',
			'http://localhost:8081/epay/transrec'=>'Localhost Old Api : Verification | (localhost:8081/epay/transrec)',
			'http://esewaincubator.f1soft.com.np/epay/main'=>'Incubator Old Api | (esewaincubator.f1soft.com.np/epay/main)',
			'http://esewaincubator.f1soft.com.np/epay/transrec'=>'Incubator New Api : Verification | (esewaincubator.f1soft.com.np/epay/transrec)');
			
			$this->load->vars($this->options);
	}
	
	function index(){
		$this->load->view('pages/epay_service_list_view.php',$this->options);
	}
	
	function redirect(){
		$this->form_validation->set_rules('urls','URL','trim|callback_cust_req|xss_clean');
		if($this->form_validation->run()==FALSE){
			$this->index();	
		}else{
			$data= $this->input->post('urls');
		}
	}
	
	function cust_req($str){
		if($str==''){
			$this->form_validation->set_message('cust_req', 'Please select one option');
			return FALSE;
		}
		return TRUE;
	}
	
	function old_api(){
		$this->load->view('pages/new_api_view.php');
	}
	
	function new_api(){
		$this->load->view('pages/new_api_view.php');
	}
}
