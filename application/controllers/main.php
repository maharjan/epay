<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Main extends CI_Controller {
	var $options = array();

	function __construct() {
		parent::__construct();
	
		$this -> options['variables'] = array('' => '-- Select --', '1' => 'New Api | (localhost:8081/epay/service)', '2' => 'New Api | (localhost:8081/epay/verify) : Verification ', '3' => 'New Api | (esewaincubator.f1soft.com.np/epay/service)', '4' => 'New Api | (esewaincubator.f1soft.com.np/epay/verify) : Verification ', '5' => 'Old Api | (localhost:8081/epay/main)', '6' => 'Old Api | (localhost:8081/epay/transrec) : Verification', '7' => 'Old Api | (esewaincubator.f1soft.com.np/epay/main)', '8' => 'Old Api | (esewaincubator.f1soft.com.np/epay/transrec) : Verification ');

		$this -> load -> vars($this -> options);
	}

	function index() {
		$this -> load -> view('pages/epay_service_list_view.php', $this -> options);
	}

	function redirect() {
		$this -> form_validation -> set_rules('urls', 'URL', 'trim|callback_cust_req|xss_clean');
		if ($this -> form_validation -> run() == FALSE) {
			$this -> index();
		} else {
			$compartor = array('1' => 'http://localhost:8081/epay/service', '2' => 'http://localhost:8081/epay/verify', '3' => 'http://esewaincubator.f1soft.com.np/epay/service', '4' => 'http://esewaincubator.f1soft.com.np/epay/verify', '5' => 'http://localhost:8081/epay/main', '6' => 'http://localhost:8081/epay/transrec', '7' => 'http://esewaincubator.f1soft.com.np/epay/main', '8' => 'http://esewaincubator.f1soft.com.np/epay/transrec');

			$data = $this -> input -> post('urls');
			
			$this->load->helper('array');
			
			$url_link = element($data, $compartor);
			if ($data <= 4) {
				$this -> new_api($url_link);
			} else if ($data >= 5) {
				$this -> old_api($url_link);
			}
		}
	}

	function cust_req($str) {
		if ($str == '') {
			$this -> form_validation -> set_message('cust_req', 'Please select one option');
			return FALSE;
		}
		return TRUE;
	}

	function old_api($url_link) {
		$redirect_url['form_action']=$url_link;
		$this -> load -> view('pages/new_api_view.php', $redirect_url);
	}

	function new_api($url_link) {
		$redirect_url['form_action']=$url_link;
		$this -> load -> view('pages/new_api_view.php', $redirect_url);
	}

}
