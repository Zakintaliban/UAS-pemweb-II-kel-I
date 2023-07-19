<?php
class TarunaModel extends CI_Model {

    public function get_all_taruna() {
        $query = $this->db->get('Taruna');
        return $query->result();
    }

    public function get_taruna($id) {
        $query = $this->db->where('ID', $id)->get('Taruna');
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
