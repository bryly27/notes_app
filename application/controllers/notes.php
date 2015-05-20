<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Note');
	}

	public function index()
	{
		$array['notes'] = $this->Note->get_notes();
		$this->load->view('notes', $array);
	}

	public function get()
	{
		$array['notes'] = $this->Note->get_notes();
		$this->load->view('partial_index', $array);
	}

	public function create()
	{
		if(empty($this->input->post('title')))
		{
			$array['notes'] = $this->Note->get_notes();
			$this->load->view('partial_index', $array);
		}
		else
		{
			$this->Note->create($this->input->post());
			$array['notes'] = $this->Note->get_notes();
			$this->load->view('partial_index', $array);
		}	
	}

	public function update()
	{
		$this->Note->update($this->input->post());
		$array['notes'] = $this->Note->get_notes();
		$this->load->view('partial_index', $array);
	}

	public function delete($id)
	{
		$this->Note->delete($id);
		$array['notes'] = $this->Note->get_notes();
		$this->load->view('partial_index', $array);
	}


}