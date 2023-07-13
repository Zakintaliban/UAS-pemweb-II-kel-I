<?php
class KotaModel extends CI_Model {

    public function get_all_kota() {
        $query = $this->db->get('Kota');
        return $query->result();
    }

    public function get_kota($id) {
        $query = $this->db->where('ID', $id)->get('Kota');
        return $query->row();
    }

    public function insert_kota($data) {
        return $this->db->insert('Kota', $data);
    }

    public function update_kota($id, $data) {
        return $this->db->where('ID', $id)->update('Kota', $data);
    }

    public function delete_kota($id) {
        return $this->db->where('ID', $id)->delete('Kota');
    }

}
