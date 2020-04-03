<?php
class Post_job extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->model('pj_model');
$this->load->database();
$this->load->helper(array('form','url'));
}

public function index()
{
//$data['joblist'] = $this->jp_model->get_all_jobs();
$this->load->view("post_job");
}


public function submit_form()
{
	$save = array(
		'category'      => $this->input->post('category'),
		'post'    => $this->input->post('post'),
		'type'     => $this->input->post('type'),
		'total_post'     => $this->input->post('total_post'),
		'job_detail'    => $this->input->post('job_detail'),
		'salary'     => $this->input->post('salary'),
		'deadline'     => $this->input->post('deadline'),
		'company_name'     => $this->input->post('company_name'),
		'company_addr'    => $this->input->post('company_addr'),
		'company_email'     => $this->input->post('company_email'),
		'company_url'     => $this->input->post('company_url'),
		'company_phone'     => $this->input->post('company_phone')

	);
	$this->pj_model->submitdata($save);
	redirect('post_job/index');
}

}


?>