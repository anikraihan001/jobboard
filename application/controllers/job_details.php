<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Job_details extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->model('jd_model');
$this->load->database();
$this->load->helper(array('form','url'));
}

public function index()
{

$this->load->view("job_details");
}

public function employee_form()
{
	$save = array(
		'name'      => $this->input->post('name'),
		'gender'    => $this->input->post('gender'),
		'email'     => $this->input->post('email'),
		'phone'     => $this->input->post('phone')
		//'address'    => $this->input->post('address')

	);
	$this->jd_model->submitdata($save);
	redirect('job_details/index');
}
}
?>