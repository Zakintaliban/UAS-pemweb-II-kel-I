<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KotaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KotaModel');
    }

    public function index() {
        $data['kota'] = $this->KotaModel->get_all_kota();
        $this->load->view('kota/index', $data);
    }

    public function create() {
        $this->load->view('kota/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->KotaModel->insert_kota($data);
        redirect('kota');
    }

    public function edit($id) {
        $data['kota'] = $this->KotaModel->get_kota($id);
        $this->load->view('kota/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->KotaModel->update_kota($id, $data);
        redirect('kota');
    }

    public function delete($id) {
        $this->KotaModel->delete_kota($id);
        redirect('kota');
    }
}
