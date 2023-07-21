<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KotaModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['kota'] = $this->KotaModel->get_all_kota();
        $this->load->view('kota/index', $data);
    }

    public function show($id) {
        $data['kota'] = $this->KotaModel->get_kota($id);
        $this->load->view('kota/show', $data);
    }

    public function create() {
        $this->load->view('kota/new');
    }

    public function store() {
        $this->form_validation->set_rules('kode_kota', 'Kode Kota', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kota/new');
        } else {
            $data = $this->input->post();
            $this->KotaModel->insert_kota($data);
            redirect('kota');
        }
    }

    public function edit($id) {
        $data['kota'] = $this->KotaModel->get_kota($id);
        $this->load->view('kota/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('kode_kota', 'Kode Kota', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['kota'] = $this->KotaModel->get_kota($id);
            $this->load->view('kota/edit', $data);
        } else {
            $data = $this->input->post();
            $this->KotaModel->update_kota($id, $data);
            redirect('kota');
        }
    }

    public function delete($id) {
        $response = array();
        if($this->KotaModel->delete_ijazah($id)) {
            $response['success'] = true;
            $response['message'] = 'Data successfully deleted.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while deleting the data.';
        }
        echo json_encode($response);
    }
}
