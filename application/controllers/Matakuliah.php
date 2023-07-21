<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MatakuliahModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
        $this->load->view('matakuliah/index', $data);
    }

    public function show($id) {
        $data['matakuliah'] = $this->MatakuliahModel->get_matakuliah($id);
        $this->load->view('matakuliah/show', $data);
    }

    public function create() {
        $this->load->view('matakuliah/new');
    }

    public function store() {
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
        $this->form_validation->set_rules('nilai_angka', 'Nilai Angka', 'required|numeric');
        $this->form_validation->set_rules('nilai_huruf', 'Nilai Huruf', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('matakuliah/new');
        } else {
            $data = $this->input->post();
            $this->MatakuliahModel->insert_matakuliah($data);
            redirect('matakuliah');
        }
    }

    public function edit($id) {
        $data['matakuliah'] = $this->MatakuliahModel->get_matakuliah($id);
        $this->load->view('matakuliah/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
        $this->form_validation->set_rules('nilai_angka', 'Nilai Angka', 'required|numeric');
        $this->form_validation->set_rules('nilai_huruf', 'Nilai Huruf', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['matakuliah'] = $this->MatakuliahModel->get_matakuliah($id);
            $this->load->view('matakuliah/edit', $data);
        } else {
            $data = $this->input->post();
            $this->MatakuliahModel->update_matakuliah($id, $data);
            redirect('matakuliah');
        }
    }

    public function delete($id) {
        $response = array();
        if($this->MatakuliahModel->delete_ijazah($id)) {
            $response['success'] = true;
            $response['message'] = 'Data successfully deleted.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while deleting the data.';
        }
        echo json_encode($response);
    }
}
