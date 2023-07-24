<?php
class TarunaModel extends CI_Model {

    public function get_all_taruna() {
        $this->db->select('Taruna.*, Kota.Nama as Kota_Nama, Program_Studi.Nama as Program_Studi_Nama');
        $this->db->from('Taruna');
        $this->db->join('Kota', 'Kota.ID = Taruna.Tempat_Lahir');
        $this->db->join('Program_Studi', 'Program_Studi.ID = Taruna.Program_Studi');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_taruna($id) {
        $this->db->select('Taruna.*, Kota.Nama as Kota_Nama, Program_Studi.Nama as Program_Studi_Nama');
        $this->db->from('Taruna');
        $this->db->join('Kota', 'Kota.ID = Taruna.Tempat_Lahir');
        $this->db->join('Program_Studi', 'Program_Studi.ID = Taruna.Program_Studi');
        $this->db->where('Taruna.ID', $id);
        $query = $this->db->get();
        return $query->row();
    }    

    public function insert_taruna($data) {
        return $this->db->insert('Taruna', $data);
    }

    public function update_taruna($id, $data) {
        return $this->db->where('ID', $id)->update('Taruna', $data);
    }

    public function delete_taruna($id) {
        return $this->db->where('ID', $id)->delete('Taruna');
    }

	public function get_all_program_studi() {
        $query = $this->db->get('Program_Studi');
        return $query->result();
    }

	public function get_all_kota() {
        $query = $this->db->get('Kota');
        return $query->result();
    }
}
