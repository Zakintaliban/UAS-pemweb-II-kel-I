<?php
class NilaiModel extends CI_Model {

    public function get_all_nilai() {
        $query = $this->db->get('Nilai');
        return $query->result();
    }

    public function get_nilai($id) {
        $query = $this->db->where('ID', $id)->get('Nilai');
        return $query->row();
    }

	public function get_nilai_by_taruna($id) {
        $query = $this->db->where('Taruna', $id)->get('Nilai');
        return $query->result();
    }

    public function insert_nilai($data) {
        return $this->db->insert('Nilai', $data);
    }

    public function update_nilai($id, $data) {
        return $this->db->where('ID', $id)->update('Nilai', $data);
    }

    public function delete_nilai($id) {
        return $this->db->where('ID', $id)->delete('Nilai');
    }

}
