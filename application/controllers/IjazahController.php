<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IjazahController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('IjazahModel');
    }

    public function index() {
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $this->load->view('ijazah/index', $data);
    }

    public function create() {
        $this->load->view('ijazah/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->IjazahModel->insert_ijazah($data);
        redirect('ijazah');
    }

    public function edit($id) {
        $data['ijazah'] = $this->IjazahModel->get_ijazah($id);
        $this->load->view('ijazah/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->IjazahModel->update_ijazah($id, $data);
        redirect('ijazah');
    }

    public function delete($id) {
        $this->IjazahModel->delete_ijazah($id);
        redirect('ijazah');
    }
}
