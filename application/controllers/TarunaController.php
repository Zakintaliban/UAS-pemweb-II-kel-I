<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarunaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TarunaModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $this->load->view('taruna/index', $data);
    }

    public function create() {
        $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
        $data['kota'] = $this->TarunaModel->get_all_kota();
        $this->load->view('taruna/new', $data);
    }

    public function store() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor_taruna', 'Nomor Taruna', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
            $data['kota'] = $this->TarunaModel->get_all_kota();
            $this->load->view('taruna/new', $data);
        } else {
            $data = $this->input->post();
            $this->TarunaModel->insert_taruna($data);
            redirect('taruna');
        }
    }

    public function edit($id) {
        $data['taruna'] = $this->TarunaModel->get_taruna($id);
        $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
        $data['kota'] = $this->TarunaModel->get_all_kota();
        $this->load->view('taruna/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor_taruna', 'Nomor Taruna', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['taruna'] = $this->TarunaModel->get_taruna($id);
            $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
            $data['kota'] = $this->TarunaModel->get_all_kota();
            $this->load->view('taruna/edit', $data);
        } else {
            $data = $this->input->post();
            $this->TarunaModel->update_taruna($id, $data);
            redirect('taruna');
        }
    }

    public function delete($id) {
        $this->TarunaModel->delete_taruna($id);
        redirect('taruna');
    }
}
