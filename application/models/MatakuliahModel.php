<?php
class MatakuliahModel extends CI_Model {

    public function get_all_matakuliah() {
        $query = $this->db->get('Matakuliah');
        return $query->result();
    }

    public function get_matakuliah($id) {
        $query = $this->db->where('ID', $id)->get('Matakuliah');
        return $query->row();
    }

    public function insert_matakuliah($data) {
        return $this->db->insert('Matakuliah', $data);
    }

    public function update_matakuliah($id, $data) {
        return $this->db->where('ID', $id)->update('Matakuliah', $data);
    }

    public function delete_matakuliah($id) {
        return $this->db->where('ID', $id)->delete('Matakuliah');
    }

}

