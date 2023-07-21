<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['program_studi_count'] = $this->db->count_all('Program_Studi');
        $data['kota_count'] = $this->db->count_all('Kota');
        $data['pejabat_count'] = $this->db->count_all('Pejabat');
        $data['matakuliah_count'] = $this->db->count_all('Matakuliah');
        $data['taruna_count'] = $this->db->count_all('Taruna');
        $data['ijazah_count'] = $this->db->count_all('Ijazah');
        $data['nilai_count'] = $this->db->count_all('Nilai');
        $data['transkrip_nilai_count'] = $this->db->count_all('Transkrip_Nilai');

        $this->load->view('main', $data);
    }
}
