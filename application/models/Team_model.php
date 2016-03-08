<?php  

class Team_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function get_team(){
		$query=$this->db->get('team');
		return $query->result_array();
	}

	public function get_team_id($id){
		$query=$this->db->get_where('team',array('id' => $id));
		return $query->row_array();
	}

	public function set_team(){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'skill'=>$this->input->post('skill'),
			'experience'=>$this->input->post('expe')
		);
		return $this->db->insert('team',$data);
	}

	public function update_team($id){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'skill'=>$this->input->post('skill'),
			'experience'=>$this->input->post('expe')
		);

		$this->db->where('id',$id);

		return $this->db->update('team',$data);
	}

	public function delete_team($id){
		return $this->db->delete('team',array('id' =>$id));
	}
}


?>