<?php
class ProgramStudiModel extends CI_Model {

    public function get_all_program_studi() {
        $query = $this->db->get('Program_Studi');
        return $query->result();
    }

    public function get_program_studi($id) {
        $query = $this->db->where('ID', $id)->get('Program_Studi');
        return $query->row();
    }

    public function insert_program_studi($data) {
        return $this->db->insert('Program_Studi', $data);
    }

    public function update_program_studi($id, $data) {
        return $this->db->where('ID', $id)->update('Program_Studi', $data);
    }

    public function delete_program_studi($id) {
        return $this->db->where('ID', $id)->delete('Program_Studi');
    }

}