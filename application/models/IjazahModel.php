<?php
class IjazahModel extends CI_Model {

    public function get_all_ijazah() {
        $query = $this->db->get('Ijazah');
        return $query->result();
    }

    public function insert_ijazah($data) {
        return $this->db->insert('Ijazah', $data);
    }

    public function update_ijazah($id, $data) {
        return $this->db->where('ID', $id)->update('Ijazah', $data);
    }

    public function delete_ijazah($id) {
        return $this->db->where('ID', $id)->delete('Ijazah');
    }

}
