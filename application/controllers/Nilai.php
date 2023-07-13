<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NilaiModel');
        $this->load->model('TarunaModel');
        $this->load->model('MatakuliahModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['nilai'] = $this->NilaiModel->get_all_nilai();
        $this->load->view('nilai/index', $data);
    }

    public function show($id) {
        $data['nilai'] = $this->NilaiModel->get_nilai($id);
        $this->load->view('nilai/show', $data);
    }

    public function create() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
        $this->load->view('nilai/new', $data);
    }

    public function store() {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('nilai_angka', 'Nilai Angka', 'required|numeric');
        $this->form_validation->set_rules('nilai_huruf', 'Nilai Huruf', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
            $this->load->view('nilai/new', $data);
        } else {
            $data = $this->input->post();
            $this->NilaiModel->insert_nilai($data);
            redirect('nilai');
        }
    }

    public function edit($id) {
        $data['nilai'] = $this->NilaiModel->get_nilai($id);
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
        $this->load->view('nilai/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('nilai_angka', 'Nilai Angka', 'required|numeric');
        $this->form_validation->set_rules('nilai_huruf', 'Nilai Huruf', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['nilai'] = $this->NilaiModel->get_nilai($id);
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
            $this->load->view('nilai/edit', $data);
        } else {
            $data = $this->input->post();
            $this->NilaiModel->update_nilai($id, $data);
            redirect('nilai');
        }
    }

    public function delete($id) {
        $this->NilaiModel->delete_nilai($id);
        redirect('nilai');
    }
}
