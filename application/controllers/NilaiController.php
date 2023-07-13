<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NilaiModel');
    }

    public function index() {
        $data['nilai'] = $this->NilaiModel->get_all_nilai();
        $this->load->view('nilai/index', $data);
    }

    public function create() {
        $this->load->view('nilai/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->NilaiModel->insert_nilai($data);
        redirect('nilai');
    }

    public function edit($id) {
        $data['nilai'] = $this->NilaiModel->get_nilai($id);
        $this->load->view('nilai/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->NilaiModel->update_nilai($id, $data);
        redirect('nilai');
    }

    public function delete($id) {
        $this->NilaiModel->delete_nilai($id);
        redirect('nilai');
    }
}
