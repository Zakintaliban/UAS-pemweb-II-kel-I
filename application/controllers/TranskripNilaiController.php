<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranskripNilaiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TranskripNilaiModel');
        $this->load->model('TarunaModel');
        $this->load->model('IjazahModel');
        $this->load->model('ProgramStudiModel');
        $this->load->library('form_validation');
    }

    public function print($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
        $this->load->view('transkrip_nilai/print', $data);
    }

    public function index() {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_all_transkrip_nilai();
        $this->load->view('transkrip_nilai/index', $data);
    }

    public function create() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('transkrip_nilai/new', $data);
    }

    public function store() {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('ijazah', 'Ijazah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $this->load->view('transkrip_nilai/new', $data);
        } else {
            $data = $this->input->post();
            $this->TranskripNilaiModel->insert_transkrip_nilai($data);
            redirect('transkrip_nilai');
        }
    }

    public function edit($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('transkrip_nilai/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('ijazah', 'Ijazah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $this->load->view('transkrip_nilai/edit', $data);
        } else {
            $data = $this->input->post();
            $this->TranskripNilaiModel->update_transkrip_nilai($id, $data);
            redirect('transkrip_nilai');
        }
    }

    public function delete($id) {
        $this->TranskripNilaiModel->delete_transkrip_nilai($id);
        redirect('transkrip_nilai');
    }
}
