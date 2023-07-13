<?php
class PejabatModel extends CI_Model {

    public function get_all_pejabat() {
        $query = $this->db->get('Pejabat');
        return $query->result();
    }

    public function insert_pejabat($data) {
        return $this->db->insert('Pejabat', $data);
    }

    public function update_pejabat($id, $data) {
        return $this->db->where('ID', $id)->update('Pejabat', $data);
    }

    public function delete_pejabat($id) {
        return $this->db->where('ID', $id)->delete('Pejabat');
    }

}
