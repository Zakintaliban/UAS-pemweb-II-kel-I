<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramStudiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProgramStudiModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('program_studi/index', $data);
    }

    public function create() {
        $this->load->view('program_studi/new');
    }

    public function store() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('program_pendidikan', 'Program Pendidikan', 'required');
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required');
        $this->form_validation->set_rules('sk_akreditasi', 'SK Akreditasi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('program_studi/new');
        } else {
            $data = $this->input->post();
            $this->ProgramStudiModel->insert_program_studi($data);
            redirect('program_studi');
        }
    }

    public function edit($id) {
        $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($id);
        $this->load->view('program_studi/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('program_pendidikan', 'Program Pendidikan', 'required');
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required');
        $this->form_validation->set_rules('sk_akreditasi', 'SK Akreditasi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($id);
            $this->load->view('program_studi/edit', $data);
        } else {
            $data = $this->input->post();
            $this->ProgramStudiModel->update_program_studi($id, $data);
            redirect('program_studi');
        }
    }

    public function delete($id) {
        $this->ProgramStudiModel->delete_program_studi($id);
        redirect('program_studi');
    }
}
