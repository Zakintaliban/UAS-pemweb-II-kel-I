<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramStudi extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('AuthModel');
		if(!$this->AuthModel->current_user()){
			redirect('auth/login');
		}
        $this->load->model('ProgramStudiModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('programstudi/index', $data);
    }

    public function show($id) {
        $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($id);
        $this->load->view('programstudi/show', $data);
    }

    public function create() {
        $this->load->view('programstudi/new');
    }

    public function store() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('program_pendidikan', 'Program Pendidikan', 'required');
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required');
        $this->form_validation->set_rules('sk_akreditasi', 'SK Akreditasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('programstudi/new');
        } else {
            $data = $this->input->post();
            $this->ProgramStudiModel->insert_program_studi($data);
            redirect('programstudi');
        }
    }

    public function edit($id) {
        $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($id);
        $this->load->view('programstudi/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('program_pendidikan', 'Program Pendidikan', 'required');
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required');
        $this->form_validation->set_rules('sk_akreditasi', 'SK Akreditasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($id);
            $this->load->view('programstudi/edit', $data);
        } else {
            $data = $this->input->post();
            $this->ProgramStudiModel->update_program_studi($id, $data);
            redirect('programstudi');
        }
    }

    public function delete($id) {
        $response = array();
        if($this->ProgramStudiModel->delete_program_studi($id)) {
            $response['success'] = true;
            $response['message'] = 'Data successfully deleted.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while deleting the data.';
        }
        echo json_encode($response);
    }
}
