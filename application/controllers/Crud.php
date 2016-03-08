<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('team_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{

		$data['team']=$this->team_model->get_team();

		$this->load->view('crud/view',$data);
	}

	public function create(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('skill','Skill','required');
		$this->form_validation->set_rules('expe','Experience','required');

		if($this->form_validation->run()===FALSE){
			$this->load->view('crud/create');
		}
		else{
			$this->team_model->set_team();
			redirect('crud');
		}
	}

	public function update($id){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('skill','Skill','required');
		$this->form_validation->set_rules('expe','Experience','required');

		if($this->form_validation->run()===FALSE){
			$data['team_view'] = $this->team_model->get_team_id($id);
			$this->load->view('crud/update',$data);
		}
		else{
			$this->team_model->update_team($id);
			redirect('crud');
		}
	}

	public function delete($id){
		$this->team_model->delete_team($id);
		redirect('crud');
	}
}