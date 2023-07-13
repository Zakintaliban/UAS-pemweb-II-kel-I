<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PejabatController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PejabatModel');
    }

    public function index() {
        $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
        $this->load->view('pejabat/index', $data);
    }

    public function create() {
        $this->load->view('pejabat/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->PejabatModel->insert_pejabat($data);
        redirect('pejabat');
    }

    public function edit($id) {
        $data['pejabat'] = $this->PejabatModel->get_pejabat($id);
        $this->load->view('pejabat/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->PejabatModel->update_pejabat($id, $data);
        redirect('pejabat');
    }

    public function delete($id) {
        $this->PejabatModel->delete_pejabat($id);
        redirect('pejabat');
    }
}
