<?php
class TranskripNilaiModel extends CI_Model {

    public function get_all_transkrip_nilai() {
        $query = $this->db->get('Transkrip_Nilai');
        return $query->result();
    }

    public function get_transkrip_nilai($id) {
        $query = $this->db->where('ID', $id)->get('Transkrip_Nilai');
        return $query->row();
    }

    public function insert_transkrip_nilai($data) {
        return $this->db->insert('Transkrip_Nilai', $data);
    }

    public function update_transkrip_nilai($id, $data) {
        return $this->db->where('ID', $id)->update('Transkrip_Nilai', $data);
    }

    public function delete_transkrip_nilai($id) {
        return $this->db->where('ID', $id)->delete('Transkrip_Nilai');
    }

}
