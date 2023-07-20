<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transkrip_Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TranskripNilaiModel');
        $this->load->model('TarunaModel');
        $this->load->model('IjazahModel');
        $this->load->model('ProgramStudiModel');
		$this->load->model('KotaModel');
		$this->load->model('NilaiModel');
		$this->load->model('MataKuliahModel');
        $this->load->library('form_validation');
    }

    public function print($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
		$data['taruna'] = $this->TarunaModel->get_taruna($data['transkrip_nilai']->Taruna);
		$data['ijazah'] = $this->IjazahModel->get_ijazah($data['transkrip_nilai']->Ijazah);
		$data['program_studi'] = $this->ProgramStudiModel->get_program_studi($data['transkrip_nilai']->Program_Studi);
		$data['kota'] = $this->KotaModel->get_kota($data['taruna']->Tempat_Lahir);
		$data['nilai'] = $this->NilaiModel->get_nilai_by_taruna($data['taruna']->ID);
        $this->load->view('transkrip_nilai/print', $data);
    }

	public function getMataKuliah($id) {
		$data['matakuliah'] = $this->MataKuliahModel->get_matakuliah($id);
		$this->load->view('transkrip_nilai/print', $data);
	}

    public function index() {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_all_transkrip_nilai();
		$data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('transkrip_nilai/index', $data);
    }

    public function show($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
		$data['taruna'] = $this->TarunaModel->get_taruna($data['transkrip_nilai']->Taruna);
		$data['ijazah'] = $this->IjazahModel->get_ijazah($data['transkrip_nilai']->Ijazah);
		$data['program_studi'] = $this->ProgramStudiModel->get_program_studi($data['transkrip_nilai']->Program_Studi);
        $this->load->view('transkrip_nilai/show', $data);
    }

    public function create() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('transkrip_nilai/new', $data);
    }

    public function store() {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('ijazah', 'Ijazah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $this->load->view('transkrip_nilai/new', $data);
        } else {
            $data = $this->input->post();
            $this->TranskripNilaiModel->insert_transkrip_nilai($data);
            redirect('transkrip_nilai');
        }
    }

    public function edit($id) {
        $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
        $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
        $this->load->view('transkrip_nilai/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('taruna', 'Taruna', 'required');
        $this->form_validation->set_rules('ijazah', 'Ijazah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
            $data['taruna'] = $this->TarunaModel->get_all_taruna();
            $data['ijazah'] = $this->IjazahModel->get_all_ijazah();
            $data['program_studi'] = $this->ProgramStudiModel->get_all_program_studi();
            $this->load->view('transkrip_nilai/edit', $data);
        } else {
            $data = $this->input->post();
            $this->TranskripNilaiModel->update_transkrip_nilai($id, $data);
            redirect('transkrip_nilai');
        }
    }

    public function delete($id) {
        $this->TranskripNilaiModel->delete_transkrip_nilai($id);
        redirect('transkrip_nilai');
    }
}
