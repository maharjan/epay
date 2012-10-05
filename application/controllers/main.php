<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Main extends CI_Controller {
	var $options = array();

	function __construct() {
		parent::__construct();

		$this -> options['variables'] = array('' => '-- Select --', '1' => 'New Api | (localhost:8081/epay/service)', '2' => 'New Api | (localhost:8081/epay/verify) : Verification ', '3' => 'New Api | (esewaincubator.f1soft.com.np/epay/service)', 
		'4' => 'New Api | (esewaincubator.f1soft.com.np/epay/verify) : Verification ', '5' => 'Old Api | (localhost:8081/epay/main)', '6' => 'Old Api | (localhost:8081/epay/transrec) : Verification', '7' => 'Old Api | (esewaincubator.f1soft.com.np/epay/main)', '8' => 'Old Api | (esewaincubator.f1soft.com.np/epay/transrec) : Verification ');

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
			$this -> load -> helper('date');

			$compartor = array('1' => 'http://localhost:8081/epay/service', '2' => 'http://localhost:8081/epay/verify', '3' => 'http://esewaincubator.f1soft.com.np/epay/service', '4' => 'http://esewaincubator.f1soft.com.np/epay/verify', '5' => 'http://localhost:8081/epay/main', '6' => 'http://localhost:8081/epay/transrec', '7' => 'http://esewaincubator.f1soft.com.np/epay/main', '8' => 'http://esewaincubator.f1soft.com.np/epay/transrec');

			$data = $this -> input -> post('urls');

			$this -> load -> helper('array');

			$form_data['form_action'] = element($data, $compartor);
			$form_data['curr_date'] = date('Y-m-d H:i:s');
			
			if ($data == 1 || $data == 3) {
				$this -> new_api($form_data);
			} else if ($data == 2 || $data == 4) {
				$this -> new_verification_api($form_data);
			} else if ($data == 5 || $data == 7) {
				$this -> old_api($form_data);
			} else if ($data == 6 || $data == 8) {
				$this -> old_verification_api($form_data);
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

	function old_api($form_data) {
		$this -> load -> view('pages/old_api_view.php', $form_data);
	}

	function old_verification_api($form_data) {
		$this -> load -> view('pages/old_validation_view.php', $form_data);
	}

	function new_api($form_data) {
		$this -> load -> view('pages/new_api_view.php', $form_data);
	}

	function new_verification_api($form_data) {
		$this -> load -> view('pages/new_validation_view.php', $form_data);
	}

}
