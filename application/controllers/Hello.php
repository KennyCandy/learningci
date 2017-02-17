<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}
	public function index($message = '')
	{
		$this->load->database();
		echo '123'.$message;
	}

	public function load_login()
	{
		$data = array(
			'title' => 'Đây là trang login',
			'message' => 'Nhập Thông Tin Đăng Nhập'
		);

//		$this->load->view('login_view', $data);


	}

}