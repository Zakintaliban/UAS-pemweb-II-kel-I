<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijazah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('IjazahModel');
        $this->load->model('TarunaModel');
        $this->load->model('KotaModel');
        $this->load->model('ProgramStudiModel');
        $this->load->model('PejabatModel');
        $this->load->library('form_validation');
    }

    public function print($id) {
        $data['ijazah'] = $this->IjazahModel->get_ijazah($id);
        $data['taruna'] = $this->TarunaModel->get_taruna($data['ijazah']->Taruna);
        $data['kota'] = $this->KotaModel->get_kota($data['taruna']->Tempat_Lahir);
        $data['program_studi'] = $this->ProgramStudiModel->get_program_studi($data['taruna']->Program_Studi);
        $data['direktur'] = $this->PejabatModel->get_pejabat($data['ijazah']->Direktur);
        $data['wakil_direktur'] = $this->PejabatModel->get_pejabat($data['ijazah']->Wakil_Direktur);
        $this->load->view('ijazah/print', $data);
    }

    public function index() {
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $this->load->view('ijazah/index', $data);
    }

    public function show($id) {
        $data['ijazah'] = $this->IjazahModel->get_ijazah($id);
        $this->load->view('ijazah/show', $data);
    }

    public function create() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
        $this->load->view('ijazah/new', $data);
    }

    public function store() {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('tanggal_ijazah', 'Tanggal Ijazah', 'required');
        $this->form_validation->set_rules('tanggal_pengesahan', 'Tanggal Pengesahan', 'required');
        $this->form_validation->set_rules('gelar_akademik', 'Gelar Akademik', 'required');
        $this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('wakil_direktur', 'Wakil Direktur', 'required');
        $this->form_validation->set_rules('direktur', 'Direktur', 'required');
        $this->form_validation->set_rules('nomor_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('nomor_seri', 'Nomor Seri', 'required');
        $this->form_validation->set_rules('tanggal_yudisium', 'Tanggal Yudisium', 'required');
        $this->form_validation->set_rules('judul_kkw', 'Judul KKW', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
            $this->load->view('ijazah/new', $data);
        } else {
            $data = $this->input->post();
            $this->IjazahModel->insert_ijazah($data);
            redirect('ijazah');
        }
    }

    public function edit($id) {
        $data['ijazah'] = $this->IjazahModel->get_ijazah($id);
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
        $this->load->view('ijazah/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('tanggal_ijazah', 'Tanggal Ijazah', 'required');
        $this->form_validation->set_rules('tanggal_pengesahan', 'Tanggal Pengesahan', 'required');
        $this->form_validation->set_rules('gelar_akademik', 'Gelar Akademik', 'required');
        $this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('wakil_direktur', 'Wakil Direktur', 'required');
        $this->form_validation->set_rules('direktur', 'Direktur', 'required');
        $this->form_validation->set_rules('nomor_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('nomor_seri', 'Nomor Seri', 'required');
        $this->form_validation->set_rules('tanggal_yudisium', 'Tanggal Yudisium', 'required');
        $this->form_validation->set_rules('judul_kkw', 'Judul KKW', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['ijazah'] = $this->IjazahModel->get_ijazah($id);
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $data['pejabat'] = $this->PejabatModel->get_all_pejabat();
            $this->load->view('ijazah/edit', $data);
        } else {
            $data = $this->input->post();
            $this->IjazahModel->update_ijazah($id, $data);
            redirect('ijazah');
        }
    }

    public function delete($id) {
        $this->IjazahModel->delete_ijazah($id);
        redirect('ijazah');
    }
}
