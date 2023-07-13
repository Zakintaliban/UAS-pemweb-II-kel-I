<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranskripNilaiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TranskripNilaiModel');
    }

    public function index() {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_all_transkrip_nilai();
        $this->load->view('transkrip_nilai/index', $data);
    }

    public function create() {
        $this->load->view('transkrip_nilai/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->TranskripNilaiModel->insert_transkrip_nilai($data);
        redirect('transkrip_nilai');
    }

    public function edit($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
        $this->load->view('transkrip_nilai/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->TranskripNilaiModel->update_transkrip_nilai($id, $data);
        redirect('transkrip_nilai');
    }

    public function delete($id) {
        $this->TranskripNilaiModel->delete_transkrip_nilai($id);
        redirect('transkrip_nilai');
    }
}
