
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Pj_model extends CI_model{
	public function submitdata($data)
	{
	{
		$this->db->insert('job',$data);
		$id=$this->db->insert_id();
	}
	return $id;
}


/*public function get_all_jobs()
{
return $this->db->get('job');
}
public function get_job_details($id)
{
$this->db->where('id', $id);
return $this->db->get('job');
}*/

}
?>