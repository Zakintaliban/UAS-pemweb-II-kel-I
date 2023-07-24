<?php
class IjazahModel extends CI_Model {

    public function get_all_ijazah() {
        $this->db->select('Ijazah.*, Taruna.Nama as Taruna_Name, Program_Studi.Nama as Program_Studi_Name, Wakil_Direktur.Nama as Wakil_Direktur_Name, Direktur.Nama as Direktur_Name');
        $this->db->from('Ijazah');
        $this->db->join('Taruna', 'Taruna.ID = Ijazah.Taruna');
        $this->db->join('Program_Studi', 'Program_Studi.ID = Ijazah.Program_Studi');
        $this->db->join('Pejabat as Wakil_Direktur', 'Wakil_Direktur.ID = Ijazah.Wakil_Direktur');
        $this->db->join('Pejabat as Direktur', 'Direktur.ID = Ijazah.Direktur');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_ijazah($id) {
        $this->db->select('Ijazah.*, Taruna.Nama as Taruna_Name, Program_Studi.Nama as Program_Studi_Name, Wakil_Direktur.Nama as Wakil_Direktur_Name, Direktur.Nama as Direktur_Name');
        $this->db->from('Ijazah');
        $this->db->join('Taruna', 'Taruna.ID = Ijazah.Taruna');
        $this->db->join('Program_Studi', 'Program_Studi.ID = Ijazah.Program_Studi');
        $this->db->join('Pejabat as Wakil_Direktur', 'Wakil_Direktur.ID = Ijazah.Wakil_Direktur');
        $this->db->join('Pejabat as Direktur', 'Direktur.ID = Ijazah.Direktur');
        $this->db->where('Ijazah.ID', $id);
        $query = $this->db->get();
        return $query->row();
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

