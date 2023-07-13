<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatakuliahController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MatakuliahModel');
    }

    public function index() {
        $data['matakuliah'] = $this->MatakuliahModel->get_all_matakuliah();
        $this->load->view('matakuliah/index', $data);
    }

    public function create() {
        $this->load->view('matakuliah/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->MatakuliahModel->insert_matakuliah($data);
        redirect('matakuliah');
    }

    public function edit($id) {
        $data['matakuliah'] = $this->MatakuliahModel->get_matakuliah($id);
        $this->load->view('matakuliah/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->MatakuliahModel->update_matakuliah($id, $data);
        redirect('matakuliah');
    }

    public function delete($id) {
        $this->MatakuliahModel->delete_matakuliah($id);
        redirect('matakuliah');
    }
}
