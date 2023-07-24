<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taruna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TarunaModel');
		$this->load->model('KotaModel');
		$this->load->model('ProgramStudiModel');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index() {
        $data['taruna'] = $this->TarunaModel->get_all_taruna();
        $this->load->view('taruna/index', $data);
    }

    public function show($id) {
        $data['taruna'] = $this->TarunaModel->get_taruna($id);
        $this->load->view('taruna/show', $data);
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
    
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|bmp|tiff|ico|svg|webp|heif|raw|indd|ai|eps';
        $config['max_size']             = 2048; 
        $config['max_width']            = 1024;
        $config['max_height']           = 1536;
    
        $this->upload->initialize($config);
    
        $uploadSuccessful = $this->upload->do_upload('foto');
    
        if ($this->form_validation->run() == FALSE || !$uploadSuccessful) {
            $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
            $data['kota'] = $this->TarunaModel->get_all_kota();
            $data['error'] = $this->upload->display_errors(); 
            $this->load->view('taruna/new', $data);
        } else {
            $data = $this->input->post();
            $upload_data = $this->upload->data();
    
            // Read the file content
            $data['foto'] = file_get_contents($upload_data['full_path']);
    
            $this->TarunaModel->insert_taruna($data);
    
            // Optionally delete the file after storing its content in the database
            unlink($upload_data['full_path']);
    
            redirect('taruna');
        }
    }

    public function edit($id) {
        $data['taruna'] = $this->TarunaModel->get_taruna($id);
        $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
        $data['kota'] = $this->TarunaModel->get_all_kota();

        // Prepare image data
        $imageData = "";
        if (isset($data['taruna']->Foto)) {
            $imageData = "data:image/jpeg;base64," . base64_encode($data['taruna']->Foto);
        }
        if(isset($imageData)){
            $data['imageData'] = $imageData;
        }

        $this->load->view('taruna/edit', $data);
    }    

    public function update($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor_taruna', 'Nomor Taruna', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|bmp|tiff|ico|svg|webp|heif|raw|indd|ai|eps';
        $config['max_size']             = 2048; 
        $config['max_width']            = 1024;
        $config['max_height']           = 1536;

        $this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE || !$this->upload->do_upload('foto')) {
            $data['taruna'] = $this->TarunaModel->get_taruna($id);
            $data['program_studi'] = $this->TarunaModel->get_all_program_studi();
            $data['kota'] = $this->TarunaModel->get_all_kota();
            $data['error'] = $this->upload->display_errors();
            $this->load->view('taruna/edit', $data);
        } else {
            $data = $this->input->post();
            $upload_data = $this->upload->data();

            // Read the file content
            $data['foto'] = file_get_contents($upload_data['full_path']);

            $this->TarunaModel->update_taruna($id, $data);

            // Optionally delete the file after storing its content in the database
            unlink($upload_data['full_path']);

            redirect('taruna');
        }
    }

    public function delete($id) {
        $response = array();
        if($this->TarunaModel->delete_taruna($id)) {
            $response['success'] = true;
            $response['message'] = 'Data successfully deleted.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while deleting the data.';
        }
        echo json_encode($response);
    }
}
