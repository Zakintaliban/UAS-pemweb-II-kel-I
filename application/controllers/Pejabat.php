<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('AuthModel');
		if(!$this->AuthModel->current_user()){
			redirect('auth/login');
		}
        $this->load->model('PejabatModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
        $this->load->view('pejabat/index', $data);
    }

    public function show($id) {
        $data['pejabat'] = $this->PejabatModel->get_pejabat($id);
        $this->load->view('pejabat/show', $data);
    }

    public function create() {
        $this->load->view('pejabat/new');
    }

    public function store() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pejabat/new');
        } else {
            $data = $this->input->post();
            $this->PejabatModel->insert_pejabat($data);
            redirect('pejabat');
        }
    }

    public function edit($id) {
        $data['pejabat'] = $this->PejabatModel->get_pejabat($id);
        $this->load->view('pejabat/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['pejabat'] = $this->PejabatModel->get_pejabat($id);
            $this->load->view('pejabat/edit', $data);
        } else {
            $data = $this->input->post();
            $this->PejabatModel->update_pejabat($id, $data);
            redirect('pejabat');
        }
    }

    public function delete($id) {
        $response = array();
        if($this->PejabatModel->delete_pejabat($id)) {
            $response['success'] = true;
            $response['message'] = 'Data successfully deleted.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while deleting the data.';
        }
        echo json_encode($response);
    }
}
