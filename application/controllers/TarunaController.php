<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarunaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TarunaModel');
    }

    public function index() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $this->load->view('taruna/index', $data);
    }

    public function create() {
        $this->load->view('taruna/new');
    }

    public function store() {
        $data = $this->input->post();
        $this->TarunaModel->insert_taruna($data);
        redirect('taruna');
    }

    public function edit($id) {
        $data['taruna'] = $this->TarunaModel->get_taruna($id);
        $this->load->view('taruna/edit', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->TarunaModel->update_taruna($id, $data);
        redirect('taruna');
    }

    public function delete($id) {
        $this->TarunaModel->delete_taruna($id);
        redirect('taruna');
    }
}
