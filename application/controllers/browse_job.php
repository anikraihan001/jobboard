<?php
class Browse_job extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->model('jp_model');
$this->load->database();
}

public function index()
{
$data['joblist'] = $this->jp_model->get_all_jobs();

$this->load->view('browse_job',$data);
}

public function search_job()
{

$keyword=$this->input->post('kw');
$this->load->model('src_job_model');
if($keyword !="")
{
$data['joblist']=$this->src_job_model->src_keyword($keyword);
}

//$this->load->view("browse_job",$data);

if($this->input->post('location') != 'Location')
{
$data['joblist']=$this->src_job_model->src_location($this->input->post('location'));
}

/*if($this->input->post('experience') != 'Experience')
{
$data['joblist']=$this->src_job_model->src_type($this->input->post('type'));
}*/


$this->load->view("browse_job",$data);
}
}

?>